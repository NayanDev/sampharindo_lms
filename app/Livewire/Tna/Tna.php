<?php

namespace App\Livewire\Tna;

use Livewire\Component;
use App\Models\Training;

class Tna extends Component
{
    public $year, $status, $description;
    public function render()
    {
        return view('livewire.tna.tna', [
            'title' => 'Training Need',
            'active' => 'tna',
            'datas' => Training::all(),
        ]);
    }
}
