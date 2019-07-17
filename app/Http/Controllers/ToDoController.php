<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categorie;
use App\Model\Todo;
use Auth;
use DB;

class ToDoController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        $toDos = Todo::all();
        return view('to_do.index')->with('categories', $categories)
                                  ->with('toDos', $toDos);
                            
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

        echo json_encode($chooseCat);
    }

    
        public function deleteToDo(Request $request){ 
        $data = $request->all();
        DB::table('todos')->where('id', $request->id)->delete();
        echo json_encode($data);
    }

    public function checkBox(Request $request){
        $data = $request->all();
        echo json_encode($data);
    }
}
