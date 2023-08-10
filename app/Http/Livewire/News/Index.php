<?php

namespace App\Http\Livewire\News;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $title;
    public $content;
    public $status;
    public $news_id;
    public $view_news_title;
    public $view_news_content;
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
        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'status' => Article::STATUS_ACTIVE,
            'type' => Article::TYPE_NEWS,
        ]);
        $this->reset();
        toastr()->success("News Added Successfully.");
        $this->dispatchBrowserEvent('close-modal');
    }

    public function viewNews($id)
    {
        $news = Article::where('id', $id)->first();
        $this->view_news_title = $news->title;
        $this->view_news_content = $news->content;
        $this->status = $news->status;
        $this->view_news_status = $news->status;
        $this->view_news_created = $news->created_at;
    }

    public function closeView()
    {
        $this->view_news_title = '';
        $this->view_news_content = '';
        $this->view_news_status = '';
        $this->view_news_created = '';
    }
    public function edit($id)
    {
        $news = Article::findorFail($id);
        $this->news_id = $id;
        $this->edit_news_title = $news->title;
        $this->title = $news->title;
        $this->content = $news->content;
        $this->status = $news->status;
    }

    public function update()
    {
        $this->validate();
        $news = Article::find($this->news_id);
        $news->update([
            'title' => $this->title,
            'content' => $this->content,
            'status' => $this->status,
        ]);
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
