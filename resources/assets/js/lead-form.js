jQuery(function () {

    jQuery('input[type=tel]').mask('+7 (999) 999-99-99');

    var leadForm = jQuery('#lead-form');
    var leadFormPhoneInput = jQuery('input[name=phone]');
    var leadFormPhoneBlock = jQuery('#lead-form-phone-block');
    var leadFormPhoneHelp = jQuery('#lead-form-phone-help');
    var leadFormNameInput = jQuery('input[name=name]');
    var leadFormNameBlock = jQuery('#lead-form-name-block');
    var leadFormNameHelp = jQuery('#lead-form-name-help');

    var leadFormModal = jQuery('#lead-form-modal');
    var leadFormModalOverlay = jQuery('#modal-overlay');
    var leadFormModalClose = jQuery('#modal-close');

    leadFormPhoneHelp.hide();
    leadFormNameHelp.hide();

    leadForm.submit(function (event) {
        var formData = jQuery(this).serialize();

        jQuery.ajax({
            type: 'POST',
            url: jQuery(this).attr('action'),
            data: formData,
            dataType: 'json',
            encode: true
        })
            .done(function (data) {
                leadFormPhoneInput.val('');
                leadFormNameInput.val('');
                leadFormModal.find('span').not('#modal-close').text(data.name);
                showLeadFormModal();
                yaCounter34003970.reachGoal('lead_form_success');
            })
            .fail(function (data) {
                var errors = data.responseJSON;

                if (errors.phone) {
                    leadFormPhoneBlock.addClass('has-error');
                    leadFormPhoneHelp.text(errors.phone);
                    leadFormPhoneHelp.show(true);
                }

                if (errors.name) {
                    leadFormNameBlock.addClass('has-error');
                    leadFormNameHelp.text(errors.name);
                    leadFormNameHelp.show(true);
                }
            });

        event.preventDefault();
    });

    leadFormPhoneBlock.focusin(function () {
        leadFormPhoneBlock.removeClass('has-error');
        leadFormPhoneHelp.hide(true);
        leadFormPhoneHelp.text('');
    });

    leadFormNameBlock.focusin(function () {
        leadFormNameBlock.removeClass('has-error');
        leadFormNameHelp.hide(true);
        leadFormNameHelp.text('');
    });

    function showLeadFormModal() {
        leadFormModalOverlay.fadeIn(400, function () {
            leadFormModal.css('display', 'block').animate({opacity: 1}, 200);
        });
    }

    function hideLeadFormModal() {
        leadFormModal.animate({opacity: 0, top: '45%'}, 200, function () {
                jQuery(this).css('display', 'none');
                leadFormModalOverlay.fadeOut(400);
            }
        );
    }

    leadFormModalClose.click(hideLeadFormModal);
    leadFormModalOverlay.click(hideLeadFormModal);
});