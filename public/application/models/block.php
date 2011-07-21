<?php

class Block extends CI_Model {

	const STAT_URL = "http://mining.bitcoin.cz/stats/json/";

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
	}
    
    public function get()
    {
		return json_decode(file_get_contents(self::STAT_URL));
    }

}
