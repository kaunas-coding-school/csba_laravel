<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Services\ModifyString;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function formView()
    {
        return view('contactForm');
    }

    public function store(Request $request)
    {
        $msg = $request->get('message');

        if ($request->get('modifikuoti')){
            $modifyString = new ModifyString();
            $msg = $modifyString->modify($msg);
        }

        $message = new ContactMessage(
            [
                'name'    => $request->get('name'),
                'email'   => $request->get('email'),
                'message' => $msg,
            ]
        );
        $message->save();

        return $message;
    }

    public function show(ContactMessage $contactMessage)
    {
        return $contactMessage;
//        return view('contactForm', ['item' => $contactMessage, 'editable' => true]);
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
        return $name.' - '.$test;
    }
}
