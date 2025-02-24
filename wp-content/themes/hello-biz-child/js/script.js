(function ($) {
	'use strict';

	jQuery(document).ready(function () {
        // HubSpot - hide "free form with hubspot"
        setTimeout(function() {
            $("#hs-form-iframe-0").contents().find(".hs-form__virality-link").css("display", "none");
        }, 300);
    });

})(jQuery);