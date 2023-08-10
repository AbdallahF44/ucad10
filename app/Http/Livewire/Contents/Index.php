<?php

namespace App\Http\Livewire\Contents;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $view_content_title;
    public $view_content_content;
    public $view_content_status;
    public $view_content_type;
    public $status;

    public function viewContent($id)
    {
        $content = Article::where('id', $id)->first();
        $this->view_content_title = $content->title;
        $this->view_content_content = $content->content;
        $this->view_content_status = $content->status;
        $this->status = $content->status;
        $this->view_content_type = $content->type;
    }

    public function closeView()
    {
        $this->view_content_title = '';
        $this->view_content_content = '';
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
