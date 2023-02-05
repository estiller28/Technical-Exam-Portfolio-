<?php

namespace App\Http\Livewire\Career;

use App\Models\Careers;
use Livewire\Component;

class CareerObjectiveComponent extends Component
{
    public $career_id,$name, $description, $reason, $target_date, $completed_date;
    public $careers;
    protected $listeners = ['delete'];
    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'reason' => 'required',
        'target_date' => 'required',
        'completed_date' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function mount(){
        $this->careers = Careers::all();
    }
    public function resetInputFields(){
        $this->name = '';
        $this->description = '';
        $this->target_date = '';
        $this->completed_date = '';
    }

    public function render()
    {
        return view('livewire.career.career-objective-component');
    }

    public function create(){
        $this->validate();
        Careers::create([
            'name' => $this->name,
            'description' => $this->description,
            'reason' => $this->reason,
            'target_date' => $this->target_date,
            'completed_date' => $this->completed_date,
        ]);

        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Career Objective added successfully',
        ]);

        $this->emit('create');
        $this->mount();
        $this->resetInputFields();
    }

    public function edit($id){
        $career = Careers::find($id);
        $this->career_id = $career->id;
        $this->name = $career->name;
        $this->description = $career->description;
        $this->reason = $career->reason;
        $this->target_date = $career->target_date;
        $this->completed_date = $career->completed_date;
    }

    public function update(){
        $this->validate();

        Careers::findOrFail($this->career_id)->update([
            'name' => $this->name,
            'description' => $this->description,
            'reason' => $this->reason,
            'target_date' => $this->target_date,
            'completed_date' => $this->completed_date,
        ]);

        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => 'Success!',
            'text' => 'Career Objective updated successfully',
        ]);
        $this->emit('update');
        $this->mount();
    }

    public function confirmDelete($id){
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => 'You want to delete this Career Objective',
            'id' => $id,
        ]);
    }
    public function delete($id){
        Careers::findOrFail($id)->delete();
        $this->mount();
    }
}
