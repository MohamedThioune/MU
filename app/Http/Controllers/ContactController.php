<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class ContactController extends AppBaseController
{
    /**
     * Display a listing of the Contact.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Contact $contacts */
        $contacts = Contact::all();

        return view('contacts.index')
            ->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new Contact.
     *
     * @return Response
     */
    public function create()
    {
        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        return view('contacts.create', compact('channel'));
    }

    /**
     * Store a newly created Contact in storage.
     *
     * @param CreateContactRequest $request
     *
     * @return Response
     */
    public function store(CreateContactRequest $request)
    {
        $input = $request->all();

        /** @var Contact $contact */
        $contact = Contact::create($input);
        
        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        Flash::success('Contact saved successfully.');

        return redirect(route('channel.fly', $channel->id));
    }

    /**
     * Display the specified Contact.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Contact $contact */
        $contact = Contact::find($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('contacts.index'));
        }

        return view('contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified Contact.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Contact $contact */
        $contact = Contact::find($id);

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('contacts.index'));
        }

        return view('contacts.edit',compact('contact','channel'));
    }

    /**
     * Update the specified Contact in storage.
     *
     * @param int $id
     * @param UpdateContactRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactRequest $request)
    {
        /** @var Contact $contact */
        $contact = Contact::find($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('contacts.index'));
        }

        $contact->fill($request->all());
        $contact->save();

        Flash::success('Contact updated successfully.');

        return redirect(route('contacts.index'));
    }

    /**
     * Remove the specified Contact from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Contact $contact */
        $contact = Contact::find($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('contacts.index'));
        }

        $contact->delete();

        Flash::success('Contact deleted successfully.');

        return redirect(route('contacts.index'));
    }
}
