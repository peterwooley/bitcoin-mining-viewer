<?php

class Profile extends CI_Model {

	const PROFILE_URL = "https://mining.bitcoin.cz/accounts/profile/json/";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

	}
    
    public function get($token)
    {
		$data = json_decode(file_get_contents(self::PROFILE_URL . $token));
		// Fix data for rendering?
		$data->send_threshold = round($data->send_threshold, 2);
		$data->confirmed_reward = round($data->confirmed_reward, 3);
		$data->unconfirmed_reward = round($data->unconfirmed_reward, 3);

		// Convert workers object to array and add current mhash
		$workers = array();
		$mhash = 0;
		foreach($data->workers as $key => $value) {
				$worker = $value;
				$worker->name = $key;
				$worker->last_seen = (date("U") - $worker->last_share);
				$mhash += $worker->hashrate;
				array_push($workers, $worker);
		}
		$data->workers = $workers;
		$data->mhash = $mhash;
		
		return $data;
    }

}
