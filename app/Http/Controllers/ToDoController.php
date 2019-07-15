<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categorie;
use App\Model\Todo;
use Auth;

class ToDoController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('to_do.index')->with('categories', $categories);
                            
    }

    public function insertToDo(Request $request){
        $data = $request->all();
        $user = Auth::user();
        $toDo = new Todo();
        $toDo->content      = $data['toDo'];
        $toDo->category_id  = $data['category'];
        $toDo->user_id      = $user->id; 
        $toDo->save();
        echo json_encode($data);
    }

    public function chooseCat(Request $request){
        $data = $request->all();
        $user = Auth::user();
        $chooseCat = Todo::where('category_id', $data['category'])->where('user_id', $user->id)->get();
        //$chooseCat->session()->all();
        echo json_encode($chooseCat);
    }
}
