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
      <div class="how-it-works-page-outer">
          <div class="how-it-works-banner-upper">
              <div class="upper-banner-img"></div>
              <div class="upper-banner-circle"></div>
              <div class="upper-banner-verticleline"></div>
              <div class="txt">
                <h1>Start with a project.</h1>
                <h2>Find a partner.</h2>
                <p>Storetasker connects you with the best Shopify developer for your project in just a few hours. </p>
                <a href="#">start a project</a>
              </div>   
          </div>
          <div class="how-it-works-banner-lower">
            <div class="lower-banner-row">
                <div class="txt">
                <h1><span>1&nbsp;.</span>You have a Shopify site that needs some work</h1>
                <p>Storetasker connects you with the best Shopify developer for your project in just a few hours. </p>
                </div>   
                <div class="img">
                    <img class="img-fluid" src="./assets/images/hero-bg-right.png" />
                </div>
            </div>
        </div>
      </div>
      <div class="txt-with-img-sec1-outer">
        <div class="txt-with-img-sec1-row">
            <div class="img">
                <img class="img-fluid" src="./assets/images/graphic-slider.png" />
                <div class="bottom-sec">
                    <div class="verticle-line"></div>
                    <div class="circle"></div>
                    <h4>Like Mark, a senior<br> Shopify developer</h4>
                    <img class="img-fluid" src="./assets/images/expert-2.png" />
                </div>
            </div>
            <div class="txt">
            <h1><span>2&nbsp;.</span>We???ll find the best Expert for your project</h1>
            <p>Typically this happens within a few hours, but more important is a great fit. We???ll search our network for the right person.</p>
            </div>  
        </div>
      </div>
      <div class="txt-with-img-sec2-outer">
        <div class="txt-with-img-sec2-row">
            <div class="txt">
              <div class="border-line"></div>
              <h1><span>3&nbsp;.</span>They send you a quote and get to work</h1>
              <p>We???ve removed the overhead to be 2-3x cheaper than most agencies without sacrificing quality.</p>
            </div>  
            <div class="img">
                <h2>Excited to work with you!</h2>
                <div class="right-side">
                <div class="bottom-sec">
                    <h1>Offer a gift with purchase</h1>
                    <div class="pricing-txt">
                    <div>
                        <p>timeline</p>
                        <span>2 days</span>
                    </div>
                    <div>
                        <p>price</p>
                        <span>$450</span>
                    </div>
                    </div>
                    <h3>QUOTE</h3>
                </div>
                <img class="bottom-img img-fluid" src="./assets/images/graphic-topper.png" />
                <img class="right-img img-fluid" src="./assets/images/graphic-attribution.png" />
                </div>
            </div>
        </div>
        <div class="txt-with-img-sec2-row">
            <div class="txt">
              <div class="border-line"></div>
              <h1><span>4&nbsp;.</span>You review and approve everything</h1>
              <p>Payment is held in escrow until you???ve reviewed the work. Satisfaction is guaranteed.</p>
            </div>  
            <div class="img">
                <h2>All set! What do you think?</h2>
                <div class="right-side images">
                <div class="only-img">
                <img class=" img-fluid" src="./assets/images/graphic-site.png" />
                </div>
                <img class="bottom-1-img img-fluid" src="./assets/images/graphic-cart.png" />
                <img class="right-1-img img-fluid" src="./assets/images/graphic-attribution.png" />
                </div>
            </div>
        </div>
        <div class="txt-with-img-sec3-row">
            <div class="img">
                <div class="verticle-line"></div>
                <div class="vertical-txt">
                    <h3><span></span>JANUARY</h3>
                    <h4>Hey Mark, we want to offer product bundles???</h4>
                    <h3><span></span>FEBRUARY</h3>
                    <h4>Can we make the site load faster on mobile????</h4>
                    <h3><span></span>MARCH</h3>
                    <h4>We want to launch subscriptions???</h4>
                </div>
            </div>
            <div class="txt">
              <h1><span>5&nbsp;.</span>Continue working together</h1>
              <p>Many customers have worked with their Storetasker Expert on 50+ projects over several years.</p>
            </div>
        </div>
      </div>
      <div class="story-section-outer how-it-workPage-story-section-outer">
        <div class="tabs-1">
          <ul id="tabs-nav-1">
            <li><a href="#tab-1"><img src="./assets/images/logo-toggle-orangewood.png" /></a></li>
            <li><a href="#tab-2"><img src="./assets/images/logo-toggle-boll.png" /></a></li>
            <li><a href="#tab-3"><img src="./assets/images/branch.png" /></a></li>
            <li><a href="#tab-4"><img src="./assets/images/ogee.png" /></a></li>
          </ul> 
          <div id="tabs-content-1">
            <div id="tab-1" class="tab-content-1">
              <div class="left-box">
                <h1>How it worked<br>
                  for Alex<img src="./assets/images/story-icon-ogee.png" /><br>
                  at<img src="./assets/images/main-icon-orangewood.png" />Ogee
                  <img src="./assets/images/end-arrow-right.png" />
                </h1>
                <div class="footer-txt">
                  <p>Amazing work as always. Super great bundle pages built, with excellent UX and high conversion rate."</p>
                  <span>ALEX, CO-FOUNDER, OGEE BEAUTY</span>
                </div>
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
      <div class="quotes-section-outer how-it-workPage-storysec-outer">
        <h3>GOOD TO GREAT</h3>
        <h1>The GoOnline Difference</h1>
        <p>You'll find your next Shopify developer, along with peace of mind.</p>
        <div class="quoute-row">
          <div class="quotes-box">
            <h2>Secure Payments</h2>
            <p>We hold payment in escrow. Your expert is paid once the job is done and approved by you.</p>
          </div>
          <div class="quotes-box">
            <h2>Ongoing Support</h2>
            <p>World class client service whenever you need it. We???re here to help every step of the way.</p>
          </div>
          <div class="quotes-box">
            <h2>Satisfaction Guaranteed</h2>
            <p>We review and stand behind our work. Rest assured, the code quality is top notch.</p>
          </div>
          <div class="quotes-box">
            <h2>Expert Community</h2>
            <p>Need more than one Expert? Storetasker can match you to a great Expert anytime, for free.</p>
          </div>
        </div>
      </div>
      <div class="projects-sizes-section-outer how-it-workPage-projects-sizes-section-outer">
        <div class="wrapper">
          <p>Our Differnce</p>
          <h1>Let???s chat about your</h1>
          <h2>other options</h2>
          <div class="arrow"></div>
          <div class="tabs">
            <ul id="tabs-nav">
              <li><a href="#tab1">Upwork</a></li>
              <li><a href="#tab2">Agency</a></li>
              <li><a href="#tab3">In-house</a></li>
              <li><a href="#tab4">DIY</a></li>
            </ul>
            <div id="tabs-content">
              <div id="tab1" class="tab-content">
                  <h3>*OUR SLIGHTLY BIASED OPINION</h3>
                  <h2>Upwork is the Wild West. It???s a broad, open marketplace where anyone can be an "expert"</h2>
            <div class="how-it-tabs-row">
               <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-mad.png" />
                <h5>You???ll be filling out a long project form</h5>
              </div>
              <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-yikes.png" />
                <h5>Their freelancers are un-vetted...</h5>
              </div>
              <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-death.png" />
                <h5>There are many scary stories from projects gone wrong.</h5>
              </div>
              <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-grumpy.png" />
                <h5>It???s on you to interview and hire the right person.</h5>
              </div>
              <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-like.png" />
                <h5>You can hire many different freelancers, from painters to personal assistants.</h5>
              </div>
              <div class="boxes">
                <img class="img-fluid" src="./assets/images/emoji-like.png" />
                <h5>It???s a huge company, which we guess is a good thing?</h5>
              </div>
            </div>
              </div>
              <div id="tab2" class="tab-content">
                <h3>*OUR SLIGHTLY BIASED OPINION</h3>
                <h2>Upwork is the Wild West. It???s a broad, open marketplace where anyone can be an "expert"</h2>
                <div class="how-it-tabs-row">
                    <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-mad.png" />
                     <h5>Significantly more expensive</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-yikes.png" />
                     <h5>The best agencies are selective about who they will work with</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-death.png" />
                     <h5>Better for large, end to end projects</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-grumpy.png" />
                     <h5>Typically slower timelines</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>You can get a multidisciplinary team under one roof which is helpful for large creative projects</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>They are established businesses with process and project management in place</h5>
                   </div>
                 </div>
              </div>
              <div id="tab3" class="tab-content">
                <h3>*OUR SLIGHTLY BIASED OPINION</h3>
                <h2>Upwork is the Wild West. It???s a broad, open marketplace where anyone can be an "expert"</h2>
                <div class="how-it-tabs-row">
                    <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-mad.png" />
                     <h5>$90-$130k per year plus benefits and taxes</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-yikes.png" />
                     <h5>Long hiring process</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-death.png" />
                     <h5>You???ll need lots of ongoing dev work to keep them busy</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-grumpy.png" />
                     <h5>You???ll likely need to contract or hire for other skill sets</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>Someone will always be proactively watching over the website.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>A great developer can be transformative</h5>
                   </div>
                 </div>
              </div>
              <div id="tab4" class="tab-content">
                <h3>*OUR SLIGHTLY BIASED OPINION</h3>
                <h2>Upwork is the Wild West. It???s a broad, open marketplace where anyone can be an "expert"</h2>
                <div class="how-it-tabs-row">
                    <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-mad.png" />
                     <h5>Time is money. For fast growing brands the opportunity cost is high.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-yikes.png" />
                     <h5>E-commerce is a team sport, you???ll need to play every position.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-death.png" />
                     <h5>Prepare to get frustrated while figuring it out.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-grumpy.png" />
                     <h5>You may not get it right the first time.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>It???s great to learn about Shopify development and how exactly your store works.</h5>
                   </div>
                   <div class="boxes">
                     <img class="img-fluid" src="./assets/images/emoji-like.png" />
                     <h5>No need to find, hire, or manage an agency or contract developer</h5>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="review-section-outer how-it-workPage-review-section-outer">
        <div class="header-txt">
          <h1>Don???t just take our</h1>
          <h2>word for it.</h2>
          <div class="arrow"></div>
        </div>
        <div class="review-x-slider review-x-slider-row">
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-rareform.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-rareform.png">
            </a>
          </div>
          <div class="card-block">
            <img class="top-img img-fluid card-img" src="./assets/images/bg-topper-fempower.png">
            <a class="js-fillcolor">
              <img class="img-fluid card-img" src="./assets/images/bg-full-fempower.png">
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
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-rareform.png">
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
              <img class="brand-logo img-fluid card-img" src="./assets/images/brand-logo-metta.png">
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
