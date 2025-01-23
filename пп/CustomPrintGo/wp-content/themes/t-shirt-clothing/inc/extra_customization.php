<?php 

// sticky header
	$clothing_store_custom_style= "";

	if (false === get_option('clothing_store_sticky_header')) {
	    add_option('clothing_store_sticky_header', 'off');
	}

	// Define the custom CSS based on the 'clothing_store_sticky_header' option

	if (get_option('clothing_store_sticky_header', 'off') !== 'on') {
	    $clothing_store_custom_style .= '.menu_header_box.fixed {';
	    $clothing_store_custom_style .= 'position: static;';
	    $clothing_store_custom_style .= '}';
	}

	if (get_option('clothing_store_sticky_header', 'off') !== 'off') {
	    $clothing_store_custom_style .= '.menu_header_box.fixed {';
	    $clothing_store_custom_style .= 'position: fixed; background: #e6e1d8; box-shadow: none';
	    $clothing_store_custom_style .= '}';

	    $clothing_store_custom_style .= '.admin-bar .fixed {';
	    $clothing_store_custom_style .= ' margin-top: 32px;';
	    $clothing_store_custom_style .= '}';
	}

//theme width

$clothing_store_theme_width = get_theme_mod( 'clothing_store_width_options','full_width');

if($clothing_store_theme_width == 'full_width'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='max-width: 100%;';

$clothing_store_custom_style .='}';

}else if($clothing_store_theme_width == 'container'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='.carousel-control-prev, .carousel-control-next{';

	$clothing_store_custom_style .='top:0';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='.discount-box {';

	$clothing_store_custom_style .='right: 9px';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:600px){';

$clothing_store_custom_style .='body{';

    $clothing_store_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$clothing_store_custom_style .='} }';

}else if($clothing_store_theme_width == 'container_fluid'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:600px){';

$clothing_store_custom_style .='body{';

    $clothing_store_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$clothing_store_custom_style .='} }';
}

//Slider-content-alignment

$t_shirt_clothing_slider_content_alignment = get_theme_mod( 't_shirt_clothing_slider_content_alignment','RIGHT-ALIGN');

if($t_shirt_clothing_slider_content_alignment == 'LEFT-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:left; left: 15%; right: 50%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 30%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 15%;';
    
$clothing_store_custom_style .='} }';


}else if($t_shirt_clothing_slider_content_alignment == 'CENTER-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:center; right: 20%; left: 20%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 20%; left: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';


}else if($t_shirt_clothing_slider_content_alignment == 'RIGHT-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:right; right: 15%; left: 50%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 30%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';

}

//colors
$color = get_theme_mod('t_shirt_clothing_primary_color', '#e5523e');
$color_heading = get_theme_mod('t_shirt_clothing_heading_color', '#131313');
$color_fade = get_theme_mod('t_shirt_clothing_primary_fade', '#ffedea');
$color_footer_bg = get_theme_mod('t_shirt_clothing_footer_bg', '#131313');


$clothing_store_custom_style .= ":root {";
    $clothing_store_custom_style .= "--theme-primary-color: {$color};";
    $clothing_store_custom_style .= "--theme-heading-color: {$color_heading};";
    $clothing_store_custom_style .= "--theme-primary-fade: {$color_fade};";
    $clothing_store_custom_style .= "--theme-footer-color: {$color_footer_bg};";
$clothing_store_custom_style .= "}";

$t_shirt_clothing_slider_opacity = get_theme_mod( 't_shirt_clothing_slider_opacity','0.5');

if($t_shirt_clothing_slider_opacity == '0'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.1'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.1 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.2'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.2 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.3'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.3 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.4'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.4 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.5'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.5 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.6'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.6 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.7'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.7 !important';
$clothing_store_custom_style .='}';

}else if($t_shirt_clothing_slider_opacity == '0.8'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.8 !important';
$clothing_store_custom_style .='}';

}
else if($t_shirt_clothing_slider_opacity == '0.9'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 0.9 !important';
$clothing_store_custom_style .='}';

}
else if($t_shirt_clothing_slider_opacity == '1'){
$clothing_store_custom_style .='#slider img {';
    $clothing_store_custom_style .='opacity: 1 !important';
$clothing_store_custom_style .='}';

}