$(document).ready(function () {
	$("#sync1").owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 1,
		autoplay: false,
		autoplayHoverPause: true,
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
		autoplayTimeout: 3000,
		autoplaySpeed: 800,
		animateIn: "fadeIn",
		animateOut: "fadeOut",
		dots: true,
		responsiveRefreshRate: 200,
	});

	$(".sidebar h2").addClass("animateH2");
	$(".cta form").addClass("animateH2");
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
	$(".float-bg").animate({ left: "-100%" }, 800);
	$(".pozadina").animate({ left: "0" }, 800);
	$(".left .content").animate({ opacity: "1" }, 400);
	$(".products-logo").animate({ bottom: "35%" }, 800);
}
if (width < 890 && width > 650) {
	$(".products-logo").animate({ bottom: "40%" }, 800);
}
if (width <= 650) {
	$(".products-logo").animate({ bottom: "15%" }, 800);
}
if (width <= 450) {
	$(".float-bg").css("height", "123%");
	$(".float-bg").animate({ top: "-123%" }, 800);
}

$(window).scroll(function () {
	if ($("#health").visible() && width > 450) {
		$(".float-cube").delay(400).animate({ left: "100%" }, 800);
	}
	if ($("#health").visible() && width <= 450) {
		$(".float-cube").animate({ top: "-100%" }, 800);
	}
	if ($(".one").visible()) {
		$(".one .float").animate({ left: "0%" }, 800);
		$(".four .float").animate({ left: "0%" }, 800);
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

var mybutton = document.getElementById("side-nav");

window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.opacity = "1";
	} else {
		mybutton.style.opacity = "0";
	}
}
