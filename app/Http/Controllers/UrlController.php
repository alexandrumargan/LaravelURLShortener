<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlController extends Controller
{
    public function store (Request $request){
        $url = Url::create([
          'url' => $request->url,
          'shortUrl' => str_random(4)
        ]);

        return view('success')->with('url', $url);
    }

    public function show($id) {
      $url = Url::where('shortUrl', $id)->first();

      return redirect($url->url);
    }
}
