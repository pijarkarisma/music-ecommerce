<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $title = 'All products.';

    public function render()
    {
        return view('livewire.home')->extends('layouts.app');
    }
}
