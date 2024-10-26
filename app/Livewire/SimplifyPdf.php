<?php

namespace App\Livewire;

use Livewire\Component;

class SimplifyPdf extends Component
{
    public function render()
    {
        return view('livewire.simplify-pdf')->layout('layouts.guest');
    }
}
