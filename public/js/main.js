$(document).ready(function(){

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  });

  $('#promoAccept').click(function (e) {
    e.preventDefault()
    $.ajax({
      url: '/buy/promo',
      type: 'post',
      data: {
        promo: $('.promoInput').val()
      },
      success: function (data) {
        // console.log(data)
        if(data.type == "success"){
          new Noty({
            type: data.type,
            timeout: 3000,
            theme: 'nest',
            text: data.message
          }).show();

          if($('.promoID').val() == '') {
            const price = parseInt( $('.new-price span').text() )
            const percent = parseInt(data.percent)
            const totalPrice = Math.floor(parseInt(price - (price / 100 * percent)))
            $('.new-price span').text(totalPrice)
            $('.promoID').val(data.promoId)
          }
        }

        if(data.type == 'error') {
          new Noty({
            type: data.type,
            timeout: 3000,
            theme: 'nest',
            text: data.message
          }).show();
        }
      },
      error: function(data) {
        console.log(data)
      }
    })
  })

  $('#butBuy').click(function(e){
    e.preventDefault();
    $.ajax({
      url: "/buy",
      type: 'post',
      data: {
        id: $('.itemID').val(),
        email: $('.userEmail').val(),
        promoId: $('.promoID').val(),
        password: $('.passwordInput').val()
      },
      success: function(data){
        if(data.type == "success"){
          new Noty({
            type: data.type,
            timeout: 3000,
            theme: 'nest',
            text: data.message
          }).show();
          setTimeout(function(){location.href= data.link} , 2000);
        } else {
          new Noty({
            type: data.type,
            timeout: 3000,
            theme: 'nest',
            text: data.message
          }).show();
        }
      },
      error: function(data){
        console.log(data);
      }
    });
  });

  let defaultPage = 2
  $('#showMore').click(function () {
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
      $.ajax({
          type: 'GET',
          url: '/reviews/load',
          data: {
              page: defaultPage,
          },
          dataType: 'json',
          success: function (data) {
              defaultPage = data.page +1
              $('#reviewsBody').append(data.html);
              if(data.hasMorePages == false){
                 $('#load_more').remove()
              }
          },
          error: function (error) {
              console.log(error)
          }
      });
  });


    $('#sidebar-btn').click(function(){
        $('body').toggleClass('open-sidebar');
        $(this).toggleClass('open');
    });
    $('.overlay').click(function(){
        $('body').removeClass('open-sidebar');
        $('#sidebar-btn').removeClass('open');
    });
    $('#expand-home-text').click(function(){
        $(this).toggleClass('open');
    });
    $('#expand-home-text2').click(function(){
        $(this).toggleClass('open');
    });

    $('.main-banner').owlCarousel({
        loop:true,
        margin:0,
        items:1,
        nav:true,
        navText: ["<span class='pe-7s-angle-left'></span>","<span class='pe-7s-angle-right'></span>"],
        dots:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })

    $('.default-carousel').owlCarousel({
        loop:false,
        margin:30,
        nav:true,
        navText: ["<span class='pe-7s-angle-left'></span>","<span class='pe-7s-angle-right'></span>"],
        dots:false,
        responsive : {
            0 : {
                items:1,
            },
            768 : {
                items:2,
            },
            992 : {
                items:3,
            },
            1200 : {
                items:4
            }
        }
    })

    $('.screen-carousel').owlCarousel({
        loop:false,
        margin:30,
        nav:true,
        navText: ["<span class='pe-7s-angle-left'></span>","<span class='pe-7s-angle-right'></span>"],
        dots:false,
        responsive : {
            0 : {
                items:2,
                margin:10
            },
            768 : {
                items:3,
            },
            992 : {
                items:4,
            }
        }
    })

    $('.random-carousel').owlCarousel({
        loop:false,
        margin:15,
        nav:true,
        navText: ["<span class='pe-7s-angle-left'></span>","<span class='pe-7s-angle-right'></span>"],
        dots:false,
        items:1,
        responsive : {
            0 : {
                margin:10
            }
        }
    })



  function calcSalePrice(newprice, oldprice) {
      return Math.round(100 - (newprice * 100 / oldprice))
  }

  const buttonUp = $('.up');

  $(window).scroll(() => {
    if ($(this).scrollTop() > 300) {
      buttonUp.fadeIn();
    } else {
      buttonUp.fadeOut();
    }
  });

  buttonUp.on('click', function () {
    $('body, html').animate({
      scrollTop: 0
    }, 600)
  });

});
