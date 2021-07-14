<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $list = ContactMessage::all();
        return view('contacts.index', ['list' => $list]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        ContactMessage::create($request->toArray());
        return redirect(route('contacts.index'));
    }

    public function show(ContactMessage $contact)
    {
        return view('contacts.show', $contact);
    }

    public function edit(ContactMessage $contact)
    {
        return view('contacts.edit', $contact);
    }

    public function update(Request $request, ContactMessage $contact)
    {
        $contact->update($request->toArray());
        return redirect(route('contacts.index'));
    }

    public function destroy(ContactMessage $contact)
    {
        $contact->delete();
        return redirect(route('contacts.index'));
    }
}
