<?php
/**
 * Carousel Plugin
 *
 * Output a Bootstrap (v3) carousel
 * You need the CSS and JS from Bootstrap for this to works.
 * Be sure:
 *   - to use c::set('kirbytext.image.figure', false);
 *   - for vimeo compatibility: use https://github.com/jrue/Vimeo-jQuery-API
 *   - for vimeo compatibility: add plugin’s script to your template
 *
 * Revealant options:
 *   - c::set('carousel.video.vimeo.ratio', '4by3 | 16by9')
 *   - c::set('carousel.indicators', true)
 *   - c::set('carousel.indicators.type', 'default | numeric') [^1]
 *   - c::set('carousel.caption', true)
 *
 *
 * 1: Will require additionnal CSS.
 *
 * @author Julien Gargot <julien@g-u-i.me>
 * @version 1.0.0
 * @TODO:
 * - make everything works even with c::set('kirbytext.image.figure', true)
 * - make it compatible with oEmbed plugin.
 */

kirbytext::$pre[] = function($kirbytext, $text) {
  $text = preg_replace_callback('!\(carousel(…|\.{3})\)(.*?)\((…|\.{3})carousel\)!is', function($matches) use($kirbytext) {
    $html = $matches[2];
    $id = "c" . uniqid();
    $isImages = preg_match_all('/\((image|vimeo):([^\)]+)\)/i', $html, $medias);

    // Build carousel container
    $carousel = brick('div', false, array(
      'id' => $id,
      'class' => 'carousel slide',
      'data-ride' => 'carousel'
    ));
    $carouselInner = brick('div', false, array(
      'class' => 'carousel-inner',
      'role' => 'listbox'
    ));

    // Build Indicators container
    $indicators = brick('ol', false, array(
      'class' => 'carousel-indicators' . (c::get('carousel.indicators.type', 'default') === 'numeric' ? ' numeric' : ''),
    ));

    // Build each slide + indicator
    foreach ($medias[0] as $key => $_kirbyTagAttribut) {

      // Extract all attributes from image:
      // For now, we will use only image and caption attributes without
      // taking care of others.
      $_kirbyTagAttribut = preg_replace('/^\(|\)$/','',$_kirbyTagAttribut);
      $_search = preg_split('/(?!http)([\w-]+):(?!\/\/)/i', $_kirbyTagAttribut, false, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);
      $_class = 'item' . ($key==0 ? ' active' : '');

      $_num    = 0;
      $_media = array();

      foreach($_search AS $skey) {

        if(!isset($_search[$_num+1])) break;

        $skey   = trim($_search[$_num]);
        $value = trim($_search[$_num+1]);

        $_media[$skey] = $value;
        $_num = $_num+2;

      }

      switch ($_search[0]) {

        case 'image':
          // Create img tag
          $media = '(image: ' . $_media['image'] .')';
          break;

        case 'vimeo':
          $_class .=  ' embed-responsive embed-responsive-' . c::get('carousel.video.vimeo.ratio', '4by3');
          // Create vimeo tag
          $media = embed::vimeo($_media['vimeo'] , array(
            'class' => 'embed-responsive-item',
            'options' => kirby()->option('kirbytext.video.vimeo.options')
          ));
          break;

      }

      // Build the slide.
      $slide = brick('figure', false, array(
        'class' => $_class,
      ));
      // Add media to slide
      $slide->append($media);
		

      // Create figcaption tag
      if( c::get('carousel.caption', true) && isset( $_media['caption'] ) ) {
		  
        $caption = brick('div', $_media['caption'], array(
          'class' => 'carousel-caption',
        ));
		if(isset( $_media['caption2'] ) ) {
		$caption2 = brick('div', $_media['caption2'], array(
          'class' => 'carousel-caption2',
        ));
		}else{
			$caption2 = '';
		}
		if(isset( $_media['link_text'] ) ) {
		$link_text = '<a href="'.$_media['link'].'">'.$_media['link_text'].'</a>';
		$link = brick('div', $link_text, array(
          'class' => 'carousel-caption-link',
        ));
		}else{
			$link = '';
		}
		  $ble = brick('div', $caption.$caption2.$link, array(
          'class' => 'carousel-caption-contener',
        ));
		  $slide->append($ble);  
      }
		

      // Build indicator
      if ( c::get('carousel.indicators.type', 'default') !== 'numeric' ) {

        $indicatorHtml = false;

      } else {

        $indicatorHtml = ($key+1)."/".count($medias[0]);

      }

      $indicator = brick('li', $indicatorHtml, array(
        'data-target' => '#'.$id,
        'data-slide-to' => $key,
        'class' => ($key==0 ? 'active' : '')
      ));

      // append slide to the carousel.
      $carouselInner->append($slide);
      // append indicator
      $indicators->append($indicator);

    }

    // Build Controls
    $controlsPrev = brick('a', '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>', array(
      'class' => "left carousel-control",
      'href' => "#".$id,
      'role' => "button",
      'data-slide' => "prev"
    ));
    $controlsNext = brick('a', '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>', array(
      'class' => "right carousel-control",
      'href' => "#".$id,
      'role' => "button",
      'data-slide' => "next"
    ));

    if ( c::get('carousel.indicators', true) && count($medias[0]) > 1 ) {
      $carousel->append($indicators);
    }
    $carousel->append($carouselInner);
    if ( count($medias[0]) > 1 ) {
      $carousel->append($controlsPrev);
      $carousel->append($controlsNext);
    }

    return $carousel;

  }, $text);
  return $text;
};
