<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Libraries\Templates;

class Test extends Component
{

    public $count = 23;
    public $error_message = '';
    public $temp;

    public function mount(Templates $temp)
    {
        $this->temp = $temp->style();
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        if($this->count <= 0){
            session()->flash('message', 'Error number can`t be negative.');
            return;
        }
        $this->count--;
    }

    public function render()
    {
        return view('pages.test')
        ->layout('layouts.app',['style' => $this->temp]);
    }
}
