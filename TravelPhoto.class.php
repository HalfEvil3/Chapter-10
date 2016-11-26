<?php
include 'Location.Class.php';

class TravelPhoto {
	public static $photoID = 0;
	private $date;
	private $fileName;
	private $description;
	private $title;
	private $latitude;
	private $longitude;
	private $ID;
	
	function __construct($fileName, $title, $description, $latitude, $longitude, $ID) {
		$this -> fileName = $fileName;
		$this -> title = $title;
		$this -> description = $description;
		$Location = new Location($latitude, $longitude);
		//$this -> latitude = $latitude;
		//$this -> longitude = $longitude;	
		$this -> ID = $ID;
		self::$photoID++;
	}

	
	public function __toString(){
		 return "<div class= 'col-md-3'><a href = 'travel-image.php?id=" . $this -> ID . "'><img src = '" . $this -> fileName . "' alt = '" . $this -> title ."'></a></div>";
		
	}
	
	public function getImage() {
		
	}
	

}


?>