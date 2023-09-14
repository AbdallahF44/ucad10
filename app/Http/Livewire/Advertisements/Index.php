<?php

namespace App\Http\Livewire\Advertisements;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title;
    public $title_en;
    public $content;
    public $content_en;
    public $status;
    public $image;
    public $advertisement_id;
    public $view_advertisement_title;
    public $view_advertisement_title_en;
    public $view_advertisement_content;
    public $view_advertisement_content_en;
    public $view_advertisement_status;
    public $view_advertisement_created;
    public $edit_advertisement_title;
    public $view_advertisement_image;
    public $edit_advertisement_image;

    protected $rules = [
        'title' => 'required',
        'content' => 'required|min:10',
    ];

    public function resetValues()
    {
        $this->reset();
    }

    public function store()
    {
        $this->validate();
        $advertisement = new Article();

        $advertisement->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $advertisement->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $advertisement->status = Article::STATUS_ACTIVE;
        $advertisement->type = Article::TYPE_ADVERTISEMENTS;
        if ($this->image != null)
            $advertisement->addMedia($this->image)->toMediaCollection('articles_images');
        $this->image = null;

        $advertisement->save();
//        Article::create([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => Article::STATUS_ACTIVE,
//            'type' => Article::TYPE_ARTICLES,
//        ]);
        $this->reset();
        toastr()->success("Advertisement Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewAdvertisement($id)
    {
        $advertisement = Article::where('id', $id)->first();
        $this->view_advertisement_title = isset($advertisement->getTranslations('title', ['ar'])['ar']) ? $advertisement->getTranslations('title', ['ar'])['ar'] : 'لا يوجد عنوان بالعربي';
        $this->view_advertisement_image = isset($advertisement->getMedia('articles_images')[0]) ? $advertisement->getMedia('articles_images')[0]->getUrl() : asset('site/logo.png');
        $this->view_advertisement_title_en = isset($advertisement->getTranslations('title', ['en'])['en']) ? $advertisement->getTranslations('title', ['en'])['en'] : 'No title in English!';
        $this->view_advertisement_content = isset($advertisement->getTranslations('content', ['ar'])['ar']) ? $advertisement->getTranslations('content', ['ar'])['ar'] : 'لا يوجد محتوى بالعربي';
        $this->view_advertisement_content_en = isset($advertisement->getTranslations('content', ['en'])['en']) ? $advertisement->getTranslations('content', ['en'])['en'] : 'No content in English!';
        $this->status = $advertisement->status;
        $this->view_advertisement_status = $advertisement->status;
        $this->view_advertisement_created = $advertisement->created_at;
    }

    public function closeView()
    {
        $this->view_advertisement_title = '';
        $this->view_advertisement_image = '';
        $this->view_advertisement_content = '';
        $this->view_advertisement_status = '';
        $this->view_advertisement_created = '';
        $this->status = '';
    }
    public function edit($id)
    {
        $advertisement = Article::findorFail($id);
        $this->advertisement_id = $id;
        $this->edit_advertisement_title = $advertisement->title;
        $this->edit_advertisement_image = isset($advertisement->getMedia('articles_images')[0]) ? $advertisement->getMedia('articles_images')[0]->getUrl() : asset('site/logo.png');
        $this->title = $advertisement->getTranslations('title', ['ar'])['ar'];
        $this->title_en = isset($advertisement->getTranslations('title', ['en'])['en']) ? $advertisement->getTranslations('title', ['en'])['en'] : '';
        $this->content = $advertisement->getTranslations('content', ['ar'])['ar'];
        $this->content_en = isset($advertisement->getTranslations('content', ['en'])['en']) ? $advertisement->getTranslations('content', ['en'])['en'] : '';
        $this->status = $advertisement->status;
    }

    public function update()
    {
        $this->validate();
        $advertisement = Article::find($this->advertisement_id);


        $advertisement->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $advertisement->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $advertisement->status = $this->status;
        $advertisement->type = Article::TYPE_ADVERTISEMENTS;
        if ($this->image != null) {
            isset($advertisement->getMedia('articles_images')[0]) ? $advertisement->deleteMedia($advertisement->getMedia('articles_images')[0]) : '';
            $advertisement->addMedia($this->image)->toMediaCollection('articles_images');
        }
        $this->image = null;
        $advertisement->save();
//        $advertisement->update([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => $this->status,
//        ]);
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
        $advertisement = Article::find($this->advertisement_id);
        $advertisement->deleteMedia($advertisement->getMedia('articles_images')[0]);
        $advertisement->delete();
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
