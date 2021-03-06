<?php
/*
Plugin Name: Add Ribbon Shortcode
Plugin URI: http://www.sherkspear.com/portfolio-item/add-ribbon/
Description: Add ribbons on elements in contents.Adds ribbon with labels to your div containers or image using shortcodes. This is the implementation of CSS Portal ribbon generator. You can set the width , colors , backgrounds of ribbons you wanted to show.
Version: 1.0.1
Author: Sherwin Calims
Author URI: http://www.sherkspear.com

------------------------------------------------------------------------
Copyright 2015 SherkSpear

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

/*

  _________.__                  __      _________
 /   _____/|  |__   ___________|  | __ /   _____/_____   ____ _____ _______
 \_____  \ |  |  \_/ __ \_  __ \  |/ / \_____  \\____ \_/ __ \\__  \\_  __ \
 /        \|   Y  \  ___/|  | \/    <  /        \  |_> >  ___/ / __ \|  | \/
/_______  /|___|  /\___  >__|  |__|_ \/_______  /   __/ \___  >____  /__|
        \/      \/     \/           \/        \/|__|        \/     \/
*/


/**
 * AddRibbon class.
 */
class AddRibbon {

	/**
	 *
	 *  Include classes essential for the plugin
	 *
	 * @return void
	 */

	public function __construct() {
		
		//Load Extended Class for 
		require "includes/AddRibbonShortcode.php";
		
		// Load any external files you have here
		require "includes/AddRibbonMenu.php";
		
		require "includes/AddRibbonCssJsScripts.php";
	}

	/**
	 *
	 * Returns plugin directory
	 *
	 * @return <string>
	 */

	public static function get_plugin_url() {
		return plugins_url( '' , __FILE__ ).'/';
	}

	/**
	 * get_plugin_uri function.
	 *
	 * @access public
	 * @static
	 * @return void
	 */
	public static function get_plugin_uri() {
		return  dirname(__FILE__).'/';
	}
	
}



new AddRibbon();
