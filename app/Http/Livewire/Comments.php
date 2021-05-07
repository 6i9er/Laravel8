<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Comment;
use \Validator;
use Livewire\WithFileUploads;
use Image;
use Storage;
use Illuminate\Support\Str;

class Comments extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $user = ['id'=>1];
    public $ticketID = 0;
    public $newComment, $image;

    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'selectTicket'
    ];


    public function selectTicket($ticketId){
        $this->ticketID = $ticketId;
    }


    public function handleFileUpload($imageData){
        $this->image = $imageData;
    }


    // public function mount(){
    //     $initComments = Comment::latest()->get();
    //     $this->comments = $initComments;
    // }

    public function updated($field){
        $this->validateOnly($field , [
            'newComment' => 'required|min:5|max:50'
        ] );
    }

    public function addComment(){
        $this->validate([
            'newComment' => 'required|min:5|max:50'
        ]);

        $image = $this->storeImage();

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'creator' => 'Andrew Amir',
            'user_id' => $this->user['id'],
            'support_ticket_id' => $this->ticketID,
            'image' => $image
        ]);
        // $this->comments->prepend($createdComment); // this will push this row to the top of table
        // $this->comments->push($createdComment); // will push this row at the end of view table
        
        $this->newComment = '';
        $this->image = '';
        session()->flash('message', 'Post successfully added.');

    }

    private function storeImage(){
        if(!$this->image){
            return null;
        }

        $img = Image::make($this->image)->encode('jpg');
        $name = Str::random().'.jpg';
        Storage::disk('public')->put($name , $img);
        return $name;
    }


    public function removeComment($id){
        $comment = Comment::find($id);
        if($comment){
            $comment->delete();
            // $this->comments = $this->comments->except($id);
        }
        if($comment->image){
            Storage::disk('public')->delete($comment->image);
        }
    }

    public function render()
    {
        $comments = new Comment();
        if($this->ticketID != 0){
            $comments = $comments->where('support_ticket_id' , $this->ticketID);
        }
        return view('livewire.comments' , [
            'comments' => $comments->latest()->paginate(2)
        ]);
    }
}
