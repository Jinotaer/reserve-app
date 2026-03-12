<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AuthorController extends Controller
{
    /**
     * Display the author index page.
     */
    public function index(): View
    {
        return view('author.index');
    }
}
