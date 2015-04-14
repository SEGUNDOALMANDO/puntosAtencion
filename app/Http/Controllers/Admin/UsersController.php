<?php
namespace App\Http\Controllers\Admin;

class UsersController  extends Controller {
    public function store()
    {

        $username = Input::get('username');
        $password = Input::get('password');

        try
        {
            $this->formValidator->validate(Input::all());
            $user = $this->authLoginRepo->findUser($username);

            if(md5($password) != $user->clave)
            {
                return Redirect::back()->with('login_error', 1);
            }
            Auth::login($user);
            return Redirect::route('home');
        }
        catch(FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
        catch(ModelNotFoundException $e)
        {
            return Redirect::back()->with('login_error', 1);
        }

    }

}