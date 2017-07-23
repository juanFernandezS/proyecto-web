<?php
/**
 * Created by PhpStorm.
 * User: EnzoRoerto
 * Date: 23-07-2017
 * Time: 15:18
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('home');
    }
}