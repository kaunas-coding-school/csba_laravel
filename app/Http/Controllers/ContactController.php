<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function formView()
    {
        return view('contactForm');
    }

    public function store(Request $request)
    {
        $message = new ContactMessage();
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->message = $request->get('message');
        $message->save();

        return $this->success();
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('contactForm', ['item' => $contactMessage, 'editable' => true]);
    }

    public function edit(ContactMessage $contactMessage)
    {
        return view('contactForm', ['item' => $contactMessage, 'editable' => true]);
    }

    public function showByEmail($name)
    {
        $contact = ContactMessage::query()->where('name', $name)->first();

        return view('viewData', $contact);
    }

    public function duParametrai($name, $test)
    {
        return $name . ' - ' . $test;
    }
}
