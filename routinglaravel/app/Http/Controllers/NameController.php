<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function nameNachname($name, $nachname)
    {
        return 'Name: ' . $name . ' ' . $nachname;
    }

    public function userName($name)
    {
        return 'User: ' . $name;
    }
}
