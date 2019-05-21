<?php

global $wpdb;
$job_table = $wpdb->prefix . "job";

$projects = $wpdb->get_results( "SELECT * FROM $job_table", OBJECT );
print_r($projects);

?>

<div class="wrap">
<h1 class="wp-heading-inline">Job Inquiries</h1>
<hr class="wp-header-end">
<h2 class="screen-reader-text">Job Inquiry List</h2>
    <table class="wp-list-table widefat fixed striped posts">
	<thead>
        <tr>
            <td>Full Name</td>
            <td>Email Address</td>
            <td>Mobile Number</td>
            <td>Experience</td>
            <td>CV</td>
            <td>Job Position</td>
        </tr>
	</thead>

	<tbody>
    <?php foreach($projects as $row): 
        $upload_dir_url = wp_upload_dir( date_i18n( 'Y/m', $row->timestamp ), false, true )['url'];
    ?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->phone; ?></td>
            <td><?php echo $row->experience; ?></td>
            <td><a href="<?php echo $upload_dir_url.'/'.$row->cv; ?>" target="_blank" download><?php echo $row->cv; ?></a></td>
            <td><?php echo $row->job_type; ?></td>
        </tr>
    <?php endforeach; ?>		
    </tbody>
</table>
<br class="clear">
</div>