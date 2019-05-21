<?php

global $wpdb;
$project_table = $wpdb->prefix . "project";

$projects = $wpdb->get_results( "SELECT * FROM $project_table", OBJECT );

// print_r($projects);

?>

<div class="wrap">
<h1 class="wp-heading-inline">Project Inquiries</h1>
<hr class="wp-header-end">
<h2 class="screen-reader-text">Project Inquiry List</h2>
    <table class="wp-list-table widefat fixed striped posts">
	<thead>
        <tr>
            <td>Full Name</td>
            <td>Email Address</td>
            <td>Experience</td>
            <td>CV</td>
            <td>Mobile Number</td>
            <td>Company Name</td>
            <td>Message</td>
        </tr>
	</thead>

	<tbody>
    <?php foreach($projects as $row): ?>
        <tr>
            <td><?php echo $row->project_type; ?></td>
            <td><?php echo $row->project_scope; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->phone; ?></td>
            <td><?php echo $row->company; ?></td>
            <td><?php echo $row->message; ?></td>
        </tr>
    <?php endforeach; ?>		
    </tbody>
</table>
<br class="clear">
</div>