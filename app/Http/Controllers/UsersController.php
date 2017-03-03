<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function selectUsers(){
   // dd(User::all());
        $myData = [
            'interns' => [
                'web_interns' => [
                    'frank', 'kelvin', 'bryo', 'duncan', 'erick', 'godfrey'
                ],

                'bsa_interns' => [
                    'laura', 'yvonne', 'isaac'
                ]
            ]
        ];

        return view('interns', $myData);
//        return view('list_users', ['users' => User::all()]);
    }



}
