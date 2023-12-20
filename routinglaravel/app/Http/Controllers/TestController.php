<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function printMessage(){
        return 'Hallo Welt, wie geht es dir?';
    }
    
    public function showFullName($name, $nachname)
    {
        return 'Name: ' . $name . ' ' . $nachname;
    }

    public function showUserName($name)
    {
        return 'User: ' . $name;
    }
}
