<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use Flash;

use App\Profile;
use App\Models\Channel;

use App\Notifications\RegisterNotify;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

        Auth::login($user);

        $inputs_profile = array(
            "name"  => $request->input('name'),
            "can_stream" => 1,
            "sex" => $request->input('sex'),
            "age" => $request->input('age'),
            "user_id" => Auth::id(),
        );

        $inputs_channel = array(
            "name"  => $request->input('name'),
            "user_id" => Auth::id(),
        );

        Auth::logout();

        // *inputs_profile* correspond to inputs for registered user that we pass on to the profiles
        
        session(['profile' => $inputs_profile]);

        Profile::create($inputs_profile);

        // *inputs_channel* correspond to inputs for registered user that we pass on to the channels

        Channel::create($inputs_channel);


        Flash::success('First profile successfully ☑️ created through your user profile ');

        Flash::success('Channel successfully ☑️ created through your user property ');

        $this->guard()->login($user);

        $user->notify(new RegisterNotify());

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
