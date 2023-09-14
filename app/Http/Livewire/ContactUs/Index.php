<?php

namespace App\Http\Livewire\ContactUs;

use App\Models\ContactUs;
use Livewire\Component;

class Index extends Component
{
    public $view_request_from;
    public $view_request_id;
    public $view_request_from_email;
    public $view_request_from_mobile;
    public $view_request_receiver_type;
    public $view_request_to;
    public $view_request_subject;
    public $view_request_body;
    public $view_request_sent_at;
    public $status;

    public function viewRequest($id)
    {
        $request = ContactUs::where('id', $id)->first();
        $this->view_request_id = $request->id;
        $this->view_request_from = $request->from_name;
        $this->view_request_from_email = $request->from_email;
        $this->view_request_from_mobile = $request->from_phone;
        $this->view_request_receiver_type = $request->receiver_type;
        $this->view_request_to = $request->to;
        $this->view_request_subject = $request->subject;
        $this->view_request_body = $request->body;
        $this->view_request_sent_at = $request->created_at;
        $this->status = $request->status;
    }

    public function closeView()
    {
        $this->view_request_from = '';
        $this->view_request_from_email = '';
        $this->view_request_from_mobile = '';
        $this->view_request_receiver_type = '';
        $this->view_request_to = '';
        $this->view_request_subject = '';
        $this->view_request_body = '';
        $this->view_request_sent_at = '';
        $this->status = '';
    }

    public function markAsRead()
    {
        ContactUs::where('id', $this->view_request_id)->update([
            'status' => ContactUs::STATUS_READ
        ]);
        toastr()->success("Request Read Successfully.");
        $this->status = ContactUs::STATUS_READ;
    }

    public function render()
    {
        $content_us = ContactUs::all();
        return view('livewire.contact-us.index', compact('content_us'))->layout('dashboard.contact-us.all');
    }
}
