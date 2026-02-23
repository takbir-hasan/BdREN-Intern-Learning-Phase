<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('contact-list', compact('contacts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactsRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        Contacts::create($validated);

        return redirect()->route('contacts.index')->with('success', 'Contact added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contacts = \App\Models\Contacts::findOrFail($id);
        return view('edit-contact', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, $id)
    {
        $validated = $request->validated();
        $contacts = \App\Models\Contacts::findOrFail($id);
        $contacts->update($validated);
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacts = \App\Models\Contacts::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
