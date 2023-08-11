<?php

namespace App\Http\Livewire\Contents;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $view_content_title;
    public $view_content_title_en;
    public $view_content_content;
    public $view_content_content_en;
    public $view_content_status;
    public $view_content_type;
    public $status;

    public function viewContent($id)
    {
        $content = Article::where('id', $id)->first();
        $this->view_content_title = isset($content->getTranslations('title', ['ar'])['ar']) ? $content->getTranslations('title', ['ar'])['ar'] : 'لا يوجد عنوان بالعربي';
        $this->view_content_title_en = isset($content->getTranslations('title', ['en'])['en']) ? $content->getTranslations('title', ['en'])['en'] : 'No title in English!';
        $this->view_content_content = isset($content->getTranslations('content', ['ar'])['ar']) ? $content->getTranslations('content', ['ar'])['ar'] : 'لا يوجد محتوى بالعربي';
        $this->view_content_content_en = isset($content->getTranslations('content', ['en'])['en']) ? $content->getTranslations('content', ['en'])['en'] : 'No content in English!';
        $this->view_content_status = $content->status;
        $this->status = $content->status;
        $this->view_content_type = $content->type;
    }

    public function closeView()
    {
        $this->view_content_title = '';
        $this->view_content_title_en = '';
        $this->view_content_content = '';
        $this->view_content_content_en = '';
        $this->view_content_status = '';
        $this->view_content_type = '';
    }
    public function render()
    {
//        $contents=Article::simplePaginate(10);
        $contents=Article::all();
        return view('livewire.contents.index',compact('contents'))->layout('dashboard.contents.all');
    }
}
