<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;
use App\Models\Qualification as QualificationModel;

class Qualification extends Component
{
    public $name;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.masterdata.qualification', [
            'title' => 'Qualification',
            'active' => 'qualification',
            'parent_menu' => 'Master Data',
            'datas' => QualificationModel::all(),
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

        QualificationModel::create($validatedData);
        session()->flash('message', 'Qualification Created Successfully.');
        $this->resetInputFields();
        return redirect()->route('qualification.index');
    }

    public function destroy($id)
    {
        QualificationModel::destroy($id);
        session()->flash('message', 'Qualification Deleted Successfully.');
        return redirect()->route('qualification.index');
    }
}
