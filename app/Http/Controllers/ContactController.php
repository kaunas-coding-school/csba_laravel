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
        return view('contactForm', $contactMessage);
    }

    public function showByEmail($name)
    {
        return view('viewData', ['name' => $name]);
    }

    public function duParametrai($name, $test)
    {
        return $name . ' - ' . $test;
    }
}
