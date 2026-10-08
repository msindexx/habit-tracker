<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


class SiteController extends Controller
{
    public function index(): View
    {

        return view(view: 'home');
    }

    public function dashboard(): View
    {

        $habits = auth()->user()->habits;

        return view(view: 'dashboard', data: compact('habits'));
    }
}
