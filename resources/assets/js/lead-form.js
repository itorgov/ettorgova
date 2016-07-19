jQuery(function () {

    jQuery('input[type="tel"]').mask('+7 (999) 999-99-99');
    jQuery('a[href="#lead-form"]').click(function () {
        leadFormDescriptionInput.val(jQuery(this).data('description'));
    });

    var leadForm = jQuery('#lead-form');
    var leadFormPhoneInput = jQuery('input[name="phone"]');
    var leadFormPhoneBlock = jQuery('#lead-form-phone-block');
    var leadFormPhoneHelp = jQuery('#lead-form-phone-help');
    var leadFormNameInput = jQuery('input[name="name"]');
    var leadFormNameBlock = jQuery('#lead-form-name-block');
    var leadFormNameHelp = jQuery('#lead-form-name-help');
    var leadFormDescriptionInput = jQuery('input[name="description"]');
    var leadFormDescriptionDefault = jQuery('h1').text();
    var leadFormSubmitBlock = jQuery('#lead-form-submit-block');
    var leadFormSubmitHelp = jQuery('#lead-form-submit-help');

    var leadFormModal = jQuery('#lead-form-modal');
    var leadFormModalOverlay = jQuery('#modal-overlay');
    var leadFormModalClose = jQuery('#modal-close');

    leadFormPhoneHelp.hide();
    leadFormNameHelp.hide();
    leadFormSubmitHelp.hide();

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
                yaCounter34003970.reachGoal('lead_form_soprovozhdenie_sdelok_s_nedvizhimostyu');

                leadFormPhoneInput.val('');
                leadFormNameInput.val('');
                leadFormDescriptionInput.val(leadFormDescriptionDefault);

                leadFormModal.find('span').not('#modal-close').text(data.name);
                showLeadFormModal();
            })
            .fail(function (data) {
                var errors = data.responseJSON;

                if (errors !== undefined) {
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
                } else {
                    leadFormSubmitBlock.addClass('has-error');
                    leadFormSubmitHelp.html('При отправке заявки произошла неизвестная ошибка. Попробуйте заказать услугу позже или позвоните нам по телефону <a href="tel:+79990790781">+7 (999) 079-078-1</a>.');
                    leadFormSubmitHelp.show(true);
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

    leadForm.click(function () {
        leadFormSubmitBlock.removeClass('has-error');
        leadFormSubmitHelp.hide(true);
        leadFormSubmitHelp.html('');
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