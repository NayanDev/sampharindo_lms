<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use App\Models\Position as PositionModel;

class Position extends Component
{
    public $name;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.masterdata.position', [
            'datas' => PositionModel::all(),
            'title' => 'Position',
            'active' => 'position',
            'parent_menu' => 'Master Data',
        ])->layout('layout.main', [
            'title' => 'Position',
            'active' => 'position',
        ]);
    }

    private function resetInputFields(){
        $this->name = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        PositionModel::create($validatedData);
        session()->flash('message', 'Position Created Successfully.');
        $this->resetInputFields();
        return redirect()->route('position.index');
    }

    public function destroy($id)
    {
        PositionModel::destroy($id);
        session()->flash('message', 'Position Deleted Successfully.');
        return redirect()->route('position.index');
    }
}
