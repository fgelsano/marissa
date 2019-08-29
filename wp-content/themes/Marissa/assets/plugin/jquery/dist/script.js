$(window).scroll(function(){
	if ($('.header').offset().top > 104) {
		$('.header').addClass("que_scroll");
	}else{
		$('.header').removeClass("que_scroll");
	}
})
$('.scroll-animate').click(function(e){
  e.preventDefault();
  var x = $(this).attr('href');
  $('html,body').animate({scrollTop: $(x).offset().top},'slow');
})

$('.boutique-3 .container .boutique-3-content-1 .content-slick').slick({
  dots: false,
  arrows:true,
  prevArrow:"<a href = '#' class = 'prev'><span class = 'fa fa-angle-left'></span></a>",
  nextArrow:"<a href = '#' class = 'next'><span class = 'fa fa-angle-right'></span></a>",
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('#catering .gallery .container .slick-gal').slick({
  dots: false,
  arrows:true,
  prevArrow:"<a href = '#' class = 'prev'><span class = 'fa fa-angle-left'></span></a>",
  nextArrow:"<a href = '#' class = 'next'><span class = 'fa fa-angle-right'></span></a>",
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});

$(".header .container .navbar .collapse .navbar-nav .menu-item-has-children > .nav-link").click(function(e){
    e.preventDefault();
    $(this).parent("li").toggleClass("show");
})
$(document).ready(function(){
	$('#homecontact').on("submit",function(e){
        var link = $(this);
		
        var info = link.serializeArray();
		var ch = false;
		$.each(info ,function(index, val){
			if(val.value == ""){
				ch = true;
			}
		});
		if(ch == false){
			e.preventDefault();
			
			$.post(ajaxurl,
				{
					action: "home_submit",
					values:info
				},
				function(data){
					alert(data);
// 					$("#showmessage").html("Message Successfully Sent.").fadeIn();
				}
			)
		}         
    });
	$("input[name='contact']").keyup(function() {
		$("input[name='contact']").val(this.value.match(/[0-9]*/));
	});
	$('#main-contact').on("submit",function(e){
        var link = $(this);
		
        var info = link.serializeArray();
		var ch = false;
		$.each(info ,function(index, val){
			if(val.value == ""){
				ch = true;
			}
		});
		if(ch == false){
			e.preventDefault();
			
			$.post(ajaxurl,
				{
					action: "main_contact",
					values:info
				},
				function(data){
					alert(data);
// 					$("#mainmessage").html("Message Successfully Sent.").fadeIn();
				}
			)
		}         
    });
});