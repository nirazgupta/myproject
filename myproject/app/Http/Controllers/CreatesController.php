<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myproject;


class CreatesController extends Controller
{
    //
    public function todo(){
    	$myprojects = myproject::all();
    	return view('todo', ['myprojects' => $myprojects]);

    }
    public function add(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$myprojects = new myproject;
    	$myprojects->title = $request->input('title');
    	$myprojects->description=$request->input('description');
    	$myprojects->save();
    	return redirect('/')->with('info', 'Entry saved succefully.');
    }

    public function read($id){
    	$myprojects = myproject::find($id);
    	return view('read', ['myprojects' => $myprojects]);    	
	}

    public function update($id){
    	$myprojects = myproject::find($id);
    	return view('update', ['myprojects' => $myprojects]);
    }

    public function edit(Request $request, $id){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);
    	$data = array(
    		'title' => $request->input('title'),
    		'description' => $request->input('description')
    	);
    	myproject::where('id', $id)->update($data);
    	return redirect('/')->with('info', 'Record Updated succefully.');
    }

    public function delete($id){
    	myproject::where('id', $id)
    	->delete();
    	return redirect('/')->with('info', 'Record Deleted Successfully.');
    }
    
}
