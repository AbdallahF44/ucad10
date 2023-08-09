<?php

namespace App\Http\Livewire\Settings;

use App\Http\Livewire\Settings;
use App\Models\Setting;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $url;
    public $setting_id;
    public $edit_setting_name;

    protected $rules = [
        'name' => 'required|min:6',
        'url' => 'required',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();
        Setting::create([
            'name' => $this->name,
            'url' => $this->url,
        ]);
        $this->reset();
        toastr()->success("Setting Successfully Added.");
        $this->dispatchBrowserEvent('close-modal');
//        return redirect()->to('/comments');
    }
    public function edit($id)
    {
        $setting = Setting::findorFail($id);
        $this->setting_id = $id;
        $this->edit_setting_name = $setting->name;
        $this->name = $setting->name;
        $this->url = $setting->url;
    }

    public function update()
    {
        $this->validate();
        $color = Setting::find($this->setting_id);
        $color->update([
            'name' => $this->name,
            'url' => $this->url,
        ]);
        toastr()->success('Setting successfully Updated.');
        $this->reset();

        $this->dispatchBrowserEvent('close-modal');
//        return redirect()->to('/comments');
    }
    public function delete($id)
    {
        $setting = Setting::findorFail($id);
        $this->setting_id = $id;
        $this->name = $setting->name;
        $this->url = $setting->url;
    }

    public function destroy()
    {
        Setting::destroy($this->setting_id);
        $this->reset();
        toastr()->success('Setting successfully Deleted.');
        $this->dispatchBrowserEvent('close-modal');
//        return redirect()->to('/comments');
    }
    public function render()
    {
        $settings = Setting::all();
        return view('livewire.settings.index', ['settings' => $settings])->layout('dashboard.settings.all');
    }
}
