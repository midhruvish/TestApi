<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Table;

class DummyApi extends Controller
{
    public function ApiDate()
    {
        return ["name"=>"Dhruvish","lastname"=>"patel"];
    }
    public function show($id = null)
    {
        // return Table::all(); 
        return $id?Table::find($id):Table::all(); 
    }
    public function add(Request $request)
    {
        $table = new Table();
        $table->name=$request->name;
        echo "<pre>";print_r($table->name);
        $table->age=$request->age;
        $result = $table->save();
       if($result)
       {
        return ["return"=>"data instered"];
       }
       else{
        return ["return"=>"data not instered"];
       }
        
    }
    public function edit(Request $request)
    {
        $table = Table::find($request->id);
        $table->name = $request->name;
        $table->age = $request->age;
        $result = $table->save();
        if($result)
        {
         return ["return"=>"data updated"];
        }
        else{
         return ["return"=>"data not updated"];
        }
    }
}
