<?php

class EmailController  extends BaseController {

	/**
	 * Send email from the Contact Us form
	 * @return $response : Array 
	 */
	public function submit()
	{	
		// Post data
		$input = Input::all();
		$response = array('success' => false);
		$addresses = array();

		// Validate Honeypot is empty
		if ($input['honeypot'] === "") 
		{
			try {

				$validator = Validator::make(
					$input,
					array (
						'name' => 'required',
						'email' => 'required|email',
						'question' => 'required',
					)
				);

				if ($validator->fails()) {
					// Inputs were not valid
					$response['message'] = $validator->failed();
				} else {
					// Validation passed
					Mail::send('emails.contact', $input, function($message) use ($input) {
					        $message->to('vinsongrant@gmail.com')
					        		->from($input['email'], $input['name'])
					        		->subject('Contact Form Submission')
					        		->replyTo($input['email'], $input['name']);
					    });

					$response['success'] = true;
				}
			} 
			catch (Exception $ex) {
				$response['message'] = $ex->getMessage();
			}
		} 
		else 
		{
			$response['success'] = false;
			$response['message'] = "No bots allowed! Do not fill out the honeypot if you are human.";
		}

		return Response::json($response);
	}

}