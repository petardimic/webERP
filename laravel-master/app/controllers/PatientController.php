<?php
/**
 * @author : Prathima
 */
class PatientController extends BaseController {
	
	function create() {
		return View::make('patient.create');
	}
	
	function addPatient() {
		$validator  =  Validator::make(
				Input::all(),
				array(
						'name' => 'required|max:50',
						'age' => 'required'
				)
		);
		if ($validator->fails()) {
			return Redirect::to('patient/create')->withInput()->withErrors($validator);
		}
		else {
			$postData = Input::all();
			$patient = new Patient();
			$patient->fill($postData);
			//$patient->save();
			
			return Redirect::to('patient/create')->with(
					'global_fail_flash_message',
					'Patient Record saving still under process....'
			);
		}
		Redirect::to('account/signin')
		->with('global_fail_flash_message','Please try again some error occurred!!');
	}
}
?>
