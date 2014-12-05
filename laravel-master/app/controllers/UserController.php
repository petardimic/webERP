<?php

/**
 * @author : Jay
*/
class UserController extends BaseController {

/**
 * Signup related functions
 */
function getSignup()
{
	$data = array('sideNav'=>FALSE);
	return View::make('account.signup', $data);
}

function postSignup()
{
		// validations
	$validator  =   Validator::make(
	                                Input::all(),
	                                array(
	                                      'username'    => 'required|max:50',
	                                      'password' => 'required|between:6,16|confirmed',
	                                      'password_confirmation' => 'required|between:6,16',

	                                      )
	                                );

	if ( $validator->fails() ) {
			// The given data did not pass validation
		return Redirect::to('account/signup')->withInput()->withErrors($validator);
	}
	else {

		$username 	= Input::get('username');
		$password 	= Input::get('password');
		$type = Input::get('type');

			//activation code
		$code = str_random(60);

			// create new user model
		$user	= new User;

			// set user details
		$user->username			= $username;
		$user->password 		= Hash::make($password);
		$user->code             = $code;
		$user->name = $type;
		
		// create user account
		if ($user->save()) {
			
			return Redirect::to('/')->with(
			                               'global_success_flash_message',
			                               'Your account has been created !!'
			                               );
		}
	}
}

	// end of signup functions
/**
 *  signin related functions
 */

function getSignin()
{
	//$data = array('sideNav'=>FALSE);
	return View::make('account.signin');
}

function postSignin()
{
	$validator  =  Validator::make(
	                               Input::all(),
	                               array(
	                                     'username' => 'required|max:50',
	                                     'password' => 'required|between:6,16'
	                                     )
	                               );
	if ($validator->fails()) {
		return Redirect::to('account/signin')
		->withInput()
		->withErrors($validator);
	}
	else {
			// here authenticate the user

		$auth	= Auth::attempt(
		                      array(
		                            'username'	=> Input::get('username'),
		                            'password' => Input::get('password')
		                            )
		                      );

		if ($auth) {
			return Redirect::to('dashboard');
		}
		else {
			return Redirect::to('account/signin')->with(
			                                            'global_fail_flash_message',
			                                            'User Name or Password incorrect,or account not activated'
			                                            );
		}
	}
	Redirect::to('account/signin')
	->with('global_fail_flash_message','Please try again some error occurred!!');

}
// end of normal signin functions

/**
 * Show the profile for the given user.
*/
public function showProfile($id)
{
	$user = User::find($id);

	return View::make('user.profile', array('user' => $user));
}

function getSignout()
{
	Auth::logout();
	return Redirect::to('/');
}

/**
 * change password functions
 */

function getChangePassword()
{
	$data = array('sideNav'=>FALSE);
	return View::make('account.password', $data);
}

function postChangePassowrd()
{
	$pass_validator = Validator::make(
	                                  Input::all(),
	                                  array(
	                                        'old_password' 	=> 'required|sometimes|between:6,16',
	                                        'password' 		=> 'required|between:6,16|confirmed',
	                                        'password_confirmation' => 'required|between:6,16'
	                                        )
	                                  );
	if ($pass_validator->fails()) {
		return Redirect::to('account/password/change')->withInput()->withErrors($pass_validator);
	}
	else {

		$user = User::find(Auth::user()->id);

		$old_password	= Input::get('old_password');
		$password		= Input::get('password');

		if ( $old_password == $password) {
			return Redirect::to('account/password/change')->with(
			                                                     'global_fail_flash_message',
			                                                     'Old password and new password cannot be same'
			                                                     );
		}

		// if user entered old password matches the db password then update the password
		if (Hash::check($old_password, $user->getAuthPassword()) OR ($user->login_src !== 1) ) {

			$user->password	= Hash::make($password);

			if ( $user->save() ) {
				return Redirect::to('dashboard')->with(
				                                       'global_success_flash_message',
				                                       'Password updated successfully'
				                                       );
			}
			else {
				return Redirect::to('account/password/change')->with(
				                                                     'global_fail_flash_message',
				                                                     'Please try again some error occurred!!'
				                                                     );
			}
		}
	}
}
// end of password change functions


/**
 *  Profile related functions
 */
function getProfile($id='')
{
	if ($id) {
		$data = array('sideNav'=>FALSE);
		$data['user']	= User::find($id);
		return View::make('user.profile', $data);
	}
}
function postProfile($id='')
{
	if ($id) {

		$profile_validator = Validator::make(
		                                     Input::all(),
		                                     array(
		                                           'name'		=> 'required|between:3,50',
		                                           'email'	=>	'email',
		                                           'phone'		=>	'alpha_num',
		                                           )
		                                     );
		if ($profile_validator->fails()) {
			return Redirect::to('user/profile/'.Auth::user()->id)->withInput()->withErrors($profile_validator);
		}
		else {

			$profile_field_input = Input::all();
			//unset token
			unset($profile_field_input['_token']);

			$affectedRows = User::where('id', '=', $id)->update($profile_field_input);

			if ($affectedRows) {
				return Redirect::to('user/profile/'.Auth::user()->id)->with(
				                                                            'global_success_flash_message',
				                                                            'Profile fields updated successfully'
				                                                            );
			}
			else {
				return Redirect::to('user/profile/'.Auth::user()->id)->with(
				                                                            'global_fail_flash_message',
				                                                            'Please try again some error occurred!!'
				                                                            );
			}
		}

	}
}

	// end @author jay
}
