<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Cirkle_Contact_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Database global variables
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		$project_table = $wpdb->prefix . "project";
		$job_table = $wpdb->prefix . "job";
		// start project table
		$project_sql = "CREATE TABLE $project_table (
			`id` INT AUTO_INCREMENT,
			`project_type` TEXT NOT NULL,
			`project_scope` TEXT NOT NUll,
			`name` TEXT NOT NUll,
			`email` TEXT NOT NUll,
			`phone` TEXT NOT NUll,
			`company` TEXT NOT NULL,
			`message` TEXT NOT NULL,
			`timestamp` TEXT NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate";
		// execute query
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $project_sql );
		// start job table
		$job_sql = "CREATE TABLE $job_table (
			`id` INT AUTO_INCREMENT,
			`name` TEXT NOT NULL,
			`email` TEXT NOT NUll,
			`phone` TEXT NOT NUll,
			`experience` TEXT NOT NUll,
			`cv` TEXT NOT NUll,
			`job_type` TEXT NOT NULL,
			`timestamp` TEXT NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate";
		// execute query
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $job_sql );
	}

}
