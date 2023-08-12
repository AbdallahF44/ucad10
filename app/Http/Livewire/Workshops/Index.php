<?php

namespace App\Http\Livewire\Workshops;

use App\Models\Workshop;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $description;
    public $start_date;
    public $schedule;
    public $deadline;
    public $url;
    public $view_workshop_title;
    public $view_workshop_description;
    public $view_workshop_start_date;
    public $view_workshop_schedule;
    public $view_workshop_deadline;
    public $view_workshop_url;
    public $workshop_id;
    public $edit_workshop_title;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required',
        'start_date' => 'required|date',
        'deadline' => 'required|date',
        'url' => 'required|url',
    ];

    public function resetValues()
    {
        $this->reset();
    }

    public function store()
    {
        $this->validate();
        Workshop::create([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'schedule' => $this->schedule,
            'deadline' => $this->deadline,
            'url' => $this->url,
        ]);
        $this->reset();
        toastr()->success("Workshop Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewWorkshop($id)
    {
        $workshop = Workshop::where('id', $id)->first();
        $this->view_workshop_title = $workshop->title;
        $this->view_workshop_description = $workshop->description;
        $this->view_workshop_start_date = $workshop->start_date;
        $this->view_workshop_schedule = $workshop->schedule;
        $this->view_workshop_deadline = $workshop->deadline;
        $this->view_workshop_url = $workshop->url;
    }

    public function closeView()
    {
        $this->view_workshop_title = '';
        $this->view_workshop_description = '';
        $this->view_workshop_start_date = '';
        $this->view_workshop_schedule = '';
        $this->view_workshop_deadline = '';
        $this->view_workshop_url = '';
    }

    public function edit($id)
    {
        $workshop = Workshop::findorFail($id);
        $this->workshop_id = $id;
        $this->edit_workshop_title = $workshop->title;
        $this->title = $workshop->title;
        $this->description = $workshop->description;
        $this->start_date = $workshop->start_date;
        $this->schedule = $workshop->schedule;
        $this->deadline = $workshop->deadline;
        $this->url = $workshop->url;
    }

    public function update()
    {
        $this->validate();
        $workshop = Workshop::find($this->workshop_id);

        $workshop->update([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'schedule' => $this->schedule,
            'deadline' => $this->deadline,
            'url' => $this->url,
        ]);
        toastr()->success('Workshop Updated Successfully.');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function delete($id)
    {
        $workshop = Workshop::findorFail($id);
        $this->workshop_id = $id;
        $this->title = $workshop->title;
    }

    public function destroy()
    {
        Workshop::destroy($this->workshop_id);
        $this->reset();
        toastr()->success('Workshop Deleted Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $workshops = Workshop::all();
        return view('livewire.workshops.index', compact('workshops'))->layout('dashboard.workshops.all');
    }
}
