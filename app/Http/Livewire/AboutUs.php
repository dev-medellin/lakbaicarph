<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class AboutUs extends Component
{
    public $temp;
    public $title = "WhyUs";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.about-us')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
