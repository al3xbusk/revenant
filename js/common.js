$(document).ready(function() {

	var button1 = document.getElementById('list-slide-button1');
	var item1 = document.getElementById('list-slide-item1');
	var img1 = document.getElementById('img1');
	button1.onclick = function changeatr() {
		img1.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item1.style.display == "block"){
			img1.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}

	var button2 = document.getElementById('list-slide-button2');
	var item2 = document.getElementById('list-slide-item2');
	var img2 = document.getElementById('img2');
	button2.onclick = function changeatr() {
		img2.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item2.style.display == "block"){
			img2.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}

	var button3 = document.getElementById('list-slide-button3');
	var item3 = document.getElementById('list-slide-item3');
	var img3 = document.getElementById('img3');
	button3.onclick = function changeatr() {
		img3.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item3.style.display == "block"){
			img3.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}

	var button4 = document.getElementById('list-slide-button4');
	var item4 = document.getElementById('list-slide-item4');
	var img4 = document.getElementById('img4');
	button4.onclick = function changeatr() {
		img4.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item4.style.display == "block"){
			img4.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}

	var button5 = document.getElementById('list-slide-button5');
	var item5 = document.getElementById('list-slide-item5');
	var img5 = document.getElementById('img5');
	button5.onclick = function changeatr() {
		img5.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item5.style.display == "block"){
			img5.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}

	var button6 = document.getElementById('list-slide-button6');
	var item6 = document.getElementById('list-slide-item6');
	var img6 = document.getElementById('img6');
	button6.onclick = function changeatr() {
		img6.src = "http://theme-t/wp-content/themes/theme-test/img/faq-minus-icon.png";
		if (item6.style.display == "block"){
			img6.src = "http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png";
		}
	}
	$(".list-slide-button1").click(function() {
		$(".list-slide-item1").slideToggle();
	});
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

	

	

	$(".list-slide-button2").click(function() {
		$(".list-slide-item2").slideToggle();
	});

	$(".list-slide-button3").click(function() {
		$(".list-slide-item3").slideToggle();
	});

	$(".list-slide-button4").click(function() {
		$(".list-slide-item4").slideToggle();
	});

	$(".list-slide-button5").click(function() {
		$(".list-slide-item5").slideToggle();
	});

	$(".list-slide-button6").click(function() {
		$(".list-slide-item6").slideToggle();
	});
	$(".show-button").click(function() {
		$(".login-form").slideToggle(300);
	})
	// carousel start

	var owl = $(".owl-carousel");
	owl.owlCarousel({
		items : 5,
		navigation: true,
		slideSpeed: 300,
		itemsCustom: [[400,5],[800,5],[1200,5],[1400,5]]
	});

	

});


