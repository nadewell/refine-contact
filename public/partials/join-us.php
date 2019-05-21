<form class="contact-field-main" action="" method="post" id="apply-job" enctype="multipart/form-data">
    <input type="hidden" name="ajax-url" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
    <input type="hidden" name="job-type" id="job-type" value="WordPress<?php //get_the_title( get_the_ID() ); ?>">
    <div id="q0" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>What's your name ?</h2>
            <input type="text" name="name" id="name" placeholder="First name Last name">
        </div>
        <div class="contact-next-btn">
            <button class="next">Next Step</button>
        </div>
    </div>
    <div id="q1" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>Enter your Email</h2>
            <input type="email" name="email" id="email" placeholder="Email Address">
        </div>
        <div class="contact-next-btn">
            <button class="next">Next Step</button>
        </div>
    </div>
    <div id="q2" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>Enter Mobile Number</h2>
            <input type="text" name="phone" id="phone" placeholder="Mobile Number">
        </div>
        <div class="contact-next-btn">
            <button class="next">Next Step</button>
        </div>
    </div>
    <div id="q3" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>Experiance</h2>
            <select class="form-control" name="experience" id="experience">
                <option value="null" disabled="">---Select Experiance---</option>
                <option value="Fresher">Fresher</option>
                <option value="1 Years">1 Years</option>
                <option value="2 Years">2 Years</option>
                <option value="3 Years">3 Years</option>
                <option value="4 Years">4 Years</option>
                <option value="5 Years">5 Years</option>
                <option value="More then 5 Years">More then 5 Years</option>
            </select>
        </div>
        <div class="contact-next-btn">
            <button class="next">Next Step</button>
        </div>
    </div>
    <div id="q4" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>Upload CV</h2>
            <div class="file-upload-main">
                <label class="file-upload">
                    <input type="file" id="file" name="file">
                    <span class="file-upload_button">Choose Files</span>
                </label>
                <output class="file-upload_result">No Media Chosen</output>
            </div>
            <small> File only with doc,docx and pdf *</small>
        </div>
        <div class="contact-next-btn">
            <button class="next">Next Step</button>
        </div>
    </div>
    <div id="q5" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h3>Digital Marketing</h3>
            <h2>Description</h2>
            <textarea name="description" id="description" placeholder="Description" rows="2"></textarea>
        </div>
        <div class="contact-next-btn">
            <button type="submit" name="submit" id="apply" class="next">Apply Now</button>
        </div>
    </div>
    <div id="q6" style="display:block" class="contact-field">
        <div class="contact-field-sub">
            <h2>We will get in touch with you soon...</h2>
        </div>
        <div class="contact-next-btn gotit-btn">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true">Got it!</span>
            </button>
        </div>
    </div>
</form>