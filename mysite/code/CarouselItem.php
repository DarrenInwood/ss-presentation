<?php

class CarouselItem extends DataObject {
	
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Image' => 'Varchar(255)',
		'Caption' => 'Varchar(255)',
	);

}
