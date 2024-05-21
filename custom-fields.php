<?php
/*
Plugin Name: Advanced Custom Fields Integration
Description: Integration with Advanced Custom Fields plugin for custom field management.
Version: 1.0
*/

// Check if ACF plugin is active
if( ! class_exists('acf') ) {
    // ACF not active, display notice or deactivate the plugin
}

// Include ACF field definitions
include_once('acf-fields.php');
