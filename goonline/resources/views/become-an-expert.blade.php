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
      <div class="become-an-expert-banner-outer">
        <div class="become-an-expert-banner-row">
            <div class="txt">
                <h1>Join the community of</h1>
                <h2>top Shopify Experts</h2>
                <p>Endless clients, great software, and support when you need it. Experience freelancing at its finest.</p>
                <a href="#">apply now</a>
                <span>For freelancers,<br>
                    by freelancers.</span>
            </div>
            <div class="img">
                <img class="img-fluid" src="./assets/images/hero-bg-large.png" />
            </div>
        </div>
        <div class="become-an-expert-banner-slider">
            <div class="txt">
                <h1>Work with fast-growing</h1>
                <h2>brands on Shopify</h2>
                <span></span>
            </div>
            <div class="row-banner-slider">
            <div class="banner-slider become-ae-slider">
                <div class="img-with-txt">
                    <img class="img-fluid" src="./assets/images/brand-product-henry.png" />
                    <img class="img-fluid" src="./assets/images/brand-logo-henry1.png" />
                </div>
                <div class="img-with-txt">
                    <img class="img-fluid" src="./assets/images/brand-product-wildgood.png" />
                    <img class="img-fluid" src="./assets/images/brand-logo-wildgood.png" />
                </div>
                <div class="img-with-txt">
                    <img class="img-fluid" src="./assets/images/brand-product-chubbies.png" />
                    <img class="img-fluid" src="./assets/images/brand-logo-chubbies.png" />
                </div>
                <div class="img-with-txt">
                    <img class="img-fluid" src="./assets/images/brand-product-plenaire.png" />
                    <img class="img-fluid" src="./assets/images/brand-logo-plenaire.png" />
                </div>
            </div>
            <div class="banner-slider-txt become-aet-slider">
                <div>
                <h1>How Justine<img class="img-fluid" src="./assets/images/story-icon-ogy.png" />
                    started working
                    with Jack Henry</h1>
                <p>They???ve done 8 projects together so far.</p>
                </div>
                <div>
                    <h1>How Joe<img class="img-fluid" src="./assets/images/story-icon-markw.png" />
                        started working
                        with Wildgood</h1>
                    <p>They???ve done 2 projects together so far.</p>
                </div>
                <div>
                    <h1>How Adan<img class="img-fluid" src="./assets/images/story-icon-logan.png" />
                        started working
                         with Plenaire</h1>
                    <p>They???ve done 5 projects together so far.</p>
                </div>
                <div>
                    <h1>How Luke<img class="img-fluid" src="./assets/images/story-icon-ivan.png" />
                        started working
                         with Superfluid</h1>
                    <p>They???ve done 7 projects together so far.</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="circle"></div>
            </div>
        </div>
      </div>
      <div class="freelancing-txt-sec-outer">
        <div class="top-txt-sec">
          <div class="txt-row">
            <div class="left-sec">
              <h1>Freelancing</h1>
              <h2>was broken</h2>
              <div>
              <h3>A global price race to the bottom</h3>
              <p> Due to cutthroat competition and quote shopping clients</p>
              </div>
              <div>
              <h3>Just another name in a list of 1,500</h3>
              <p>How do you stick out when someone is always willing to work for less?</p>
              </div>
              <div>
              <h3>Rebuilding reputation from scratch</h3>
              <p>Worrying about your 4.7 star rating, despite years of experience</p>
              </div>
              <div>
              <h3>Bidding on dozens, just to win one</h3>
              <p>Wasting time interviewing and chasing leads that won't convert</p>
              </div>
            </div>
            <div class="right-sec">
              <h4>The existing plaforms have made it nearly impossible for high-quality freelancers to succeed.</h4>
              <div class="arrow"></div>
              <h5>Let's change that.</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="freelancing-txt-sec-outer better-way-txt-sec-outer">
        <div class="bottom-txt-sec">
          <div class="txt-row">
            <div class="left-sec">
              <h1>We created</h1>
              <h2>a better way</h2>
              <div>
              <h3>Community, not competition</h3>
              <p>With 1:1 matching, you'll never compete against your fellow freelancers</p>
              </div>
              <div>
              <h3>Endless clients & opportunities</h3>
              <p>You choose your clients and how much work you want every week</p>
              </div>
              <div>
              <h3>Only the top 5% of Shopify Experts</h3>
              <p>We interview thousands to select the best members for our community</p>
              </div>
              <div>
              <h3>No external ratings or profiles</h3>
              <p>No need for comparison, clients trust Storetasker's reputation</p>
              </div>
            </div>
            <div class="right-sec">
              <h4>Our Experts average over $5,000 per month with 82% of quotes accepted.</h4>
              <div class="arrow"></div>
              <h5>Storetasker has built the platform for high-quality freelancers.</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="expert-sec-slider-outer">
        <div class="sec-row">
          <div class="left-sec">
            <h1>Join our community of</h1>
            <h2>Shopify Experts</h2>
          </div>
          <div class="right-sec">
            <p>E-commerce development, conversion rate optimization, strategy, and more.</p>
            <a href="#">Apply Now</a>
          </div>
        </div>
        <div class="expert-photos expert-photos-slider">
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-1.png" />
            <p>Full Time Freelancer</p>
          </div>
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-2.png" />
            <p>BOUTIQUE AGENCY</p>
          </div>
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-3.png" />
            <p>BOUTIQUE AGENCY</p>
          </div>
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-4.png" />
            <p>Full Time Freelancer</p>
          </div>
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-5.png" />
            <p>Full Time Freelancer</p>
          </div>
          <div class="wrap">
            <img class="img-fluid" src="./assets/images/expert-6.png" />
            <p>Full Time Freelancer</p>
          </div>
        </div>
        <div class="expert-txt expert-txt-slider">
          <div>
          <div class="sec-row">
            <div class="colum">
              <h2>Adan</h2>
              <h3>13 years of freelancing experience</h3>
              <p>From custom Shopify apps to complex e-commerce site, Adan had done it all</p>
            </div>
            <div class="colum">
              <h3>Guatemala</h3>
              <p>Location</p>
              <h3>$15,000</h3>
              <p>Storetasker monthly earnings</p>
            </div>
            <div class="colum">
              <h3>2 years</h3>
              <p>With Storetasker</p>
              <h3>75%</h3>
              <p>% of income from Storetasker</p>
            </div>
            <div class="colum">
              <h3>Storetasker has made a huge impact in my career and my personal life. I have the blessing and the opportunity to work with premium brands and build different type of digital products, to help them achieve success with their goals."</h3>
            </div>
          </div>
          </div>
          <div>
            <div class="sec-row">
              <div class="colum">
                <h2>Gina</h2>
                <h3>9 years of freelancing experience</h3>
                <p>A former digital marketer, turned Shopify developer. She loves hiking with her dog, Lucy.</p>
              </div>
              <div class="colum">
                <h3>USA</h3>
                <p>Location</p>
                <h3>$62,000</h3>
                <p>Storetasker monthly earnings</p>
              </div>
              <div class="colum">
                <h3>2 years</h3>
                <p>With Storetasker</p>
                <h3>40%</h3>
                <p>% of income from Storetasker</p>
              </div>
              <div class="colum">
                <h3>Working on Storetasker has connected me to some wonderful clients. There are tons of new opportunities every single day -- no more awkward gaps or slow weeks which has been so nice.???</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="sec-row">
              <div class="colum">
                <h2>Mark</h2>
                <h3>15 years of freelancing experience</h3>
                <p>Mark has built over 100 websites and enjoys crafting unique customer experiences</p>
              </div>
              <div class="colum">
                <h3>England</h3>
                <p>Location</p>
                <h3>$15</h3>
                <p>Clients on a monthly retainer</p>
              </div>
              <div class="colum">
                <h3>3 years</h3>
                <p>With Storetasker</p>
                <h3>35%</h3>
                <p>% of income from Storetasker</p>
              </div>
              <div class="colum">
                <h3>Storetasker has connected me with clients that would never have been possible without them. That combined with an incredible support network and community makes joining an amazing opportunity for any developer???</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="sec-row">
              <div class="colum">
                <h2>Chiara</h2>
                <h3>5 years of freelancing experience</h3>
                <p>She focuses on Shopify customizations that improve user experience and increase revenue</p>
              </div>
              <div class="colum">
                <h3>Canada</h3>
                <p>Location</p>
                <h3>$10,800</h3>
                <p>Storetasker monthly earnings</p>
              </div>
              <div class="colum">
                <h3>2 years</h3>
                <p>With Storetasker</p>
                <h3>100%</h3>
                <p>% of income from Storetasker</p>
              </div>
              <div class="colum">
                <h3>I never thought I would see my career reach such great heights thanks to Storetasker. Every day, week, and month I???m thankful that I get to help clients build their brand on Shopify through code ??? from appearance to functionality.???</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="sec-row">
              <div class="colum">
                <h2>Adan</h2>
                <h3>13 years of freelancing experience</h3>
                <p>From custom Shopify apps to complex e-commerce site, Adan had done it all</p>
              </div>
              <div class="colum">
                <h3>Guatemala</h3>
                <p>Location</p>
                <h3>$15,000</h3>
                <p>Storetasker monthly earnings</p>
              </div>
              <div class="colum">
                <h3>2 years</h3>
                <p>With Storetasker</p>
                <h3>75%</h3>
                <p>% of income from Storetasker</p>
              </div>
              <div class="colum">
                <h3>Storetasker has made a huge impact in my career and my personal life. I have the blessing and the opportunity to work with premium brands and build different type of digital products, to help them achieve success with their goals."</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="sec-row">
              <div class="colum">
                <h2>Thomas </h2>
                <h3>8 years of freelancing experience</h3>
                <p>Thomas loves building custom themes end to end and recently launched his own Shopify App</p>
              </div>
              <div class="colum">
                <h3>Canada</h3>
                <p>Location</p>
                <h3>$7,000</h3>
                <p>Storetasker monthly earnings</p>
              </div>
              <div class="colum">
                <h3>4 years</h3>
                <p>With Storetasker</p>
                <h3>50%</h3>
                <p>% of income from Storetasker</p>
              </div>
              <div class="colum">
                <h3>Storetasker is the first place I go when my schedule is opens up. Over the last four years it???s enabled me to grow from a solo freelancer into a small agency, while constantly getting to work with amazing brands.???</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="become-an-expert-tab-outer">
        <div class="left-sec">
          <h1>Independence</h1>
          <h2>with a team</h2>
          <ul id="tabs-expert-1">
            <li><a href="#expert-tab-1" class="tabs-txt">
              <h3>A smart and helpful community</h3>
              <p>Our private Slack group is a place to ask technical questions, get advice, and connect with Experts around the world.</p>
            </a></li>
            <li><a href="#expert-tab-2" class="tabs-txt">
              <h3>Work as little or as much as you want</h3>
              <p>From once in a while to 8 days a week, Storetasker can be your main gig or just an easy way to fill in the gaps. You decide.</p>
            </a></li>
            <li><a href="#expert-tab-3" class="tabs-txt">
              <h3>Project support, when you need it</h3>
              <p>Our Support Team is here to help! From closing a big project to managing a tricky client, we've always got your back.</p>
            </a></li>
          </ul> 
        </div>
        <div id="tabs-content-1" class="right-sec">
        <div id="expert-tab-1" class="tab-expert-1" >
          <img class="img-fluid" src="./assets/images/indy-a-1.png" />
          <img class="img-fluid" src="./assets/images/indy-a-2.png" />
          <img class="img-fluid" src="./assets/images/indy-a-3.png" />
        </div>
        <div id="expert-tab-2" class="tab-expert-1">
          <img class="img-fluid" src="./assets/images/indy-b-1.f.png" />
          <img class="img-fluid" src="./assets/images/indy-b-2.png" />
          <img class="img-fluid" src="./assets/images/indy-b-3.png" />
        </div>
        <div id="expert-tab-3" class="tab-expert-1">
          <img class="img-fluid" src="./assets/images/indy-a-1.png" />
          <img class="img-fluid" src="./assets/images/indy-a-2.png" />
          <img class="img-fluid" src="./assets/images/indy-a-3.png" />
        </div>
        </div>
      </div>
      <div class="multi-color-txt-outer">
        <h1>Great software</h1>
        <h2>for great experts</h2>
        <p>Integrated email, SMS, phone calls, voicemail. Calendar, meeting invites, 
          scheduling links. Reminders, notes, project management tools. Escrow, quotes,
           bills, invoices, subscriptions. Automated payments worldwide.</p>
        <h5>+ new features added every week</h5>
      </div>
      <div class="projects-sizes-section-outer expertPage-projects-sizes-section-outer">
        <div class="wrapper">
          <h1>Every type of Shopify project,</h1>
          <h2>like these.</h2>
          <div class="arrow"></div>
          <div class="tabs">
            <ul id="tabs-nav">
              <li><a href="#tab1">Small</a></li>
              <li><a href="#tab2">Medium</a></li>
              <li><a href="#tab3">Large</a></li>
              <li><a href="#tab4">XL</a></li>
            </ul>
            <div id="tabs-content">
              <div id="tab1" class="tab-content">
               <div class="boxes box-1">
                <div class="box box">
                  <div class="project-size-item-badge">small</div>
                  <h2>Theme edits</h2>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">timeline</div>
                    <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">starting at</div>
                    <div class="project-size-item-featurevalue">$75</div>
                  </div>
                </div>
                <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
              </div>
              <div class="boxes box-2">
                <div class="box">
                <div class="project-size-item-badge">small</div>
                <h2>Setup Facebook tracking</h2>
                <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">1 day</div>
                </div>
                <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$95</div>
                </div>
                </div>
                <div class="project-size-footer">RUN ONLINE ADS</div>
              </div>
              <div class="boxes box-3">
                <div class="box">
                <div class="project-size-item-badge">small</div>
                <h2>Slide out cart</h2>
                <div class="project-size-item-cardfeature">
                <div class="project-size-item-featuretype">timeline</div>
                <div class="project-size-item-featurevalue">2 day</div>
                </div>
                <div class="project-size-item-cardfeature">
                <div class="project-size-item-featuretype">starting at</div>
                <div class="project-size-item-featurevalue">$199</div>
                </div>
                </div>
                <div class="project-size-footer">MONETIZE UPSELLS</div>
              </div>
                <div class="boxes box-4">
                <div class="box">
                <div class="project-size-item-badge">small</div>
                <h2>Customize Product Page</h2>
                <div class="project-size-item-cardfeature">
                <div class="project-size-item-featuretype">timeline</div>
                <div class="project-size-item-featurevalue">1 day</div>
                </div>
                <div class="project-size-item-cardfeature">
                <div class="project-size-item-featuretype">starting at</div>
                <div class="project-size-item-featurevalue">$150</div>
                </div>
                </div>
                <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
              </div>
              </div>
              <div id="tab2" class="tab-content">
                <div class="boxes box-1">
                  <div class="box box">
                    <div class="project-size-item-badge">Medium</div>
                    <h2>Theme edits</h2>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">timeline</div>
                      <div class="project-size-item-featurevalue">1 day</div>
                    </div>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">starting at</div>
                      <div class="project-size-item-featurevalue">$75</div>
                    </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
                <div class="boxes box-2">
                  <div class="box">
                  <div class="project-size-item-badge">Medium</div>
                  <h2>Setup Facebook tracking pixel</h2>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">timeline</div>
                    <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">starting at</div>
                    <div class="project-size-item-featurevalue">$95</div>
                  </div>
                  </div>
                  <div class="project-size-footer">RUN ONLINE ADS</div>
                </div>
                <div class="boxes box-3">
                  <div class="box">
                  <div class="project-size-item-badge">Medium</div>
                  <h2>Slide out cart</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">2 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$199</div>
                  </div>
                  </div>
                  <div class="project-size-footer">MONETIZE UPSELLS</div>
                </div>
                  <div class="boxes box-4">
                  <div class="box">
                  <div class="project-size-item-badge">Medium</div>
                  <h2>Customize Product Page</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$150</div>
                  </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
              </div>
              <div id="tab3" class="tab-content">
                <div class="boxes box-1">
                  <div class="box box">
                    <div class="project-size-item-badge">Large</div>
                    <h2>Theme edits</h2>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">timeline</div>
                      <div class="project-size-item-featurevalue">1 day</div>
                    </div>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">starting at</div>
                      <div class="project-size-item-featurevalue">$75</div>
                    </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
                <div class="boxes box-2">
                  <div class="box">
                  <div class="project-size-item-badge">Large</div>
                  <h2>Setup Facebook tracking pixel</h2>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">timeline</div>
                    <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">starting at</div>
                    <div class="project-size-item-featurevalue">$95</div>
                  </div>
                  </div>
                  <div class="project-size-footer">RUN ONLINE ADS</div>
                </div>
                <div class="boxes box-3">
                  <div class="box">
                  <div class="project-size-item-badge">Large</div>
                  <h2>Slide out cart</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">2 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$199</div>
                  </div>
                  </div>
                  <div class="project-size-footer">MONETIZE UPSELLS</div>
                </div>
                  <div class="boxes box-4">
                  <div class="box">
                  <div class="project-size-item-badge">Large</div>
                  <h2>Customize Product Page</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$150</div>
                  </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
              </div>
              <div id="tab4" class="tab-content">
                <div class="boxes box-1">
                  <div class="box box">
                    <div class="project-size-item-badge">XL</div>
                    <h2>Theme edits</h2>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">timeline</div>
                      <div class="project-size-item-featurevalue">1 day</div>
                    </div>
                    <div class="project-size-item-cardfeature">
                      <div class="project-size-item-featuretype">starting at</div>
                      <div class="project-size-item-featurevalue">$75</div>
                    </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
                <div class="boxes box-2">
                  <div class="box">
                  <div class="project-size-item-badge">XL</div>
                  <h2>Setup Facebook tracking pixel</h2>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">timeline</div>
                    <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                    <div class="project-size-item-featuretype">starting at</div>
                    <div class="project-size-item-featurevalue">$95</div>
                  </div>
                  </div>
                  <div class="project-size-footer">RUN ONLINE ADS</div>
                </div>
                <div class="boxes box-3">
                  <div class="box">
                  <div class="project-size-item-badge">XL</div>
                  <h2>Slide out cart</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">2 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$199</div>
                  </div>
                  </div>
                  <div class="project-size-footer">MONETIZE UPSELLS</div>
                </div>
                  <div class="boxes box-4">
                  <div class="box">
                  <div class="project-size-item-badge">XL</div>
                  <h2>Customize Product Page</h2>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">timeline</div>
                  <div class="project-size-item-featurevalue">1 day</div>
                  </div>
                  <div class="project-size-item-cardfeature">
                  <div class="project-size-item-featuretype">starting at</div>
                  <div class="project-size-item-featurevalue">$150</div>
                  </div>
                  </div>
                  <div class="project-size-footer">IMPROVE CONVERSION RATE</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shopify-brands-logo-outer become-an-expert-brandslogo">
        <h2>Part of the global</h2>
        <h1>Shopify ecosytem</h1>
        <p>GoOnline is partnered with over 150 of the most popular Shopify apps, themes, and creative agencies.</p>
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
      <div class="lets-start-section-outer become-an-expertPage-lets-start-section-outer">
        <div class="wrapper">
          <div class="text">
            <h1>Apply now to learn more</h1>
            <div class="lets-start-btns">
              <p>The best Shopify Experts deserve
                a platform built for them.</p>
              <a href="#" class="btn">Apply Now</a>
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

