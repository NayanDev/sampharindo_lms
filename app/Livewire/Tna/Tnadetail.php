<?php

namespace App\Livewire\Tna;

use Livewire\Component;

class Tnadetail extends Component
{
    public function render()
    {
        return view('livewire.tna.tnadetail', [
            'title' => 'Training Need',
            'active' => 'tna',
        ]);
    }
}
