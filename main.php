<?php
/*
 * Plugin Name: MyPlugin
 * Description: MyPlugin Description
 * Version: 1.0.0
 * Author: Eduardo Lazaro
 * 

 * Copyright 2020 Eduardo Lazaro
 *
 * This Plugin is open source and free software:
 * You can redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software
 * Foundation, either version 2.1 of the License. 
 *    
 * This Plugin is distributed in the hope that
 * it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 * PURPOSE. See the GNU General Public License for more details. 
 *
 * You should have received a copy of the GNU General Public License
 * with this software. 
 */



namespace MyPlugin;

use MyPlugin\Sci\Plugin\Plugin;

# Start the framework assuming the plugin file is  in the root folder of your plugin
include plugin_dir_path(__FILE__).'framework/run.php';

# Create a new Plugin and regsiter it into the Plugin Manager
Plugin::create(__FILE__)->register();


