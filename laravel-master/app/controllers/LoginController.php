<?php
/**
  **Yash Patel
  **/
class LoginController extends BaseController
{
	public function getuser_permission()
	{
		//DB::table('permissions')->delete();
		/*$permissions = DB::table('permissions')->get();
		foreach($permissions as $permission)
		{
			$permission->delete();
		}*/
		$users = DB::table('users')->get();
		return View::make('Login_permission.Loginpermission')->with('users', $users);
	}
	public function postpermission_save()
	{
		$users = DB::table('users')->get();
		$y="";
		foreach($users as $user)
		{
			$x = Input::get('permissions'.$user->username);

			DB::update('update users set name = ? where username = ?', array($x,$user->username));
		
		}
					return Redirect::to('user_permission')->with('msg','Permissions are updated :) ');
			
	}

	public function search_user()
	{
		$text_input = Input::get('in');

		    $users = DB::table('users')->lists('username');
		    
		    $stack = array();
		    	foreach ($users as $value )
		    	{
		    		
		    		if (strpos($value,$text_input) !== false) {
								 	   array_push($stack, $value);
								}
		    	}

			return $stack;	    


	}


	public function show_user()
	{
		$text_input = Input::get('in');

		    $users = DB::table('users')->where('username',$text_input)->get();
		    
		   
			return $users;	    

	}

	public function update_user()
	{
		$text_input = Input::get('in');
		$id = Input::get('id');
		    $users = DB::table('users')->where('id',$id)->update(array('name'=>$text_input));
		    
		   
			return 'updated';	    

	}
	

}
