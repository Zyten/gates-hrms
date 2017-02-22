<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortalController extends Controller
{
    public function index()
    {
    	return view('portal.index');
    }
}
