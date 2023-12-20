<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class Reviews extends Component
{
    public $temp;
    public $title = "Review";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.reviews')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
