(function ($) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	$(document).ready(function () {
		$('select[name="job_status"]').on('change', function () {
			var application_id = jQuery(this).data('id');
			var application_status = jQuery(this).val();
			$.ajax({
				url: ajax_object.ajax_url,
				type: 'POST',
				data: { 'action': 'job_status', 'id': application_id, 'status': application_status },
				success: function (data) {
					console.log(data);
					jQuery('.alert-msg > p').text(data);
					jQuery('.alert-msg').addClass('active');
				},
				error: function (data) {
					console.log(data);
				}
			})
		});

		$('.close-alert').on('click', function () {
			$(this).parent().removeClass('active');
		});
	});
})(jQuery);
