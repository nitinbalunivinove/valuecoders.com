</main>
<?php //get_template_part('inc/cmn', 'footer'); ?>
<?php $site_url = "https://www.valuecoders.com/"; ?>
<section class="experts-talk-first-section">
  <div class="container">
    <?php 
    if( is_single() ){
    echo '<h2>Subscribe to our blog</h2>';  
    echo do_shortcode('[email-subscribers-form id="1"]');
    }else{
    ?>
    <div class="head-txt text-center">
      <h2>Got a Project in Mind?</h2>
      <p>Let's embark on a journey to transform your idea into a compelling digital presence.</p>
    </div>
    <div class="cta-wrap margin-t-50  justify-center">
    <div class="cta-btn">
    <div class="btn-sec">
    <a href="https://www.valuecoders.com/contact" class="btn rounded"><span class="text-white"> Talk To Our Experts</span></a>
    </div>
    </div>
    </div>
    <?php } ?>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="dis-flex footer-top">
      <div class="count-sec">
        <div class="count-col">
          <h5>24,859,684+</h5>
          <p>LEADS DRIVEN FOR CLIENTS</p>
        </div>
        <div class="count-col">
          <h5>$6,021,182,299+</h5>
          <p>REVENUE DRIVEN FOR CLIENTS</p>
        </div>
        <div class="count-col">
          <h5>3,212,407</h5>
          <p>HOURS OF EXPERTISE</p>
        </div>
        <div class="count-col">
          <h5>675+</h5>
          <p>EXPERTS ON STAFF</p>
        </div>
      </div>
      <div class="subs-box">
        <h3>Discover how we can 
          help your business grow
        </h3>
        <div class="cta-wrap  justify-center">
          <div class="cta-btn">
            <div class="btn-sec">
              <a href="https://www.valuecoders.com/contact" class="btn rounded"><span class="text-white">Get Started</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dis-flex footer-middle">
      <div class="flex-5">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo $site_url.'about'; ?>">About Us</a></li>
          <li><a href="<?php echo $site_url.'in-media'; ?>">In Media</a></li>
          <li><a href="https://www.valuecoders.com/case-studies/">Case Studies</a></li>
          <li><a href="https://www.valuecoders.com/blog/">Our Blog</a></li>
          <li><a href="<?php echo $site_url.'testimonials'; ?>">Testimonial & Clients</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Our Expertise</h4>
        <ul>
          <li><a href="<?php echo $site_url.'outsource-software-product-development-services'; ?>">Software Product Engineering</a></li>
          <li><a href="<?php echo $site_url.'application-development'; ?>">Application Development</a></li>
          <li><a href="<?php echo $site_url.'it-staff-augmentation-services'; ?>">Staff Augmentation</a></li>
          <li><a href="<?php echo $site_url.'ecommerce-development-services'; ?>">eCommerce Development</a></li>
          <li><a href="<?php echo $site_url.'cloud-services'; ?>">Cloud Services</a></li>
          <li><a href="<?php echo $site_url.'ai'; ?>">AI & ML</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Hire Developers</h4>
        <ul>
          <li><a href="<?php echo $site_url.'hire-backend-developers'; ?>">Hire Backend Developers</a></li>
          <li><a href="<?php echo $site_url.'hire-front-end-developers'; ?>">Hire Frontend Developers</a></li>
          <li><a href="<?php echo $site_url.'hire-ecommerce-developers'; ?>">Hire eCommerce Developers</a></li>
          <li><a href="<?php echo $site_url.'hire-blockchain-developers'; ?>">Hire Blockchain Developers</a></li>
          <li><a href="<?php echo $site_url.'hire-mobile-app-developers'; ?>">Hire Mobile Developers</a></li>
          <li><a href="<?php echo $site_url.'hire-full-stack-developers'; ?>">Hire Full-Stack Developers</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Solutions</h4>
        <ul>
          <li><a href="<?php echo $site_url.'offshore-software-development-center-india'; ?>">Offshore Development Center</a></li>
          <li><a href="<?php echo $site_url.'offshore-software-development-services-company'; ?>">Offshore Software Development</a></li>
          <li><a href="<?php echo $site_url.'nearshore-software-development-services'; ?>">Nearshore Software Development</a></li>
        </ul>
      </div>
      <div class="flex-5">
        <h4>Clients We Serve</h4>
        <ul>
          <li><a href="<?php echo $site_url.'startup-product-development'; ?>">For Startups</a></li>
          <li><a href="<?php echo $site_url.'enterprise-software-development-services'; ?>">For Enterprises</a></li>
          <li><a href="<?php echo $site_url.'agencies-software-development-services'; ?>">For Agencies</a></li>
        </ul>
      </div>
    </div>
    <div class="dis-flex footer-bottom">
      <div class="flex-3 logo-box">
        <h3>PROUDLY BROUGHT TO YOU BY ValueCoders</h3>
        <div class="dis-flex">
          <a href="https://www.invoicera.com/">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/inv-logo.svg" width="156" height="40" alt="Invoicera">
            </picture>
          </a>
          <a href="https://www.workstatus.io/">
            <picture>
            <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/ws-logo.svg" width="188" height="26" alt="Workstatus"> 
          </picture>
          </a>
        </div>
      </div>
      <div class="flex-3 social-box">
        <h3>Follow Us</h3>
        <div class="dis-flex">
          <a href="https://www.linkedin.com/company/valuecoders" target="_blank">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/soc-01.svg" width="29" height="29" alt="linkedin">
            </picture>
          </a>
          <a href="https://www.facebook.com/ValueCoders" target="_blank">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/soc-02.svg" width="29" height="29" alt="facebook">
            </picture>
          </a>
          <a href="https://twitter.com/ValueCoders" target="_blank">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/soc-03.svg" width="29" height="29" alt="twitter">
            </picture>
          </a>
          <a href="https://www.instagram.com/valuecodersofficial_/?igshid=qfk286mq0wee" target="_blank">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/soc-04.svg" width="29" height="29" alt="instagram">
            </picture>
          </a>
          <a href="https://www.youtube.com/channel/UCCnijyLczGPUGI8aBkK3pTw?sub_confirmation=1" target="_blank">
            <picture>
              <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/soc-05.svg" width="29" height="29" alt="youtube">
            </picture>
          </a>
        </div>
      </div>
      <div class="flex-3 copyright">
        <a href="https://www.valuecoders.com/" target="_blank">
          <picture>
            <img loading="lazy" src="<?php bloginfo('template_url') ?>/assets/images/vc-logo.svg" width="191" height="42" alt="Logo">
          </picture>
        </a>
        <p>Copyright © 2004 - <?php echo date("Y"); ?> Valuecoders, <br>All Rights Reserved. A Vinove Company.
        </p>
      </div>
    </div>
  </div>
</footer>
<div class="blogvideo-popup">
  <div id="gen-vpopup" class="popup-wrapper" style="display:none;">
    <div class="popWrap">
      <div class="popup-content">
      <span class="closeicon" onclick="closeGenVideo('gen-vpopup', false)">Close</span>
      <iframe id="gen-video" class="videoIframe js-videoIframe" allowfullscreen="" src="#" allow='autoplay'></iframe>
      </div>
    </div>
  </div>
</div>
<div class="popup-section">
  <div id="intentPopup" class="popup-wrapper exit-intent-popup">
    <div class="popWrap">
      <div class="popup-content">
        <span class="closeicon" onclick="closeIntPopUp('intentPopup', false);">      
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/cross-image.svg" alt="Valuecoders" width="11" height="11"></span>
        <h2>Stay With Us</h2>
        <h3>Are you looking for the perfect 
          partner for your next software project?
        </h3>
        <p>Let's discuss how we can bring your vision to life.</p>
        <div class="ctasec">
          <a href="https://www.valuecoders.com/contact" class="book-btn">Book a Free Consultation</a>
          <a href="javascript:void(0);" onclick="closeIntPopUp('intentPopup', true);" class="subscribe-btn">Subscribe to our newsletter</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>