<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle($questionId)
    {
        $user = Auth::user();

        $question = Question::findOrFail($questionId);

        $like = Like::where('user_id', $user->id)
                    ->where('question_id', $question->id)
                    ->first();

        if ($like) {
            $like->delete();
            $status = 'unliked';
        } else {
            Like::create([
                'user_id' => $user->id,
                'question_id' => $question->id,
            ]);
            $status = 'liked';
        }

       return redirect()->back();
    }
}
