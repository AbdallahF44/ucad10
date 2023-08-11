<?php

namespace App\Http\Livewire\News;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $title_en;
    public $content;
    public $content_en;
    public $status;
    public $news_id;
    public $view_news_title;
    public $view_news_title_en;
    public $view_news_content;
    public $view_news_content_en;
    public $view_news_status;
    public $view_news_created;
    public $edit_news_title;

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
        $news = new Article();

        $news->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $news->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $news->status = Article::STATUS_ACTIVE;
        $news->type = Article::TYPE_NEWS;

        $news->save();
//        Article::create([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => Article::STATUS_ACTIVE,
//            'type' => Article::TYPE_ARTICLES,
//        ]);
        $this->reset();
        toastr()->success("News Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewNews($id)
    {
        $news = Article::where('id', $id)->first();
        $this->view_news_title = isset($news->getTranslations('title', ['ar'])['ar'])?$news->getTranslations('title', ['ar'])['ar']:'لا يوجد عنوان بالعربي';
        $this->view_news_title_en = isset($news->getTranslations('title', ['en'])['en'])?$news->getTranslations('title', ['en'])['en']:'No title in English!';
        $this->view_news_content = isset($news->getTranslations('content', ['ar'])['ar'])?$news->getTranslations('content', ['ar'])['ar']:'لا يوجد محتوى بالعربي';
        $this->view_news_content_en = isset($news->getTranslations('content', ['en'])['en'])?$news->getTranslations('content', ['en'])['en']:'No content in English!';
        $this->status = $news->status;
        $this->view_news_status = $news->status;
        $this->view_news_created = $news->created_at;
    }

    public function closeView()
    {
        $this->view_news_title = '';
        $this->view_news_content = '';
        $this->view_news_status = '';
        $this->status = '';
        $this->view_news_created = '';
    }
    public function edit($id)
    {
        $news = Article::findorFail($id);
        $this->news_id = $id;
        $this->edit_news_title = $news->title;
        $this->title = $news->getTranslations('title', ['ar'])['ar'];
        $this->title_en = isset($news->getTranslations('title', ['en'])['en'])?$news->getTranslations('title', ['en'])['en']:'';
        $this->content = $news->getTranslations('content', ['ar'])['ar'];
        $this->content_en = isset($news->getTranslations('content', ['en'])['en'])?$news->getTranslations('content', ['en'])['en']:'';
        $this->status = $news->status;
    }

    public function update()
    {
        $this->validate();
        $news = Article::find($this->news_id);


        $news->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $news->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $news->status = $this->status;

        $news->save();
//        $article->update([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => $this->status,
//        ]);
        toastr()->success('News Updated Successfully.');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($id)
    {
        $news = Article::findorFail($id);
        $this->news_id = $id;
        $this->title = $news->title;
        $this->status = $news->status;
    }

    public function destroy()
    {
        Article::destroy($this->news_id);
        $this->reset();
        toastr()->success('News Deleted Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $news = Article::where('type', Article::TYPE_NEWS)->get();
        return view('livewire.news.index', compact('news'))->layout('dashboard.news.all');
    }
}
