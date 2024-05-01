<?php

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . '/vendor/autoload.php';

// RESET DATABASE
Capsule::schema()->disableForeignKeyConstraints();
Answer::truncate();
Question::truncate();
Capsule::schema()->enableForeignKeyConstraints();


// ENABLE QUERY LOG
Capsule::connection()->enableQueryLog();


// CREATE QUESTION
$question = Question::create(['content' => 'DOMANDA']);

// CREATE ANSWERS
$question = Question::find(1); // <-- ID
if ($question) {
    $question->answers()->createMany([
        ['content' => 'RISPOSTA 1'],
        ['content' => 'RISPOSTA 2'],
    ]);
}

// GET ALL QUESTIONS WITH ANSWERS
$questions = Question::with('answers')->get();

echo "QUESTIONS";
dump($questions->toArray());

echo "QUERY LOG";
dump(Capsule::connection()->getQueryLog());