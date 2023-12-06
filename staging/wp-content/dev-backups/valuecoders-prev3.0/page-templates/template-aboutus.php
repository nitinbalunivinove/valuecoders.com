<?php
/*
Template Name: About Page Template
*/ 
global $post;
$thisPostID = $post->ID;
get_header();
?>
<section class="hero-section for-about-section">
<div class="container">
    <div class="dis-flex margin-t-80">
        <div class="header-left-content">
        <div class="for-client-logo-box"><i></i><i></i><i></i><i></i></div>
				<?php while( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
        </div>
        <div class="header-right-image">
            <picture>
                <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/about-img.webp">
                <source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/about-img.png">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/about-img.png" alt="Valuecoders" width="780" 
                height="528">
            </picture>
        </div>
    </div>
</div>
</section>
<?php vcTrustedStartups(); ?>

<?php 
$ourMission = get_field('mission-vision');
if( $ourMission ) :
?>
<section class="about-mission-vision-section padding-t-150">
	<div class="container">
	    <div class="dis-flex">
	        <div class="left-side-img">
					<?php 
					$dtImage 			= $ourMission['image'];
					$dtImageWebp	= $ourMission['image-webp'];
					if( $dtImage && $dtImageWebp ) {
					echo '<picture>
					<source type="'.$dtImageWebp['mime_type'].'" srcset="'.$dtImageWebp['url'].'">
					<source type="'.$dtImage['mime_type'].'" srcset="'.$dtImage['url'].'">
					<img loading="lazy" src="'.$dtImage['url'].'" alt="Valuecoders" width="'.$dtImage['width'].'" 
					height="'.$dtImage['height'].'"> 
					</picture>';	
					}
					?>
	        </div>
	        <div class="right-side-content">
	            <div class="content vision-content">
	                <?php echo $ourMission['vision']; ?>
	            </div>
	            <div class="content mission-content">
	                <?php echo $ourMission['mission']; ?>
	            </div>
	        </div>
	    </div>
	</div>      
</section>
<?php endif; ?>

<?php
$coreValues = get_field( 'core-values' );
if( $coreValues['is_enable'] == 'yes' ) :
?>
<section class="four-column-with-icon-section text-center padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt">
			<?php echo $coreValues['content']; ?>
		</div>
		<?php 
		$values = $coreValues['options']; 
		if( $values ){
			echo '<div class="dis-flex col-box-outer">';
			$ico = 0;
			foreach( $values as $val ) { $ico++;
				echo '<div class="flex-4">
				<span class="icon icon'.$ico.'"></span>
				<h3>'.$val['title'].'</h3>
				<p>'.$val['text'].'</p>
				</div>';
			}
			echo '</div>';
		}
		?>
	</div>
</section>
<?php endif; ?>

<section class="proud-existence-section light-theme padding-t-150 bg-dark-theme">
  <div class="container">
      <div class="head-txt text-center">
          <h2>18+ years of Proud Existence</h2>
          <p>ValueCoders set its first stone down in 2007 and has been thriving ever since. The company takes great pride in announcing that they've managed to provide top-notch IT service to their clients for 18 years.</p>
      </div>
      <div class="proud-existance-img margin-t-100 text-center">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/about-proud-exist-img.svg" alt="about-exp-img" width="1589"
              height="470">
      </div>
  </div>
</section>

<section class="some-amazing-company-section padding-t-150">
    <div class="container">
        <div class="head-txt text-center">
            <h2>We Have Worked With Some Amazing Companies Globally</h2>
            <p>We deliver exceptional technology solutions for world-class businesses in every business industry from dynamic startups and SMBs to Fortune 500 companies.</p>
        </div>

        <div class="proud-existance-img margin-t-100 text-center">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/globally-company-img.svg" alt="some-company-img" width="1589" height="470">
        </div>
              <div class="mob-proud-existance-img margin-t-80 text-center">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/amazing-logo-img1.svg" alt="some-company-img" width="400"
                    height="247">
            </div>
            <div class="mob-proud-existance-img margin-t-80 text-center">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/amazing-logo-img2.svg" alt="some-company-img" width="400"
                    height="247">
            </div>
            <div class="mob-proud-existance-img margin-t-80 text-center">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/amazing-logo-img3.svg" alt="some-company-img" width="400"
                    height="247">
            </div>
        <div class="see-our-clients-lnk text-center"> <a href="https://www.valuecoders.com/v2wp/testimonials">See Our Clients</a></div>
    </div>
</section>

<section class="about-award-recog-section  padding-t-150 padding-b-150">
        <div class="container">
            <div class="about-award-partnership-outer">
                <div class="dis-flex content-img-outer award-box">
                    <div class="flex-2">
                        <div class="head-txt">
                            <h2>Awards & Recognitions</h2>
                            <p>In the last 18 years, we have been acknowledged by prestigious organizations and awarded for our work.</p>
                        </div>
                    </div>
                    <div class="flex-2"><div class="img-bx award-logo-part-img"></div></div>
                </div>
                <div class="dis-flex content-img-outer partnership-box">
                    <div class="flex-2">
                        <div class="head-txt">
                            <h2>Partnerships</h2>
                            <p>Several valuable partnerships were forged along this journey, and our research has been published on different websites.</p>
                        </div>
                    </div>
                    <div class="flex-2"><div class="img-bx partnership-logo-part-img"></div></div>
                </div>
            </div>
        </div>
    </section>


<?php
$whyhire = get_field('why-vc');
if( $whyhire ) :
$iswEnabled = $whyhire['is_enable'];
if( $iswEnabled == "yes" ){	
?>
<section class="icon-with-img-section <?php echo $whyhire['sc_background']; ?> padding-t-150 padding-b-150">
	<div class="container">
		<div class="dis-flex col-box-outer">
			<div class="flex-2">
				<div class="head-txt">
					<?php echo $whyhire['content']; ?>
				</div>
				<?php if( $whyhire['options'] ) : ?>
				<div class="dis-flex hire-php-icon icon-box-outer">
				<?php 
		    	$whcount = 0;
		    	foreach( $whyhire['options'] as $row ) : $whcount++; ?>
					<div class="flex-2 margin-t-50">
						<div class="flex-3 box-3">
							<div class="dis-flex items-center">
								<?php 
								$wyicon 	= $row['icon'];
								$wyiconWp 	= $row['icon-wp'];
								if( $wyicon && $wyiconWp ){
								echo '<picture>
								<source type="'.$wyiconWp['mime_type'].'" srcset="'.$wyiconWp['url'].'">
								<source type="'.$wyicon['mime_type'].'" srcset="'.$wyicon['url'].'">
								<img loading="lazy" src="'.$wyicon['url'].'" alt="Valuecoders" width="'.$wyicon['width'].'" height="'.$wyicon['height'].'"> 
								</picture>';
								}else{
									echo '<span class="icon icon'.$whcount.'"></span>';
								}
								?>
								<span class="icon-txt">
									<?php echo $row['title']; ?>
								</span>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="flex-2 text-right right-box">
				<?php if(!wp_is_mobile()) : ?>
				<picture>
					<source type="<?php echo $whyhire['section_image_webp_format']['mime_type']; ?>" 
						srcset="<?php echo $whyhire['section_image_webp_format']['url']; ?>">
					<source type="<?php echo $whyhire['image']['mime_type']; ?>" 
						srcset="<?php echo $whyhire['image']['url']; ?>">
					<img loading="lazy" src="<?php echo $whyhire['image']['url']; ?>" alt="Valuecoders" 
					width="<?php echo $whyhire['image']['width']; ?>" height="<?php echo $whyhire['image']['height']; ?>">
				</picture>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php 
}
endif; ?>
<!-- WHy Hire Developer From VC -->

<?php 
$clientele = get_field( 'vc-clients' );
if( $clientele['is_enabled'] == 'yes' ) :
$dtImage 		= $clientele['image'];
$dtImageWebp	= $clientele['image-webp'];

$ltImage 		= $clientele['image-lt'];
$ltImageWebp	= $clientele['image-lt-webp'];
?>
<section class="client-img-section padding-b-150 <?php echo $clientele['sc_background']; ?>">
	<div class="container">
		<div class="dis-flex col-box-outer items-center">
		<?php if( !wp_is_mobile() ) : ?>
			<div class="flex-2 left-box">
				<?php 
				if( $dtImage && $dtImageWebp ) {
					echo '<picture class="dark-theme-img">
					<source type="'.$dtImageWebp['mime_type'].'" srcset="'.$dtImageWebp['url'].'">
					<source type="'.$dtImage['mime_type'].'" srcset="'.$dtImage['url'].'">
					<img loading="lazy" src="'.$dtImage['url'].'" alt="Valuecoders" width="'.$dtImage['width'].'" height="'.$dtImage['height'].'"> 
				</picture>';	
				}

				if( $ltImage && $ltImageWebp ) {
					echo '<picture class="lighter-theme-img">
					<source type="'.$ltImageWebp['mime_type'].'" srcset="'.$ltImageWebp['url'].'">
					<source type="'.$ltImage['mime_type'].'" srcset="'.$ltImage['url'].'">
					<img loading="lazy" src="'.$ltImage['url'].'" alt="Valuecoders" width="'.$ltImage['width'].'" 
					height="'.$ltImage['height'].'"> 
				</picture>';	
				}

				?>
			</div>
			<?php endif; ?>
			<div class="flex-2 right-box tick-icon-list"><?php echo $clientele['content']; ?></div>
		</div>
		
	</div>
</section>
<?php endif; ?>
<!-- ValueCoder clientele #Ends Here -->

<!-- 
<section class="valuecoders-in-media-section padding-t-150 padding-b-150 bg-dark-theme">
	<div class="container">
		<div class="head-txt text-center">
			<?php the_field('in-media'); ?>			
		</div>
		<div class="margin-t-100">
		<picture class="lighter-theme-img">
		<source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media01.webp">
		<source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media01.png">
		<img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/valuecoders-media01.png" alt="Valuecoders" width="1605" height="71"> 
		</picture>
		<picture class="lighter-theme-img margin-t-60">
		<source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media02.webp">
		<source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media02.png">
		<img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/valuecoders-media02.png" alt="Valuecoders" width="1618" height="43"> 
		</picture>
		<picture class="lighter-theme-img margin-t-60">
		<source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media03.webp">
		<source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media03.png">
		<img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/valuecoders-media03.png" alt="Valuecoders" width="1624" height="50"> 
		</picture>
		<picture class="lighter-theme-img margin-t-60">
		<source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media04.webp">
		<source type="image/png" srcset="<?php bloginfo('template_url'); ?>/images/valuecoders-media04.png">
		<img loading="lazy" src="<?php bloginfo('template_url'); ?>/images/valuecoders-media04.png" alt="Valuecoders" width="1095" height="103"> 
		</picture>
		</div>
		</div>
	</div>
</section> 

<section class="experts-talk-first-section bg-blue-linear padding-t-150 padding-b-150">
  <div class="container">
    <div class="head-txt text-center">
      <h2>Let’s Discuss Your Project</h2>
      <p>Get free consultation and let us know your project idea to turn it into an amazing digital product.</p>
    </div>
    <div class="text-center margin-t-50">
      <a class="green-btn" href="<?php echo site_url('/contact'); ?>">Talk To Our Experts <i class="arrow-icon"></i></a>
    </div>
  </div>
</section> 
-->

<?php 
$mates = get_field( 'team-listings' );
if( $mates['is_enable'] == 'yes' ) : ?>
<section class="valuecoders-our-team-section padding-t-150 padding-b-150 bg-dark-theme">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $mates['content']; ?>
		</div>
		<?php 
		$tmembers = $mates['options']; 
		if( $tmembers ){
			echo '<div class="dis-flex">';
			foreach ( $tmembers as $mem ){
				echo '<div class="flex-4">
				<div class="profile-box">';
				$proImg 	= $mem['image'];
				$proImgwp 	= $mem['image-webp'];
				if( $proImg && $proImgwp ){
					echo '<picture>
					<source type="'.$proImgwp['mime_type'].'" srcset="'.$proImgwp['url'].'">
					<source type="'.$proImg['mime_type'].'" srcset="'.$proImg['url'].'">
					<img loading="lazy" src="'.$proImg['url'].'" alt="Valuecoders" width="'.$proImg['width'].'" 
					height="'.$proImg['height'].'"> 
				</picture>';	
				}
				echo '<div class="profile-text">
						<h3>'.$mem['name'].'</h3>
						<h5>'.$mem['designation'].'</h5>
						<p>'.$mem['description'].'</p>
					</div>
				</div>
			</div>';
			}
			echo '</div>';
		}
		?>
	</div>
</section>
<?php endif; ?>

<?php 
$teamVc = get_field( 'team-vc' );
if( $teamVc['is_enabled'] == 'yes' ) :
$teamImage 		= $teamVc['image'];
$teamImageWebp	= $teamVc['image-webp'];
?>
<section class="team-valuecoders-section padding-b-150 <?php //echo $teamVc['sc_background']; ?> bg-dark-theme">
	<!-- <div class="container">
		<div class="head-txt text-center"><?php echo $teamVc['content']; ?></div>
	</div> -->
	<div class="margin-t-100">
		<?php 
		if( $teamImage && $teamImageWebp ) {
			echo '<picture>
			<source type="'.$teamImageWebp['mime_type'].'" srcset="'.$teamImageWebp['url'].'">
			<source type="'.$teamImage['mime_type'].'" srcset="'.$teamImage['url'].'">
			<img loading="lazy" src="'.$teamImage['url'].'" alt="Valuecoders" width="'.$teamImage['width'].'" height="'.$teamImage['height'].'"> 
		</picture>';	
		}
		?>
	</div>
</section>
<?php endif; ?>

<?php 
$testimonailsContent 	= get_field( 'testimonial-content', 'option' );
$testimonailsList 		= get_field( 'testimonials', 'option' );
?>
<section class="client-video-section padding-t-150 padding-b-150 <?php echo $ctOptions['sc_background']; ?>">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $testimonailsContent; ?>
		</div>
		<?php if( $testimonailsList ) : ?>
		<div class="glider-contain client-testimonial-slider">
			<div class="glider">
				<?php foreach( $testimonailsList as $row ) : ?>
				<div class="client-videos shadow-box">
					<div class="client-video-box">
						<iframe width="483" height="312" src="<?php echo $row['yt-video']; ?>"
							srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}a{display:flex;align-items:center;justify-content:center;}.iframe-bg{background:url(<?php echo $row['client_thumbnail']; ?>) top center no-repeat;background-size:cover;width:100%;height:100%;}</style><a href=<?php echo $row['yt-video']; ?>g><span class='iframe-bg'></span></a>"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
							title="Testimonial Image"></iframe>
					</div>
					<div class="client-description bg-white">
						<span class="client-name">
							<?php echo $row['client-name']; ?>
						</span>
						<span class="client-quote">
							<?php echo $row['Comment']; ?>
						</span>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<button aria-label="Previous" class="glider-prev vlazy"></button>
			<button aria-label="Next" class="glider-next vlazy"></button>
			<div role="tablist" class="dots"></div>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>