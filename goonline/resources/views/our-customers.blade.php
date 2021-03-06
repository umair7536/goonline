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
      <div class="our-customers-banner-outer">
        <div class="customers-banner-txt">
          <h2>Trusted by the</h2>
          <h1>top brands on Shopify</h1>
          <p>Over 30,000 brands trust Storetasker as their go-to partner for all things Shopify development.</p>
        </div>
        <div class="customers-brandbelt ">
          <div class="brandbelt-line">
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-1.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-1.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-2.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-2.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-3.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-3.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-4.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-4.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-5.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-5.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-6.png"/></div>
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-6.png"/></div>
            </div>
          </div>
          <div class="brandbelt-line">
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-7.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-7.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-8.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-8.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-9.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-9.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-10.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-10.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-11.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-11.png"/></div>
            </div>
            <div class="brandbelt-line-lineitem">
              <div class="brandbelt-logo"><img class="img-fluid logo" src="./assets/images/cus-logo-12.png"/></div>
              <div class="brandbelt-photo"><img class="img-fluid logo" src="./assets/images/cus-brand-12.png"/></div>
            </div>
          </div>
        </div>
      </div>
      <div class="customer-scrollto-outer">
        <div class="scrollto-txt">
        <a href="#sec--1">fashion</a>
        <a href="#sec--2">home</a>
        <a href="#sec--3">food</a>
        <a href="#sec--4">wellness</a>
        <a href="#sec--5">beverage</a>
        <a href="#sec--6">beauty</a>
        <a href="#sec--7">pets</a>
        <a href="#sec--8">cbd</a>
      </div>
      </div>
      <div id="sec--1" class="scrollto-sec-outer scrollto-bg-black sec-1">
        <div class="img-sec-row">
          <div class="column-with-img col1">
            <div class="txt-sec font-white">
              <h2>Fashion</h2>
              <p>From recycled bags to haute couture, we???ve helped thousands of fashion brands bring style to the front door.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/cus-logo-1.png">
              <img class="img-fluid logo" src="./assets/images/product-chubbies.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/cus-logo-1.png">
              <img class="img-fluid logo" src="./assets/images/product-chubbies.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/cus-logo-2.png">
              <img class="img-fluid logo" src="./assets/images/product-etnies.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/cus-logo-3.png">
              <img class="img-fluid logo" src="./assets/images/product-chubbies.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/cus-logo-4.png">
              <img class="img-fluid logo" src="./assets/images/product-alpha.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div id="sec--2" class="scrollto-sec-outer scrollto-bg-white sec-2">
        <div class="img-sec-row row-reverse">
          <div class="column-with-img col1">
            <div class="txt-sec font-black">
              <h2>Home</h2>
              <p>From recycled bags to haute couture, we???ve helped thousands of fashion brands bring style to the front door.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-toggle-henry.png">
              <img class="img-fluid logo" src="./assets/images/product-boll.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-toggle-henry.png">
              <img class="img-fluid logo" src="./assets/images/product-boll.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-toggle-orangewood.png">
              <img class="img-fluid logo" src="./assets/images/product-branch.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/bedfolk.png">
              <img class="img-fluid logo" src="./assets/images/product-ordinary.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/branch.png">
              <img class="img-fluid logo" src="./assets/images/product-rigby.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div id="sec--3" class="scrollto-sec-outer scrollto-bg-grey sec-3">
        <div class="img-sec-row">
          <div class="column-with-img col1">
            <div class="txt-sec font-black">
              <h2>Food</h2>
              <p>We???ve added free samples, product bundles, and launched wholesale sites. Our experts understand the D2C kitchen.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-black-wildgood.png">
              <img class="img-fluid logo" src="./assets/images/product-wildgood.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-wildgood.png">
              <img class="img-fluid logo" src="./assets/images/product-wildgood.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-truff.png">
              <img class="img-fluid logo" src="./assets/images/product-truff.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-innermade.png">
              <img class="img-fluid logo" src="./assets/images/product-innermade.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-split.png">
              <img class="img-fluid logo" src="./assets/images/product-split.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div class="story-section-outer customers1Page-story-section-outer">
        <div class="tabs-1">
          <div id="tabs-content-1">
            <div id="tab-1" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Alex<img src="./assets/images/story-icon-ogee.png" /><br>
                  at<img src="./assets/images/main-icon-orangewood.png" />Ogee
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
              </div>
              <div class="right-box">
                <p>
                  <img src="./assets/images/story-icon-ogee.png" />
                  Alex was ready to migrate their site to Shopify
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
                  <img src="./assets/images/main-icon-ogee.png" />
                  Helping them launch site updates twice as fast
                </p>
              </div>
            </div>
          </div> 
        </div> 
      </div>
      <div id="sec--4" class="scrollto-sec-outer scrollto-bg-black sec-4">
        <div class="img-sec-row">
          <div class="column-with-img col1">
            <div class="txt-sec font-white">
              <h2>Wellness</h2>
              <p>We???ve worked with over 300 wellness brands making life healthier and more enjoyable each day.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-white-higher.png">
              <img class="img-fluid logo" src="./assets/images/product-pacha.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-higher.png">
              <img class="img-fluid logo" src="./assets/images/product-pacha.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-aisle.png">
              <img class="img-fluid logo" src="./assets/images/product-aisle.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-feel.png">
              <img class="img-fluid logo" src="./assets/images/product-feel.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-pacha.png">
              <img class="img-fluid logo" src="./assets/images/product-pacha.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div id="sec--5" class="scrollto-sec-outer scrollto-bg-white sec-5">
        <div class="img-sec-row row-reverse">
          <div class="column-with-img col1">
            <div class="txt-sec font-black">
              <h2>Beverage</h2>
              <p>Exercise drinks, elixirs, and D2C alcohol. Let???s make online your biggest channel (sorry grocery stores).</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-black-metta.png">
              <img class="img-fluid logo" src="./assets/images/product-metta.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-metta.png">
              <img class="img-fluid logo" src="./assets/images/product-metta.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-soylent.png">
              <img class="img-fluid logo" src="./assets/images/product-soylent.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-nooma.png">
              <img class="img-fluid logo" src="./assets/images/product-nooma.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-wino.png">
              <img class="img-fluid logo" src="./assets/images/product-wino.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div id="sec--6" class="scrollto-sec-outer scrollto-bg-grey sec-6">
        <div class="img-sec-row">
          <div class="column-with-img col1">
            <div class="txt-sec font-black">
              <h2>Beauty</h2>
              <p>Some of the biggest names in beauty are on Shopify. We???ve worked with hundreds of beauty brands on everything from in-cart upsells to custom product quizzes.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-black-superfluid.png">
              <img class="img-fluid logo" src="./assets/images/product-superfluid.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-superfluid.png">
              <img class="img-fluid logo" src="./assets/images/product-superfluid.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-bloom.png">
              <img class="img-fluid logo" src="./assets/images/product-bloom.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-ogee.png">
              <img class="img-fluid logo" src="./assets/images/product-ogee.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-henry.png">
              <img class="img-fluid logo" src="./assets/images/product-henry.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div class="story-section-outer customersPage-story-section-outer">
        <div class="tabs-1">
          <div id="tabs-content-1">
            <div id="tab-2" class="tab-content-1">
              <div class="left-box">
                <h1>How Alec
                 <img src="./assets/images/story-icon-ogee.png" /><br>
                 met<img src="./assets/images/main-icon-nick.png" />Andrew
                 for Rareform
                  <img src="./assets/images/bg-topper-rareform.png" />
                </h1>
              </div>
              <div class="right-box">
                <div class="footer-txt">
                  <p>Amazing work as always. Super great bundle pages built, with excellent UX and high conversion rate."</p>
                  <span>ALEX, CO-FOUNDER, OGEE BEAUTY</span>
                </div>
              </div>
            </div>
          </div> 
        </div> 
      </div>
      <div id="sec--7" class="scrollto-sec-outer scrollto-bg-black sec-7">
        <div class="img-sec-row">
          <div class="column-with-img col1">
            <div class="txt-sec font-white">
              <h2>Pets</h2>
              <p>From high end dog leashes to all natural pet food. Storetasker has helped some of the fastest growing pet brands take care of our best friends.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-white-modkat.png">
              <img class="img-fluid logo" src="./assets/images/product-modkat.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-modkat.png">
              <img class="img-fluid logo" src="./assets/images/product-modkat.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-jinx.png">
              <img class="img-fluid logo" src="./assets/images/product-jinx.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-polkadog.png">
              <img class="img-fluid logo" src="./assets/images/product-polkadog.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-white-ohpopdog.png">
              <img class="img-fluid logo" src="./assets/images/product-ohpopdog.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div id="sec--8" class="scrollto-sec-outer scrollto-bg-white sec-8">
        <div class="img-sec-row row-reverse">
          <div class="column-with-img col1">
            <div class="txt-sec font-black">
              <h2>CBD</h2>
              <p>One of the fastest growing industries in e-commerce. Our Experts know the complexities of running a CBD business.</p>
            </div>
            <a href="#" class="desktop-only">
              <img class="img-fluid logo" src="./assets/images/logo-black-joy.png">
              <img class="img-fluid logo" src="./assets/images/product-joy.png"/>
            </a>
            <h3 class="desktop-only">Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col1 mobile-only">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-joy.png">
              <img class="img-fluid logo" src="./assets/images/product-joy.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col2">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-upani.png">
              <img class="img-fluid logo" src="./assets/images/product-upani.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col3">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-paso.png">
              <img class="img-fluid logo" src="./assets/images/product-paso.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
          <div class="column-with-img col4">
            <a href="#">
              <img class="img-fluid logo" src="./assets/images/logo-black-lily.png">
              <img class="img-fluid logo" src="./assets/images/product-lily.png"/>
            </a>
            <h3>Chubbies works with Logan on a monthly retainer.</h3>
          </div>
        </div>
      </div>
      <div class="lets-start-section-outer customersPage-lets-start-section-outer">
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
    </div>
  </body>
</html>
