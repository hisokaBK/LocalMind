<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;  
use App\Models\Question;
use App\Models\User;
use App\Models\Response;


class AdminController extends Controller
{
     public function showDashboard(){
          
          $users = User::limit(5)->get();
          $totalUsers = User::count();
          $totalQuestions = Question::count();
          $totalResponses = Response::count();


         return view('admin.dashboard',compact(
        'users', 'totalUsers', 'totalQuestions', 'totalResponses'
    ));
     }
}
