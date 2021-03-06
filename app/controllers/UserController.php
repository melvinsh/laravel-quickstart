<?php

class UserController extends BaseController
{

    /**
     * Show us the settings.
     */
    public function showSettings()
    {
        return View::make('pages.user.settings');
    }

    /**
     * Change the email of a user.
     */
    public function changeEmail()
    {
        $rules = array(
            'new_email' => 'required|email|unique:users,email',
            'current_password' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to(route('get_settings'))
                ->withErrors($validator);
        }

        if (!Auth::user()->changeEmail(Input::get('new_email'), Input::get('current_password'))) {
            return Redirect::to(route('get_settings'))
                ->withErrors(array('Current password is incorrect.'));
        }

        return Redirect::to(route('get_settings'))->with('message', 'E-mail changed.');
    }

    /**
     * Change the password of a user.
     */
    public function changePassword()
    {
        $rules = array(
            'new_password' => 'required|min:8|confirmed',
            'current_password' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to(route('get_settings'))
                ->withErrors($validator);
        }

        if (!Auth::user()->changePassword(Input::get('new_password'), Input::get('current_password'))) {
            return Redirect::to(route('get_settings'))
                ->withErrors(array('Current password is incorrect.'));
        }

        Auth::logout();
        return Redirect::to('login')->with('message', 'Password changed.');
    }

    /**
     * [showProfile description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            App::abort(404);
        }

        return View::make('pages.user.profile', array('user' => $user));
    }

}
