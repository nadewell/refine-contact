<form method="post" id="project-form" action="">
<input type="hidden" name="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
<input type="text" name="project_type" id="project_type" placeholder="Project Type" >
<input type="text" name="project_scope" id="project_scope" placeholder="Proejct Scope" >
<input type="text" name="name" id="name" placeholder="Name *" />
<input type="email" name="email" id="email" placeholder="Email *" />
<input type="text" name="phone" id="phone" placeholder="Phone *" />
<input type="text" name="company" id="company" placeholder="Company Name" />
<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
<input type="submit" name="project_submit" value="Submit">
</form>