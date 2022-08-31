var $ = jQuery.noConflict();

(function ($) {
    "use strict";

    /*-------------------------------------------------*/
    /* =  Contact Form
    /*-------------------------------------------------*/
    try {
        var submitContact = $("#Contact-form"),
            message = $('[class*="alert-wrap"]');

        submitContact.on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            submitContact
                .find("input, textarea, select")
                .attr("data-error", "false");

            $.ajax({
                type: "POST",
                url: "Contact.php",
                dataType: "json",
                cache: false,
                data: $("#Contact-form").serialize(),
                success: function (data) {
                    console.log(data);
                    if (data.info !== "error") {
                        submitContact.find("[class*='field']").hide();
                        message.find("p").text(data.msg);
                        message
                            .attr("data-active", "true")
                            .addClass("success")
                            .delay(5000)
                            .fadeOut("slow")
                            .removeClass("success");
                    } else {
                        submitContact.find(data.id).attr("data-error", "true");
                        message.find("p").text(data.msg);
                        message.attr("data-active", "true");
                    }
                },
            });
        });
    } catch (err) {}
})(jQuery);
