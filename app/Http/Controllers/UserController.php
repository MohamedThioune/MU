<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Hash;
use App\User;
use Illuminate\Support\Str;
use App\Http\Controllers\UserController\upload;

class UserController extends AppBaseController
{
    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var User $users */
        $users = User::all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        /** @var User $user */
        $user = User::create($input);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        /** @var User $user */
        $user = User::find($id);

        //define type uploaded
        $type = "image";
        //.jpg, jpeg, .png, .webP : allowed
        $allowed = ["1" => "jpeg", "2" => "jpg", "3" => "png", "4" => "webp"];
        //maximum size authorized 2 mo
        $maxsize = 1024 * 1024;

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $input = $request->all();
        $file = $request->file('photo');
        if($file){
            //Call to anonnymous function to upload image
            $input['photo'] = (function() use ($file,$allowed, $maxsize, $type, $id){  
                
                //check if the file has been uploaded without error.
                if($file->isValid()) {
                    $path = config($type.'.path');
        
                    $extension = $file->getClientOriginalExtension();
                    $filesize = $file->getSize();
        
                    //check if the file type is allowed
                    if(!in_array($extension,$allowed)){ 
                        //redirection to the form with information "incorrect format of the file".
                        Flash::error('Incorrect format of the file.');
                        return redirect(route('users.edit',[$id]));
                    }
        
                    //check size of the file - 8Mo maximum
                    $maxsize = 8 * 1024 * 1024;
                    if($filesize > $maxsize){
                        //redirection to the form with information "the size of this image exceeds the maximum size".
                        Flash::error('The size of this image exceeds the maximum size authorized.');
                        return redirect(route('users.edit',[$id]));
                    }
        
                    //download the file
                    do{
                        $nom = Str::random(25). '.' . $extension;
                    }
                    while(file_exists($path ."/". $nom));
                    
                    if($file->move($path, $nom)){
                        //redirection with success
                        return $nom;
                    }
                } 
                else{
                    Flash::error('Your file is corrupted, please choose another one or try again later.');
                    return redirect(route('users.edit',[$id]));
                }
            })();
        } 

        // if (!empty($input['password'])) {
        //     $input['password'] = Hash::make($input['password']);
        // } else {
        //     unset($input['password']);
        // }
        
        $user->fill($input);
        $user->save();

        Flash::success('User updated successfully.');

        return redirect(route('profiles.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
