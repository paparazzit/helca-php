// SLAJDOVANJE SLIKA
var count = 0;
$("#mask").click(function () {
	var float_one = $(".one .float");
	float_one.animate({ left: "-100%" }).delay(500);
	if (count == 0) {
		setTimeout(function () {
			$("#mask_img")
				.hide()
				.attr("src", "img/products-shop/gel_3l.png")
				.fadeIn();
		}, 500);
		count = 1;
	} else if (count == 1) {
		setTimeout(function () {
			$("#mask_img").hide().attr("src", "img/proizvod grupisan.png").fadeIn();
		}, 500);
		count = 2;
	} else if (count == 2) {
		setTimeout(function () {
			$("#mask_img").hide().attr("src", "img/mask.png").fadeIn(200);
		}, 500);
		count = 0;
	}
	float_one.animate({ left: "0%" });
});

$("#baby-box").click(function () {
	$(".three .float")
		.animate({ width: "0%" })

		.animate({ width: "100%" });
});

$("#text-box").click(function () {
	$(".four .float")
		.animate({ left: "100%" })
		.delay(500)
		.animate({ left: "0%" });
});

function isIE() {
	ua = navigator.userAgent;

	var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

	return is_ie;
}
var ie = document.getElementById("alert-IE");

if (isIE()) {
	ie.style.display = "block";
	ie.style.visibility = "visible";
}

$(document).ready(function () {
	var owl = $("#sync2");
	owl.on("translate.owl.carousel", function (event) {
		let currentIndex = event.item.index;

		if (currentIndex == 2) {
			$(".float-bg").css({
				background: "#00b2e2",
				transition: "0.4s all ease-in",
			});
		}
		if (currentIndex == 3) {
			$(".float-bg").css({
				background: "#A2D45E",
				transition: "0.4s all ease-in",
			});
		}
		if (currentIndex == 4 || currentIndex == 1) {
			$(".float-bg").css({
				background: "#FFB98E",
				transition: "0.4s all ease-in",
			});
		}
		if (currentIndex == 5 || currentIndex == 1) {
			$(".float-bg").css({
				background: "#F5CC50",
				transition: "0.4s all ease-in",
			});
		}
	});

	$("#sync1").owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 1,
		autoplay: false,
		autoplayHoverPause: false,
		smartSpeed: 800,
		animateIn: "fadeIn",
		animateOut: "fadeOut",
		dots: false,
		responsiveRefreshRate: 200,
	});
	$("#sync2").owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 1,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 2500,
		autoplaySpeed: 800,
		animateIn: "fadeIn",
		animateOut: "fadeOut",
		dots: true,
		responsiveRefreshRate: 200,
	});
	$("#sync3").owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 1,
		autoplay: false,
		autoplayHoverPause: false,
		smartSpeed: 800,
		animateIn: "fadeIn",
		animateOut: "fadeOut",
		dots: false,
		responsiveRefreshRate: 200,
	});

	$("#news").owlCarousel({
		items: 3,

		loop: true,
		margin: 40,
		nav: false,

		responsive: {
			0: {
				items: 1,
			},
			550: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".sidebar h2").addClass("animateH2");
	$(".cta form").addClass("animateH2");

	$(".round-logos").trigger("scroll");
});

$(".dropdownLink").click(function () {
	$(".dropdown").toggleClass("dropdown-active");
});

var width = $(window).width();

setTimeout(function () {
	$(".slide-text").addClass("text-black");
	if (width > 450) {
		$(".slide-headline").addClass("text-blue");
	}
}, 450);
if (width < 890) {
	$(".pozadina").animate({ top: "0" }, 800);
	$(".left .content").animate({ opacity: "1" }, 400);
}
if (width < 890 && width > 450) {
	$(".float-bg").animate({ top: "-100%" }, 800);
}
if (width > 890) {
	$(".float-bg").animate({ left: "-101%" }, 800);
	$(".pozadina").animate({ left: "0" }, 800);
	$(".left .content").animate({ opacity: "1" }, 400);
	$(".products-logo").animate({ bottom: "35%" }, 800);
}
if (width < 890 && width > 650) {
	$(".products-logo").animate({ bottom: "40%" }, 800);
}
if (width <= 650) {
	$(".products-logo").animate({ bottom: "0%" }, 800);
}
if (width <= 450) {
	$(".float-bg").css("height", "123%");
	$(".float-bg").animate({ top: "-123%" }, 800);

	setScroll();

	$(".round-logos").on("scroll", function () {
		var cur = $(this).scrollLeft();
		var max = $(this)[0].scrollWidth - $(this).parent().width();
		console.log(cur);
		if (cur < 50) {
			$("#logo_1").addClass("active-logo").removeClass("unactive-logo");
			$("#logo_2").addClass("unactive-logo").removeClass("active-logo");
			$("#logo_3").addClass("unactive-logo").removeClass("active-logo");
			console.log("scrolam DESNO");
		} else {
			if (cur > 50 || cur < 170) {
				$("#logo_1").addClass("unactive-logo").removeClass("active-logo");
				$("#logo_2").addClass("active-logo").removeClass("unactive-logo");
				$("#logo_3").addClass("unactive-logo").removeClass("active-logo");
				console.log("scrolam center");
			}
			if (cur > 170) {
				console.log("scrolam levo");

				$("#logo_1").addClass("unactive-logo").removeClass("active-logo");
				$("#logo_2").addClass("unactive-logo").removeClass("active-logo");
				$("#logo_3").addClass("active-logo").removeClass("unactive-logo");
			}
		}
	});
	function setScroll() {
		var logos = $(".scrolling").width() - $(".round-logos").width();
		var middle = logos / 2;
		console.log("logos: " + middle);

		$(".round-logos").scrollLeft(middle).end();
	}
}
var a = 0;

var c = 0;
$(window).on("scroll", function () {
	if ($("#health").visible() && width > 450) {
		$(".float-cube").delay(400).animate({ left: "100%" }, 800);
		a = 1;
	}
	if ($("#health").visible() && width <= 450) {
		$(".float-cube").animate({ top: "-100%" }, 800);
		a = 1;
	}
	if ($(".one").visible()) {
		$(".one .float").animate({ left: "0%" }, 800);
		$(".four .float").animate({ left: "0%" }, 800);
		c = 1;
	}
	console.log(a, c);
	if (a == 1 && c == 1) {
		$(window).off("scroll");
	}
});

// prod card counter
$(".quantity .add").click(function () {
	if ($(this).prev().val() < 999) {
		$(this)
			.prev()
			.val(+$(this).prev().val() + 1);
	}
});
$(".remove").click(function () {
	if ($(this).next().val() > 0) {
		$(this)
			.next()
			.val(+$(this).next().val() - 1);
	}
});

// product list

$("#gel").click(function () {
	$("#prod-1").addClass("show").removeClass("hide");
	$("#prod-2").removeClass("show").addClass("hide");
	$("#prod-3").removeClass("show").addClass("hide");
	$("#prod-4").removeClass("show").addClass("hide");
	$("#gel").addClass("active-nav");
	$("#spray").removeClass("active-nav");
	$("#wipes").removeClass("active-nav");
	$("#conditioner").removeClass("active-nav");
});
$("#spray").click(function () {
	$("#prod-2").addClass("show").removeClass("hide");
	$("#prod-1").removeClass("show").addClass("hide");
	$("#prod-3").removeClass("show").addClass("hide");
	$("#prod-4").removeClass("show").addClass("hide");
	$("#spray").addClass("active-nav");
	$("#gel").removeClass("active-nav");
	$("#wipes").removeClass("active-nav");
	$("#conditioner").removeClass("active-nav");
});
$("#wipes").click(function () {
	$("#prod-3").addClass("show").removeClass("hide");
	$("#prod-2").removeClass("show").addClass("hide");
	$("#prod-1").removeClass("show").addClass("hide");
	$("#prod-4").removeClass("show").addClass("hide");
	$("#wipes").addClass("active-nav");
	$("#spray").removeClass("active-nav");
	$("#gel").removeClass("active-nav");
	$("#conditioner").removeClass("active-nav");
});
$("#conditioner").click(function () {
	$("#prod-4").addClass("show").removeClass("hide");
	$("#prod-2").removeClass("show").addClass("hide");
	$("#prod-1").removeClass("show").addClass("hide");
	$("#prod-3").removeClass("show").addClass("hide");
	$("#conditioner").addClass("active-nav");
	$("#spray").removeClass("active-nav");
	$("#wipes").removeClass("active-nav");
	$("#gel").removeClass("active-nav");
});

$(".search-white").click(function () {
	$(".desk-search").toggleClass("colapse");
	$(".desk-search input").toggleClass("colapse");
});
var mybutton = document.getElementById("side-nav");

if (mybutton) {
	window.onscroll = function () {
		scrollFunction();
	};
}

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.opacity = "1";
	} else {
		mybutton.style.opacity = "0";
	}
}

$window = $(window);
var distance = $(".nav").offset().top;
$(window).scroll(function (e) {
	var $el = $(".nav");
	var isPositionFixed = $el.css("position") == "fixed";
	if ($(this).scrollTop() >= distance && !isPositionFixed) {
		$el.css({
			position: "fixed",
			top: "0px",
			left: "0px",
			width: "100%",
			zIndex: "100",
			opacity: "0.85",
			transition: "0.5s all ease-in-out",
		});
	}
	if ($(this).scrollTop() <= distance && isPositionFixed) {
		$el.css({ position: "static", top: "0px", opacity: "1" });
	}
});
