<?php

namespace App\Http\Controllers\API;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

use Hash;

use Illuminate\Notifications\Notification;
use App\Notifications\RegisterNotify;

use Illuminate\Support\Str;

use DB;

use Auth;

/**
 * Class UserController
 * @package App\Http\Controllers\API
 */

class UserAPIController extends AppBaseController
{
    /**
     * Display a listing of the User.
     * GET|HEAD /users
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $users = $query->get();

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
    }

    /**
     * Store a newly created User in storage.
     * POST /users
     *
     * @param CreateUserAPIRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $users  = User::all();

        $input = $request->all();
        $rules = array('name', 'firstName', 'lastName', 'email', 'sex', 'age', 'password');

        foreach ($rules as $rule) {
            # code...
            if(!$request->$rule)
                return $this->sendError('Field : ' .$rule. ' missing.');
        }

        foreach($users as $user)
            if($user->email == $request->email)
                return $this->sendError('The email you entered already exists on our platform, we advise you to connect');
        
        $input['password'] = Hash::make($input['password']);

        /** @var User $user */
        $user = User::create($input);

        if($user){
            Auth::login($user);
            $user->notify(new RegisterNotify());
        }else
            return $this->sendError('Error occurred on create user');

        return $this->sendResponse($user->toArray(), 'User saved successfully');
    }

    /**
     * Display the specified User.
     * GET|HEAD /users/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        return $this->sendResponse($user->toArray(), 'User retrieved successfully');
    }

    public function shows($id, $token)
    {
        $keys = DB::Table('tokens')->select('tokens.*')->get();
        $bool = "false";

        if(!$this->token($token))
            return $this->sendError('The token you entered does not exist or has expired, you must login 😊');

        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        return $this->sendResponse($user->toArray(), 'User retrieved successfully');
    }


    /**
     * Update the specified User in storage.
     * PUT/PATCH /users/{id}
     *
     * @param  int $id
     * @param UpdateUserAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        $user->fill($request->all());
        $user->save();

        return $this->sendResponse($user->toArray(), 'User updated successfully');
    }

    /**
     * Remove the specified User from storage.
     * DELETE /users/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        $user->delete();

        return $this->sendSuccess('User deleted successfully');
    }

    public function auth_signin(Request $request)
    {
        $users = User::all();
        $rules = array('email', 'password');
        $value = null;
        $private_value = null; 
        $token = array('token' => $value, 'private_token' => $private_value);

        foreach ($rules as $rule) {
            # code...
            if(!$request->$rule)
                return $this->sendError('Field : ' .$rule. ' missing for your connection.');
        }
        foreach ($users as $user){
            if($request->email == $user->email && password_verify($request->password, $user->password)){
               if($user->admin){
                    $private_value = Str::random(45);
                    DB::table('tokens')->insert([
                        ['token' => '', 'private_token' => $private_value, 'user_id' => $user->id]
                    ]); 
                    $token['private_token'] = $private_value;
               }else{
                    $value = Str::random(45);
                    DB::table('tokens')->insert([
                        ['token' => $value, 'private_token' => '', 'user_id' => $user->id]
                    ]);
                    $token['token'] = $value;
               }
               return $this->sendResponse($token, 'Credentials correct ✅'); 
            } 
        }

        return $this->sendError('Your information is incorrect ⛔️');
    }

    public function auth_logout($token){
        $keys = DB::Table('tokens')->select('tokens.*')
                                    ->where('tokens.token', $token)
                                    ->first();
        if($keys)
            $user = User::find($keys->user_id);

        if(isset($user)){
            DB::table('tokens')->where('user_id', $keys->user_id)->delete();
            return $this->sendResponse($user->firstName, 'You have been successfully disconnected 🔌'); 
        }else
            return $this->sendError('The token you entered does not exist or has already expired');
    }

    public function token($key){
        $keys = DB::Table('tokens')->select('tokens.*')->get();
       
        foreach($keys as $token)
            if($token->token == $key)
                return true;
        return false;
    }
}
