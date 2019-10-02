(function($) {
	if (
		/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
			navigator.userAgent
		)
	) {
		$("html").addClass("is--device");
		if (/iPad/i.test(navigator.userAgent)) {
			$("html").addClass("is--ipad");
		}
	} else {
		$("html").addClass("not--device");
	}

	$(function() {
		//doc.ready[shorthand] start

		var $desktop = 1080;
		var $tablet = 768;
		var theme_path = rm_data.tmplDirUri;
		var site_path = rm_data.siteUrl;


		/*================================
		=            Wow INIT            =
		================================*/

		// new WOW({
		// 	// mobile: false,
		// }).init();

		/*=============================
		=            Blazy            =
		=============================*/
		
		var bLazy = new Blazy();
		

		/*===================================
		=            Sticky             =
		===================================*/

		/* Change Up Footer on Scroll Down */
		$(window).scroll(function () {
			if ($(window).scrollTop() > 150 && $('html').hasClass('not--device') 
				&& 
				$(window).width() > 1080
				) 
			{
				$('.sticky-footer-bar').addClass('change-up-sticky-footer-bar');
			} else {
				$('.sticky-footer-bar').removeClass('change-up-sticky-footer-bar');
			}
	    });


		// Homepage Featured Procedures, slide open on mobile 
		if ($(window).width() < 768) {
			$('.the-whatwedobest span').click(function(event) {
				/* Act on the event */
				event.preventDefault;
				$(this).parent().find('ul').slideToggle();
			});
		}



		/* --------------------------------------------------
			Owl Carousel HomePage
		-------------------------------------------------- */
		
			$('.owl-rotator').owlCarousel({
				items:2,
				margin:20,
				lazyLoad:true,
				loop:true,
				nav:true,
				dots:false,
				autoplay: true,
				autoplayTimeout: 9000,
				smartSpeed: 1000,
				navText : ["<span class=\"button\"><i class='fa fa-angle-left'></i></span>"
							,"<span class=\"button\"><i class='fa fa-angle-right'></i></span>"],
				responsive:{
				        0:{
				            items:1
				        },
				        768:{
				            items:2
				        }
				    }
			});


			$('.bna-rotator').owlCarousel({
				items:2,
				margin:20,
				// lazyLoad:true,
				loop:true,
				nav:true,
				dots:false,
				autoplay: true,
				autoplayTimeout: 9000,
				smartSpeed: 1000,
				navText : ["<span class=\"button\"><i class='fa fa-angle-left'></i></span>"
							,"<span class=\"button\"><i class='fa fa-angle-right'></i></span>"],
				responsive:{
				        0:{
				            items:1
				        },
				        768:{
				            items:2
				        }
				    }
			});
	
		
		/*================================
		=            Parallax            =
		================================*/

		$(window).on("load resize", function(e) {
			if ($("html").hasClass("is--device")) {
				if ($(".is-parallaxing").length > 0) {
					$(".will-parallax")
						.removeClass("is-parallaxing")
						.removeAttr("style");
				}
			} else {
				$(".will-parallax").addClass("parallax");
				$(".will-parallax").addClass("is-parallaxing");

				
				if ($(".parallax").hasClass("parallax")) {
					$(".will-parallax").waypoint(function() {
						$(".parallax-welcome").parallax("center", -0.3, true); 
						$(".footer-parallax").parallax("center", -0.2, true);
						// $(".home-reviews-parallax").parallax("center", -0.2, true);
						// $('.parallax-home-breast').parallax('center', -0.3, true , 'is-parallaxing');
						// $(".parallax-internal-header").parallax("center", -0.1, true);
					});
				}
			}
		});

		// Change News Room 

		// var newsroom = document.querySelector('body.news-room h1 ');
		// console.log(newsroom);
		// if(newsroom) {
		// 	newsroom.innerText = 'News Room'; 
		// }

		/*=============================================
		=            Gallery Nudity Pop Up            =
		=============================================*/

		// if ($("body.rmgallery-child").length) {
		// 	if ($.cookie("gallerypop") == null) {
		// 		console.log(theme_path);
		// 		$.fancybox.open({
		// 			src: theme_path + "/popup.php",
		// 			type: "ajax",
		// 			opts: {
		// 				scrolling: "no",
		// 				transitionEffect: "fade",
		// 				modal: true,
		// 				helpers: {
		// 					overlay: {
		// 						css: {
		// 							background: "rgba(0, 0, 0, 0.96)"
		// 						}
		// 					}
		// 				},
		// 				live: true,
		// 				afterClose: function() {
		// 					$.cookie("gallerypop", "rmg", {
		// 						expires: 1,
		// 						path: "/"
		// 					});
		// 				}
		// 			}
		// 		});
		// 	} //end cookies check
		// }
		


		/*============================================================
		=            Fancybox for WordPress Core Gallery             =
		============================================================*/

		// Activate Fancy Box for WP Core Gallery

		$(".gallery-icon a, .blocks-gallery-item a").attr("data-fancybox", "gallery");

		// Append the Caption

		$("dl.gallery-item").each(function(event) {
			var caption = $(this).find("dd").text();
			$(this).find("dt a").attr("data-caption", caption);
		});





	}); // end of doc.ready
})(jQuery);
	


/*Wrap A div around Custom Links*/

(function () {
	var customLinks = document.querySelector("ul.custom-links");
	if(customLinks) {
		 var customWrap = document.createElement('div');
		 customWrap.classList.add('box-with-border');
		 var customLinksParent = customLinks.parentNode;
		 customLinksParent.insertBefore(customWrap, customLinks);
		 customWrap.appendChild(customLinks);
	} 
} )();



/*Side By Site Lists on Desktop non Surgical Pages*/

(function () {
	var customListOne = document.querySelector("article .flexible-jump-links:nth-of-type(1)");
	var customListTwo = document.querySelector("article .flexible-jump-links:nth-of-type(2) .box-with-border");
	
	console.log(customListTwo);
	if(customListTwo) {
		customListOne.appendChild(customListTwo)
	} 
} )();




/*=============================================
=            Track Outbound Clicks            =
=============================================*/

function trackOutboundLink(event) {
	// prevent the default behavior
	event.preventDefault();

	// get necessary info
	var url = this.href;
	var label =
		this.dataset.label !== "undefined" ? this.dataset.label : url; // Fallback to URL just in case no label was set. Safety first kids
	var target =
		this.target !== "" && this.target == "_blank" ? "new" : "self";

	// Just making sure this exists
	if (typeof gtag !== "undefined") {
		gtag("event", "click", {
			event_category: "outbound",
			event_label: label,
			transport_type: "beacon",
			event_callback: function() {
				if (target == "new") {
					window.open(url);
				} else {
					document.location = url;
				}
			}
		});
	} else {
		// trigger default behavior as fallback in case the gtag was omitted
		if (target == "new") {
			window.open(url);
		} else {
			document.location = url;
		}
	}
} // end tarckOutboundLink()

// Grab all our links
var linksToTrack = document.querySelectorAll(".track-outbound");

// Add click event to all of our tracked links
for (var i = 0; i < linksToTrack.length; i++) {
	linksToTrack[i].addEventListener("click", trackOutboundLink, false);
}


