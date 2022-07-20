<?php

namespace App\Http\Controllers;

use App\Rules\CheckStackRule;
use Illuminate\Http\Request;

class CustomValidationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'stack' => [
                'required',
                new CheckStackRule()
            ]
        ]);
        dd("Success !! You are a Laravel Developer...");
    }
}
