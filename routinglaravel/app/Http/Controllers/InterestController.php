<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InterestController extends Controller
{
    public function index()
    {
        $interests = DB::select('SELECT * FROM interests');

        foreach ($interests as $interest)
            echo 'Interest ' . $interest->id . ': ' . $interest->text . '<br>';
    }

    public function store(string $text)
    {
        if (DB::insert('INSERT INTO interests (text) VALUES (?)', [$text]))
            echo 'Die Interest mit dem Text "' . $text . '" wurde hinzugefügt.';
    }

    public function destroy(int $id)
    {
        if (DB::delete('DELETE FROM interests WHERE id=?', [$id]))
            echo 'Die Interest mit der ID "' . $id . '" wurde gelöscht.';
        else
            echo 'Es existiert keine Interest mit der ID "' . $id . '"!';
    }

    public function insertPostsAndInterests()
    {
        $interestdata = [
            [
                'id' => 1,
                'text' => 'Coding',
            ],
            [
                'id' => 2,
                'text' => 'Kochen',
            ],
            [
                'id' => 3,
                'text' => 'Singen',
            ],
            [
                'id' => 4,
                'text' => 'Fußball',
            ],
        ];

        foreach ($interestdata as $interest) {
            $interest = (object) $interest;
            DB::table('interests')->insert(
                ['text' => $interest->text, 'id' => $interest->id]
            );
        }

        $postdata = [
            [
                'id' => 1,
                'title' => 'Montag',
                'text' => 'Montag ist schön zum Fußball spielen',
                'interest_id' => 4,
            ],
            [
                'id' => 2,
                'title' => 'jeder Tag',
                'text' => null,
                'interest_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Dienstag',
                'text' => 'Dienstag koche ich.',
                'interest_id' => 2,
            ],
            [
                'id' => 4,
                'title' => 'Mittwoch',
                'text' => 'Mittwoch singe ich',
                'interest_id' => 3,
            ],
            [
                'id' => 5,
                'title' => 'Mittwoch',
                'text' => 'Mittwoch ist schlechtes Wetter',
                'interest_id' => null,
            ],
            [
                'id' => 6,
                'title' => 'Donnerstag',
                'text' => 'Donnerstag lerne ich den Query Builder',
                'interest_id' => 1,
            ],
            [
                'id' => 7,
                'title' => 'Essen',
                'text' => 'Ich bin hungrig.',
                'interest_id' => null,
            ],
            [
                'id' => 8,
                'title' => 'Freitag',
                'text' => null,
                'interest_id' => 1,
            ],
            [
                'id' => 9,
                'title' => 'Samstag',
                'text' => 'Samstag koche ich.',
                'interest_id' => 2,
            ],
            [
                'id' => 10,
                'title' => 'Fußball',
                'text' => null,
                'interest_id' => 4,
            ],
            [
                'id' => 11,
                'title' => 'Coding',
                'text' => 'Laravel macht Spaß',
                'interest_id' => null,
            ],
        ];

        foreach ($postdata as $post) {
            $post = (object) $post;

            DB::table('posts')->insert(
                [
                    'id' => $post->id,
                    'title' => $post->title,
                    'text' => $post->text,
                    'interest_id' => $post->interest_id,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            );
        }

        echo "Daten eingefügt.";
    }
}
