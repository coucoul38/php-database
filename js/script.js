var titleStatus = 0;

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.materialboxed').materialbox();
    $('.slider').slider();
    setInterval(function(){
      $('.slider').slider('next');
    }, 5000)
    $('.modal').modal();
    $('.parallax').parallax();
    $('.pushpin').pushpin();

    
  });

  const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });

  $("#listHelltaker").click(function(){
    $("#listImg").attr("src","img/preview_helltaker.jpg");
  }); 
  $("#listMinecraft").click(function(){
    $("#listImg").attr("src","img/preview_minecraft.jpg");
  }); 
  $("#listMurderDrones").click(function(){
    $("#listImg").attr("src","img/murder_drones_trailer.jpg");
  });

  /* Easter egg title */
  $(".easter_egg_title").click(function(){
    if(titleStatus==0) {
      $(".easter_egg_title").text('Attention, je suis fragile ! (`ー´)');
      animateCSS('.easter_egg_title', 'jello').then((message) => 
      {
        //after the animation
        titleStatus++;
      });
    }
    if(titleStatus==1) {
      $(".easter_egg_title").text('Arrête, je vais tomber !!(＃`Д´) ');
      animateCSS('.easter_egg_title', 'swing').then((message) => 
      {
        //after the animation
        titleStatus++;
      });
    }
    if(titleStatus==2) {
      $(".easter_egg_title").text('NAN MAIS SERIEUX‽');
      animateCSS('.easter_egg_title', 'wobble').then((message) => 
      {
        //after the animation
        titleStatus++;
      });
    }
    if(titleStatus==3) {
      document.getElementById("death").play();
      $(".easter_egg_title").text('MEURTRIER!!!');
      animateCSS('.easter_egg_title', 'hinge').then((message) => 
      {
        //after the animation
        $(".easter_egg_title").hide();
        titleStatus++;
      });
    }
  });

  /* Easter egg cursor */
  $(".bepis").click(function(){
    $('body').css('cursor', 'url("../img/bepis.png"), auto')
    alert('bepis mmh');
  });

  /*Easter egg fan art*/
  $('.sus').hover(function(){
    document.getElementById("boom").play();
    $(this).attr('src','img/the_rock.jpg');
});

/* Easter egg tea*/
$(".tea").click(function(){
  document.getElementById("slurp").play();
  console.log('teatime');
});