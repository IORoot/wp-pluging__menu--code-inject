<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Menus - Inject HTML
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🗂MENU</strong> | <em>Appearance > Menus</em> | Adds Code to menus. 
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 */

 //  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                    ACF                                  │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_panel.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                Run Menus                                │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/filter/menus.php';
new code_inject;