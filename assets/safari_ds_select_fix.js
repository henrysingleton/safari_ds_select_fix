jQuery(document).ready(function() {
	if (jQuery.browser.safari) {
		jQuery('#blueprints-datasources select[multiple].filtered').removeAttr('size');
	}
});