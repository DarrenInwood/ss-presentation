<?php

class CarouselAdmin extends ModelAdmin {
	
	private static $menu_title = 'Carousel';

	private static $url_segment = 'carousel';

	private static $managed_models = array(
		'CarouselItem',
	);

}