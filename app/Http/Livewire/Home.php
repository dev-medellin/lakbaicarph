<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class Home extends Component
{
    public $temp;
    public $title = "Home";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.home')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
