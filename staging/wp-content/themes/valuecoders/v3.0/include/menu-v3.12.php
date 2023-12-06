<?php
  function vc_is_mobile() {
      if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
          $is_mobile = false;
      } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // Many mobile devices (all iPhone, iPad, etc.)
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
              $is_mobile = true;
      } else {
          $is_mobile = false;
      }
      return $is_mobile;
  }
  $is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'v2wp' ) !== false) )  ?  true : false;
  if( $is_staging ){
  $site_url   = 'https://www.valuecoders.com/v2wp/';
  }else{
  $site_url   = 'https://www.valuecoders.com/';
  }  
  $tpl_url    = $site_url.'wp-content/themes/valuecoders';
  $mcat       = (isset( $args['pcat']) && !empty($args['pcat']) ) ? $args['pcat'] : 'master';
  
  
  /*
  Main MenuCategories >>>
  engineering : Product Engineering
  app-development : Application Development
  demand-teams : On Demand Teams
  ecommerce : eCommerce
  qa-testing : QA & Testing
  devops : Analytics & DevOps
  startups : For Startups
  enterprises : For Enterprises
  agencies : For Agencies
  */
  //$mcat     = 'app-development';
  $pcatArray = [
    'engineering'     => ['name' => 'Product Engineering', 'slug' => 'outsource-software-product-development-services', 
    'icon' => 'company_icon1.svg'],
    'app-development' => ['name' => 'Application Development', 'slug' => 'application-development', 'icon' => 'company_icon2.svg' ],
    'demand-teams'    => ['name' => 'On Demand Teams', 'slug' => 'hire-developers', 'icon' => 'company_icon3.svg' ],
    'ecommerce'       => ['name' => 'eCommerce', 'slug' => 'ecommerce-development-services', 'icon' => 'company_icon3.svg' ],
    'qa-testing'      => ['name' => 'QA & Testing', 'slug' => 'software-quality-assurance-testing-services', 'icon' => 'company_icon4.svg'  ],
    'devops'          => ['name' => 'Analytics & DevOps', 'slug' => 'business-intelligence-consulting-services', 'icon' => 'company_icon5.svg' ]
  ];
  
  $psubcatArray = [
    'startups'      => ['name' => 'For Startups', 'slug' => 'startup-consulting-services', 'icon' => 'startup-icon.svg' ],
    'enterprises'   => ['name' => 'For Enterprises', 'slug' => 'enterprise-software-development-services', 'icon' => 'company_icon7.svg' ],
    'agencies'      => ['name' => 'For Agencies', 'slug' => 'industries/agencies-software-development-services', 'icon' => 'company_icon8.svg' ]
  ];
  ?>
<?php //if( !vc_is_mobile() ) : ?>
<header class="header-two">
  <div class="container">
    <div class="wrapper">
      <div class="header-item-left">
        <a href="<?php echo $site_url; ?>" class="brand">
          <div class="large">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-v2.svg" alt="Valuecoders" class="dark-theme-logo" width="260" height="46">
          </div>
          <div class="small">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/vc-logo-dark.png" alt="Valuecoders" 
              class="dark-theme-logo sm" width="66" height="66">
          </div>
        </a>
        <?php 
          if( in_array( $mcat, array_keys( $pcatArray ) ) ) :
          ?>
        <div class="menu">
          <ul>
            <li class="menu-item-has-children small-menu for-product">
            <a href="'.$site_url.$value['slug'].'"><?php echo $pcatArray[$mcat]['name']; ?></a>
              <span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <?php 
                  foreach( $pcatArray as $key => $value) {
                    if( $key != $mcat ){
                      echo '<a href="'.$site_url.$value['slug'].'"><img src="'.$tpl_url.'/menu-images/'.$value['icon'].'" class="menuicon">'.$value['name'].'</a>';  
                    }                  
                  }
                  ?>                
              </div>
            </li>
          </ul>
        </div>
        <?php 
          endif; 
          
          if( in_array( $mcat, array_keys( $psubcatArray ) ) ) :
          ?>
        <div class="menu">
          <ul>
            <li class="menu-item-has-children small-menu for-product">
              <span class="active-pcat"><?php echo $psubcatArray[$mcat]['name']; ?></span>
              <span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <?php 
                  foreach( $psubcatArray as $key => $value) {
                    if( $key != $mcat ){
                      echo '<a href="'.$site_url.$value['slug'].'"><img src="'.$tpl_url.'/menu-images/'.$value['icon'].'" class="menuicon">'.$value['name'].'</a>';  
                    }                  
                  }
                  ?>                
              </div>
            </li>
          </ul>
        </div>
        <?php endif; ?>
        <div class="hamberger-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>
      <!-- Navbar Section -->
      <?php if( !isset( $_GET['l'] ) ) : ?>
      <div class="header-item-center">
        <nav class="menu mob-nav" id="menu">
          <a href="<?php echo $site_url; ?>" class="brand">
          <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-v2.svg" alt="Valuecoders" class="dark-theme-logo" width="260" height="46">
          </a>
          <ul>
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>software-development-services-company">Services</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <?php 
                  if( $mcat == "master" ){
                  ?>
                <div class="container landing-menu" id="landing-menu">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">by TEAM Expertise</span>
                      <a href="<?php echo $site_url; ?>outsource-software-product-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon1.svg" class="menuicon"><span class="title">Software Product Engineering</span>
                      Full-cycle software product development, including consulting, UI/UX design, MVP</a>
                      <a href="<?php echo $site_url; ?>hire-developers"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon2.svg" class="menuicon"><span class="title">On Demand Teams</span>
                      Outsourcing, Staff Augmentation, Dedicated Teams, Hire Indian Developers In different Technologies etc.</a>
                      <a href="<?php echo $site_url; ?>software-quality-assurance-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon3.svg" class="menuicon"><span class="title">QA & Testing</span>
                      Complete QA & Testing solutions</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>application-development"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon4.svg" class="menuicon"><span class="title">Application Development</span>
                      Web, Mobile App development , Full Stack Development, Front end & Backend Development</a>
                      <a href="<?php echo $site_url; ?>ecommerce-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon5.svg" class="menuicon"><span class="title">eCommerce</span>
                      Consulting, B2b & B2C Solutions, Digital Marketing & Dedicated Team Setup</a>
                      <a href="<?php echo $site_url; ?>business-intelligence-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon6.svg" class="menuicon"><span class="title">Analytics & DevOps</span>
                      Big Data, Business Process Automation, Analytics, Business Intelligence etc</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">BY CLIENT TYPE</span>
                      <a href="<?php echo $site_url; ?>startup-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon7.svg" class="menuicon"><span class="title">For Startups</span>
                      Get MVP, SaaS consulting, cloud app development, etc.</a>
                      <a href="<?php echo $site_url; ?>enterprise-software-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon8.svg" class="menuicon"><span class="title">For Enterprises</span>
                      Digitally transform and modernize your business</a>
                      <a href="<?php echo $site_url; ?>industries/agencies-software-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/service_icon9.svg" class="menuicon"><span class="title">For Agencies</span>
                      Expand with white label and staff augmentation services</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "engineering"){ ?>
                <div class="container w-14 prod-eng" id="m-product-engineering">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>startup-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon1.svg" class="menuicon"><span class="title">Product Consulting</span>
                      Consult with us for technology, process & more</a>
                      <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon2.svg" class="menuicon"><span class="title">Product UI/UX Design</span>
                      Choose the right technology and process</a>
                      <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon3.svg" class="menuicon"><span class="title">Software Product Development</span>
                      Assistance from software product conception to release</a>
                    </div>
                    <div class="flex-3">  
                      <a href="<?php echo $site_url; ?>mvp-app-development-company"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon4.svg" class="menuicon"><span class="title">MVP Development </span>
                      Verify your idea and scope for success</a>
                      <a href="<?php echo $site_url; ?>saas-consulting-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon5.svg" class="menuicon"><span class="title">SaaS Development </span>
                      Deliver software as a service</a>
                      <a href="<?php echo $site_url; ?>digital-transformation-services"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon6.svg" class="menuicon"><span class="title">Digital Transformation </span>
                      Utilize digital technologies and strategies.</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>application-modernization"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon7.svg" class="menuicon"><span class="title">Application Modernization </span>
                      Update your existing applications</a>
                      <a href="<?php echo $site_url; ?>application-maintenance"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon8.svg" class="menuicon"><span class="title">Application Maintainance</span>
                      Ensure software applications’ functionality and security</a>
                      <a href="<?php echo $site_url; ?>devops-consulting-engineering-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/prod-engg-icon9.svg" class="menuicon"><span class="title">Analytics & DevOps</span>
                      Hire big data consulting and DevOps consultation experts</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "app-development"){ ?>
                <div class=" container w-14 landing-menu app-development" id="m-app-development">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Our Expertise</span>
                      <a href="<?php echo $site_url; ?>web-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon1.svg" class="menuicon"><span class="title">Web App Development</span>
                      Developing web applications for browsers</a>
                      <a href="<?php echo $site_url; ?>backend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon2.svg" class="menuicon"><span class="title">Backend Development</span>
                      Server/client side backend expertise</a>
                      <a href="<?php echo $site_url; ?>top-website-development-company"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon3.svg" class="menuicon"><span class="title">Website & Portal Development</span>
                      A way to manage your clients and employees</a>
                      <a href="<?php echo $site_url; ?>frontend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon4.svg"class="menuicon"><span class="title">Frontend Development</span>
                      Website and web application development</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>mobile-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon5.svg" class="menuicon"><span class="title">Mobile App Development</span>
                      Flawless applications for mobile devices</a>
                      <a href="<?php echo $site_url; ?>cross-platform-app-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon6.svg" class="menuicon"><span class="title">Cross Platform App Development</span>
                      Flawless apps for multiple platforms</a>
                      <a href="<?php echo $site_url; ?>api-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon7.svg" class="menuicon"><span class="title">API Development</span>
                      Create, manage, design, develop, & test APIs</a>
                      <a href="<?php echo $site_url; ?>hire-developers/hire-full-stack-developers"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon8.svg" class="menuicon"><span class="title">Full Stack Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">OTHER services</span>
                      <a href="<?php echo $site_url; ?>application-maintenance"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon9.svg" class="menuicon"><span class="title">App Maintainance & Support</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>application-modernization"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon10.svg" class="menuicon"><span class="title">Application Modernization</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>ott-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon11.svg" class="menuicon"><span class="title">OTT App Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>cloud-application-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon12.svg" class="menuicon"><span class="title">Cloud Application Development</span>
                      Software applications for cloud computing</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "startups"){ ?>        
                <div class="container w-14 startups" id="m-startups">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>mvp-app-development-company"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon1.svg" class="menuicon"><span class="title">MVP Development & Consulting</span>
                      Validate your product idea through MVP</a>
                      <a href="<?php echo $site_url; ?>saas-consulting-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon2.svg" class="menuicon"><span class="title">SaaS Consulting & Development</span>
                      Deliver software as a service</a>
                      <a href="<?php echo $site_url; ?>outsource-software-product-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon3.svg" class="menuicon"><span class="title">Software Product Development </span>
                      Assistance from software product conception to release</a>
                    </div>
                    <div class="flex-3">  
                      <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon4.svg" class="menuicon"><span class="title">Product UI/UX Design  </span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>dedicated-development-teams"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon5.svg" class="menuicon"><span class="title">Dedicated Development Teams </span>
                      Highly skilled labor at reasonable prices</a>
                      <a href="<?php echo $site_url; ?>it-staff-augmentation-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon6.svg" class="menuicon"><span class="title">Staff Augmentation Services</span>
                      Hire dedicated technical resources</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>software-quality-assurance-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon7.svg" class="menuicon"><span class="title">QA & Testing </span>
                      Complete QA & Testing solutions</a>
                      <a href="<?php echo $site_url; ?>cloud-application-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon8.svg" class="menuicon"><span class="title">Cloud Application Development</span>
                      Software applications for cloud computing</a>
                      <a href="<?php echo $site_url; ?>business-intelligence-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-startups-icon9.svg" class="menuicon"><span class="title">Analytics & DevOps</span>
                      Big Data consulting, BI implementation, and DevOps consultation.</a>
                    </div>
                  </div>
                </div>
                <!-- // For Startups  Ends  -->
                <?php }elseif( $mcat == "demand-teams"){ ?>                
                <div class="container w-900 demand-teams" id="m-demand-team">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>dedicated-development-teams"><img src="<?php echo $tpl_url; ?>/menu-images/on-demands-icon1.svg" class="menuicon"><span class="title">Dedicated Development Teams</span>
                      Highly skilled labor at reasonable prices</a>
                      <a href="<?php echo $site_url; ?>it-staff-augmentation-services"><img src="<?php echo $tpl_url; ?>/menu-images/on-demands-icon2.svg" class="menuicon"><span class="title">Staff Augmentation Services</span>
                      Dedicated technical resources for your project</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>offshore-software-development-center-india"><img src="<?php echo $tpl_url; ?>/menu-images/on-demands-icon3.svg" class="menuicon"><span class="title">Offshore Development Center</span>
                      Boost your software performance with experts</a>
                      <a href="<?php echo $site_url; ?>offshore-software-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/on-demands-icon4.svg" class="menuicon"><span class="title">Offshore Software Development</span>
                      Double the talent at half the price</a>
                    </div>
                  </div>
                </div>
                <!-- //On Demand Teams Ends -->
                <?php }elseif( $mcat == "ecommerce"){ ?>
                <div class=" container w-14 landing-menu ecom" id="m-ecommerce">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">our expertise</span>
                      <a href="<?php echo $site_url; ?>ecommerce-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon1.svg" class="menuicon"><span class="title">Custom eCommerce</span>
                      eCommerce solutions for B2B and B2C</a>
                      <a href="<?php echo $site_url; ?>ecommerce-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon2.svg" class="menuicon"><span class="title">eCommerce Consulting</span>
                      Set up and manage online stores</a>
                      <a href="<?php echo $site_url; ?>digital-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon3.svg" class="menuicon"><span class="title">Digital Consulting</span>
                      Optimize digital technologies and strategies</a>
                      <a href="<?php echo $site_url; ?>ecommerce-web-design"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon4.svg" class="menuicon"><span class="title">eCommerce Web Design</span>
                      Creating website for eCommerce sales and services</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">Technology</span>
                      <a href="<?php echo $site_url; ?>best-magento-ecommerce-development-services-company-india"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon5.svg" class="menuicon"><span class="title">Magento</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>shopify-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon6.svg" class="menuicon"><span class="title">Shopify</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>top-wordpress-development-services-company-india"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon7.svg" class="menuicon"><span class="title">WooCommerce</span>
                      Operate securely and reliably</a>
                      <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon8.svg" class="menuicon"><span class="title">OpenCart</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">Solutions</span>
                      <a href="<?php echo $site_url; ?>b2c-ecommerce"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon9.svg" class="menuicon"><span class="title">B2C eCommerce</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>b2b-ecommerce"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon10.svg" class="menuicon"><span class="title">B2B eCommerce</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>ecommerce-web-portal"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon11.svg" class="menuicon"><span class="title">Web Portal</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>supply-chain-automation"><img src="<?php echo $tpl_url; ?>/menu-images/ecommerce-icon12.svg" class="menuicon"><span class="title">Supply Chain Automation</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "qa-testing"){ ?>
                <!-- QA Testing Menu Here -->
                <div class="container w-900 qaconsult" id="m-qaconsult">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>qa-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon1.svg" class="menuicon"><span class="title">QA Consulting</span>
                      Improve QA with experts</a>
                      <a href="<?php echo $site_url; ?>application-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon2.svg" class="menuicon"><span class="title">Application Testing</span>
                      Make flawless software applications</a>
                      <a href="<?php echo $site_url; ?>mobile-app-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon3.svg" class="menuicon"><span class="title">Mobile App Testing</span>
                      High-performing mobile applications</a>
                      <a href="<?php echo $site_url; ?>web-application-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon4.svg" class="menuicon"><span class="title">Web App Testing</span>
                      Flawless apps for improved performance</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>software-testing-teams"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon5.svg" class="menuicon"><span class="title">Testing Teams</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>hire-developers/software-qa-testers-india"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon6.svg" class="menuicon"><span class="title">Hire Software QA</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>qa-outsourcing-services"><img src="<?php echo $tpl_url; ?>/menu-images/qa-consult-icon7.svg" class="menuicon"><span class="title">QA Outsourcing</span>
                      Hire testing specialists for flawless performance</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "devops"){ ?>
                <!-- DevOps Menu Here -->
                <div class=" container w-14 landing-menu analytics" id="m-analytics">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Dashboards & Analytics</span>
                      <a href="<?php echo $site_url; ?>big-data-application-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon1.svg" class="menuicon"><span class="title">Big Data Consulting</span>
                      Analyzing large data sets</a>
                      <a href="<?php echo $site_url; ?>business-intelligence-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon2.svg" class="menuicon"><span class="title">BI Consulting Services</span>
                      Enhance business decision making</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>bi-implementation"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon3.svg" class="menuicon"><span class="title">BI Implementation</span>
                      Requirement gathering and deployment</a>
                      <a href="<?php echo $site_url; ?>microsoft-power-bi-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon4.svg" class="menuicon"><span class="title">Microsoft Power BI</span>
                      Custom reports and dashboards for clients</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">DevOps</span>
                      <a href="<?php echo $site_url; ?>devops-consulting-engineering-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon5.svg" class="menuicon"><span class="title">DevOps Consulting</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>amazon-aws-partner-company-india"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon6.svg" class="menuicon"><span class="title">Amazon AWS</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <!-- //Analytics Ends -->
                <?php }elseif( $mcat == "enterprises"){ ?>
                <!-- Enterprises Menu Here -->
                <div class="container w-14 enterprises" id="m-enterprises">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>digital-transformation-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon1.svg" class="menuicon"><span class="title">Digital Transformation</span>
                      Utilize digital technologies and strategies.</a>
                      <a href="<?php echo $site_url; ?>application-modernization"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon2.svg" class="menuicon"><span class="title">Application Modernization</span>
                      Update your existing applications</a>
                      <a href="<?php echo $site_url; ?>application-maintenance"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon3.svg" class="menuicon"><span class="title">Application Maintainance & Support</span>
                      Ensure software applications’ functionality and security</a>
                      <a href="<?php echo $site_url; ?>business-intelligence-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon4.svg" class="menuicon"><span class="title"> Analytics & DevOps</span>
                      Big Data consulting, BI implementation, and DevOps consultation</a>
                    </div>
                    <div class="flex-3">  
                      <a href="<?php echo $site_url; ?>software-consulting"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon5.svg" class="menuicon"><span class="title">Software Consulting </span>
                      Utilizing software at its best</a>
                      <a href="<?php echo $site_url; ?>custom-software-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon6.svg" class="menuicon"><span class="title">Custom Software Development </span>
                      Custom applications for your business</a>
                      <a href="<?php echo $site_url; ?>web-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon7.svg" class="menuicon"><span class="title">Web App Development </span>
                      Developing web applications for browsers</a>
                      <a href="<?php echo $site_url; ?>mobile-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon8.svg" class="menuicon"><span class="title">Mobile App Development </span>
                      Flawless applications for mobile devices</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>it-staff-augmentation-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon9.svg" class="menuicon"><span class="title">Staff Augmentation Services </span>
                      Hire dedicated technical resources</a>
                      <a href="<?php echo $site_url; ?>it-outsourcing-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon10.svg" class="menuicon"><span class="title">Software Outsourcing services</span>
                      Hire dedicated software developers</a>
                      <a href="<?php echo $site_url; ?>software-quality-assurance-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon11.svg" class="menuicon"><span class="title">QA & Testing</span>
                      Complete QA & Testing solutions</a>
                      <a href="<?php echo $site_url; ?>cloud-application-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-enterprise-icon12.svg" class="menuicon"><span class="title">Cloud Application Development</span>
                      Software applications for cloud computing</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "agencies"){ ?>  
                <div class="container w-14 agencies" id="m-agencies">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>white-label-marketing"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon1.svg" class="menuicon"><span class="title">White Label Services</span>
                      Quality engineering services</a>
                      <a href="<?php echo $site_url; ?>frontend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon2.svg" class="menuicon"><span class="title">Frontend Development</span>
                      Website and web application development</a>
                      <a href="<?php echo $site_url; ?>backend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon3.svg" class="menuicon"><span class="title">Backend Development</span>
                      Server/client-side backend development</a>
                    </div>
                    <div class="flex-3">  
                      <a href="<?php echo $site_url; ?>software-consulting"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon4.svg" class="menuicon"><span class="title">Software Consulting </span>
                      Utilizing software at its best</a>
                      <a href="<?php echo $site_url; ?>custom-software-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon5.svg" class="menuicon"><span class="title">Custom Software Development </span>
                      Meet specific business needs</a>
                      <a href="<?php echo $site_url; ?>application-development"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon6.svg" class="menuicon"><span class="title">Application Development</span>
                      Applications for web and mobile devices</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>software-quality-assurance-testing-services"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon7.svg" class="menuicon"><span class="title">QA & Testing </span>
                      Complete QA & Testing solutions</a>
                      <a href="<?php echo $site_url; ?>software-outsourcing-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/for-agencies-icon8.svg" class="menuicon"><span class="title">Software Outsourcing services</span>
                      Hire dedicated software developers</a>
                    </div>
                  </div>
                </div>
                <?php } ?>  
              </div>
              <!-- //Mega-Menu -->
            </li>
            <?php if( $mcat === "demand-teams" ) : ?>
            <!-- Section Added By Nitin Baluni -->
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>hire-developers">Hire Developers</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <div class="container">
                  <div class="dis-flex">
                    <div class="width-100 for-padding hiremenu header-menu active" id="b0">
                      <div class="dis-flex last-list" id="active_Current_Tabs0">
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-backend-developers" class="title">Backend</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-dotnet-developers" title=".NET">.NET</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-c-developers" title="C/C++">C/C++</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-c-sharp-developers" title="C#">C#</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-django-developers" title="Django">Django</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-firebase-developers" title="Firebase">Firebase</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-golang-web-developers" title="Golang">Golang</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-graphql-developers" title="GraphQL">GraphQL</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-java-developers" title="Java">Java</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-laravel-developers" title="Laravel">Laravel</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-nodejs-developers" title="Node.Js">Node</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-php-developers" title="PHP">PHP</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-python-developers" title="Python">Python</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ror-developers" title="Ruby on Rails">Ruby on Rails</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-symfony-developers" title="Symfony">Symfony</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-front-end-developers" class="title">Frontend</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-angularjs-developers" title="Angular">Angular</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-html-developers" title="HTML/CSS">HTML/CSS</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-javascript-developers" title="JavaScript">JavaScript</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-power-bi-developer-consultants" title="PowerBI">PowerBI</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-reactjs-developers" title="React">React</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-typescript-developers" title="TypeScript">TypeScript</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-vuejs-developers" title="Vue.JS">Vue.JS</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-cms-developers" class="margin-t-40 title">CMS</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-drupal-developers" title="Drupal">Drupal</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-kentico-developers" title="kentico">Kentico</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-sitecore-developers" title="Sitecore">Sitecore</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-sitefinity-developers" title="Sitefinity">Sitefinity</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-umbraco-developers" title="Umbraco">Umbraco</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-wordpress-developers" title="Wordpress">Wordpress</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mobile-app-developers" class="title">Mobile</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-android-developers" title="Android">Android</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-flutter-developers" title="Flutter">Flutter</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ionic-developers" title="Ionic">Ionic</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ios-developers" title="IOS">iOS</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-kotlin-developers" title="Kotlin">Kotlin</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-react-native-developers" title="React Native">React Native</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-swift-developers" title="Swift">Swift</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-xamarin-developers" title="Xamarin">Xamarin</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ecommerce-developers" class="margin-t-40 title">eCommerce</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-magento-developers" title="Magento">Magento</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-shopify-developers" title="Shopify">Shopify</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-full-stack-developers" class="title">Full Stack</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mean-stack-developers" title="MEAN">MEAN</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mern-stack-developers" title="MERN">MERN</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-blockchain-developers" class="margin-t-40 title">Blockchain</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-cryptocurrency-app-developers" title="Cryptocurrency">Cryptocurrency</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ethereum-developer" title="Ethereum">Ethereum</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ico-developers" title="ICO">ICO</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-smartcontract-developers" title="Smart Contract">Smart Contract</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-solidity-developers" title="Solidity">Solidity</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-nft-marketplace-developers" title="NFT">NFT</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-devops-developers" class="margin-t-40 title">DevOps</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-azure-developers" title="Azure">Azure</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-aws-developers" title="AWS">AWS</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-machine-learning-experts" class="title">ML</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-chatbot-developers" title="Chatbot">Chatbot</a>
                            <a href="<?php echo $site_url; ?>hire-developers/dialog-flow-development-services-company" title="Dialogflow"> Dialogflow</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-rpa-developers" title="RPA">RPA</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-tensorflow-developers" title="Tensorflow">TensorFlow</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>low-code-no-code-services" class="margin-t-40 title">Low-Code</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-appian-developers" title="Appian">Appian</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-outsystems-developers" title="Outsystems">Outsystems</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mendix-developers" title="Mendix">Mendix</a>
                            <a href="<?php echo $site_url; ?>pega-development-services" title="Pega Development">Pega Development</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- // Section Added By Nitin Baluni ENDS -->
            <?php endif; ?>
            <?php 
              // Hide Solution Menu Is Page Catrgoty is : eCommerce
              if( !in_array( $mcat, ['ecommerce', 'demand-teams'] ) ) :
              ?>
            <!-- Solutions -->
            <li class="menu-item-has-children">
              <a href="javascript:void(0)">Solutions</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <?php if( $mcat == "qa-testing" ){ ?>
                <div class="container w-14 landing-menu ecom" id="qasolution">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>functional-software-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol1.svg" class="menuicon"><span class="title">Functional Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>usability-software-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol2.svg" class="menuicon"><span class="title">Usability Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>vulnerability-assessment"><img src="<?php echo $tpl_url; ?>/menu-images/qasol3.svg" class="menuicon"><span class="title">Vulnerability Assessment</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>software-performance-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol4.svg" class="menuicon"><span class="title">Performance Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>software-testing-automation"><img src="<?php echo $tpl_url; ?>/menu-images/qasol5.svg" class="menuicon"><span class="title">Automated Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>integration-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol6.svg" class="menuicon"><span class="title">Integration Testing</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>security-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol7.svg" class="menuicon"><span class="title">Security Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>penetration-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol8.svg" class="menuicon"><span class="title">Penetration Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>regression-testing"><img src="<?php echo $tpl_url; ?>/menu-images/qasol9.svg" class="menuicon"><span class="title">Regression Testing</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }else{ ?>  
                <div class="container">
                  <div class="dis-flex">
                    <div class="width-45 detail-list without-icon">
                      <span class="head">Industries</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>industries/healthcare-software-development-services"><span class="title">Healthcare</span>
                          Healthcare IT consulting services</a>
                          <a href="<?php echo $site_url; ?>industries/isv-software-development-services"><span class="title">ISV</span>
                          Product research and analysis</a>
                          <a href="<?php echo $site_url; ?>industries/automotive-companies-software-development-services"><span class="title">Automative</span>
                          Make business with automotive</a>
                          <a href="<?php echo $site_url; ?>fintech-software-development-company"><span class="title">Fintech</span>
                          Financial application development</a>
                          <a href="<?php echo $site_url; ?>industries/retail-ecommerce-software-development"><span class="title">Retail & eCommerce</span>
                          Develop eCommerce & retail websites</a>
                        </div>
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>industries/education-elearning-software-development"><span class="title">Education & E-Learning</span>
                          Custom education & elearning portal development</a>
                          <a href="<?php echo $site_url; ?>industries/travel-tourism-software-development-services"><span class="title">Travel & Tourism</span>
                          Travel & tourism software development</a>
                          <a href="<?php echo $site_url; ?>industries/banking-financial-services"><span class="title">Banking & Financial Services</span>
                          Reliable financial application development</a>
                          <a href="<?php echo $site_url; ?>industries/logistics-transportation-software-development"><span class="title">Logistic & Transportation</span>
                          Logistic & transportation software development</a>
                          <a href="<?php echo $site_url; ?>industries/media-software-development-services"><span class="title">Media & Entertaintainment</span>
                          Media & Entertainment software development</a>
                        </div>
                      </div>
                    </div>
                    <div class="width-55 detail-list without-icon">
                      <span class="head">Solutions</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>digital-financial-management"><span class="title">Financial Management</span>
                          Financial Management consulting & advisory</a>
                          <a href="<?php echo $site_url; ?>workforce-management-solutions"><span class="title">Workforce Management</span>
                          Automate your workforce management</a>
                          <a href="<?php echo $site_url; ?>hr-software-solutions"><span class="title">Human Resource Management</span>
                          Perfect HRM software development</a>
                          <a href="<?php echo $site_url; ?>elearning-solutions"><span class="title">eLearning</span>
                          Digitally transform your eLearning experience</a>
                          <a href="<?php echo $site_url; ?>supply-chain-management"><span class="title">Supply Chain Management</span>
                          Optimize your business performance</a>
                          <a href="<?php echo $site_url; ?>fleet-management"><span class="title">Fleet Management</span>
                          Specialized GPS fleet management solution</a>
                        </div>
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>operations-management-solutions"><span class="title">Operations Management</span>
                          Custom-made operation management software</a>
                          <a href="<?php echo $site_url; ?>asset-management"><span class="title">Asset Management</span>
                          Asset planning and optimization</a>
                          <a href="<?php echo $site_url; ?>web-portal-development"><span class="title">Web Portals</span>
                          Full cycle web portal development</a>
                          <a href="<?php echo $site_url; ?>cms-development"><span class="title">Content Management Sysrem (CRM)</span>
                          Customized CMS development</a>
                          <a href="<?php echo $site_url; ?>erp"><span class="title">Enterprise Resource Planning (ERP)</span>
                          End-to-end ERP development & support</a>
                          <a href="<?php echo $site_url; ?>document-management-services"><span class="title">Document Management</span>
                          Digitize documents with smart solutions</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=" container w-14 landing-menu ecom" id="qasolution">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol1.svg" class="menuicon"><span class="title">Functional Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol2.svg" class="menuicon"><span class="title">Usability Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol3.svg" class="menuicon"><span class="title">Vulnerability Assessment</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol4.svg" class="menuicon"><span class="title">Performance Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol5.svg" class="menuicon"><span class="title">Automated Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol6.svg" class="menuicon"><span class="title">Integration Testing</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol7.svg" class="menuicon"><span class="title">Security Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol8.svg" class="menuicon"><span class="title">Penetration Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>"><img src="<?php echo $tpl_url; ?>/menu-images/qasol9.svg" class="menuicon"><span class="title">Regression Testing</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php 
              if( !in_array($mcat, ['devops', 'demand-teams', 'qa-testing']) ) : ?>
            <!-- Technology -->
            <li class="menu-item-has-children">
              <a href="javascript:void(0)">Technologies</a> <span class="arrow-btn"></span>
              <div class="menu-mega width-menu">
                <div class="container">
                  <div class="dis-flex" id="active_Current_Tabs8">
                    <div class="width-100 header-menu active for-padding">
                      <div class="dis-flex" id="active_Current_Tabs8a">
                        <div class="width-40 last-list">
                          <div class="hr-list-item">
                            <span class="head">Programming</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="dis-flex two-col hr-menu-mega">
                            <div class="width-50">
                              <a href="<?php echo $site_url; ?>android-app-development-company-india">Andoid</a>
                              <a href="<?php echo $site_url; ?>angular-js-development-company-india">Angular</a>
                              <a href="<?php echo $site_url; ?>top-drupal-development-services-company-india">Drupal</a>
                              <a href="<?php echo $site_url; ?>flutter-app-development-company">Flutter</a>
                              <a href="<?php echo $site_url; ?>ios-application-development-company-india">iOS / iPhone</a>
                              <a href="<?php echo $site_url; ?>java-web-application-development-company">Java</a>
                              <a href="<?php echo $site_url; ?>top-laravel-development-services-company-india">Laravel</a>
                            </div>
                            <div class="width-50 padding-l-40">
                              <a href="<?php echo $site_url; ?>aspdotnet-development-company-india">.NET</a>
                              <a href="<?php echo $site_url; ?>node-js-development-company-india">Node</a>
                              <a href="<?php echo $site_url; ?>php-development-services-company">PHP</a>
                              <a href="<?php echo $site_url; ?>python-web-development-services-company">Python</a>
                              <a href="<?php echo $site_url; ?>react-js-development-services-company">React</a>
                              <a href="<?php echo $site_url; ?>best-react-native-development-services-company-india">React Native</a>
                              <a href="<?php echo $site_url; ?>top-wordpress-development-services-company-india">Wordpress</a>
                            </div>
                          </div>
                        </div>
                        <div class="width-35 last-list for-platform">
                          <div class="hr-list-item">
                            <span class="head">Trending</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>ar-vr-development-company">AR/ VR</a>
                            <a href="<?php echo $site_url; ?>big-data-application-development-services-company">Big Data</a>
                            <a href="<?php echo $site_url; ?>data-science-consulting-services">Data Science</a>
                            <a href="<?php echo $site_url; ?>blockchain-development-company">Blockchain</a>
                            <a href="<?php echo $site_url; ?>iot-development-company">Internet of Things</a>
                            <a href="<?php echo $site_url; ?>ai-ml-development-services-company">Machine Learning</a>
                            <a href="<?php echo $site_url; ?>ott-development">OTT</a>
                            <a href="<?php echo $site_url; ?>rpa-development-services-company">RPA</a>
                            <a href="<?php echo $site_url; ?>serverless-development">Serverless</a>
                          </div>
                        </div>
                        <div class="width-25 last-list">
                          <div class="hr-list-item">
                            <span class="head">Platforms</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>microsoft-power-bi-development-services-company">Microsoft Power BI</a>
                            <a href="<?php echo $site_url; ?>sharepoint-application-development-services-company">SharePoint</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <?php endif; ?>
            <?php endif; //endif; ecommerce condition ?>
            <?php if( !in_array( $mcat, ['demand-teams'] ) ) : ?>
            <li class="menu-item-has-children for-case">
              <a href="https://www.valuecoders.com/case-studies/" target="_blank">Case Studies</a> <span class="arrow-btn"></span>
            </li>
            <?php endif; ?>
            <?php             
              if( in_array( $mcat, ['demand-teams'] ) ) :
              ?>
            <li class="menu-item-has-children small-menu for-company">
              <a href="javascript:void(0);">Resources</a> <span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <a href="<?php echo $site_url; ?>hire-developers/hire-software-developers-india"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon1.svg" class="menuicon">Hire Indian Developers </a>
                <a href="<?php echo $site_url; ?>it-outsourcing-services"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon2.svg" class="menuicon">IT Outsourcing</a>
                <a href="<?php echo $site_url; ?>how-it-works"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon3.svg" class="menuicon">How It Works</a>
                <a href="<?php echo $site_url; ?>benefits-of-hiring-remote-developers"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon4.svg" class="menuicon">Hiring Remote Developers</a>
                <a href="<?php echo $site_url; ?>why-india"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon5.svg" class="menuicon">Software Development in India</a>
                <a href="<?php echo $site_url; ?>faq"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon6.svg" class="menuicon">FAQs</a>
              </div>
            </li>
            <?php endif; ?>
            <?php 
              // Hide Company Menu Is Page Catrgoty is : App Development
              if( $mcat !== "app-development" ) :
              ?>
            <li class="menu-item-has-children small-menu for-company">
              <a href="<?php echo $site_url; ?>about">Company</a><span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <a href="<?php echo $site_url; ?>about"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon1.svg" class="menuicon">Overview</a>
                <a href="<?php echo $site_url; ?>in-media"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon2.svg" class="menuicon">In Media</a>
                <a href="<?php echo $site_url; ?>testimonials"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon3.svg" class="menuicon">Clients & Testimonials</a>
                <a href="<?php echo $site_url; ?>why-agencies-choose-us"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon4.svg" class="menuicon">Why Agencies Choose Us</a>
                <a href="<?php echo $site_url; ?>careers"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon5.svg" class="menuicon">Careers</a>
                <a href="https://www.valuecoders.com/blog/" target="_blank"><img src="<?php echo $tpl_url; ?>/menu-images/company_icon6.svg" class="menuicon">Blog</a>
              </div>
            </li>
            <?php endif; ?>
            <li class="contact-nav"><a href="<?php echo $site_url; ?>contact">Contact Us <i class="arrow-icon"></i></a></li>
          </ul>
        </nav>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<?php //endif; ?>