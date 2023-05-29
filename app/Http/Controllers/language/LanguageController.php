<?php

namespace App\Http\Controllers\language;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
  public function swap($locale)
  {
      if (!in_array($locale, ['en', 'ar'])) {
          abort(400);
      } else {
          session()->put('locale', $locale);
      }
      
      App::setLocale($locale);
      return redirect()->back();
  }
}
