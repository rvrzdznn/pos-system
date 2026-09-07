<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Administrator',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Anna Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Mark Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Lisa Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Kevin Cruz',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}
