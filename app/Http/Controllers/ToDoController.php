<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categorie;
use App\Model\Todo;

class ToDoController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('to_do.index')->with('categories', $categories);
                            
    }

    public function insertToDo(Request $request){
        $data = $request->all();

        $toDo = new Todo();
        $toDo->content      = $data['toDo'];
        $toDo->category_id  = $data['category'];
        $toDo->save();
        echo json_encode($data);
        


    }
}
