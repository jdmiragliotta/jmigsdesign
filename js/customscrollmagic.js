$(function() {

  var controller = new ScrollMagic.Controller();

//   // MINI-HEADER SCENE
//   var miniHeader = TweenMax.to('#mini-header', 0.6, {
//     height: 40
//   });
//   var fontHeader = TweenMax.to(['a.nav-shrink'], 0.2, {
//     y: "-20px",
//     fontSize: "18px"
//   });
//   var scene = new ScrollMagic.Scene({
//     triggerElement: '#scene',
//     duration: 40,
//     offset: 360
//   });

//   scene.setTween([fontHeader, miniHeader]);
//   scene.addTo(controller);

// // MAIN NAV SCENE
//   var mainNav = TweenMax.to('#nav', 0.5,{
//     backgroundColor: "#423F3F"
//   })
//   var scene = new ScrollMagic.Scene({
//     triggerElement: '#scene',
//     duration: 385
//   });
//   scene.setTween(mainNav);
//   scene.addTo(controller);

// WELCOME HEADER
  var welcomeHeader = TweenMax.to('#welcome-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#welcome-scene',

  });
  scene.reverse(false);
  scene.setTween(welcomeHeader);
  scene.addTo(controller);

  var welcomeHeader = TweenMax.to('#welcome-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#welcome-scene',

  });
  scene.reverse(false);
  scene.setTween(welcomeHeader);
  scene.addIndicators;
  scene.addTo(controller);

// DEV HEADER
  var devHeader = TweenMax.to('#dev-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#header-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(devHeader);
  scene.addTo(controller);

  var devHeader = TweenMax.to('#dev-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#header-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(devHeader);
  scene.addTo(controller);

// PRINT HEADER
  var designHeader = TweenMax.to('#design-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#design-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(designHeader);
  scene.addTo(controller);

  var printHeader = TweenMax.to('#design-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#design-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(designHeader);
  scene.addTo(controller);


// REPO HEADER
  var clientsHeader = TweenMax.to('#clients-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#clients-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(clientsHeader);
  scene.addTo(controller);

  var clientsHeader = TweenMax.to('#clients-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#clients-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(clientsHeader);
  scene.addTo(controller);

// SKILLS HEADER
  var skillsHeader = TweenMax.to('#skills-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#skills-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(skillsHeader);
  scene.addTo(controller);

  var skillsHeader = TweenMax.to('#skills-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#skills-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(skillsHeader);
  scene.addTo(controller);

// CONTACT HEADER
  var contactHeader = TweenMax.to('#contact-header', 0.9,{
    y: "-120px",

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#contact-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(contactHeader);
  scene.addTo(controller);

  var contactHeader = TweenMax.to('#contact-header', 1.1,{
   opacity:1,
   delay:.2
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#contact-scene',
    offset:235
  });
  scene.reverse(false);
  scene.setTween(contactHeader);
  scene.addTo(controller);


});
