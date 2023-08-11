<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $title_en;
    public $content;
    public $content_en;
    public $status;
    public $article_id;
    public $view_article_title;
    public $view_article_title_en;
    public $view_article_content;
    public $view_article_content_en;
    public $view_article_status;
    public $view_article_created;
    public $edit_article_title;

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
        $article = new Article();

        $article->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $article->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $article->status = Article::STATUS_ACTIVE;
        $article->type = Article::TYPE_ARTICLES;

        $article->save();
//        Article::create([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => Article::STATUS_ACTIVE,
//            'type' => Article::TYPE_ARTICLES,
//        ]);
        $this->reset();
        toastr()->success("Article Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $this->view_article_title = isset($article->getTranslations('title', ['ar'])['ar'])?$article->getTranslations('title', ['ar'])['ar']:'لا يوجد عنوان بالعربي';
        $this->view_article_title_en = isset($article->getTranslations('title', ['en'])['en'])?$article->getTranslations('title', ['en'])['en']:'No title in English!';
        $this->view_article_content = isset($article->getTranslations('content', ['ar'])['ar'])?$article->getTranslations('content', ['ar'])['ar']:'لا يوجد محتوى بالعربي';
        $this->view_article_content_en = isset($article->getTranslations('content', ['en'])['en'])?$article->getTranslations('content', ['en'])['en']:'No content in English!';
        $this->status = $article->status;
        $this->view_article_status = $article->status;
        $this->view_article_created = $article->created_at;
    }

    public function closeView()
    {
        $this->view_article_title = '';
        $this->view_article_content = '';
        $this->view_article_status = '';
        $this->status = '';
        $this->view_article_created = '';
    }
    public function edit($id)
    {
        $article = Article::findorFail($id);
        $this->article_id = $id;
        $this->edit_article_title = $article->title;
        $this->title = $article->getTranslations('title', ['ar'])['ar'];
        $this->title_en = isset($article->getTranslations('title', ['en'])['en'])?$article->getTranslations('title', ['en'])['en']:'';
        $this->content = $article->getTranslations('content', ['ar'])['ar'];
        $this->content_en = isset($article->getTranslations('content', ['en'])['en'])?$article->getTranslations('content', ['en'])['en']:'';
        $this->status = $article->status;
    }

    public function update()
    {
        $this->validate();
        $article = Article::find($this->article_id);


        $article->setTranslations('title', [
            'en' => $this->title_en,
            'ar' => $this->title
        ]);

        $article->setTranslations('content', [
            'en' => $this->content_en,
            'ar' => $this->content
        ]);
        $article->status = $this->status;

        $article->save();
//        $article->update([
//            'title' => $this->title,
//            'content' => $this->content,
//            'status' => $this->status,
//        ]);
        toastr()->success('Article Updated Successfully.');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($id)
    {
        $article = Article::findorFail($id);
        $this->article_id = $id;
        $this->title = $article->title;
        $this->status = $article->status;
    }

    public function destroy()
    {
        Article::destroy($this->article_id);
        $this->reset();
        toastr()->success('Article Deleted Successfully.');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $articles = Article::where('type', Article::TYPE_ARTICLES)->get();
        return view('livewire.articles.index', compact('articles'))->layout('dashboard.articles.all');
    }
}
