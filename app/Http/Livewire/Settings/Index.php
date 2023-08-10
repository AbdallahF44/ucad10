<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $value;
    public $setting_id;
    public $edit_setting_name;
    public $setting_value = [
        'url' => [
            'input_type' => 'text',
            'rule_type' => 'url',
        ], 'email' => [
            'input_type' => 'email',
            'rule_type' => 'email',
        ], 'phone' => [
            'input_type' => 'number',
            'rule_type' => 'numeric|min:10',
        ], 'another' => [
            'input_type' => 'text',
            'rule_type' => '',
        ], '' => [
            'input_type' => 'text',
            'rule_type' => '',
        ],
    ];
    public $setting_value_select;


    private function myValidate()
    {
        $rule_from_arr = $this->setting_value[$this->setting_value_select]['rule_type'];
        $this->validate([
            'name' => 'required|min:6',
            'value' => "required|$rule_from_arr",
        ]);
    }

    public function updated()
    {
        $this->myValidate();
    }

    public function resetValues()
    {
        $this->reset();
    }

    public function store()
    {
        $this->myValidate();
        Setting::create([
            'name' => $this->name,
            'url' => $this->value,
        ]);
        $this->reset();
        toastr()->success("Setting Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit($id)
    {
        $setting = Setting::findorFail($id);
        $this->setting_id = $id;
        $this->edit_setting_name = $setting->name;
        $this->name = $setting->name;
        $this->value = $setting->url;
    }

    public function update()
    {
        $this->myValidate();
        $color = Setting::find($this->setting_id);
        $color->update([
            'name' => $this->name,
            'url' => $this->value,
        ]);
        toastr()->success('Setting Updated Successfully.');
        $this->reset();

        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($id)
    {
        $setting = Setting::findorFail($id);
        $this->setting_id = $id;
        $this->name = $setting->name;
        $this->value = $setting->url;
    }

    public function destroy()
    {
        Setting::destroy($this->setting_id);
        $this->reset();
        toastr()->success('Setting Deleted Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $settings = Setting::all();
        return view('livewire.settings.index', ['settings' => $settings])->layout('dashboard.settings.all');
    }
}
