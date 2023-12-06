<?php
  /*
  Template Name: GDPR Compliance Page Template
  */ 
  global $post;
  $thisPostID = $post->ID;
  get_header();
  ?>
<section class="small-banner-section for-gdpr-banner">
  <div class="container text-center">
    <h1>GDPR Compliance</h1>
  </div>
</section>
<section class="gdpr-compliance-section padding-t-120 padding-b-120">
  <div class="container">
    <div class="gdpr-compliance-outer">
      <h2>Overview</h2>
      <p>The European Union (EU) has introduced the General Data Protection Regulation (GDPR) to protect the fundamental right to privacy of EU residents effective from 25th May 2018. Astringent yet essential law to be enforced by the EU is made to date on how EU citizens’ and residents’ personal data is lawfully collected, processed and stored. Applicable to all organizations that process EU residents' personal data or have business arrangements with them to provide goods and services, the law gives the control back to the EU residents over the usage of their personal data.</p>
      <picture>
        <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/gdpr-overview-img.webp">
        <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/gdpr-overview-img.png">
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/gdpr-overview-img.png" alt="Valuecoders"> 
      </picture>
      <p>ValueCoders looks at GDPR as an opportunity to tighten its controls and strengthen in areas of high criticality. Since 2000, we have worked tirelessly at delivering customer success which is built on pillars of trust, honesty, dependability, and transparency. We intend to deepen our bond of trust with our customers and partners and create a wider net of accountability and transparency, not just with EU nations but across the world.</p>
    </div>
    <div class="gdpr-compliance-outer">
      <h2>Our Commitment</h2>
      <p>We, the ValueCoders family is working at its best to be compliant with GDPR and feel privileged and responsible at the same time to maintain the sanctity of your data. We are committed to serving you in the best possible manner and continue to build our relationship on pillars of transparency and integrity which forms the core of our corporate philosophy. In our continued efforts to become GDPR compliant, we have updated our policy to help you navigate and understand your privacy and rights better.</p>
      <p>Please take a moment to glance through our policy here. Additionally, you can update your preferences with us and stay in complete control of your data. In this data-driven world, ValueCoders is committed to the rudiments of securing personal data by ensuring privacy, security, confidentiality, integrity and availability and is revitalizing its systems, processes and approach to serve its clients better without compromising their information.</p>
    </div>
  </div>
</section>
<section class="three-column-icon-section bg-light padding-t-120 padding-b-120">
  <div class="container">
  <div class="head-txt text-center">
          <h2>Our Approach To Compliance</h2>
          <p>Being an ISO compliant organization, we have employed robust measures to ensure we maintain a high level of security and compliance with your data. More importantly, we are determined at becoming fully GDPR compliant by adopting a systematically-designed approach to ensure data privacy and information security.</p>
        </div>
    <div class="dis-flex col-box-outer margin-t-50">
      <div class="flex-3 box-3">
        <div class="box">
          <h3>Assessment</h3>
          <ul>
            <li>GDPR awareness trainings</li>
            <li>Identification of personal data / personally identifiable information (PII) of data subject</li>
            <li>Application server migration</li>
          </ul>
        </div>
      </div>
      <div class="flex-3 box-3">
        <div class="box">
          <h3>Transformation</h3>
          <ul>
            <li>Adopt Consent Management Mechanism and address all the rights of the data subjects</li>
            <li>Make the pertinent changes to reassure the privacy and protection of data</li>
            <li>Update our privacy policies based on the PIA</li>
          </ul>
        </div>
      </div>
      <div class="flex-3 box-3">
        <div class="box">
          <h3>Implementation</h3>
          <ul>
            <li>Release our GDPR framework</li>
            <li>Revise our customer agreements as per GDPR compliance</li>
          </ul>
        </div>
      </div>
      <div class="flex-3 box-3">
        <div class="box">
          <h3>Continual Improvement</h3>
          <ul>
            <li>Periodic Trainings</li>
            <li>Periodic review of Privacy Impact Assessment (PIA)</li>
            <li>Enhancement of security measures based on PIA</li>
            <li>Periodic analysis of measurable objectives</li>
            <li>Periodic review of GDPR framework</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>