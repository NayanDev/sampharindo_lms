<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            ])->layout('layout.main', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ]);
    }
}
