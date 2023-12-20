<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class CarList extends Component
{
    public $temp;
    public $title = "CarList";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.car-list')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
