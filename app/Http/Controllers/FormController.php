<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;

class FormController extends Controller
{
    public function index(FormRequest $request)
    {
        return redirect()->route('index');
    }
}