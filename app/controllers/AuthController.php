<?php

class AuthController extends BaseController
{

    /**
     * Show the login screen to the user.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return Redirect::to('dashboard');
        }

        return View::make('pages.auth.login');
    }

    /**
     * Logout user and redirect to login screen.
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

    /**
     * Show signup screen.
     * Redirect to dashboard if a user is signed in.
     */
    public function showSignUp()
    {
        if (Auth::check()) {
            return Redirect::to('dashboard');
        }

        return View::make('pages.auth.signup');
    }

    /**
     * Try to sign up a user.
     * Validates email and password fields.
     * On error: redirect back to signup with validator errors.
     * On success: redirect to dashboard with welcome message.
     */
    public function trySignUp()
    {

        $rules = array(
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        );

        $validator = Validator::make(array(
            'email' => strtolower(Input::get('email')),
            'password' => Input::get('passsword')
        ), $rules);

        if ($validator->fails()) {
            return Redirect::to('signup')
                ->withErrors($validator)
                ->withInput(Input::except(array('password', 'password_confirm')));;
        }

        $user = User::create(array(
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password'))
        ));

        $user->save();

        // Can't Auth::login($user) here because we want the firstTime message.
        $this->tryLogin();

        return Redirect::to('dashboard');

    }

    /**
     * Try to log the user in using email and password.
     * On success: redirect to dashboard with welcome message.
     * On error: redirect to login with error message,
     */
    public function tryLogin()
    {

        $attempt = Auth::attempt(array('email' => strtolower(Input::get('email')), 'password' => Input::get('password')));

        if (!$attempt) {
            return Redirect::to('login')->with('error', 'Unknown username/password combination.');
        }

        $firstTime = !(Auth::user()->has_signed_in_once);

        Auth::user()->saveSignIn();

        if ($firstTime) {

            return Redirect::intended('dashboard')
                ->with('message', 'Welcome! Please read the instructions below!');
        }

        return Redirect::intended('dashboard');

    }

}
