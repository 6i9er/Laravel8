@if ($paginator->hasPages())
    <ul class="flex justify-between ">

        <!-- Previous Page -->
        @if($paginator->onFirstPage())
            <li class=" w-16 py-1 px-2 text-center rounded border  bg-gray-100 " >Prev</li>
        @else
            <li class="w-16 py-1 px-2 text-center rounded border cursor-pointer shadow bg-white" wire:click="previousPage">Prev</li>
        @endif

        <!-- Start Page Numbers -->
        @foreach($elements as $element )
            <!-- Three Dotes Operator -->
            @if(is_string($element))

            @endif
            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="w-16 py-1 px-2 text-center rounded border  bg-blue-300" wire:click="gotoPage({{ $page }})" >{{ $page }}</li>
                    @else
                        <li class="w-16 py-1 px-2 text-center rounded border cursor-pointer shadow bg-white" wire:click="gotoPage({{ $page }})">{{ $page }}</li>
                    @endif    
                @endforeach
            @endif
        @endforeach
        <!-- Next Page -->
        @if($paginator->hasMorePages())
            <li class="w-16 py-1 px-2 text-center rounded cursor-pointer border shadow bg-white" wire:click="nextPage">Next</li>
        @else
            <li class="w-16 py-1 px-2 text-center rounded border shadow bg-gray-100" >Next</li>
        @endif
    </ul>
@endif