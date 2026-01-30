<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\Question;
use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'question_id' => 'required|exists:questions,id',
        ]);

        Response::create([
            'content' => $request->content,
            'question_id' => $request->question_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Response added successfully.');
    }

    public function edit(Response $response)
    {
        if (
            auth()->id() !== $response->user_id &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        return view('responses.edit', compact('response'));
    }

    public function update(Request $request, Response $response)
    {
        if (
            auth()->id() !== $response->user_id &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        $request->validate([
            'content' => 'required|string',
        ]);

        $response->update([
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Response updated.');
    }

    public function destroy(Response $response)
    {
        if (
            auth()->id() !== $response->user_id &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        $response->delete();

        return redirect()->back()->with('success', 'Response deleted.');
    }
}
