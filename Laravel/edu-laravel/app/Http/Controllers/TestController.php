<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        // return 'Tests.index!!';
        // return view('tests.index');
        return view('testsindex')->with('name','신금쪽');
    }
}
