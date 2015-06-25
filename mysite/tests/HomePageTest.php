<?php

class HomePageTest extends SapphireTest {
	
	protected static $fixture_file = 'mysite/tests/HomePageTest.yml';

	// Make sure that URL home/carousel returns JSON containing
	// three items.
	// {
	//    "items" : [
	//       {
	//         "title" : "asdf",
	//         "image" : "assets/Uploads/asdf.png",
	//         "caption" : "adsf asdf asdf"
	//       },
	//       ...
	//    ]
	// }
	public function testHomepageCarousel() {
		$html = Director::test('home/carousel');

		$data = json_decode($html->getBody(), true);

		$this->assertNotNull($data, 'Carousel URL home/carousel does not return valid JSON');
		$this->assertArrayHasKey('items', $data, 'Carousel JSON does not contain items');
		$this->assertCount(3, $data['items'], 'Carousel JSON does not contain three items');
	}

}