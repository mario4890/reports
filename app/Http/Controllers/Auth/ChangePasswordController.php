<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('auth.passwords.change');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password'  => 'required|confirmed|min:5'
        ]);

        if ($validator->fails()) {
            return redirect()->route('password')
                ->withErrors($validator)
                ->withInput();
        }

        $this->save(Auth::user(), $request->password);

        return redirect()->route('home')->with('message', 'Pomyślnie zmieniono hasło');
    }

    protected function save(User $userObj, string $password)
    {
        $user = $userObj->updatePassword($password);
    }
}
