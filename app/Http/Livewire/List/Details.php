<?php

namespace App\Http\Livewire\List;

use Livewire\Component;
use App\Libraries\Templates;

class Details extends Component
{

    public $temp;
    public $title = "ListDetails";

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function render()
    {
        return view('pages.list.details')
        ->layout('layouts.app',['style' => $this->temp,'title' => $this->title]);
    }
}
