<?php

class Location {
	private $latitude;
	private $longitude;
	//private $city;
	
	function __construct($latitude, $longitude) {
		$this ->latitude = $latitude;
		$this ->longitude = $longitude;	
		//$this ->city = $city;
	}
}
?>