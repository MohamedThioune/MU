<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Controllers\AppBaseController;
use App\Profile;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class ProfileController extends AppBaseController
{
    /**
     * Display a listing of the Profile.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var profil $profile */
        // $profiles = Profile::all();

        // return view('profiles.index')
        //     ->with('profiles', $profiles);

        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        $id = Auth::id();
        $profiles = DB::Table('users')->select('profile.*')
                                      ->join('profile', 'users.id', 'profile.user_id')
                                      ->where('users.id', $id)
                                      ->get();
                                      
        return view('profiles.index')
            ->with('profiles', $profiles);
    }


    /**
     * Show the form for creating a new Profile.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        return view('profiles.create');
    }

    /**
     * Store a newly created Profile in storage.
     *
     * @param CreateProfileRequest $request
     *
     * @return Response
     */
    public function store(CreateProfileRequest $request)
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        $input = $request->all();

        /** @var Profile $profile */
        $profile = Profile::create($input);

        Flash::success('Profile saved successfully.');

        return redirect(route('profiles.index'));
    }

    /**
     * Display the specified Profile.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        /** @var Profile $profile */
        $profile = Profile::find($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        return view('profiles.show')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified Profile.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        /** @var Profile $profile */
        $profile = Profile::find($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        return view('profiles.edit')->with('profile', $profile);
    }

    /**
     * Update the specified Profile in storage.
     *
     * @param int $id
     * @param UpdateProfileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfileRequest $request)
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        /** @var Profile $profile */
        $profile = Profile::find($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        $profile->fill($request->all());
        $profile->save();

        Flash::success('Profile updated successfully.');

        return redirect(route('profiles.index'));
    }

    /**
     * Remove the specified Profile from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        /** @var Profile $profile */
        $profile = Profile::find($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        $profile->delete();

        Flash::success('Profile deleted successfully.');

        return redirect(route('profiles.index'));
    }

    public function choose(){
        
        if (Auth::user()->type != "OUMMATI")
            return redirect('/');

        $id = Auth::id();
        $profiles = DB::Table('users')->select('profile.*')
                                      ->join('profile', 'users.id', 'profile.user_id')
                                      ->where('users.id', $id)
                                      ->get();

        return view('choose_profile',compact('profiles'));
    }

    
}
