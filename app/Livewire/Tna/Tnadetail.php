<?php

namespace App\Livewire\Tna;

use Livewire\Component;
use App\Models\Training;


class Tnadetail extends Component
{
    public function render()
    {
        return view('livewire.tna.tnadetail', [
            'title' => 'Training Need',
            'active' => 'tna',
            'datas' => Training::all(),
            ])->layout('layout.main', [
            'title' => 'Training Need',
            'active' => 'tna',
        ]);
    }
}
