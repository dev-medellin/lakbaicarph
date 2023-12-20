<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class ContactUs extends Component
{
    public $temp;
    public $title = "ContactUs";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.contact-us')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
