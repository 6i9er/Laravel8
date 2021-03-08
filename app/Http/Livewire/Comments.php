<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Comment;
use \Validator;

class Comments extends Component
{
    use WithPagination;
    // public $comments ;
    public $newComment = '';


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

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'creator' => 'Andrew Amir'
        ]);
        // $this->comments->prepend($createdComment); // this will push this row to the top of table
        // $this->comments->push($createdComment); // will push this row at the end of view table
        
        $this->newComment = '';
        session()->flash('message', 'Post successfully added.');

    }
    public function removeComment($id){
        $comment = Comment::find($id);
        if($comment){
            $comment->delete();
            // $this->comments = $this->comments->except($id);
        }
    }

    public function render()
    {
        return view('livewire.comments' , [
            'comments' => Comment::latest()->paginate(2)
        ]);
    }
}
