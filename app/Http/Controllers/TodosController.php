<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * index for show all the elements
     * store to save elements
     * update for upgrade elements
     * destroy to elimante elements
     * edit for show edition formulary
     */

     public function store(Request $request){

        $request->validate([
            'title'=>'required|min:3'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Task correctly created');

     }
}
