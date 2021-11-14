require(['jquery', 'domReady!'], function ($) {
    $(window).load(function () {
        let autocomplete = $('.gstl_50.gssb_c');
        let cse = $("#___gcse_0");
        let cse_form = $('#___gcse_0 form.gsc-search-box');
        let cse_container = $('.search-box-container');

        let cmsIndex_CSE = $('.cms-index-index #___gcse_0');

        cmsIndex_CSE.wrap( "<div class='search-box-container'></div>" );

        autocomplete.insertAfter(cse_form);

        $(window).scroll(function () {
            if ($(window).width() >= 768) {
                let top_offset = $(window).scrollTop();

                if (top_offset <= 300) {
                    cse.insertBefore('.header.content .expert-holder');
                    cse_container.css('height', 0);
                } else {
                    cse.insertAfter('.sci--global-container .sections.nav-sections');
                    cse_container.css('height', cse.innerHeight());
                }
            }
        });
    });
});