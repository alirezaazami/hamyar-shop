var $=jQuery;
$('document').ready(function (){
  $('.show_date_picker').on('focus',function (){
    $(this).persianDatepicker({
      format: 'YYYY/MM/DD',
      autoClose: true
    });
  })
});

$('.slider22').slick({
  nextArrow:'.next4',
  prevArrow:'.prev4',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrow:true,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrow:true,
        dots: false,
      }
    },
    {
      breakpoint: 1920,
      settings: {
        dots: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrow:true,
        autoplay:true,
    }
    }
  ]
});

$('.slider1').slick({
  nextArrow:'.next8',
  prevArrow:'.prev8',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrow:true,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrow:true,
        dots: false,
      }
    },
    {
      breakpoint: 1920,
      settings: {
        dots: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrow:true,
        autoplay:true,
    }
    }
  ]
});


$('.slider5').slick({
  nextArrow:'.next2',
  prevArrow:'.prev2',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  autoplaySpeed:2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 1022,
      settings: {
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
    }
    }
  ]
});
$('.up-sells.upsells.products ul').slick({
  nextArrow:'.next2',
  prevArrow:'.prev2',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  autoplaySpeed:2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 1022,
      settings: {
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
    }
    }
  ]
});


$('.slider2').slick({
  nextArrow:'.next3',
  prevArrow:'.prev3',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  autoplaySpeed:2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 1022,
      settings: {
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
    }
    }
  ]
});


$('.slider4').slick({
  nextArrow:'.next5',
  prevArrow:'.prev5',
  dots: false,
  rtl:true,
  arrow:true,
  autoplay:true,
  autoplaySpeed:2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 568,
      settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay:true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
      }
    },
    {
      breakpoint: 1022,
      settings: {
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
    }
    }
  ]
});


$('.slider3').slick({
  dots: true,
  rtl:true,
  arrow:false,
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
});

$('body').on('click','#quantity_changer .fa-plus-circle',function (){
  let input=$(this).parent().find('input');
  let qty=parseInt(input.val());
  let max=parseInt(input.attr('max'));
  let step=parseInt(input.attr('step'));
  if (qty >= max) return;
  if (qty+step > max) return;
  input.val(qty+step);
  $('[name="update_cart"]').removeAttr('disabled').trigger('click');
})
$('body').on('click','#quantity_changer .fa-minus-circle',function (){
  let input=$(this).parent().find('input');
  let qty=parseInt(input.val());
  let min=parseInt(input.attr('min'));
  let step=parseInt(input.attr('step'));
  if (qty <= min) return;
  if (qty - step < min) return;
  input.val(qty - step);

  $('[name="update_cart"]').removeAttr('disabled').trigger('click');

})
