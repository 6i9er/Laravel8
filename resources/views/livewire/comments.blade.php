<div class=" rounded border p-2>
    <h1 class="text-3xl">Comments</h1>
    @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    
    <div>
        @if (session()->has('message'))
            <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <section>
        <img src='{{ $image }}' width='200'>
        <input  type="file" id='image' wire:change='$emit("fileChoosen")' >
    </section>
    <form class="my-4 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
            wire:model="newComment">
            
            <!-- wire:model.debounce.500ms="newComment"> -->
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white" wire:model="newComment">Add</button>
        </div>
    </form>
    @foreach($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">@if($comment->user_id) {{ $comment->user->name }}  @else {{ $comment->creator}} @endif</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}
                </p>
                @if($comment->image)
                    <img src="{{$comment->imagePath}}" width="200"  >
                @endif
            </div>
            <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
                 wire:click="removeComment({{ $comment->id }})" ></i>
        </div>
        <p class="text-gray-800">{{ $comment->body }}</p>
    </div>
    @endforeach

    {{ $comments->links()}}
    <?php /*{{ $comments->links('pagination-links')}} */ ?>
    

</div>


<script>
console.log(window);


    window.livewire.on('fileChoosen' , postId => {
        let inputField = document.getElementById('image');
        let file = image.files[0];
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload',reader.result)
            console.log(reader.result);
        }
        reader.readAsDataURL(file);


    });

</script>