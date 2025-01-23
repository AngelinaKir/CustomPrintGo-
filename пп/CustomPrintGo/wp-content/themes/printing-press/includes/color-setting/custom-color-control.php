<?php

  $printing_press_theme_custom_setting_css = '';

	// Global Color
	$printing_press_theme_color = get_theme_mod('printing_press_theme_color', '#1b1a20');

	$printing_press_theme_custom_setting_css .=':root {';
		$printing_press_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($printing_press_theme_color ).'!important;';
	$printing_press_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$printing_press_scroll_alignment = get_theme_mod('printing_press_scroll_alignment', 'right');

    if($printing_press_scroll_alignment == 'right'){
        $printing_press_theme_custom_setting_css .='.scroll-up{';
            $printing_press_theme_custom_setting_css .='right: 30px;!important;';
			$printing_press_theme_custom_setting_css .='left: auto;!important;';
        $printing_press_theme_custom_setting_css .='}';
    }else if($printing_press_scroll_alignment == 'center'){
        $printing_press_theme_custom_setting_css .='.scroll-up{';
            $printing_press_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $printing_press_theme_custom_setting_css .='}';
    }else if($printing_press_scroll_alignment == 'left'){
        $printing_press_theme_custom_setting_css .='.scroll-up{';
            $printing_press_theme_custom_setting_css .='left: 30px;!important;';
			$printing_press_theme_custom_setting_css .='right: auto;!important;';
        $printing_press_theme_custom_setting_css .='}';
    }	