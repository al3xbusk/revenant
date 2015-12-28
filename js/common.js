$(document).ready(function() {

	
	$(".list-slide-button").click(function() {
		$(this).parent().children(".list-slide-container .list-slide-item").slideToggle();
	});
	
	var button2 = document.getElementById('list-slide-button2');
	var item2 = document.getElementById('list-slide-item2');
	var img2 = document.getElementById('img2');
	button2.onclick = function changeatr() {
		img2.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item2.style.display == "block"){
			img2.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}
	$(".slide-button").click(function() {
		$(".slide-this").slideToggle();
	});

	$('.slider-container').slick({
		dots: false,
		infinite: true,
		speed: 500,
		slidesToShow: 4,
		slidesToScroll: 1,
	});

	var owl = $(".owl-carousel");
	owl.owlCarousel({
		items : 5,
		navigation: true,
		slideSpeed: 300,
		itemsCustom: [[400,5],[800,5],[1200,5],[1400,5]]
	});


});

$(".show-button").click(function() {
		$(".login-form").slideToggle(300);
})

