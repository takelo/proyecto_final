$(document).ready(function() {

   // menu movil
   $(".hamburger").click(function(){
     $(".hamburger").toggleClass('open');
     $(".hamburger").toggleClass("pad-top-10");
     $(".barra").toggleClass('open');
     $(".contenedor_menu").toggle();
     // $(".barra").toggleClass('transparente');
 	});

    // submenu
    $("a#submenu1").click(function(e){
      e.preventDefault();
      $("ul#submenu1").slideToggle();
   });
   $("a#submenu2").click(function(e){
     e.preventDefault();
     $("ul#submenu2").slideToggle();
  });

  $(window).scroll(function(){

    var scroll = $(window).scrollTop();
    if(scroll > 1){
      $(".barra").addClass("sombra");
      $(".logo").addClass("tada1");
      // if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
      //   $(".flotante").fadeIn(1000);
      // }
    }else{
      $(".barra").removeClass("sombra");
      $(".logo").removeClass("tada1");
      // if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
      //     $(".flotante").fadeOut(1000);
      // }
    }
  });
  //Animacion numeros
  if(document.getElementsByClassName("resumen-evento")){
    $(".resumen-evento").waypoint(function(){
      $(".resumen-evento li:nth-child(1) p").animateNumber({number:600},1900);
      $(".resumen-evento li:nth-child(2) p").animateNumber({number:450},1500);
      $(".resumen-evento li:nth-child(3) p").animateNumber({number:1200},3000);
    }, {
      offset: "60%"
    });
  }

  // scroll lento
  var alturaBarra = $(".barra").innerHeight();
  $('.ancla').click(function(){
    var link = $(this);
    var anchor  = link.attr('href');
    $('html, body').stop().animate({
        scrollTop: jQuery(anchor).offset().top - alturaBarra
    }, 2000);
    return false;
  });

// $("a#submenu1").mouseout(function(e){
//   e.preventDefault();
//   $("ul#submenu1").hide();
// });
// $("a#submenu2").mouseout(function(e){
//  e.preventDefault();
//  $("ul#submenu2").hide();
// }




  // $(window).on('resize', function(){
  //   if($(this).width() > 700){
  //     $(".navegacion-principal").show();
  //   } else {
  //     $(".navegacion-principal").hide();
  //   }
  //  });


});//lave document ready
