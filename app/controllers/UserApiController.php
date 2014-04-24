<?php
class UserApiController extends BaseController {

	public $restful = true;
	public function get_user($id = null)
	{
		if (is_null($id ))
		{
			return Response::json(User::all());
		}
		else
		{
			$user = User::find($id);
			//return var_dump($user);
			if(is_null($user)){
				return Response::json("User not found $id", 404);
			} else {
				return Response::json($user);
			}
		}
	}
	public function getAuth($user,$pass){
		//$hash=Hash::make('second_password');
		$auth=User::where('username', $user)->get();
		if(isset($auth[0])){
			$tmp=Hash::check($pass,$auth[0]->password);
			if($tmp){
				return Response::json($auth[0]);
			}
			else {
				return Response::json("Failed", 404);
			}
		}
		else {
			return Response::json("Failed", 404);
		}
		
	}

}