<?php

namespace App\Livewire\Tna;

use Livewire\Component;
use App\Models\Training;


class Tnadetail extends Component
{
    public $year, $status, $description, $user_id;

    public function mount()
    {
        $this->year = 'testing 2025'; // atau '2025'
        $this->description = 'testing';
    }

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
