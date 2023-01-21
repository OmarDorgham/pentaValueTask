<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('account.index', ['accounts' => $accounts]);
    }

    public function create()
    {
        return view('account.create');
    }

    public function store(CreateAccountRequest $request)
    {
        Account::create([
            'name' => $request->name
        ]);
        return redirect()->route('account.index');
    }
}
