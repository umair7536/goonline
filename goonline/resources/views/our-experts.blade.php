<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" type="image/png" href="./assets/images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/source-sans-pro-stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/space-grotesk-stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/lobster-two-stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- Fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    
    <!-- Bootstrap cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/slick.min.js"></script>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <title>Go Online</title>
  </head>
 
  <body>
    <div class="popup-form">
      <div class="form-header">
        <button class="close">close</button>
        <button class="sign-in">or log in instead</button>
      </div>
      <div class="form-body">
        <h1>Get Started</h1>
        <p>It only takes a few minutes to kick off your first project. Then we'll match you with a Storetasker Expert.</p>
        <form>
        <label for="fname">Your Website</label><br>
        <input type="email" id="email" name="email" value="" placeholder="example.com"><br>
        <label for="fname">Tell Us About Your Project</label>
        <p class="see-example-btn">see examples</p>
        <textarea name="textarea" rows="5" cols="30" placeholder="Tell us as much as you can about your project. This helps us find the best expert to match you with. Feel free to link to a Google doc, share a screenshot, record a video, etc."></textarea>
        <div>
        <input type="file"  id="file" name="file" multiple>
        <p>use a template</p>
        </div>
        </form>
        <button class="next" type="submit" value="Submit">Next</button>
      </div>
      <div class="sign-in-form">
        <h1>Welcome back</h1>
        <p>Let's log into your account and get to work.</p>
        <form>
          <label for="email">Email</label><br>
          <input type="email" id="email" name="email" value="" placeholder="Email Address"><br>
          <button class="next" type="submit" value="Submit">Login</button>
        </form>
      </div>
    </div>
    <div class="see-example">
      <button class="back-btn">back</button>
      <h1>Example Projects</h1>
      <p>The best project descriptions include the following details:</p>
      <ul>
        <li>A quick introduction to your business and you</li>
        <li>A detailed description of what you need help with</li>
        <li>Context or the goal you're trying to achieve</li>
      </ul>
      <div class="txt">
        <h2>Example 1:</h2>
        <div class="inner">
          <h3>About Us:</h3>
          <p>Hi there, I'm Charlie, the founder of Melt. We sell CBD-infused bath bombs and are just getting started building this new business.</p>
          <h3>Project Description: </h3>
          <p>I recently purchased a Shopify theme from Out of the Sandbox and need help customizing it to fit our needs.</p>
          <p>Given that we only sell 1 product (with a handful of variations), we want to feature it directly on the home page, so that people don't have to click into the product page in order to buy.</p>
          <p>I'll attach the designs below to give you a sense of exactly what we're looking for.</p>
          <h3>Project Goal: </h3>
          <p>Before we launch, I want to make sure our store feels like our brand and properly highlights our product, as well as maximizes conversion rates.</p>
        </div>
      </div>
      <div class="txt">
        <h2>Example 2:</h2>
        <div class="inner">
          <h3>About Us:</h3>
          <p>I work for a digital marketing agency and we have a client that sells subscription boxes with succulents (plants).</p>
          <h3>Project Description: </h3>
          <p>We're helping them run Instagram ads and need your help to improve the conversion rates on the site. Specifically we're looking to:</p>
          <ul>
            <li>A quick introduction to your business and you</li>
            <li>A detailed description of what you need help with</li>
            <li>Context or the goal you're trying to achieve</li>
          </ul>
          <h3>Project Goal: </h3>
          <p>It would be great to jump on a Zoom call to hash out the final details. We'd love to get this done by the end of next week if possible.</p>
        </div>
      </div>
      <div class="txt">
        <h2>Example 3:</h2>
        <div class="inner">
          <h3>About Us:</h3>
          <p>I'm the e-commerce manager at an organic cat food brand. We've been around for the past couple years and have been running our store on WordPress with WooCommerce.</p>
          <h3>Project Description: </h3>
          <p>We're looking to hire a freelancer to help us migrate the existing site over to Shopify Plus and then handle ongoing changes from there. I'll attach our working document below that explains all the functionality that needs to be ported over. We're also looking to add a new wholesale channel into the mix as we expand our target customer base.</p>
          <h3>Project Goal: </h3>
          <p>Our ideal timeline is to make this happen over the next 2 - 3 months. Looking forward to working together!</p>
        </div>
      </div>
    </div>
    <div class="minimized-form">
      <div class="txt">
        <div>get started</div>
        <p>Welcome to Storetasker! Ready to start your first project?</p>
        <a>get started</a>
      </div>
    </div>
    <div class="main">
      <div class="header-container">
        <header class="header">
          <nav class="navbar navbar-expand-sm justify-content-between">
            <a class="navbar-brand-logo" href="/"> 
              <img
                      class="img-fluid logo"
                      src="./assets/images/logo.png"
              />
            </a>
            <div class="navbar-header only-desktop justify-content-between">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                 <a class="nav-link current" href="how-it-works">how it works</a>
                 </li>
                <li class="nav-item">
                  <a class="nav-link" href="our-experts">our experts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="our-customers">our customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pricing">pricing</a>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="become-an-expert">become an expert</a>
                </li>
                <li class="nav-item">
                  <p class="nav-link bordered-text">start a project</p>
                </li>
              </ul>
            </div>
            <div class="three">
              <div class="hamburger" id="hamburger-6">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <div class="navbar-header only-mobile justify-content-between">
              <ul class="navbar-nav">
                <li class="nav-item">
                 <a class="nav-link current" href="how-it-works">how it works</a>
                 </li>
                <li class="nav-item">
                  <a class="nav-link" href="our-experts">our experts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="our-customers">our customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pricing">pricing</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="become-an-expert">become an expert</a>
                </li>
                <li class="nav-item">
                  <p class="nav-link">start a project</p>
                </li>
              </ul>
            </div>
          </nav>
          <a href="#menu" id="toggle"><span></span></a>
        </header>
            
      </div>
      <div class="banner-outer pricing-banner-outer">
        <div class="wrappers">
         <div class="pricing-banner-row">
          <div class="banner-txt">
            <h1>Finding the best Shopify developers</h1>
            <h2>is what we do.</h2>
            <p>We???ve interviewed thousands of Shopify developers. Only the top 5% are asked to join the network.</p>
            <div class="banner-btns">
              <a href="#" class="btn">start a project</a>
              <p>
                <span>Trusted by 30,000+ brands on
                  <img src="./assets/images/shopify-logo-white.png" class="img-fluid">
                </span>
              </p>
            </div>

          </div>
          <div class="slider-xx banner-imgs">
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-1.png">
                  <div class="txt">
                    <h2>Like Chiara</h2>
                    <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-2.png">
                  <div class="txt">
                    <h2>Like Siah</h2>
                    <p>She has Google on her resume but prefers to work with founders hands on.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-3.png">
                  <div class="txt">
                    <h2>Like Mark</h2>
                    <p>Storetasker Expert since 2017, Thomas has partnered with Truff Hot Sauce and Lily CBD among 30 other D2C brands.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-4.png">
                  <div class="txt">
                    <h2>Like Thomas</h2>
                    <p>She has 5 years of experience developing on Shopify and years of experience doing digital marketing for Wellness brands.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-5.png">
                  <div class="txt">
                    <h2>Like Rosa</h2>
                    <p>Skincare and wellness brands love working with Chiara. She???s completed over 100 projects with Storetasker.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-6.png">
                  <div class="txt">
                    <h2>Like Adan</h2>
                    <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-7.png">
                  <div class="txt">
                    <h2>Like Gina</h2>
                    <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
              <div class="card-block">
                <div class="left-border"></div>
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-8.png">
                  <div class="txt">
                    <h2>Like Sean</h2>
                    <p>From complex site builds to custom Shopify apps, Adan can do it. Even better, it???s always done on time.</p>
                  </div>
                </a>
                <div class="right-border"></div>
              </div>
          </div>
         </div>
         <div class="slider-yy">
            <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-1.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-2.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-3.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-4.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-5.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-6.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-7.png">
                </a>
              </div>
              <div class="card-block">
                <a>
                  <img class="img-fluid card-img" src="./assets/images/expert-8.png">
                </a>
              </div>
         </div>
        </div>
      </div>
      <div class="how-it-works-outer expertPage-how-it-works-outer wrapper">
        <p>HOW IT WORKS</p>
        <h1>It???s easy, with an expert.</h1>
        <div class="how-it-works-row">
          <div class="box">
            <span>[1]</span>
            <h2>Come with a project.<br>Meet your expert.</h2>
            <p>For projects big and small. We???ll match you to the Expert best fit for your project (often within a few hours).</p>
          </div>
          <div class="box">
            <span>[2]</span>
            <h2>They get the<br>work done.</h2>
            <p>On time and within budget. Text, email, or jump on a call. You???ll get a fair quote up front.</p>
          </div>
          <div class="box">
            <span>[3]</span>
            <h2>Storetasker is<br>there along the way.</h2>
            <p>Access to the entire community of Experts. Ongoing support, and a seamless process end to end.</p>
          </div>
        </div>
      </div>
      <div class="experts-section-outer expertPage-experts-section-outer">
        <div class="slider-experts slider-experts-row">
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/expert-1.png">
              <div class="txt">
                <h2>Meet Chiara</h2>
                <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/expert-2.png">
              <div class="txt">
                <h2>Meet Siah</h2>
                <p>She has Google on her resume but prefers to work with founders hands on.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/expert-3.png">
              <div class="txt">
                <h2>Meet Mark</h2>
                <p>Storetasker Expert since 2017, Thomas has partnered with Truff Hot Sauce and Lily CBD among 30 other D2C brands.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/expert-4.png">
              <div class="txt">
                <h2>Meet Thomas</h2>
                <p>She has 5 years of experience developing on Shopify and years of experience doing digital marketing for Wellness brands.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/expert-5.png">
              <div class="txt">
                <h2>Meet Rosa</h2>
                <p>Skincare and wellness brands love working with Chiara. She???s completed over 100 projects with Storetasker.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a>
              <img class="img-fluid card-img" src="./assets/images/expert-6.png">
              <div class="txt">
                <h2>Meet Adan</h2>
                <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a>
              <img class="img-fluid card-img" src="./assets/images/expert-7.png">
              <div class="txt">
                <h2>Meet Gina</h2>
                <p>Surfer, farmer, Shopify developer. Sean knows everything there is to know about selling subscriptions.</p>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a>
              <img class="img-fluid card-img" src="./assets/images/expert-8.png">
              <div class="txt">
                <h2>Meet Sean</h2>
                <p>From complex site builds to custom Shopify apps, Adan can do it. Even better, it???s always done on time.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="experts-text-section">
          <p>OUR EXPERTS</p>
          <h1>Hundreds of Experts.<br><span>One for you.</span></h1>
          <div class="arrow-down"></div>
          <p>We???ve already interviewed over 5,000 developers<br> and have hand selected the top 5%.</p>
        </div>
        <div class="how-it-works-row">
          <div class="box">
            <h2>Held to the<br>highest standards</h2>
            <p>We accept the best and then work with them closely to ensure a great experience.</p>
          </div>
          <div class="box">
            <h2>True masters of<br>their craft</h2>
            <p>Every expert has years of full-time experience developing on Shopify along with a passion for e-commerce.</p>
          </div>
          <div class="box">
            <h2>Easy and reliable<br>to work with</h2>
            <p>Just as important as code quality, we care about communication, timelines, and project management.</p>
          </div>
        </div>
      </div>
      <div class="story-section-outer expertPage-story-section-outer">
        <div class="tabs-1">
          <ul id="tabs-nav-1">
            <li><a href="#tab-1"><img src="./assets/images/logo-toggle-henry.png" /></a></li>
            <li><a href="#tab-2"><img src="./assets/images/logo-toggle-cabana.png" /></a></li>
            <li><a href="#tab-3"><img src="./assets/images/branch.png" /></a></li>
            <li><a href="#tab-4"><img src="./assets/images/truff.png" /></a></li>
          </ul> 
          <div id="tabs-content-1">
            <div id="tab-1" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Nick<img src="./assets/images/main-icon-nick.png" /><br>
                  at<img src="./assets/images/main-icon-truff.png" />Truff
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
                <div class="footer-txt">
                  <p>Amazing work as always. Super great bundle pages built, with excellent UX and high conversion rate."</p>
                  <span>ALEX, CO-FOUNDER, OGEE BEAUTY</span>
                </div>
              </div>
              <div class="right-box">
                <p>
                  <img src="./assets/images/main-icon-nick.png" />
                  Nick was ready to migrate their site to Shopify
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  We matched him to Rebecca
                  <img src="./assets/images/story-icon-ogy.png" />
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  They???ve done 38 projects together since then
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  <img src="./assets/images/main-icon-truff.png" />
                  Helping them launch site updates twice as fast
                </p>
              </div>
            </div>
            <div id="tab-2" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Nick<img src="./assets/images/story-icon-shastri.png" /><br>
                  at<img src="./assets/images/story-icon-higher.png" />Truff
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
                <div class="footer-txt">
                  <p>Great help and quick turnaround."</p>
                  <span>NICK, CO-FOUNDER OF TRUFF HOT SAUCE</span>
                </div>
              </div>
              <div class="right-box">
                <p>
                  <img src="./assets/images/story-icon-shastri.png" />
                  Nick needed to create a new product page
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  We matched him to Thomas
                  <img src="./assets/images/story-icon-chiara.png" />
                  in 8 hours.
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  They???ve done 51 projects together over two years
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  <img src="./assets/images/story-icon-higher.png" />
                  Helping Truff scale up with incredible growth
                </p>
              </div>
            </div>
            <div id="tab-3" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Jo<img src="./assets/images/story-icon-siah.png" /><br>
                  at<img src="./assets/images/story-icon-bedfolk.png" />Bedfolk
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
                <div class="footer-txt">
                  <p>We???ve worked with Satish a number of times and he is always very professional, efficient and does an excellent job. Highly recommend."</p>
                  <span>JO, FOUNDER OF BEDFOLK</span>
                </div>
              </div>
              <div class="right-box">
                <p>
                  <img src="./assets/images/story-icon-siah.png" />
                  Jo wanted a color selector on the product page
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  We matched her to Satish
                  <img src="./assets/images/story-icon-leonardo.png" />
                  in 3 hours.
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  They???ve done 19 projects together since then
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  <img src="./assets/images/story-icon-bedfolk.png" />
                  Helping Bedfolk build a better customer experience
                </p>
              </div>
            </div>
            <div id="tab-4" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Sib<img src="./assets/images/story-icon-logan.png" /><br>
                  at<img src="./assets/images/story-icon-aisle.png" />Branch
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
                <div class="footer-txt">
                  <p>Prompt, detailed, clear communication, and high quality work as usual. Thanks Chris!"</p>
                  <span>SIB, CO-FOUNDER OF BRANCH FURNITURE</span>
                </div>
              </div>
              <div class="right-box">
                <p>
                  <img src="./assets/images/story-icon-logan.png" />
                  Sib wanted to add a currency selector to the site
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  We matched him to Chris
                  <img src="./assets/images/story-icon-ogy.png" />
                  in under an hour.
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  They???ve done 16 projects together since then
                </p>
                <div class="story-time-line-step-between"></div>
                <p>
                  <img src="./assets/images/story-icon-aisle.png" />
                  Helping them launch site updates twice as fast.
                </p>
              </div>
            </div>
          </div> 
        </div> 
      </div>
      <div class="heavy-lifting-outer">
        <div class="bg-slider heavy-lifting-bg-slider">
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-1.png">
          </a>
          </div>
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-2.png">
          </a>
          </div>
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-3.png">
          </a>
          </div>
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-4.png">
          </a>
          </div>
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-5.png">
          </a>
          </div>
          <div class="card-block">
          <a>
          <img class="img-fluid card-img" src="./assets/images/expert-6.png">
          </a>
          </div>
        </div>
        <div class="heavy-lifting-row">
            <div class="left-sec">
              <p>WHAT WE DO</p>
              <h1>We???ve done the<br><span>heavy lifting</span></h1>
              <div class="left-slider heavy-lifting-left-slider">
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Rosa</h2>
                    <h3>6 years of experience</h3>
                    <p>With a background in marketing, Rosa is skilled developer who builds with sales and conversion in mind.</p>
                    <h3>Focus</h3>
                    <p>Theme customizations, Klayvio email flows</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-1.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Chiara</h2>
                    <h3>Full-time turned freelance</h3>
                    <p>Custom theme development is her art and Javascript is her brush. Away from work, Chiara is offen teaching people to code.</p>
                    <h3>Focus</h3>
                    <p>Theme customizations, Klayvio email flows</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-2.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Siah</h2>
                    <h3>7 years of experience</h3>
                    <p>With a background in marketing, Rosa is skilled developer who builds with sales and conversion in mind.</p>
                    <h3>Focus</h3>
                    <p>Subscriptions, Full site builds</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-3.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Gina</h2>
                    <h3>Full-time turned freelance</h3>
                    <p>Sean has been called the ???most reliable coder ever!??? He???s worked closely with Shopify Plus agencies and can easily hop on any team.</p>
                    <h3>Focus</h3>
                    <p>Apparel and Cosmetics Brands</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-4.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Sean</h2>
                    <h3>10 years of experience</h3>
                    <p>With a background in marketing, Rosa is skilled developer who builds with sales and conversion in mind.</p>
                    <h3>Focus</h3>
                    <p>Shopify Plus, ReCharge Subscriptions</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-5.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
                <div class="card-block row">
                  <div class="txt">
                    <h2>Meet, Faisal</h2>
                    <h3>2 years of experience</h3>
                    <p>Mark has worked with over 150 clients. Beyond coding, he brings a depth of e-commerce knowledge to any project.</p>
                    <h3>Focus</h3>
                    <p>Subscriptions, Full site builds</p>
                  </div>
                  <div class="img">
                    <div class="left-border"></div>
                    <a>
                      <img class="img-fluid card-img" src="./assets/images/expert-6.png">
                    </a>
                    <div class="right-border"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-sec">
              <p>We search far and wide for the best Shopify Experts. Here???s what we look for:</p>
              <div class="arrow"></div>
              <div class="right-slider heavy-lifting-right-slider">
                <div class="tab-txt">Impressive work experience</div>
                <div class="tab-txt">E-commerce expertise</div>
                <div class="tab-txt">Great communication skills</div>
                <div class="tab-txt">Technical coding ability</div>
                <div class="tab-txt">Project management skills</div>
                <div class="tab-txt">Reliability and availability</div>
              </div>
            </div>
        </div>
      </div>
      <div class="shopify-brands-logo-outer">
        <h1>Shopify and beyond</h1>
        <p>Storetasker is partnered with over 150 of the most popular Shopify apps, themes, and creative agencies.</p>
        <div class="logo-imgs">
            <img class="img-fluid" src="./assets/images/bold.png">
            <img class="img-fluid" src="./assets/images/pxu.png">
            <img class="img-fluid" src="./assets/images/recharge.png">
            <img class="img-fluid" src="./assets/images/archetype.png">
            <img class="img-fluid" src="./assets/images/referral.png">
            <img class="img-fluid" src="./assets/images/privy.png">
            <img class="img-fluid" src="./assets/images/shogun.png">
            <img class="img-fluid" src="./assets/images/oots.png">
            <img class="img-fluid" src="./assets/images/pushowl.png">
            <img class="img-fluid" src="./assets/images/brex.png">
            <img class="img-fluid" src="./assets/images/nacelle.png">
            <img class="img-fluid" src="./assets/images/troop.png">
        </div>
      </div>
      <div class="review-section-outer expertPage-review-section-outer">
        <div class="header-txt">
          <h1>Don???t just take our</h1>
          <h2>word for it.</h2>
          <div class="arrow"></div>
        </div>
        <div class="review-x-slider review-x-slider-row">
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-ogee.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-ogee.png">
            </a>
          </div>
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-carami.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-carami.png">
            </a>
          </div>
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-lily.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-lily.png">
            </a>
          </div>
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-ordinary.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-ordinary.png">
            </a>
          </div>
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-lily.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-fempower.png">
            </a>
          </div>
        </div>
        <div class="review-y-slider review-y-slider-row">
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-carami.png">
              <p>Amazing communication and was fast to respond and timelines were kept and or beat which was perfect and important!???</p>
              <div class="txt-with-img">
                <img class="img-fluid card-img" src="./assets/images/story-icon-shastri.png">
                <div class="text">
                  <h3>ALEC AVEDISSIAN</h3>
                  <h4>CEO, RAREFORM</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-ogee.png">
              <p>Have used Mark multiple times and will continue to use him. He is absolutely epic.???</p>
              <div class="txt-with-img">
                <img class="img-fluid card-img" src="./assets/images/story-icon-chiara.png">
                <div class="text">
                  <h3>THOMAS WALKER</h3>
                  <h4>CO-FOUNDER, METTA</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-fempower.png">
              <p>Siah and her team were extremely patient and attentive to all of our needs and feedback. From beginning to end, we felt constantly supported and knew that we were in good hands.???</p>
              <div class="txt-with-img">
                <img class="img-fluid card-img" src="./assets/images/story-icon-leonardo.png">
                <div class="text">
                  <h3>CHRISTINA BASIAS</h3>
                  <h4>CO-FOUNDER, FEMPOWER BEAUTY</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-lily.png">
              <p>Luke was such a pleasure to work with over the last few weeks. Highly recommend. Thank you Storetasker for the high quality dev folks!???</p>
              <div class="txt-with-img">
                <img class="img-fluid card-img" src="./assets/images/story-icon-ogy.png">
                <div class="text">
                  <h3>RUSSELL MARKUS</h3>
                  <h4>FOUNDER, LILY CBD</h4>
                </div>
              </div>
            </a>
          </div>
          <div class="card-block">
            <a class="js-fillcolor">
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-ordinary.png">
              <p>So quick and so helpful and totally understood what I needed and more!???</p>
              <div class="txt-with-img">
                <img class="img-fluid card-img" src="./assets/images/story-icon-ivan.png">
                <div class="text">
                  <h3>TRE HOPKINS</h3>
                  <h4>CO-FOUNDER, ORDINARY HABIT</h4>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="lets-start-section-outer">
        <div class="wrapper">
          <div class="text">
            <h1>Let's start your first project </h1>
            <div class="lets-start-btns">
              <p>The best Shopify brands deserve
                the best Shopify developers.</p>
              <a href="#" class="btn">Start a Project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-outer">
        <div class="container">
          <div class="row footer-menu">
            <div class="column-left">
            <a class="navbar-brand-logo" href="/"> 
              <img
                      class="img-fluid logo"
                      src="./assets/images/logo-footer.png"
              />
            </a>
            <div class="navbar-footer">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active-item" href="#">home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">how it works</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="pricing">our experts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="integration">our customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pricing">pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="partners">support</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">partner with us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">become an expert</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">public reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">expert login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">partner login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">customer login</a>
                </li>
              </ul>
            </div>
            </div>
            <div class="column-right">
            <div class="footer-right-side">
              <h1 class="footer-right-side-title">Are you a skilled Shopify Expert?</h1>
              <div class="footer-right-side-desc">
                <p>Endless new clients, great software, and a supportive community. Experience freelancing at its finest.</p>
                <a class="btn" href="#">learn more</a>
              </div>
            </div>
            </div>
          </div>
          <div class="footer-links-social">
          <a target="_blank" rel="noopener noreferrer" class="social-icons footer-links-socialitem-facebook" href="#"></a>
          <a target="_blank" rel="noopener noreferrer" class="social-icons footer-links-socialitem-instagram" href="#"></a>
          <a target="_blank" rel="noopener noreferrer" class="social-icons footer-links-socialitem-linkedin" href="#"></a>
          </div>
          <div class="footer-links-below">
            <a class="footer-links-below-item">?? 2021 Lorem Technologies, Inc.</a>
            <a class="footer-links-below-item" href="#">privacy policy</a>
            <a class="footer-links-below-item" href="#">terms of service</a>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
