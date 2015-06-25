<?php

class CarouselController extends Controller {
	
	public function index() {
		$items = CarouselItem::get()
		->sort('Created', 'DESC')
		->limit(3);
		return $items->renderWith('CarouselJSON');
	}

}
