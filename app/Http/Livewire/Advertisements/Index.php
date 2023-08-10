<?php

namespace App\Http\Livewire\Advertisements;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $content;
    public $status;
    public $advertisement_id;
    public $view_advertisement_title;
    public $view_advertisement_content;
    public $view_advertisement_status;
    public $view_advertisement_created;
    public $edit_advertisement_title;

    protected $rules = [
        'title' => 'required|min:10',
        'content' => 'required|min:10',
    ];
    public function resetValues()
    {
        $this->reset();
    }
    public function store()
    {
        $this->validate();
        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'status' => Article::STATUS_ACTIVE,
            'type' => Article::TYPE_ADVERTISEMENTS,
        ]);
        $this->reset();
        toastr()->success("Advertisement Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewAdvertisement($id)
    {
        $advertisement = Article::where('id', $id)->first();
        $this->view_advertisement_title = $advertisement->title;
        $this->view_advertisement_content = $advertisement->content;
        $this->status = $advertisement->status;
        $this->view_advertisement_status = $advertisement->status;
        $this->view_advertisement_created = $advertisement->created_at;
    }

    public function closeView()
    {
        $this->view_advertisement_title = '';
        $this->view_advertisement_content = '';
        $this->view_advertisement_status = '';
        $this->view_advertisement_created = '';
    }
    public function edit($id)
    {
        $advertisement = Article::findorFail($id);
        $this->advertisement_id = $id;
        $this->edit_advertisement_title = $advertisement->title;
        $this->title = $advertisement->title;
        $this->content = $advertisement->content;
        $this->status = $advertisement->status;
    }

    public function update()
    {
        $this->validate();
        $advertisement = Article::find($this->advertisement_id);
        $advertisement->update([
            'title' => $this->title,
            'content' => $this->content,
            'status' => $this->status,
        ]);
        toastr()->success('Advertisement Updated Successfully.');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($id)
    {
        $advertisement = Article::findorFail($id);
        $this->advertisement_id = $id;
        $this->title = $advertisement->title;
        $this->status = $advertisement->status;
    }

    public function destroy()
    {
        Article::destroy($this->advertisement_id);
        $this->reset();
        toastr()->success('Advertisement Deleted Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $advertisements = Article::where('type', Article::TYPE_ADVERTISEMENTS)->get();
        return view('livewire.advertisements.index', compact('advertisements'))->layout('dashboard.advertisements.all');
    }
}
