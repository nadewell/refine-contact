(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
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
	// START A PROJECT AJAX
	$(document).ready(function () {
		$('#project-form').on('submit', function (event) {
			event.preventDefault();
			var form = $(this).closest('form');

			var ajax_url = form.find('input[name="ajax-url"]').val();
			var data = {
				'action': 'project_submit',
				'project_type': form.find('#project_type').val(),
				'project_scope': form.find('#project_scope').val(),
				'name': form.find('#name').val(),
				'email': form.find('#email').val(),
				'phone': form.find('#phone').val(),
				'company': form.find('#company').val(),
				'message': form.find('#message').val(),
			};
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: data,
				success: function (data) {
					console.log('success');
					console.log(data);
				},
				error: function (data) {
					console.log('failed');
					console.log(data);
				}
			})
		});
	});
	// JOIN US OR APPLY JOB AJAX
	$(document).ready(function () {
		$('#apply-job').on('submit', function (event) {
			event.preventDefault();

			var ajax_url = $('#ajax-url').val();
			var form = $(this).closest('form');
			var form_data = new FormData();

			var file = form.find('#file');
			var file_data = file.prop('files')[0];
			form_data.append('file', file_data);
			form_data.append('action', 'job_submit');
			form_data.append('name', form.find('#name').val());
			form_data.append('email', form.find('#email').val())
			form_data.append('phone', form.find('#phone').val())
			form_data.append('experience', form.find('#experience').val())
			form_data.append('description', form.find('#description').val())
			form_data.append('job_type', form.find('#job-type').val())

			// var data = {
			// 	'action': 'job_submit',
			// 	'name': form.find('#name').val(),
			// 	'email': form.find('#email').val(),
			// 	'phone': form.find('#phone').val(),
			// 	'experience': form.find('#experience').val(),
			// 	'file': file[0].files[0].name,
			// 	'description': form.find('#description').val(),
			// 	'job_type': form.find('#job-type').val(),
			// };

			$.ajax({
				url: ajax_url,
				type: 'POST',
				contentType: false,
				processData: false,
				data: form_data,
				success: function (data) {
					console.log('success');
					console.log(data);
				},
				error: function (data) {
					console.log('failed');
					console.log(data);
				}
			})
		});
	});
})(jQuery);
