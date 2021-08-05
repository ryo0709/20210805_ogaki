<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('index', ['todos' => $todos]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'content' => 'required|max:20'
        ]);

        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|max:20'
        ]);
        $form = $request->all();
        unset($form['_token']);
        Todo::find($request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
