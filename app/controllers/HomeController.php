<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function getIndex()
	{
		
		$items = Auth::user()->items;
		return View::make('home', array(
			'items'	=>	$items,
			'title'=> 'Welcome to todo list app.'
		));
		
	}
	
	public function postIndex()
	{
		$id = Input::get('id');
		$userId = Auth::user()->id;
		
		$item = Item::findOrFail($id);
		
		if($item->owner_id == $userId){
			$item->mark();
		}
		
		return Redirect::route('home');
	}
	
	public function getNew(){
		return View::make('new', array(
				'title'=>'Create new todo list'
		));
	}
	
	public function postNew(){
		
		$rules = array('name'=>'required|min:3|max:255');
		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return Redirect::route('new')->withErrors($validator);
		} 
		
		$item = new Item;
		$item->name = Input::get('name');
		$item->owner_id = Auth::user()->id;
		$item->save();
		
		return Redirect::route('home');
		
	}
	
	public function getDelete(Item $task){		//class name
		//echo get_class($task);			//return class name
		
		if($task->owner_id == Auth::user()->id){
			$task->delete();
		}
		
		return Redirect::route('home');
		
	}
	
	public function postDelete(){
		
	}

}
