<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Favorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavorateController extends Controller
{
    public function toggle(Question $question)
    {
        $userId = auth()->id();

        $favorite = Favorate::where('user_id', $userId)
            ->where('question_id', $question->id)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $status = 'removed';
        } else {
            Favorate::create([
                'user_id' => $userId,
                'question_id' => $question->id
            ]);
            $status = 'added';
        }

        return response('/question'.'/'.$question->id);
    }


public function view()
{
    $questions = Question::whereHas('favorates', function ($query) {
            $query->where('user_id', Auth::id());
        })
        ->withCount(['responses', 'likes'])
        ->latest()
        ->get();

    return view('question.favorate', compact('questions'));
}


}