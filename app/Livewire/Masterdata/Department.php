<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use App\Models\Department as DepartmentModel;

class Department extends Component
{
    public $name;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.masterdata.department', [
        'datas' => DepartmentModel::all(),
        'title' => 'Department',
            'active' => 'department',
            'parent_menu' => 'Master Data',
        ])->layout('layout.main', [
            'title' => 'Department',
            'active' => 'department',
            'parent_menu' => 'Master Data',
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

        DepartmentModel::create($validatedData);
        session()->flash('message', 'Department Created Successfully.');
        $this->resetInputFields();

        return redirect()->route('department.index');
    }

    public function destroy($id)
    {
        DepartmentModel::destroy($id);
        session()->flash('message', 'Department Deleted Successfully.');
        return redirect()->route('department.index');
    }
}
