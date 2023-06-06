<?php

namespace App\Http\Controllers;
use Event;
use App\Events\SendMail;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        Event::dispatch(new SendMail(1,2));
    }
    //
}
