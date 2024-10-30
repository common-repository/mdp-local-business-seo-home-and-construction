<?php
/*
Plugin Name: Local Business SEO Home and Construction
Description: This plugin has been supper ceded by Local Business Seo. All options that were available with this plugin are now available in Local Business Seo.
Version: 0.1.1
Plugin URI: http://microdataproject.org
Plugin URI: contact@microdataproject.org
Author: Christopher Dubeau
Author URI: mailto:me@christopherdubeau.com
Author URI: http://christopherdubeau.com


Copyright 2013  Microdata Project / Christopher Dubeau  (email : me@christopherdubeau.com, email: contact@microdataproject.org)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

$mdp_sub_category = 'HomeAndConstructionBusiness';

// DEFINE PLUGIN ID
define('MDP_LOCAL_BUSINESS_SEO_HAC_ID', 'mdp_local_business_seo_home_and_construction');
// DEFINE PLUGIN NICK
define('MDP_LOCAL_BUSINESS_SEO_HAC_NICK', 'Local SEO HaC');


if (!class_exists('localBusinessHac')){
    
    class localBusinessHac{
        
        
        public $mdp_name;
        
        public function __construct(){
            
            $this->name      = 'mdpLocalBusinessInfo';
            
            register_activation_hook(__FILE__, array($this, 'activate'));
            register_deactivation_hook(__FILE__, array($this, 'deactivate'));
            register_uninstall_hook(__FILE__, array($this, 'uninstall'));
            
        }
        
        /** function/activate
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function activate(){
            
        }
        
        /** function/deactivate
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function deactivate(){
            
        }
        
        /** function/uninstall
        * Usage: create tables if not exist and activates the plugin
        * Arg(0): null
        * Return: void
        */
        
        public function uninstall(){
            
            delete_option('mdp_home_and_construction_status');
            delete_option('mdp_home_and_construction_type');
            delete_option('mdp_home_and_construction_name');
            delete_option('mdp_home_and_construction_description');
            delete_option('mdp_home_and_construction_url');
            delete_option('mdp_home_and_construction_image');
            delete_option('mdp_home_and_construction_sameas');
            delete_option('mdp_home_and_construction_payment_accepted');
            delete_option('mdp_home_and_construction_street_address');
            delete_option('mdp_home_and_construction_address_locality');
            delete_option('mdp_home_and_construction_address_region');
            delete_option('mdp_home_and_construction_postal_code');
            delete_option('mdp_home_and_construction_address_country');
            delete_option('mdp_home_and_construction_email');
            delete_option('mdp_home_and_construction_telephone');
            delete_option('mdp_home_and_construction_fax_number');
            delete_option('mdp_home_and_construction_best_rating');
            delete_option('mdp_home_and_construction_rating_value');
            delete_option('mdp_home_and_construction_open');
            delete_option('mdp_home_and_construction_close');
            delete_option('mdp_home_and_construction_dow');
            
        }
        
        /** function/file_path
        * Usage: includes the plugin file path
        * Arg(0): null
        * Return: void
        */
        
        public static function file_path($file){
            
            return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
        
        }
        
        
        /** function/register_settings
        * Usage: registers the plugins options
        * Arg(0): null
        * Return: void
        */
        public static function register(){
            
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_status');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_type');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_name');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_description');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_url');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_image');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_sameas');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_payment_accepted');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_street_address');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_address_locality');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_address_region');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_postal_code');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_address_country');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_email');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_telephone');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_fax_number');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_best_rating');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_worst_rating');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_rating_count');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_rating_value');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_open');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_close');
            register_setting(MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', 'mdp_home_and_construction_dow');
            
        }
        
        /** function/method
        * Usage: hooking (registering) the plugin menu
        * Arg(0): null
        * Return: void
        */
        public static function menu(){
            
            $icon_url = str_replace(basename( __FILE__ ), "", plugin_basename(__FILE__) );
            add_menu_page(MDP_LOCAL_BUSINESS_SEO_HAC_NICK.' Plugin Options', MDP_LOCAL_BUSINESS_SEO_HAC_NICK, 'read', MDP_LOCAL_BUSINESS_SEO_HAC_ID.'_options', array('localBusinessHac', 'options_page'), plugins_url( $icon_url.'mdp_icon32.png' ) );
            
        }
        
        /** function/options_page
        * Usage: show options/settings for plugin
        * Arg(0): null
        * Return: void
        */
        public static function options_page(){
            
            $plugin_id = MDP_LOCAL_BUSINESS_SEO_HAC_ID;
            // display options page
            include(self::file_path('options.php'));
            
        }
    }
}

add_action('admin_init', array('localBusinessHac', 'register'));
add_action('admin_menu', array('localBusinessHac', 'menu'));
add_action('user_admin_menu', array('localBusinessHac', 'menu'));

if(get_option('mdp_home_and_construction_status') == 1){
    include('mdp_info.php');
    add_filter('wp_footer', 'localBusinessHac');
}
$localBusinessHac = new localBusinessHac();

?>