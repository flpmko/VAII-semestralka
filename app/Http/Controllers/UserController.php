<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // function users()
    // {
    //     $data = array(
    //         'list' => DB::table('users')->get()
    //     );

    //     return view('account', $data);
    // }

    function edit($id)
    {
        $row = DB::table('users')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];
        
        return view('account-edit', $data);
    }

    function update(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'surname' => ['required', 'string', 'max:60'],
            'username' => ['required', 'string', 'max:60'],
            'birthdate' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $updating = DB::table('users')
            ->where('id', $request->input('cid'))
            ->update([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'username' => $request->input('username'),
                'birthdate' => $request->input('birthdate'),
                'sex' => $request->input('sex'),
                'phone' => $request->input('phone'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'psc' => $request->input('psc'),
                'county' => $request->input('county'),
                'state' => $request->input('state'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);

        return redirect('account');
    }

    // function delete($id)
    // {
    //     $delete = DB::table('users')
    //         ->where('id', $id)
    //         ->delete();

    //     return redirect('/');
    // }
}
