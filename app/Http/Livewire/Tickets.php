<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SupportTicket;


class Tickets extends Component
{
    public $active = 1;

    protected $listeners = ['selectTicket'];

    public function selectTicket($ticketId){
        $this->active = $ticketId;
    }
    
    public function render()
    {
        return view('livewire.tickets' ,[
            'tickets' => SupportTicket::all()
        ]);
    }
}
