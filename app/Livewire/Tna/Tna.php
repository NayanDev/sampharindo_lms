<?php

namespace App\Livewire\Tna;

use Livewire\Component;
use App\Models\Training;

class Tna extends Component
{
    public $year, $status, $description, $user_id;

    public function mount()
    {
        $this->year = now()->year + 1 ; // atau '2025'
        $this->user_id = '1';
    }

    public function render()
    {
        return view('livewire.tna.tna', [
            'title' => 'Training Need',
            'active' => 'tna',
            'datas' => Training::all(),
            ])->layout('layout.main', [
            'title' => 'Training Need',
            'active' => 'tna',
        ]);
    }

    private function resetInputFields()
    {
        $this->year = '';
        $this->description = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'year' => 'required',
            'description' => 'required',
        ]);
        $validatedData['user_id'] = '1';

        Training::create($validatedData);
        session()->flash('message', 'Training Created Successfully.');
        $this->resetInputFields();
        return redirect()->route('tna.index');
    }

    public function destroy($id)
    {
        Training::destroy($id);
        session()->flash('message', 'Training Deleted Successfully.');
        return redirect()->route('tna.index');
    }
}
