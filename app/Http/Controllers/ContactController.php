<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $search = $request->search;
        $contacts = Contact::when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return view('contacts.index', compact('contacts', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        return view('contacts.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required',
        'group_id' => 'nullable|exists:groups,id'
    ]);

    Contact::create($request->all());

    return redirect()->route('contacts.index')
        ->with('success', 'Contact created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required'
    ]);

    $contact->update($request->all());

    return redirect()->route('contacts.index')
        ->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
