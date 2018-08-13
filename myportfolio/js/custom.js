    jQuery(document).ready(function($) {
		
		// PRELOADER
        $("body").toggleClass("loaded");
        setTimeout(function() {
            $("body").addClass("loaded");
        }, 3000);
		
		// PORTFOLIO DIRECTION AWARE HOVER EFFECT
		var item = $("#bl-work-items>div");
		var elementsLength = item.length;
		for (var i = 0; i < elementsLength; i++) {
			$(item[i]).hoverdir();
		}
		
		// TEXT ROTATOR
		$("#selector").animatedHeadline({
             animationType: "clip"
        });
		
		// BOX LAYOUT
        Boxlayout.init();
		
		// REMOVE # FROM URL
		$("a[href='#']").on("click", (function(e) {
			e.preventDefault();
		}));

        // AJAX CONTACT FORM
        $(".contactform").on("submit", function() {
            $(".output_message").text("Loading...");

            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                method: form.attr("method"),
                data: form.serialize(),
                success: function(result) {
                    if (result == "success") {
                        $(".contactform").find(".output_message").addClass("success");
                        $(".output_message").text("Message Sent!");
                    } else {
                        $(".contactform").find(".output_message").addClass("error");
                        $(".output_message").text("Error Sending!");
                    }
                }
            });

            return false;
        });

		// MATERIAL CAROUSEL
        $(".carousel.carousel-slider").carousel({
            fullWidth: true,
            indicators: true,
        });
		
		// RESUME CARDS ANIMATION
		if ($(window).width() > 800) {
			$(".resume-list-item, .resume-card").on("click", function() {
				$(".resume-list-item").removeClass("is-active");
				var e = parseInt($(this).data("index"),10);
				$("#resume-list-item-" + e).addClass("is-active");
				var t = e + 1,
					n = e - 1,
					i = e - 2;
				$(".resume-card").removeClass("front back up-front up-up-front back-back"), $(".resume-card-" + e).addClass("front"), $(".resume-card-" + t).addClass("back"), $(".resume-card-" + n).addClass("back-back"), $(".resume-card-" + i).addClass("back")
			});
		}

		$('body.page').addClass('blog');
		$('body.post-template-default').addClass('blog');
		$('body.archive').addClass('blog');
		$('body.search').addClass('blog');
		$('body.error404').addClass('blog');
		$('body .as_portfolio_widget_meta_data_54587 ul').addClass('arrow nav nav-tabs second-font uppercase');

		$('body .as_portfolio_widget_meta_data_54587 ul.as_portfolio_recentpost_2154').closest('.as_portfolio_widget_meta_data_54587').addClass('recent-posts').removeClass('arrow nav nav-tabs second-font uppercase');
		var searchform = $('body .as_portfolio_widget_meta_data_54587 form.searchform').closest('.as_portfolio_widget_meta_data_54587')
		searchform.addClass('widget-search');
		searchform.find('label').remove();
		searchform.find('input[type="submit"]').addClass('btn readmore');
		searchform.find('input[type="text"]').attr('placeholder', 'Search in my blog ...');

		var post_paginate = $('#as_portfolio_post_paginate');		

		var post_current  = post_paginate.find('.current');
		post_current.closest('li').addClass('active').removeClass('waves-effect').html('<a href="javascript:void(0)">'+post_current.html()+'</a>');

		var tagcloud   				= $('body .as_portfolio_widget_meta_data_54587 .tagcloud');
		var as_new_tagcloud_html    = '';
			tagcloud.each(function(){
				$(this).find('a').each(function(){
					as_new_tagcloud_html += '<li><a href="'+$(this).attr('href')+'">'+$(this).html()+'</a></li>';
				});
				as_new_tagcloud_html = '<ul class="unstyled clearfix">'+as_new_tagcloud_html+'</ul>';
				$(this).after(as_new_tagcloud_html).closest('.as_portfolio_widget_meta_data_54587').addClass('widget-tags');
				tagcloud.closest('.as_portfolio_widget_meta_data_54587').addClass('widget-tags');
				$(this).remove();
				as_new_tagcloud_html = '';
			});


		var comments_form = $('div.comments-form');
		comments_form.find('#respond').removeAttr('id');

		var form_submit = comments_form.find('.form-submit');
		form_submit.find('input[name="submit"]').remove();

		
		comments_form.find('form').append(`<div class="col s12 m12 l6 xl6 submit-form">
                                        <button class="btn font-weight-500" id="submit" type="submit" name="submit">
                                        Add comment <i class="fa fa-comment"></i>
										</button>
                                    </div>`);

    });