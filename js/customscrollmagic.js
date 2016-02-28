$(function() {

  var controller = new ScrollMagic.Controller();

  // MINI-HEADER SCENE
  var miniHeader = TweenMax.to('#mini-header', 0.6, {
    height: 40
  });
  var fontHeader = TweenMax.to(['a.nav-shrink'], 0.2, {
    y: "-20px",
    fontSize: "18px"
  });
  var scene = new ScrollMagic.Scene({
    triggerElement: '#scene',
    duration: 40,
    offset: 360
  });

  scene.setTween([fontHeader, miniHeader]);
  scene.addTo(controller);
  scene.addIndicators()

  // MAIN NAV SCENE
  var mainNav = TweenMax.to('#nav', 0.5,{
    backgroundColor: "#423F3F"
  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#scene',
    duration: 385
  });
  scene.setTween(mainNav);
  scene.addTo(controller);
  scene.addIndicators()

  var devHeader = TweenMax.to('#dev-header', 0.9,{
    y: "-120px"

  })
  var scene = new ScrollMagic.Scene({
    triggerElement: '#header-scene',
    offset:330

  });
  scene.setTween(devHeader);
  scene.addTo(controller);
  scene.addIndicators()






});
