<?php

class CarouselController extends Controller {
	
	public function index() {
		return <<<JSON
{
	"items" : [
        {
            "title" : "Test 1",
            "image" : "assets/Uploads/image1.png",
            "caption" : "adsf asdf asdf 1"
        },
        {
            "title" : "Test 2",
            "image" : "assets/Uploads/image2.png",
            "caption" : "adsf asdf asdf 2"
        },
        {
            "title" : "Test 3",
            "image" : "assets/Uploads/image3.png",
            "caption" : "adsf asdf asdf 3"
        }
    ]
}
JSON;
	}

}
