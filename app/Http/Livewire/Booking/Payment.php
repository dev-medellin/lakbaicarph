<?php

namespace App\Http\Livewire\Booking;

use Livewire\Component;
use App\Libraries\Templates;

class Payment extends Component
{
    public $temp;
    public $title = "Payments";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.booking.payment')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
