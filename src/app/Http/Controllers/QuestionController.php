<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;
   
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $questions = Question::withCount(['responses', 'likes'])->latest()->get();

           return view('question.questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('question.add_question_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
              
        $request->validate([
            'title' => 'required|min:5',
            'content'  => 'required|min:15',
            'location'=>'required'
        ]);

        Question::create([
            'user_id'=>Auth::user()->id,
            'title' => $request->title,
            'content'  => $request->content,
            'location'  => $request->location,
        ]);

        return redirect()->route('questions.index')
            ->with('success', 'Question ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {     
       $question = Question::with([
               'responses.user' 
            ])->withCount(['likes', 'responses'])->findOrFail($id);

        return view('question.one_question', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
 public function edit(string $id)
    {
            $question = Question::find($id);
            return view('question.edit_question_form', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $id){
    $request->validate([
        'title'    => 'required|min:5',
        'content'  => 'required|min:15',
        'location' => 'required',
    ]);

    $question = Question::findOrFail($id);

    if ($question->user_id !== auth()->id()) {
        return redirect()
            ->route('questions.index')
            ->with('error', 'Vous n\'avez pas la permission de modifier cette question');
    }

    $question->update([
        'title'    => $request->title,
        'content'  => $request->content,
        'location' => $request->location,
    ]);

    return redirect("/questions");
       
}


    /**
     * Remove the specified resource from storage.
     */
 public function destroy(string $id){
         $question = Question::findOrFail($id);
        $question->delete();

        return redirect('/questionsr');
    }
}
