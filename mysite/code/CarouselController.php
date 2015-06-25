<?php

class CarouselController extends Controller {
	
	public function index() {
		$items = new ArrayList();
		for ( $i = 1; $i <= 3; $i++ ) {
			$item = new ArrayData(array());
			$item->Title = "Title $i";
			$item->Image = "assets/Uploads/image$i.png";
			$item->Caption = "This is a caption $i";
			$items->push($item);
		}
		return $items->renderWith('CarouselJSON');
	}

}
