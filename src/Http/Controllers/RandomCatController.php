<?php

namespace tomaszkordas\RandomCat\Http\Controllers;

use App\Http\Controllers\Controller;

class RandomCatController extends Controller {

    public function show()
    {
        return view('randomCat::cat', ['img' => config('randomcat.url')]);
    }

}
