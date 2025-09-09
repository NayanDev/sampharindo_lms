<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use App\Models\Workshop as WorkshopModel;
use App\Models\Department;

class Workshop extends Component
{
    public $name, $department_id;

    public function render()
    {

        return view('livewire.masterdata.workshop', [
            'title' => 'Workshop',
            'active' => 'workshop',
            'parent_menu' => 'Master Data',
            'datas' => WorkshopModel::all(),
            'departments' => Department::all(),
        ]);
    }

    private function resetInputFields(){
        $this->name = '';
        $this->department_id = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'department_id' => 'required',
        ]);

        WorkshopModel::create($validatedData);
        session()->flash('message', 'Workshop Created Successfully.');
        $this->resetInputFields();
        return redirect()->route('workshop.index');
    }

    public function destroy($id)
    {
        WorkshopModel::destroy($id);
        session()->flash('message', 'Workshop Deleted Successfully.');
        return redirect()->route('workshop.index');
    }
}
