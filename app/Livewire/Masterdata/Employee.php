<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use App\Models\Employee as EmployeeModel;
use App\Models\Department;
use App\Models\Position;
use App\Models\Qualification;

class Employee extends Component
{
    public $first_name, $last_name, $email, $phone_number, $gender, $department_id, $position_id, $qualification_id;

    public function render()
    {

        return view('livewire.masterdata.employee', [
            'title' => 'Employee',
            'active' => 'employee',
            'parent_menu' => 'Master Data',
            'datas' => EmployeeModel::all(),
            'departments' => Department::all(),
            'positions' => Position::all(),
            'qualifications' => Qualification::all(),
        ]);
    }

    private function resetInputFields(){
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone_number = '';
        $this->gender = '';
        $this->department_id = '';
        $this->position_id = '';
        $this->qualification_id = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'qualification_id' => 'required',
        ]);

        EmployeeModel::create($validatedData);
        session()->flash('message', 'Employee Created Successfully.');
        $this->resetInputFields();
        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        EmployeeModel::destroy($id);
        session()->flash('message', 'Employee Deleted Successfully.');
        return redirect()->route('employee.index');
    }
}
