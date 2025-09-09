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
            'title' => 'Department',
            'active' => 'department',
            'parent_menu' => 'Master Data',
            'datas' => DepartmentModel::all(),
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
