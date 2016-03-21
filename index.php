<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = "FROM: {$_POST['email']}";
    $to = 'jmigsdesign@gmail.com';
    $subject = 'Message from jmigsdesign';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
     // Check if name has been entered

    if (! $_POST['name']) {
      $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (! $_POST['email'] || ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }

    // Check if message has been entered
    if (! $_POST['message']) {
      $errMessage = 'Please enter your message';
    }

    // If there are no errors, send the email
    if (! $errName && ! $errEmail && ! $errMessage) {
      if (mail($to, $subject, $body, $from)) {
        $result = '<div class="">Thank You! I will be in touch</div>';
      } else {
        $result = '<div class="">Sorry there was an error sending your message. Please try again later.</div>';
      }
    }
  }
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>JMIGSDESIGN | Design and Web Development Portfolio of Jeremy Miragliotta</title>
  <meta name='description' content=''>
  <meta property='og:title' content='JMIGSDESIGN | Home'>
  <meta property='og:type' content='page'>
  <meta property='og:url' content='jmigsdesign.com/index.php'>
  <meta property='og:image' content='images/shared_logo.png'>
  <meta property='og:description' content='The portfolio of Graphic Designer Jeremy Miragliotta'>

  <!-- Mobile viewport optimized -->
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
  <!--Google Font-->
  <link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marcellus|Coustard' rel='stylesheet' type='text/css'>
  <!-- Material Icons -->
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <!-- Materialize CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>
  <!-- Font-Awesome CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <!-- DEVICON CSS -->
  <link href='css/devicons.min.css' rel='stylesheet'>
  <!-- ResponsiveSlider CSS -->
  <link href='css/responsiveslides.css' rel='stylesheet'>
   <!-- ResponsiveSlider CSS -->
  <link href='css/animate.css' rel='stylesheet'>
  <!-- SqueezeBox -->
  <link rel="stylesheet" href="css/sb_style.css">
  <!-- Custom CSS -->
  <link href='css/styles.css' rel='stylesheet'>
</head>
<body>
 <div id='index'class="anchor"></div>
  <div id='mini-header' class='row mini-header hide-on-small-only'>
    <div class='logo-container valign-wrapper'>
      <div class='col l4 offset-l4 s12'>
        <a href='#index' id='nav-name' class='logo valign smoothScroll nav-shrink'>JMIGS<span class='design-logo'>DESIGN</span></a>
      </div>
      <div class="col l4 ">
        <div class=''>
          <ul class='social-nav right'>
            <li><a href="http://facebook.com/jmigsdesign" target="_blank" class="social-reset nav-shrink"><span class="fa fa-facebook-official fa-lg"></span></a></li>
            <li><a href="http://instagram.com/jmigsdesign" target="_blank" class="nav-shrink"><span class="fa fa-instagram fa-lg"></span></a></li>
            <li><a href="https://twitter.com/jmigsdesign" target="_blank" class="nav-shrink"><span class="fa fa-twitter fa-lg"></span></a></li>
            <li><a href="https://www.linkedin.com/in/jeremymiragliotta" target="_blank" class="nav-shrink"><span class="fa fa-linkedin-square fa-lg"></span></a></li>
            <li><a href="https://github.com/jdmiragliotta" target="_blank" class="nav-shrink"><span class="fa fa-github fa-lg"></span></a></li>
            <li><a href="http://stackoverflow.com/users/5510697/jdmiragliotta" class="nav-shrink" target="_blank"><span class="fa fa-stack-overflow fa-lg"></span></a></li>
          </ul><!-- end nav pull-right -->
        </div>
      </div>
    </div>
  </div>

 <!-- Mini-header on Mobile -->
  <div id='mini-header-mobile' class='row mini-header hide-on-med-and-up'>
    <div class='logo-container valign-wrapper'>
      <div class='col l4 offset-l4 s12'>
        <a href='#index' id='nav-name' class='logo valign smoothScroll'>JMIGS<span class='design-logo'>DESIGN</span></a>
      </div>
    </div>
  </div>

  <header class="hide-on-small-only">
    <!--Slider -->
    <div class='slider'>
      <ul class='slides'>
        <li>
          <img src='images/slideMain.png'>
          <div id='jmigsdesign'class='slider-heading caption right-align'>
            <h1>JMIGS<span class='design-logo'>DESIGN</span></h1>
          </div>
          <div id='slogan' class='slider-heading caption right-align'>
            <h4><span id='creativity'>CREATIVITY</span> &#43; </h4>
          </div>
          <div id='slogan-code' class='slider-heading caption right-align'>
            <h4><code>{code};</code></h4>
          </div>
        </li>
        <li>
          <img src='https://s3.amazonaws.com/jmigsdesign/images/design.png'>
          <div class='slider-heading caption center-align'>
            <h3>Where Design</h3>
          </div>
        </li>
        <li>
          <img src='https://s3.amazonaws.com/jmigsdesign/images/coding.png'>
          <div class='slider-heading caption center-align'>
            <h3>Meets Development</h3>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <!--End Slider -->

  <!-- Navbar -->
  <nav id='nav' class='main-nav hide-on-small-only'>
    <div class='row'>
      <div class='col s8 offset-s2'>
        <ul id='nav-mobile' class='navbar'>
          <li class='navlink'><a href='#dev' id="dev-navlink" class='nav-link smoothScroll'><i class='dev-nav-icon nav-icon fa fa-code'></i>Development</a></li>
          <li class='navlink'><a href='#design' class='nav-link smoothScroll'><i class='nav-icon fa fa-picture-o'></i>Design</a></li>
          <li class='navlink'><a href='#clients' class='nav-link smoothScroll'><i class='nav-icon fa fa-users'></i>Clients</a></li>
          <li class='navlink'><a href='#skills' class='nav-link smoothScroll'><i class='nav-icon fa fa-wrench'></i>Skills</a></li>
          <li class='navlink'><a href='#contact' class='nav-link smoothScroll'><i class='nav-icon fa fa-envelope-o'></i>Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <nav id='navbar-mobile' class='main-nav hide-on-med-and-up'>
    <div class='row'>
      <div class='col s10 offset-s1'>
        <ul id='nav-mobile' class='navbar'>
          <li class='navlink'><a href='#dev' id="dev-navlink" class='nav-link smoothScroll'><i class='dev-nav-icon nav-icon fa fa-code'></i></a></li>
          <li class='navlink'><a href='#design' class='nav-link smoothScroll'><i class='nav-icon fa fa-picture-o'></i></a></li>
          <li class='navlink'><a href='#clients' class='nav-link smoothScroll'><i class='nav-icon fa fa-users'></i></a></li>
          <li class='navlink'><a href='#skills' class='nav-link smoothScroll'><i class='nav-icon fa fa-wrench'></i></a></li>
          <li class='navlink'><a href='#contact' class='nav-link smoothScroll'><i class='nav-icon fa fa-envelope-o'></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <main>

    <section class="mid-row">
      <div id="welcome-head-container">
        <h1 id="welcome-header">Welcome</h1>
      </div>
    </section>

    <section id="welcome-section" class='container'>
      <h3 id="well-hello">Well, Hello There... I'm Jeremy</h3>
      <div id="welcome-btn">
        <a id="mid-wel-btn" class=" welcome-btn waves-effect waves-light btn center">In A Rush?</a>
        <a id="more" class="welcome-btn waves-effect waves-light btn center">Read More</a>
      </div>

      <div id="past">
        <h4>The Past <small><em>Where I Was Developed My Present</em></small></h4>
        <p class="long"> Growing up I always felt as though I had two brains. One had overall love for all things visually stimulating or appealing. And yes, I mean ALL things! The other, an undying yearning to understand how and why things worked, so much so I destroyed a majority of my toys just to see the how they functioned. My background in Graphic Design satiated my creative desires, however my engineering brain was somewhat deprived and it clearly had the munchies.</p>

        <div class="short short-left">
          <h5>Artistic Appreciation</h5>
          <p class="welcome-p">Obsessed With All Things Visually Appealing</p>
        </div>
        <div class="short short-right">
          <h5>Engineering Curiousity</h5>
          <p class="welcome-p">Destoyed Toys To Understand Functionality</p>
        </div>
        <div class="short short-left">
          <h5>Graphic Designer</h5>
          <p class="welcome-p">Nourished Creativity, Developed Style</p>
        </div>
      </div>

      <div id="present">
        <h4>The Present <small><em>Where I Am Will Inspire My Future</em></small></h4>
        <p class="long">
          While my creative brain drives my desire to be a Front End Web Developer and make apps that look amazing, my persistent engineering brain wants to connect the visual with the workings underneath. The solution: Become a Full Stack Web Developer with a focus on Front End Development, specifically in User Experience and Interaction. Design &amp; Development equals the perfect balance. Aestetically amazing and undoubtledly functional, just like yours truly.</p>
        <div class="short">
          <h5>Front End UX/UI Focus</h5>
          <p class="welcome-p">All About Aestetic</p>
        </div>
        <div class="short">
          <h5>Back End Capabilities</h5>
          <p class="welcome-p">Wait... It Actually Works...</p>
        </div>

        <div class="short">
          <h5>Full Stack AllStar</h5>
          <p class="welcome-p">Beautiful and Functional</p>
        </div>
      </div>

      <div id="future">
        <h4>The Future <small><em>Where I'm Going Is In My Control</em></small></h4>
        <p class="long">
         I consider myself a Jack of All Trades - great a many skills, not an expert at anything in particular. Considering oneself an expert in anything; could suggest one has given up learning. What's the point in that? I always strive to learn a new skill and I've been taught to set and conquer my goals, while contuinuously setting new ones. It shows determination, hardwork and dedication to your craft. Basically, the future me will continue to be awesome. </p>
        <div class="short">
          <h5>Jack of All Trades</h5>
          <p class="welcome-p">Multi-Talented and Overall Good Time</p>
        </div>
        <div class="short">
          <h5>Be Awesome<em>-er</em></h5>
          <p class="welcome-p">Dedicated, Determined, Driven</p>
        </div>

        <div class="short">
          <h5>Design and Develop</h5>
          <p class="welcome-p">Imagine and Create Wicked Cool Stuff</p>
        </div>

      </div>
      <div class="row">
          <h4 id="obsessions-header">My Current Obsessions</h4>
            <div class="col l3 m6 s12">
              <a href="https://codyhouse.co">
                <div id="css3" class="obsessions">
                 <h6>CSS3</h6>
                 <div class="css3-line"></div>
                 <h6 class="css3-site right">Cody House</h6>
                </div>
              </a>
            </div>
            <div class="col l3 m6 s12">
              <a href="http://boxesandarrows.com/">
                <div id="uxui" class="obsessions">
                 <h6>UX/UI</h6>
                 <div class="uxui-line"></div>
                 <h6 class="uxui-site right">Bows and Arrows</h6>
                </div>
              </a>
            </div>
            <div class="col l3 m6 s12">
              <a href="http://breakingmuscle.com/">
                <div id="fitness" class="obsessions">
                 <h6>FITNESS</h6>
                 <div class="fitness-line"></div>
                 <h6 class="fitness-site right">Breaking Muscle</h6>
                </div>
              </a>
            </div>
            <div class="col l3 m6 s12">
               <a href="http://peanutbutterlovers.com/">
                <div id="pb" class="obsessions">
                 <h6>PEANUT BUTTER</h6>
                 <div class="pb-line"></div>
                 <h6 class="pb-site right">Peanut Butter Lovers</h6>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    </section>



    <section class="mid-row dev-mid">
      <div id="header-scene"></div><!-- ScrollMagic Trigger-->
      <div id='dev' class='anchor'></div>
      <div id="dev-head-container">
        <h1 id="dev-header">Development</h1>
      </div>
    </section>

    <section id="development-section">
      <div class="container-fluid">
        <div class="rslides_container">
          <ul class="rslides">
            <li><!-- Daily Briefing -->
              <div class='row'>
                <div class='col l8 m7 s12'>
                  <div id='daily-breifing'>
                   <img src='images/db.png' class='img-responsive right left-img'>
                  </div>
                </div>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">
                    <div>
                      <h5 class="slide-heading">Daily Briefing</h5>
                      <p class="slide-text">Gather instant information on the weather, traffic, news, upcoming events and images in any location</p>
                    </div>
                    <div>
                      <a href='https://dailybriefing.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                      <a href="https://github.com/MrMendonez/daily-briefing" target"_blank" id="db-tech" class="slide-link waves-effect waves-light btn">Github Repo</a>
                    </div>

                    <div class="icon-container">
                     <h5>Technologies Used:</h5>
                      <i class="devicons devicons-html5 db-tech"></i>
                      <i class="devicons devicons-css3 db-tech"></i>
                      <i class="devicons devicons-materializecss db-tech"></i>
                      <i class="devicons devicons-javascript db-tech"></i>
                      <i class="devicons devicons-jquery db-tech"></i>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li><!-- Rock Paper Scissor -->
              <div class='row hide-on-small-only'>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">
                    <div class="right-align">
                      <h5 class="slide-heading">Rock, Paper, Scissors</h5>
                      <p class="slide-text right">Challenge the Master Sheldon in a game of skill and strategy. Rock, Paper, Scissors, Lizard, Spock!</p>
                   <!--  </div>
                    <div class="right-align"> -->
                      <a href='https://ropasclispgam.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                      <a href="https://github.com/jdmiragliotta/RockPaperScissors" target"_blank" id="rpsls-tech" class="slide-link waves-effect waves-light btn">Github Repo</a>
                    </div>

                    <div class="icon-container right container-right">
                     <h5 class="slider-h5">Technologies Used:</h5>
                      <i class="devicons devicons-html5 rpsls-tech"></i>
                      <i class="devicons devicons-css3 rpsls-tech"></i>
                      <i class="devicons devicons-materializecss rpsls-tech"></i>
                      <i class="devicons devicons-javascript rpsls-tech"></i>
                      <i class="devicons devicons-jquery rpsls-tech"></i>
                    </div>
                  </div>
                </div>
                <div class='col l8 m7 s12'>
                  <div id='rpsls'>
                   <img src='images/rpsls.png' class='img-responsive left right-img'>
                  </div>
                </div>
              </div>

              <!-- Rock Paper Scissor - MOBILE -->
              <div class='row hide-on-med-and-up'>
                <div class='col l8 m7 s12'>
                  <div id='rpsls'>
                   <img src='images/rpsls.png' class='img-responsive left right-img'>
                  </div>
                </div>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">

                    <h5 class="slide-heading">Rock, Paper, Scissors</h5>
                    <p class="slide-text">Challenge the Master Sheldon in a game of skill and strategy. Rock, Paper, Scissors, Lizard, Spock!</p>

                    <a href='https://ropasclispgam.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                    <a href="https://github.com/jdmiragliotta/RockPaperScissors" target"_blank" id="rpsls-tech-mobile" class="slide-link waves-effect waves-light btn">Github Repo</a>

                    <div class="icon-container">
                     <h5>Technologies Used:</h5>
                      <i class="devicons devicons-html5 rpsls-tech"></i>
                      <i class="devicons devicons-css3 rpsls-tech"></i>
                      <i class="devicons devicons-bootstrap rpsls-tech"></i>
                      <i class="devicons devicons-javascript rpsls-tech"></i>
                      <i class="devicons devicons-jquery rpsls-tech"></i>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li><!-- Stay The Night -->
              <div class='row'>
                <div class='col l8 m7 s12'>
                  <div id='staythenight'>
                   <img src='images/staythenight.png' class='img-responsive right left-img'>
                  </div>
                </div>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">
                    <div>
                      <h5 class="slide-heading">Stay The Night</h5>
                      <p class="slide-text">Find The Perfect Hotel. Filter through location, price and amenities.</p>
                    </div>
                    <div>
                      <a href='https://staythenight.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                      <a href="https://github.com/jdmiragliotta/hotelSearch" target="_blank" id="staythenight-tech" class="slide-link waves-effect waves-light btn">Github Repo</a>
                    </div>

                     <div class="icon-container">
                      <h5>Technologies Used:</h5>
                      <i class="devicons devicons-html5 staythenight-tech"></i>
                      <i class="devicons devicons-css3 staythenight-tech"></i>
                      <i class="devicons devicons-bootstrap staythenight-tech"></i>
                      <i class="devicons devicons-javascript staythenight-tech"></i>
                      <i class="devicons devicons-jquery staythenight-tech"></i>
                    </div>
                  </div>
                </div>
              </div>
            </li>

             <li> <!-- CompletelyDo -->
              <div class='row hide-on-small-only'>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">
                    <div class="right-align">
                      <h5 class="slide-heading">CoDo</h5>
                      <p class="slide-text right">As clean and simple to-do app to help you <span class="codo">Co</span>mpletely <span class="codo">Do</span> all of your activities.</p>
                    </div>
                    <div class="right-align">
                      <a href='https://completelydo.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                      <a href="https://github.com/jdmiragliotta/todolist" target="_blank" id="codo-tech" class="slide-link waves-effect waves-light btn">Github Repo</a>
                    </div>

                     <div class="icon-container right container-right">
                      <h5 class="slider-h5">Technologies Used:</h5>
                      <i class="devicons devicons-html5 codo-tech"></i>
                      <i class="devicons devicons-css3 codo-tech"></i>
                      <i class="devicons devicons-bootstrap codo-tech"></i>
                      <i class="devicons devicons-javascript codo-tech"></i>
                      <i class="devicons devicons-jquery codo-tech"></i>
                    </div>
                  </div>
                </div>
                <div class='col l8 m7 s12'>
                  <div id='codo'>
                   <img src='images/codo.png' class='img-responsive left right-img'>
                  </div>
                </div>
              </div>

               <!-- CODO - MOBILE -->
              <div class='row hide-on-med-and-up'>
               <div class='col l8 m7 s12'>
                  <div id='codo'>
                   <img src='images/codo.png' class='img-responsive left right-img'>
                  </div>
                </div>
                <div class="col l4 m5 s12">
                  <div class="slide-callout">
                      <h5 class="slide-heading">CoDo</h5>
                      <p class="slide-text">As clean and simple to-do app to help you <span class="codo">Co</span>mpletely <span class="codo">Do</span> all of your activities.</p>
                      <a href='https://completelydo.herokuapp.com' target='_blank' class="slide-link waves-effect waves-light btn">Check It Out</a>
                      <a href="https://github.com/jdmiragliotta/todolist" target="_blank" id="codo-tech-mobile" class="slide-link waves-effect waves-light btn">Github Repo</a>

                     <div class="icon-container">
                      <h5>Technologies Used:</h5>
                      <i class="devicons devicons-html5 codo-tech"></i>
                      <i class="devicons devicons-css3 codo-tech"></i>
                      <i class="devicons devicons-bootstrap codo-tech"></i>
                      <i class="devicons devicons-javascript codo-tech"></i>
                      <i class="devicons devicons-jquery codo-tech"></i>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div><!-- dev-container -->
    </section>

    <section class="mid-row">
      <div id="design-scene"></div>
      <div id='design' class='anchor'></div>
      <div id="design-head-container">
        <h1 id="design-header">Design</h1>
      </div>
    </section>

    <section id="design-section">
      <div class="container-fluid">
        <div class="cd-intro-block">
          <div class="content-wrapper">
            <h2>Check Out Print Design Work</h2>
            <a href="#print2" class='cd-btn smoothScroll' data-action="show-projects">Show The Goods</a>
          </div>
        </div> <!-- .cd-intro-block -->

        <div class="cd-projects-wrapper">
          <ul class="cd-slider">
            <li class="current">
              <a href="#project-1">
              <div class="img-box" id="openingday"></div>
              <div class="project-info">
                <h5>Opening Day</h5>
                <p>No Idea Sports</p>
              </div>
              </a>
            </li>

            <li>
              <a href="#project-2">
                <div class="img-box" id="feelthelove"></div>
                <div class="project-info">
                  <h5>Feel The Love 5k</h5>
                  <p>Garden State Races.</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#project-3">
                <div class="img-box" id="nugents"></div>
                <div class="project-info">
                  <h5>Store Logo</h5>
                  <p>Nugent's Prime Meat Market</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#project-4">
                <div class="img-box" id="behindtheplates"></div>
                <div class="project-info">
                  <h5>Business Card</h5>
                  <p>BehindThePlates Blog</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#project-5">
                <div class="img-box" id="flipcup"></div>
                <div class="project-info">
                  <h5>Flip Cup Poster</h5>
                  <p>No Idea Sports</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#project-6">
                <div class="img-box" id="nisposter"></div>
                <div class="project-info">
                  <h5>Sports - People - Fun</h5>
                  <p>No Idea Sports</p>
                </div>
              </a>
            </li>

             <li>
              <a href="#project-7">
                <div class="img-box" id="mardigras"></div>
                <div class="project-info">
                  <h5>Margi Gras Special</h5>
                  <p>Vanderbilt's Sports Bar</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#project-8">
                <div class="img-box" id="oktoberfest"></div>
                <div class="project-info">
                  <h5>Oktoberfest Special</h5>
                  <p>Vanderbilt's Sports Bar</p>
                </div>
              </a>
            </li>
          </ul>

          <ul class="cd-slider-navigation cd-img-replace">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
          </ul> <!-- .cd-slider-navigation -->
        </div> <!-- .cd-projects-wrapper -->

        <!-- Opening Day -->
        <div class="cd-project-content container-fluid" id="project-1">
          <div class="row">
            <div  class="col l6">
              <img src="images/nisopeningday.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Opening Day Poster</h3>
                <p>Designed For No Idea Sports</p>
                <a href="http://www.noideasports.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Feel The Love -->
         <div class="cd-project-content container-fluid" id="project-2">
          <div class="row">
            <div  class="col l6">
              <img src="images/feelthelove.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Feel The Love 5k Poster</h3>
                <p>Designed For Garden State Races</p>
                <a href="http://www.gardenstateraces.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Nugents -->
        <div class="cd-project-content container-fluid" id="project-3">
          <div class="row">
            <div  class="col l6">
              <img src="images/nugents.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Store Logo</h3>
                <p>Designed For Nugent's Prime Meat Markert</p>
                <a href="http://www.nugentsprime.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Behind The Plates -->
        <div class="cd-project-content container-fluid" id="project-4">
          <div class="row">
            <div  class="col l6">
              <img src="images/behindtheplates.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Business Card</h3>
                <p>Designed For Behind The Plates Blog</p>
                <a href="http://www.behindtheplates.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Flip Cup -->
        <div class="cd-project-content container-fluid" id="project-5">
          <div class="row">
            <div  class="col l6">
              <img src="images/flagday.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Flip Cup / Beer Pong Poster</h3>
                <p>Designed For No Idea SPorts</p>
                <a href="http://www.noideasports.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- No Idea Poster -->
        <div class="cd-project-content container-fluid" id="project-6">
          <div class="row">
            <div  class="col l6">
              <img src="images/nisposter.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Real Sports, Real People, Real Fun</h3>
                <p>Designed For No Idea Sports</p>
                <a href="http://www.noideasports.com/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Mardi Grasr -->
        <div class="cd-project-content container-fluid" id="project-7">
          <div class="row">
            <div  class="col l6">
              <img src="images/vandysmg.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Mardi Gras Ad</h3>
                <p>Designed For No Idea Sports</p>
                <a href="http://www.wyndham.com/hotels/new-jersey/florham-park/wyndham-hamilton-park/hotel-dining/vanderbilts/"target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->

        <!-- Oktoberfest -->
        <div class="cd-project-content container-fluid" id="project-8">
          <div class="row">
            <div  class="col l6">
              <img src="images/vandysoktoberfest.jpg" class="content-img right">
            </div>

            <div class="col l6">
              <div class="left">
                <h3>Oktoberfest Ad</h3>
                <p>Designed For Vanderbilt's Sports Bar</p>
                <a href="http://www.wyndham.com/hotels/new-jersey/florham-park/wyndham-hamilton-park/hotel-dining/vanderbilts" target="_blank" class="client slide-link waves-effect waves-light btn">Visit Site</a>
               </div>
            </div>
          <a href="#0" class="close cd-img-replace">Close</a>
           </div>
        </div> <!-- .cd-project-content -->



      </div>
    </section>

     </section>

      <section class="mid-row">
      <div id="clients-scene"></div>
      <div id='clients' class='anchor'></div>
      <div id="clients-head-container">
        <h1 id="clients-header">Clients</h1>
      </div>
    </section>

    <section id="client-section">
      <div class="container-fluid clients-body">
        <div class="container client-container-main">
          <div class="missy quotes client-container">
            <div class="client-quote valign-wrapper">
              <div class="quote left-quote">&ldquo;</div>
              <p class="client-paragraph valig "><em>Jeremy was a true professional to work with. He helped to create my logo and business cards for my blog. He understood my design concept, was timely, and the end result was exactly what I had hoped for. I would highly recommend his graphic and web services!</em><br/><span class="client-name right">Missy Somers ||
              <a href="http://www.behindtheplates.com/"target="_blank" class="client">Behind The Plates</a></span></p>
             <div class="quote right-quote">&rdquo;</div>
            </div>
          </div>
          <div class="darren quotes client-container">
            <div class="client-quote valign-wrapper">
              <div class="quote left-quote">&ldquo;</div>
              <p class="client-paragraph valign"><em>Jeremy has worked with us on numerous fronts from logo creation to promotional/marketing items for our tournaments and events. He was a pleasure to work with and the final products were just what we wanted. His flexibility, understanding of our goals, and ability to make our vision a reality made the experience stress free. We would recommend Jeremy to anyone for any and all of the services he offers. Thanks for the great work!!</em><br/><span class="client-name right">Darren D'Alconozo ||
              <a href="http://www.noideasports.com/"target="_blank" class="client">No Idea Sports</a></span></p>
             <div class="quote right-quote">&rdquo;</div>
            </div>
          </div>
          <div class="tim quotes client-container">
            <div class="client-quote valign-wrapper">
              <div class="quote left-quote">&ldquo;</div>
              <p class="client-paragraph valign"><em>Jeremy helped us to create our own logo for Nugent's Prime Meat Market. Jeremy hand drew our "Beef" logo. Even though we changed our minds and direction a few times Jeremy happily applied the changes we suggested. He delivered our final logo on time, and below budget. I would highly recommend Jeremy for all of your design needs!</em><br/><span class="client-name right">Tim Nugent ||
              <a href="http://www.nugentsprime.com/"target="_blank" class="client">Nugent's Prime Market</a></span></p>
              <div class="quote right-quote">&rdquo;</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mid-row">
      <div id="skills-scene"></div>
      <div id='skills' class='anchor'></div>
      <div id="skills-head-container">
        <h1 id="skills-header">Skills</h1>
      </div>
    </section>

    <section id="skills-section">
      <div class="container-fluid">
        <div class="skills-body">
          <div class="container">
            <div class="row">
              <div class="skills-row">
                <div class="col l6 m12 s12">
                  <div class="filter-skills-box">
                    <a id="design-skill" class="main-skill front-end-mobile"><i class="material-icons main-icon">palette</i></a>
                    <h5>Front End</h5>
                    <div id="design-p" class="skill-paragraph hide-on-small-only">
                      <p>Clean, Simplistic Aestetic,</p>
                      <p class="bottom-p">Yet Funky and oh so Fresh!</p>
                    </div>
                    <div id="design-p-mobile" class="skill-paragraph hide-on-med-and-up">
                      <p>Clean, Simplistic Aestetic,</p>
                      <p class="bottom-p">Yet Funky and oh so Fresh!</p>
                    </div>
                    <div class="front-icon-mobile">
                      <i class="devicons devicons-photoshop skill-icon"></i>
                      <i class="devicons devicons-illustrator skill-icon"></i>
                      <i class="devicons devicons-html5 skill-icon"></i>
                      <i class="devicons devicons-css3 skill-icon"></i>
                      <i class="devicons devicons-bootstrap skill-icon"></i><br/>
                      <i class="devicons devicons-materializecss skill-icon"></i>
                      <i class="devicons devicons-responsive skill-icon"></i>
                      <i class="devicons devicons-javascript skill-icon"></i>
                      <i class="devicons devicons-jquery skill-icon"></i>
                      <i class="devicons devicons-angular skill-icon"></i>
                    </div>
                  </div>
                </div>

                <div class="col l6 m12 s12">
                  <div class="filter-skills-box">
                    <a id="development-skill" class="main-skill back-end-mobile"><i class="devicons devicons-streamline main-icon"></i></a>
                    <h5>Back End</h5>
                    <div id="dev-p" class="skill-paragraph hide-on-small-only">
                      <p>Who's Your Data??</p>
                      <p class="bottom-p">That's Right, I'm Your Data</p>
                    </div>
                    <div id="dev-p" class="skill-paragraph hide-on-med-and-up">
                      <p>Who's Your Data??</p>
                      <p class="bottom-p">That's Right, I'm Your Data</p>
                    </div>
                    <div class="back-icon-mobile">
                      <i class="devicons devicons-nodejs_small skill-icon"></i>
                      <i class="devicons devicons-npm skill-icon"></i>
                      <i class="devicons devicons-mysql skill-icon"></i>
                      <i class="devicons devicons-mongodb skill-icon"></i>
                      <i class="devicons devicons-database skill-icon"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mid-row">
      <div id="contact-scene"></div>
      <div id='contact' class='anchor'></div>
      <div id="contact-head-container">
        <h1 id="contact-header">Contact</h1>
      </div>
    </section>

    <section id="contact-section">
      <div class="container-fluid">
        <div class="contact-body">
          <div class="container">
            <div class="row">
              <h4 id="message-header">Shoot Me A Message</h4>
              <div class='row'>
                <form class='col s12'>
                  <div class='row'>
                    <div class='input-field col l6 s12'>
                      <i class='material-icons prefix'>account_circle</i>
                      <input id='icon_prefix' type='text' class='validate' required= aria-required='true' value='<?php if ( isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>'>
                      <label for='icon_prefix'>Name</label>
                        <?php if ( isset($errName)) echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                    <div class='input-field col l6 s12'>
                      <i class='material-icons prefix'>email</i>
                      <input id='email' type='email' class='validate' required="true" aria-required='true' value='<?php if ( isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>'>
                      <label for='email'>Email</label>
                        <?php if ( isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col l12 s12'>
                      <i class='material-icons prefix'>mode_edit</i>
                      <textarea id='textarea1' class='materialize-textarea'><?php if ( isset($_POST['message'])) echo htmlspecialchars($_POST['message']);?></textarea>
                      <label for='textarea1'>Message</label>
                        <?php if ( isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                  </div>
                  <a href='#' class='slide-link contact-btn waves-effect waves-light btn right'>Send</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class='page-footer'>
    <div class='container'>

      <div class='row'>
        <div class='col l6 s12'>
          <h6 class='white-text'>JMIGSDESIGN</h6>
          <p class='grey-text text-lighten-4'>Thanks for checking out my page! Please come back and bring your friends. <br/>Perferably tall, gorgeoues and single.</p>
        </div>
        <div class='col l4 offset-l2 s12'>
          <h6 class='white-text'>Follow Me</h6>
          <div class='col s6'>
            <ul>
              <li><a class='grey-text text-lighten-3' href='http://facebook.com/jmigsdesign' target='blank'>Facebook</a></li>
              <li><a class='grey-text text-lighten-3' href='https://twitter.com/jmigsdesign'target='blank'>Twitter</a></li>
              <li><a class='grey-text text-lighten-3' href='http://instagram.com/jmigsdesign'target='blank'>Instagram</a></li>
            </ul>
          </div>
          <div class='col s6'>
            <ul>
              <li><a class='grey-text text-lighten-3' href='https://www.linkedin.com/in/jeremymiragliotta'target='blank'>LinkedIn</a></li>
              <li><a class='grey-text text-lighten-3' href='https://github.com/jdmiragliotta'target='blank'>GitHub</a></li>
              <li><a class='grey-text text-lighten-3' href='http://stackoverflow.com/users/5510697/jdmiragliotta'target='blank'>Stack Overflow</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class='footer-copyright'>
      <div class='container'>
      &copy; 2016 Jeremy Miragliotta | JMigsDesign.com
      </div>
    </div>
     </footer>



  <!-- jQuery JS -->
  <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
  <!-- GreenSock Animation JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js'></script>
  <!-- ScrollMagic JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
  <!-- Materialize JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>
  <!-- Custom JS  -->
  <script src='js/main.js' type='text/javascript'></script>
  <script src='js/welcome.js' type='text/javascript'></script>
  <script src='js/clients.js' type='text/javascript'></script>
  <script src='js/responsiveslides.min.js' type='text/javascript'></script>
  <script src='js/customscrollmagic.js' type='text/javascript'></script>
  <!-- SqueezeBox  -->
  <script src="js/sb_main.js"></script> <!-- Resource jQuery -->
  <!-- SmoothScroll -->
  <script type='text/javascript' src='js/smoothscroll.js'></script>


</body>
</html>
