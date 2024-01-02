<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InterestController extends Controller
{
    public function SelectAll()
    {
        $interests = DB::select('SELECT * FROM interests');

        foreach ($interests as $interest)
            echo 'Interest ' . $interest->id . ': ' . $interest->text . '<br>';
    }

    public function Insert(string $text)
    {
        if (DB::insert('INSERT INTO interests (text) VALUES (?)', [$text]))
            echo 'Die Interest mit dem Text "' . $text . '" wurde hinzugefügt.';
    }

    public function Delete(int $id)
    {
        if (DB::delete('DELETE FROM interests WHERE id=?', [$id]))
            echo 'Die Interest mit der ID "' . $id . '" wurde gelöscht.';
        else
            echo 'Es existiert keine Interest mit der ID "' . $id . '"!';
    }
}
