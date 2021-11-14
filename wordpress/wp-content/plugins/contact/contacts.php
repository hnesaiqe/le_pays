<?php
/*
Plugin Name: Contacts
Description: Ceci est mon premier plugin
Author: HNE Saiqe
Version: 1.0
Author URI: http://mon-siteweb.com/
*/
// First step: Create the database

function contact_database() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'contacts';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		first_name varchar(55) NOT NULL,
		last_name varchar(55) NOT NULL,
		phone VARCHAR(20) NOT NULL,
		comment text NOT NULL,
		event VARCHAR(100) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
	add_option('contact_db_version', '1.0');
}

register_activation_hook(__FILE__, 'contact_database');

// Second step: Create default data

function contact_default_data() {
	global $wpdb;
	
	$table_name = $wpdb->prefix . 'contacts';
	
	$wpdb->insert( 
		$table_name,
		array( 
			'first_name' => 'Saiqe',
			'last_name' => 'Hne',
			'phone' => '988776',
			'comment' => 'lol',
			// 'event' => '',

		) 
	);
}

register_activation_hook(__FILE__, 'contact_default_data');

// Third step: Add plugin to admin

function add_plugin_to_admin() {
	function contact_content() {
		echo "<h1>Contacts</h1>";
		echo "<div style='margin-right:20px'>";

		if(class_exists('WP_List_Table')) {
			require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
			require_once(plugin_dir_path( __FILE__ ) . 'contact-list-table.php');
			$contactListTable = new ContactListTable();
			$contactListTable -> prepare_items();
			$contactListTable -> display();
		} else {
			echo "WP_List_Table n'est pas disponible.";
		}
		
		echo "</div>";
	}

	add_menu_page('Contacts', 'Contacts', 'manage_options', 'contact-plugin', 'contact_content');
}

add_action('admin_menu', 'add_plugin_to_admin');

// Fourth step: Create the form

function contact_form() {
	ob_start();

	if (isset($_POST['contact'])) {
		$first_name = sanitize_text_field($_POST["first_name"]);
		$last_name = sanitize_text_field($_POST["last_name"]);
		$phone = sanitize_text_field($_POST["phone"]);
		$comment = esc_textarea($_POST["comment"]);
		$event = sanitize_text_field($_POST["event-id"]);

		if ($first_name != '' && $last_name != '' && $phone  != '' && $comment  != '') {
			global $wpdb;

			$table_name = $wpdb->prefix . 'contacts';
	
			$wpdb->insert( 
				$table_name,
				array( 
					'first_name' => $first_name,
					'last_name' => $last_name,
					'phone' => $phone,
					'comment' => $comment,
					'event' => $event,
				) 
			);

			echo "<h4>Merci! Vous êtes inscrit à cette évènement.</h4>";
		}
	}

	echo "<form method='POST'>";
	// echo "<h5 type='hidden'  name='event' >titre de evnenement</h5>";
	echo "<input type='text' name='first_name' placeholder='Prénom' style='width:100%' required>";
	echo "<input type='text' name='last_name' placeholder='Nom de famille' style='width:100%' required>";
	echo "<input type='tel' name='phone' placeholder='Numéro de téléphone' style='width:100%' required>";
	echo "<textarea name='comment' placeholder='Ajouter un commentaire' style='width:100%' required></textarea>";
	echo "<input type='hidden' name='event-id' value='" .get_the_title(). "' style='width:100%' required>";
	echo "<input type='submit' name='contact' value='Envoyez'>";
	echo "</form>";
	var_dump(get_the_title());
	return ob_get_clean();
}

add_shortcode('contact', 'contact_form');