<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'unique:users',
            'name' => 'required||min:6|max:50',
            'contact' => 'required|numeric|max:10000000000000',
        ]);

        $userId = Str::random(7);

        $user = new User;

        $user->userId = $userId;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $user->isActive = 1;

        $user->save();

        return redirect('/');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $id = Auth::user()->id;
            $role = Auth::user()->role;

            session()->put('id', $id);
            session()->put('role', $role);

            return redirect('/home');
        } else {
            return view('home.login')->withErrors(['Incorrect Login Details', 'The Message']);
        }
    }
}
