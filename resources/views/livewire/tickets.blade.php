<div>
    <h1 class="text-3xl"> Tickets </h1>
        <div class="rounded border shadow p-3 my-2 {{ ($active == 0) ? 'bg-gray-200' : '' }}" wire:click='$emit("selectTicket" , 0)'>
            <p class="text-gray-800">get All Tickets </p>
        </div>
    @foreach($tickets as $ticket)
        <div class="rounded border shadow p-3 my-2 {{ ($active == $ticket->id) ? 'bg-gray-200' : '' }}" wire:click='$emit("selectTicket" , {{ $ticket->id }})'>
            <p class="text-gray-800"> {{ $ticket->question }}</p>
        </div>
    @endforeach
</div>
