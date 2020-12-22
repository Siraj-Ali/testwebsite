<?php

namespace App\Http\Controllers;
Use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index($locale)
    {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
    }
}
