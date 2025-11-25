<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Master;

class MastersPage extends Component
{
    public function render()
    {
        $masters = Master::with('students')->get();
        return view('livewire.masters-page', compact('masters'));
    }
}