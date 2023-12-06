<?php
/* 
Template Name: Service Page Template 
*/ 
global $post;
$thisPostID = $post->ID;
$vcBtn = get_field('vc-cta', $thisPostID);
get_header(); 

/*
Development Notes :
Main service Page ID is : 11941
*/
$mainServicePage = 11941;
?>

<?php 
/*
while( have_posts() ) : the_post(); 
$bannerBg = get_field('sbg-thumbnail');
$bannerBgStyle = '';
if( $bannerBg ){
	$bannerBgStyle = ' style="background-image:url('.$bannerBg.')"';
}
?>
<section class="hero-section text-center" <?php echo $bannerBgStyle; ?> data-nosnippet>
	<div class="container">
		<?php 
		$topHeading = get_field('heading-top');
		if( $topHeading ){
			//echo '<span class="top-head clr-white">'.$topHeading.'</span>';
		}
		?>
		<?php the_content(); ?>
		<div class="margin-t-70">
			<?php vc_cta(); ?>
		</div>
	</div>
</section>
<?php endwhile; 
*/
?>

<section class="second-level-section">
	<div class="container">
		<div class="breadcrumbs">
		<?php 
		$bcCategory = get_field('bc-vcategory');
		$bcTitle 		= get_field('bc-title');
		if( $bcTitle ){
		$bct = $bcTitle;
		}		
		else{
		$bct = get_the_title();	
		}

		if( isset( $bcCategory ) && ($bcCategory == "solutions") ){
		echo '<a href="'.get_bloginfo('url').'">Home</a> <span>Solutions</span> '.$bct;		
		}else{
		echo '<a href="'.get_bloginfo('url').'">Home</a> <a href="'.site_url('/software-development-services-company').'">Services</a> '.$bct;
		}		
		?>
		</div>
		<div class="dis-flex">
			<?php 
			while( have_posts() ) : the_post();  ?>
			<div class="left-box flex-2 tick-icon-list">
				<?php 
				if( is_page(13435) ){
				echo '<div class="for-client-logo-box"><i></i><i></i><i></i><i></i></div>';
				}
				the_content(); 
				if( is_page(3794)) : ?>
				<div class="col-estimate-box dis-flex">
					<div class="flex-3">
						<div class="inner-content">
							<h3>2 Days</h3>
							<p>for an estimate</p>
						</div>
					</div>
					<div class="flex-3">
						<div class="inner-content">
							<h3>3 Weeks</h3>
							<p>for the prototype</p>
						</div>
					</div>
					<div class="flex-3">
						<div class="inner-content">
							<h3>4 Months</h3>
							<p>for the MVP</p>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="margin-t-70">
					<a class="green-btn" href="<?php echo site_url('/contact'); ?>">Book A Free Consultation <i class="arrow-icon"></i>
				</a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php /* ?>
			<div class="flex-2">
				<div class="for-client-logo-box">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
				</div>
				<?php 
				$hasTrialClass 	= "";
				$isFreeTrial 	= get_field('hire_php_developers');
				$ftEnabled 		= $isFreeTrial['is_enabled'];
				if( $ftEnabled == "yes" ) {
					$pocessType = ( isset( $isFreeTrial['hprocess-type'] ) && !empty( $isFreeTrial['hprocess-type'] ) ) ? 
					$isFreeTrial['hprocess-type'] : '';
					//$hasTrialClass = ( $pocessType == "free-trial" ) ? ' has-free-trial' : '';	
					if( $pocessType == "free-trial" ){
						//echo '<a href="#" class="has-free-trial"></a>';		
					}
				}
				?>
				<div class="form-right-box">
					<div class="head">
						<h3>Get In Touch</h3>
						<p>Our consultants will respond back within 8 business hours.</p>
					</div>

					<div class="top-right-form-box">
						<?php get_template_part('inc/hire', 'form', ['tpl' => 'service']); ?>
					</div>
				</div>				
			</div>
			<?php 
			*/ 						
			?>
			<div class="flex-2">					
            <?php 
            if( !is_page( 13435 ) ){
						$video_url 		= 'https://www.youtube.com/embed/e7nbilPZzBE';
						$vname 				= 'James Kelly';
						$vdesignation = 'Co-founder, Miracle Choice';
						$vthumbnail 	= get_bloginfo('template_url').'/images/test-videob.webp';						
						$vsection = get_field('bv-testimonial');
						if( isset($vsection['is-true']) && ($vsection['is-true'] == "yes") ){
						$video_url 		= $vsection['video_url'];
						$vname 				= $vsection['name'];
						$vdesignation = $vsection['designation'];
						$vthumbnail 	= ($vsection['thumbnail']) ? $vsection['thumbnail']['url'] : '';						
						}
            ?>
            <div class="for-client-logo-box"><i></i><i></i><i></i><i></i></div>
            <div class="right-box">
            	<?php 
            	$glides = [
							[ 
								'video' => 'https://www.youtube.com/embed/d78gD-wwVTg',
            		'image' => get_bloginfo('template_url').'/images/ban-client2.webp',
            		'name' 	=> 'James Kelly',
            		'pro' 	=> 'Co-founder, Miracle Choice'
            	],
            	[ 
								'video' => 'https://www.youtube.com/embed/e7nbilPZzBE',
            		'image' => get_bloginfo('template_url').'/images/ban-client3.webp',
            		'name' 	=> 'Judith Mueller',
            		'pro' 	=> 'Executive Director, Mueller Health Foundation'
            	],
            	[ 
								'video' => 'https://www.youtube.com/embed/W7Bxt2Up0NQ',
            		'image' => get_bloginfo('template_url').'/images/ban-client5.webp',
            		'name' 	=> 'Kris Bruynson',
            		'pro' 	=> 'Director, Storloft'
            	],
            	[ 
								'video' => 'https://www.youtube.com/embed/aErqOtvMClY',
            		'image' => get_bloginfo('template_url').'/images/ban-client1.webp',
            		'name' 	=> 'Mohammed Mirza',
            		'pro' 	=> 'Director, LOCALMASTERCHEFS LTD'
            	],
            	[ 
								'video' => 'https://www.youtube.com/embed/QCIMuRQkfKU',
            		'image' => get_bloginfo('template_url').'/images/ban-client6.webp',
            		'name' 	=> 'Mr.Savarni',
            		'pro' 	=> 'Founder- sbspco.com'
            	],
            	[ 
								'video' => 'https://www.youtube.com/embed/oVbfGyMPq50',
            		'image' => get_bloginfo('template_url').'/images/ban-client4.webp',
            		'name' 	=> 'Jame Thompson',
            		'pro' 	=> 'edinstitute.com.au'
            	]
						];
						$randKey = array_rand($glides, 3);
            ?>
            <div class="glider-contain service-banner-client" id="tpl-services-slider">
            	<div class="glider">
            			<?php foreach( $randKey as $key ){ ?>
									<div class="slide-item right-inner">
									<div class="testi-container">
									<iframe width="483" height="312" src="<?php echo $glides[$key]['video']; ?>" srcdoc="<style>*	{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}a{display:flex;align-items:center;justify-content:center;}
									.iframe-bg{background:url(<?php echo $glides[$key]['image']; ?>) top center no-repeat;background-size:cover;width:100%;height:100%;transition: all 0.3s ease-in-out;}.iframe-bg:hover {opacity: 0.7;}</style><a href=<?php echo $glides[$key]['video']; ?>><span class='iframe-bg'></span></a>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Testimonial Image"></iframe>
									</div>
									<div class="content text-center">
									<p><?php echo $glides[$key]['name']; ?></p>
									<span><?php echo $glides[$key]['pro']; ?></span>
									</div>
									</div>
									<?php } ?>									
            	</div>
            	<div role="tablist" class="dots"></div>		
            </div>
              

            </div>
          	<?php }else{ ?>
						<div class="form-right-box">
						<div class="head">
							<h3>Get In Touch</h3>
							<p>Our consultants will respond back within 8 business hours.</p>
						</div>
						<div class="top-right-form-box">
							<?php get_template_part('inc/hire', 'form', ['tpl' => 'service']); ?>
						</div>
						</div>
						<?php } ?>
          </div>
		</div>
	</div>
</section>
<?php vcTrustedStartups(); ?>

		<?php 
		$ctoSection = get_field('cto-services-col');
		if( isset( $ctoSection['is_enabled'] ) && ($ctoSection['is_enabled'] == "yes") ) :
		?>
		<section class="three-column-icon-section bg-light-theme padding-t-150 padding-b-150" id="cto-services-col">
      <div class="container">
        <div class="head-txt text-center">
          <?php echo $ctoSection['content-top']; ?>
        </div>
        <div class="dis-flex col-box-outer cto-service">
          <div class="flex-2 box-3">
            <div class="box bg-blue-opacity-light">
              <div class="headtext"><?php echo $ctoSection['title-left']; ?></div>
              <div class="inner-text"><?php echo $ctoSection['content-left']; ?></div>
            </div>
          </div>
          <div class="flex-2 box-3">
            <div class="box bg-blue-opacity-light">
              <div class="headtext"><?php echo $ctoSection['title-right']; ?></div>
              <div class="inner-text"><?php echo $ctoSection['content-right']; ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php 
  	endif;

    if(is_page(14198)) : ?>
		<section class="experts-talk-first-section bg-blue-linear padding-t-150 padding-b-150">
		<div class="container">
		<div class="head-txt text-center">
		<h2>Looking for an expert CTO?</h2>
		<p>Most experienced CTOs will start working on your project as soon as possible.<br> Contact our managers to describe your requirements.</p>
		</div>
		<div class="text-center margin-t-50">
		<a class="green-btn" href="<?php echo site_url('/contact'); ?>">Book A Free Consultation <i class="arrow-icon"></i></a>
		</div>
		</div>
		</section>
  <?php endif; ?>

<?php 
if( is_page( 'application-maintenance' ) ) : 
	dynamic_sidebar('app-maintenance');
endif; // section only managed in application-maintenance page added statically ?>
<?php 
$threeSteps = get_field('three-steps');
if( $threeSteps['is_enabled'] == "yes" ) :
?>
<section class="two-column-right-box-section <?php echo $threeSteps['sc_background']; ?> padding-t-150 padding-b-150">
	<div class="container">
		<div class="dis-flex col-box-outer for-counter">
			<div class="flex-2 left-box">
				<div class="head-txt"><?php echo $threeSteps['top_content'] ?></div>
				<?php 
					//if( !wp_is_mobile() ) : 
					$fdthumb 	= $threeSteps['image'];
					$fdthumbnwp = $threeSteps['image-webp'];
					if( $fdthumb && $fdthumbnwp ){
					echo '<picture>
					<source type="image/webp" srcset="'.$fdthumbnwp['url'].'">
					<source type="'.$fdthumb['mime_type'].'" srcset="'.$fdthumb['url'].'">
					<img loading="lazy" src="'.$fdthumb['url'].'" alt="'.$fdthumb['title'].'" width="'.$fdthumb['width'].'" height="'.$fdthumb['height'].'"> 
					</picture>';
					}
				?>
				<?php //endif; ?>
			</div>
			<div class="flex-2 right-box">
				<?php 
				$blocks = $threeSteps['content_block'];
				if( $blocks ){
					foreach ($blocks as $text){
					echo '<div class="box for-box-effect '.vcHasAnchor($text['text']).'">'.$text['text'].'</div>';		
					}
				}
				?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php 
$benefits = get_field('benefits');
if( $benefits['is_enabled'] == "yes" ) :
?>
<section class="column-list-section <?php echo $benefits['sc_background']; ?> padding-t-150 padding-b-150" data-nosnippet>
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $benefits['heading']; ?>
		</div>
		<div class="tick-icon-list"><?php echo $benefits['content']; ?><div>
	</div>
</section>
<?php endif; ?>

<?php  	
$specifications = get_field('tech-spec');
if( $specifications ) :
$isEnable = $specifications['is_enabled'];
if( $isEnable == "yes" ){ 
?>
<section class="three-column-icon-section <?php echo $specifications['sc_background']; ?> padding-t-150 padding-b-150" 
	id="vc-tech-spec">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $specifications['content']; ?>
		</div>
			<div class="dis-flex col-box-outer">
			<?php 
			$boxCount = ( isset($specifications['specifications']) && is_array($specifications['specifications']) ) ? 
			count($specifications['specifications']) : 0;
			if( $specifications['specifications'] ){
				foreach( $specifications['specifications'] as $row ){
					$hasLink = ( isset( $row['link'] ) && !empty($row['link']) ) ? " has-anchor" : "";					
					if( ($boxCount === 2) ||  ($boxCount === 4) ){
					echo '<div class="flex-2 box-2 '.$hasLink.'">';
					}else{
					echo '<div class="flex-3 box-3 '.$hasLink.'">';	
					}
					
					if( $row['link'] ){
					echo '<a href="'.vc_siteurl($row['link']).'">';	
					}

					if( vcHasHTML( $row['text'] ) ){
					$stext = $row['text'];
					}else{
					$stext = '<p>'.$row['text'].'</p>';
					}
					echo '<div class="box bg-blue-opacity-light">
					<span class="dot-icon dot-md"></span>
					<h3>'.$row['title'].'</h3>'.$stext.'</div>';
					
					if( $row['link'] ){
						echo '</a>';
					}

					echo '</div>';
				}
			} 
			?>
			</div>
		<!-- 
		<div class="text-center margin-t-100"><?php //vc_cta(); ?></div> 
		-->
	</div>
</section>
<?php 
}
endif; ?>
	
	<?php 
	$delProcess = get_field('col-process-delivery');
	if( isset($delProcess['is_enabled']) && ($delProcess['is_enabled'] == "yes") ) :
	?>
	<section id="col-delivery-process" class="three-column-icon-section bg-dark-theme padding-t-150 padding-b-150">
	<div class="container">
	<div class="head-txt text-center">
	<?php echo $delProcess['top_content']; ?>
	</div>
	<div class="prod-tabs margin-t-100">
	  <nav id="tabs">
	  <ul>
	    <li class="active"><a href="#tab1">Preparation Phase</a></li>
	    <li><a href="#tab2">Requirement Analysis</a></li>
	    <li><a href="#tab3">Solution Creation</a></li>
	  </ul>	  
	  </nav>
	  <div id="tab-contents" class="margin-t-100">
	    <div id="tab1" class="tab-contents active">
	    	<?php echo $delProcess['tcontent-one']; ?>
	      <div class="dis-flex col-box-outer">
	      <?php echo $delProcess['icontent-one']; ?>
	      </div>
	    </div>
	    <div id="tab2" class="tab-contents">
	      <?php echo $delProcess['tcontent-two']; ?>
	      <div class="dis-flex col-box-outer">
	      <?php echo $delProcess['icontent-two']; ?>
	      </div>
	    </div>
	    <div id="tab3" class="tab-contents">
	      <?php echo $delProcess['tcontent-three']; ?>
	      <div class="dis-flex col-box-outer">
	      <?php echo $delProcess['icontent-three']; ?>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	</section>
	<?php endif; ?>
	
	<section class="experts-talk-first-section bg-blue-linear padding-t-150 padding-b-150">
	  <div class="container">
	      <div class="head-txt text-center">
			<h2>
			<?php 
			echo (isset($vcBtn['title-one']) && !empty($vcBtn['title-one'])) ? $vcBtn['title-one'] : 
			"Let's Discuss Your Project"; ?>
			</h2>
			<p>
			<?php 
			echo (isset($vcBtn['text-one']) && !empty($vcBtn['text-one'])) ? $vcBtn['text-one'] : 
			"Get free consultation and let us know your project idea to turn it into an amazing digital product."; ?></p>
		</div>
		<div class="text-center margin-t-50">
	      <a class="green-btn" href="<?php echo site_url('/contact'); ?>">
	      <?php 
		echo (isset($vcBtn['link-one']) && !empty($vcBtn['link-one'])) ? $vcBtn['link-one'] : 
			"Book A Free Consultation"; 
		?><i class="arrow-icon"></i>
		</a>
	      </div>
	</div>
	</section>

<?php 
$iboxDiscovery = get_field('ibox-discovery');
if( isset($iboxDiscovery['is_enable']) && ($iboxDiscovery['is_enable'] == "yes") ) :
?>
<section class="three-column-icon-section <?php echo $iboxDiscovery['sc_background']; ?> padding-t-150 padding-b-150">
  <div class="container">
    <div class="head-txt text-center"><?php echo $iboxDiscovery['content']; ?></div>
    <?php 
    if( $iboxDiscovery['options'] ){
    echo '<div class="dis-flex col-box-outer">';
    foreach( $iboxDiscovery['options'] as $row ){
    	echo '<div class="flex-4 box-4">
        <div class="box bg-blue-opacity-light">
        <span class="dot-icon dot-md"></span>'.$row['content'];
        if( $row['link'] ){
					echo '<a href="'.$row['link'].'" class="learn-more">Learn More <i class="round-arrow-icon"></i></a>';
        }
        echo '</div></div>';
    }
    echo '</div>';	
    }
    ?>
  </div>
</section>
<?php 
endif;

if( is_page( 10239 ) ) : ?>
<section class="two-difference-section padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<h2>Common Challenges Vs. How ValueCoders Gets You Covered</h2>
			<p>There are a few common challenges when it comes to Offshore Development Centers (ODCs) in India</p>
		</div>
		<div class="dis-flex col-box-outer margin-t-100">
			<div class="flex-2 left-box">
				<div class="list-box-outer">
					<div class="head-box clr-white bg-voilet">
						<h3>Challenges</h3>
						<div class="mid-box desktop">
							<span class="verses">v/s</span>
						</div>
					</div>
					<div class="list-box">
						<ul>
							<li>Poor Project Management</li>
						 	<li>Longer Turnaround For Onboarding</li>
							 <li>Difference In Timezone</li>
							 <li>Nightmarish Coordination</li>
							 <li>Miscommunication Due To Language And Cultural Barriers</li>
							 <li>Delayed Delivery</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="mid-box mobile">
				<span class="verses">v/s</span>
			</div>
			<div class="flex-2 last-box">
				<div class="list-box-outer">
					<div class="head-box clr-white bg-voilet">
						<h3>Expect The Best With ValueCoders</h3>
					</div>
					<div class="list-box">
						<ul>
							<li>Project management tools and best practices like sprint planning, scrum of scrums, joint retrospective with stake holders, agile software development process together provide you great project control</li>
							<li>We have hundreds of pre-vetted professionals with well-defined recruitment and training processes that help in a fast turnaround</li>
							<li>Our experts can work as per your timezone to effectively coordinate with you for project progress.</li>
							<li>We work with advanced project management tools, and our professionals have excellent communication skills that give you flawless coordination.</li>
							<li>Our pre-vetted professionals have good communication skills. You won’t face any cultural misfit too.</li>
							<li>You get timely delivery from your ODC team with Valuecoders because all team members are highly skilled & experienced and work under strict guidelines.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php 
endif; 

if( is_page('it-strategy-consulting-firms') ) {
	cmnTecStackUpdated();
}


$twColumn = get_field('tw-column');
if( $twColumn ) :
		if( $twColumn['is_enabled'] == "yes" ){
?>
<section class="img-two-column-list-section <?php echo $twColumn['sc_background']; ?> padding-t-150 padding-b-150">
	<div class="container">
		<div class="dis-flex">
			<div class="flex-2 content-box tick-icon-list">
				<?php echo $twColumn['content']; ?>
			</div>
			<div class="flex-2 img-box">
				<?php 
				$fdthumb 	= $twColumn['image'];
				$fdthumbnwp = $twColumn['image-wp'];
				if( $fdthumb && $fdthumbnwp ){
				echo '<picture>
				<source type="image/webp" srcset="'.$fdthumbnwp['url'].'">
				<source type="'.$fdthumb['mime_type'].'" srcset="'.$fdthumb['url'].'">
				<img loading="lazy" src="'.$fdthumb['url'].'" alt="'.$fdthumb['title'].'" width="'.$fdthumb['width'].'" height="'.$fdthumb['height'].'"> 
				</picture>';
				} 
				?>
			</div>
		</div>
		<!-- 
		<div class="text-center margin-t-100"><?php //vc_cta(); ?></div> 
		-->
	</div>
</section>
<?php } endif; ?>

<?php 
$cmnChallenge = get_field('cmn-challenges');
if( $cmnChallenge ) :
	if( $cmnChallenge['is_enabled'] == "yes" ){
?>
<section class="list-column-box-section <?php echo $cmnChallenge['sc_background']; ?> padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center"><?php echo $cmnChallenge['content-top']; ?></div>
		<div class="dis-flex col-box-outer margin-t-100">
			<div class="flex-2">
				<div class="list-box-outer">
					<div class="head-box clr-white bg-voilet"><?php echo $cmnChallenge['title-left']; ?></div>
					<div class="list-box cross-icon"><?php echo $cmnChallenge['content-left']; ?></div>
				</div>
			</div>
			<div class="flex-2">
				<div class="list-box-outer">
					<div class="head-box clr-white bg-voilet"><?php echo $cmnChallenge['title-right']; ?></div>
					<div class="list-box tick-icon"><?php echo $cmnChallenge['content-right']; ?></div>
				</div>
			</div>
		</div>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php } endif; ?>

<?php
$expframeworks 	= get_field('php_frame_work_section');
$isBlockChain 	= get_field('bc_specific');
$isBcContent  	= false;
if( isset($isBlockChain['is-enable']) && ($isBlockChain['is-enable'] == "yes") ){
	if( $isBlockChain['main-bc'] ){
		$isBcContent = ( $expframeworks ) ? $expframeworks['content'] : '';
		$expframeworks = get_field( 'php_frame_work_section', $isBlockChain['main-bc'] );	
	}	
}

if( $expframeworks ) :
$isfrEnable = $expframeworks['is_enable'];
if( $isfrEnable == "yes" ) {
$sectionType 	= $expframeworks['section_type']; 
$techno 		= $expframeworks['techno'];
if( ($sectionType == "technology") && $techno ){
$hastechSidebar = ( isset($expframeworks['show-cat-lc']) && ($expframeworks['show-cat-lc'] == "no") ) ? " no-catbar " : "";
$maxClass 		= ( isset($expframeworks['show-cat-lc']) && ($expframeworks['show-cat-lc'] == "no") ) ? "" : " for-max-six-icon ";
?>
<section id="load-tech-stack" class="technologies-right-logo-section <?php echo $hastechSidebar; echo $expframeworks['sc_background']; ?> padding-t-150 padding-b-150">
	<div id="tech-stack-bx" class="container">
		<div class="head-txt text-center">
			<?php 
			if( $isBcContent !== false ){
				echo $isBcContent;
			}else{
				echo $expframeworks['content'];
			}			
			?>
		</div>		
	</div>
</section>
<?php }
}
endif; ?>

<?php if( is_page('dedicated-development-teams') ) : ?>
<section class="table-three-list-section bg-dark-theme padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<h2>Dedicated Team Model vs. Time and Materials vs. Fixed Price Model</h2>
			<p>When outsourcing your software development, you will have to decide on an engagement model that defines the basis of the collaboration between you and ValueCoders.</p>
		</div>
		<div class="dis-flex col-box-outer margin-t-100 bg-change-theme">
			<div class="flex-3 table-list">
				<h3>Dedicated Team</h3>
				<ul>
					<li>Mostly used for long-term projects with unclear requirements and potential changes in scope</li>
					<li>It’s also common when the client doesn’t have the necessary skills to tackle the project at hand.</li>
					<li>More affordable option than hiring an in-house team.</li>
					<li>Team dedicated exclusively to the project at hand.</li>
					<li>Continuous development and delivery for improved flexibility and scalability.</li>
					<li>Faster workflow when compared to more strictly planned models.</li>
				</ul>
			</div>
			<div class="flex-3 table-list">
				<h3>Time and Materials model</h3>
				<ul>
					<li>Here you only pay for the time and effort the developers spend on your project working on predefined features and functionality.</li>
					<li>You only pay for actual work performed on a specific timeframe</li>
					<li>Flexible approach to development that gives room for changing requirements.</li>
					<li>Highly scalable and rapidly adaptable to new needs.</li>
					<li>Tight time management that ensures a faster development.</li>
					<li>Increased cost control and budget flexibility.</li>
				</ul>
			</div>
			<div class="flex-3 table-list">
				<h3>Fixed Price Model</h3>
				<ul>
					<li>It takes place when the client and the development company agree on a fixed cost for the entire project.</li>
					<li>You’ll pay only that predefined sum regardless of the amount of time or resources</li>
					<li>No surprise costs and minimal client involvement as the final price is agreed before development starts</li>
					<li>The workflow is predefined and agreed by both parties, meaning that there shouldn’t be any issues in delivering the project on time.</li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>

		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->

	</div>
</section>
<?php endif; ?>

<?php  
$ibox = get_field('ibox-cards');
if( $ibox ) :
$iBoxEnable = $ibox['is_enable'];
if( $iBoxEnable == "yes" ) {
$gridType = ( isset($ibox['grid-column']) && !empty($ibox['grid-column']) ) ? $ibox['grid-column'] : 3;
?>
<section class="three-column-icon-section <?php echo $ibox['sc_background']; ?> padding-t-150 padding-b-150" id="vc-ibox-cards">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $ibox['content']; ?>
		</div>
		<?php if( $ibox['options'] ) : ?>
		<div class="dis-flex col-box-outer php-usage-sprite">
			<?php 
			$wcount = 0;
			foreach( $ibox['options'] as $row ) : $wcount++; ?>
			<div class="flex-<?php echo $gridType; ?> box-3 <?php echo vcHasAnchor( $row['title'], $row['text'] ); ?>">
				<div class="box bg-blue-opacity-light">
					<?php 
					$wicon 	= $row['icon'];
					$wiconwp = $row['icon-webp'];
					if( $wicon && $wiconwp ){
					echo '<picture class="dark-theme-img">
					<source type="image/webp" srcset="'.$wiconwp['url'].'">
					<source type="'.$wicon['mime_type'].'" srcset="'.$wicon['url'].'">
					<img loading="lazy" src="'.$wicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wicon['width'].'" 
					height="'.$wicon['height'].'"> 
					</picture>';
					}else{
						echo '<span class="dot-icon dot-md"></span>';
					}


					$wlicon 	= $row['icon-lt'];
					$wliconwp 	= $row['icon-lt-webp'];
					if( $wlicon && $wliconwp ){
					echo '<picture class="lighter-theme-img">
					<source type="image/webp" srcset="'.$wlicon['url'].'">
					<source type="'.$wlicon['mime_type'].'" srcset="'.$wlicon['url'].'">
					<img loading="lazy" src="'.$wlicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wlicon['width'].'" 
					height="'.$wlicon['height'].'"> 
					</picture>';
					}
					?>
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['text']; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>	
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php 
}
endif; 
?>

<?php 
if( is_page( $mainServicePage ) ){
$tsheading = "<h2>Tech Stacks</h2>
<p>We work with various technologies and platforms to lend flexibility to your software development and outsourcing needs. We also keep our team abreast with the latest versions of these technologies.</p>";
cmnTecStackUpdated( $tsheading ); 
hireModelCmn('bg-dark-theme');
} 
?>

<?php 
$hasTS = get_field('vc-show-ts');
if( isset( $hasTS['is_enabled'] ) && !empty( $hasTS['is_enabled'] ) && ($hasTS['is_enabled'] == "yes") ){
	$tsheading = $hasTS['content'];
	cmnTecStackUpdated( $tsheading );
}
?>

<?php  
$ibox = get_field('ibox-cards-devcycle');
if( $ibox ) :
$iBoxEnable = $ibox['is_enable'];
if( $iBoxEnable == "yes" ) {
$gridType = ( isset($ibox['grid-column']) && !empty($ibox['grid-column']) ) ? $ibox['grid-column'] : 3;
?>
<section class="numbering-box-section <?php echo $ibox['sc_background']; ?> padding-t-150 padding-b-150" id="vc-ibox-cards-devcycle">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $ibox['content']; ?>
		</div>
		<?php if( $ibox['options'] ) : ?>
		<div class="dis-flex col-box-outer php-usage-sprite">
			<?php 
			$wcount = 0;
			foreach( $ibox['options'] as $row ) : $wcount++; ?>
			<div class="flex-3 box-3<?php echo vcHasAnchor( $row['title'], $row['text'] ); ?>">
				<div class="box bg-blue-opacity-light">
					<?php 
					$wicon 	= $row['icon'];
					$wiconwp = $row['icon-webp'];
					if( $wicon && $wiconwp ){
					echo '<picture class="dark-theme-img">
					<source type="image/webp" srcset="'.$wiconwp['url'].'">
					<source type="'.$wicon['mime_type'].'" srcset="'.$wicon['url'].'">
					<img loading="lazy" src="'.$wicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wicon['width'].'" 
					height="'.$wicon['height'].'"> 
					</picture>';
					}


					$wlicon 	= $row['icon-lt'];
					$wliconwp 	= $row['icon-lt-webp'];
					if( $wlicon && $wliconwp ){
					echo '<picture class="lighter-theme-img">
					<source type="image/webp" srcset="'.$wlicon['url'].'">
					<source type="'.$wlicon['mime_type'].'" srcset="'.$wlicon['url'].'">
					<img loading="lazy" src="'.$wlicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wlicon['width'].'" 
					height="'.$wlicon['height'].'"> 
					</picture>';
					}
					?>
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['text']; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>	
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div>-->
	</div>
</section>
<?php 
}
endif; 
?>

<?php  
$whyChoos = get_field('why-choose');
if( $whyChoos ) :
$isWhyEnable = $whyChoos['is_enable'];
if( $isWhyEnable == "yes" ) {
$gridType = (isset($whyChoos['grid-column']) && !empty( $whyChoos['grid-column'] )) ? $whyChoos['grid-column'] : 2;
?>
<section class="three-column-icon-section <?php echo $whyChoos['sc_background']; ?> padding-t-150 padding-b-150" id="vc-why-choose">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $whyChoos['content']; ?>
		</div>
		<?php if( $whyChoos['options'] ) : ?>
		<div class="dis-flex col-box-outer php-usage-sprite">
			<?php 
			$wcount = 0;
			foreach( $whyChoos['options'] as $row ) : $wcount++; ?>
			<div class="flex-<?php echo $gridType; ?> box-3 <?php echo vcHasAnchor( $row['title'], $row['text'] ); ?>">
				<div class="box bg-blue-opacity-light">
					<?php 
					$wicon 		= $row['icon'];
					$wiconwp 	= $row['icon-webp'];
					if( $wicon && $wiconwp ){
					echo '<picture class="dark-theme-img">
					<source type="image/webp" srcset="'.$wiconwp['url'].'">
					<source type="'.$wicon['mime_type'].'" srcset="'.$wicon['url'].'">
					<img loading="lazy" src="'.$wicon['url'].'" alt="'.vcparseanchor($row['title']).'" 
					width="'.$wicon['width'].'" height="'.$wicon['height'].'"> 
					</picture>';
					}else{
						echo '<span class="dot-icon dot-md"></span>';
					}


					$wlicon 	= $row['icon-lt'];
					$wliconwp 	= $row['icon-lt-webp'];
					if( $wlicon && $wliconwp ){
					echo '<picture class="lighter-theme-img">
					<source type="image/webp" srcset="'.$wlicon['url'].'">
					<source type="'.$wlicon['mime_type'].'" srcset="'.$wlicon['url'].'">
					<img loading="lazy" src="'.$wlicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wlicon['width'].'" 
					height="'.$wlicon['height'].'"> 
					</picture>';
					}
					?>
					<!-- <h3><?php echo preg_replace("/<\/?a( [^>]*)?>/i", "", $row['title']); ?></h3> -->
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['text']; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php 
}
endif; ?>

<?php  
$ibox = get_field('ibox-cards-techstack');
if( $ibox ) :
$iBoxEnable = $ibox['is_enable'];
if( $iBoxEnable == "yes" ) {
$gridType = ( isset($ibox['grid-column']) && !empty($ibox['grid-column']) ) ? $ibox['grid-column'] : 3;
?>
<section class="three-column-icon-section <?php echo $ibox['sc_background']; ?> padding-t-150 padding-b-150" id="vc-ibox-cards-techstack">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $ibox['content']; ?>
		</div>
		<?php if( $ibox['options'] ) : ?>
		<div class="dis-flex col-box-outer php-usage-sprite">
			<?php 
			$wcount = 0;
			foreach( $ibox['options'] as $row ) : $wcount++; ?>
			<div class="flex-3 box-3 <?php echo vcHasAnchor( $row['title'], $row['text'] ); ?>">
				<div class="box bg-blue-opacity-light">
					<?php 
					$wicon 		= $row['icon'];
					$wiconwp 	= $row['icon-webp'];
					if( $wicon && $wiconwp ){
					echo '<picture class="dark-theme-img">
					<source type="image/webp" srcset="'.$wiconwp['url'].'">
					<source type="'.$wicon['mime_type'].'" srcset="'.$wicon['url'].'">
					<img loading="lazy" src="'.$wicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wicon['width'].'" 
					height="'.$wicon['height'].'"> 
					</picture>';
					}


					$wlicon 	= $row['icon-lt'];
					$wliconwp 	= $row['icon-lt-webp'];
					if( $wlicon && $wliconwp ){
					echo '<picture class="lighter-theme-img">
					<source type="image/webp" srcset="'.$wlicon['url'].'">
					<source type="'.$wlicon['mime_type'].'" srcset="'.$wlicon['url'].'">
					<img loading="lazy" src="'.$wlicon['url'].'" alt="'.vcparseanchor($row['title']).'" width="'.$wlicon['width'].'" 
					height="'.$wlicon['height'].'"> 
					</picture>';
					}
					?>
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['text']; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>	
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->	
	</div>
</section>
<?php 
}
endif; 
?>

<?php 
if( is_page(9328) ){ 
	dynamic_sidebar('lc-comparative-analysis');
}

if( is_page(10158) ){
	//cmnTecStackUpdated( '<h2>Our White Label Services</h2>' );
}

if( is_page(10213) ){
	cmnTecStackUpdated( '<h2>Our Technologies</h2><p>Here are some software development technologies on which we have proficiency:</p>' );
}
?>

<?php 
$clientFocus 		= get_field('client-focus');
$clientFocusEnable 	= isset($clientFocus['is_enabled']) ? $clientFocus['is_enabled'] : '';
if( $clientFocusEnable == 'yes' ) :
?>
<section class="three-column-icon-section padding-t-150 padding-b-150 <?php echo $clientFocus['sc_background']; ?>" id="vc-client-focus">
	<div class="container">
		<div class="head-txt text-center">
			<h2><?php echo $clientFocus['section_title_hiring_model']; ?></h2>
			<p><?php echo $clientFocus['section_description_hiring_model']; ?></p>
		</div>
	  	<?php 
	  	$hCards = $clientFocus['hiring_cards'];
	  	//debug_dd( $hCards ); die;
	  	if( $hCards ) : ?>
		<div class="dis-flex col-box-outer asp-net-usage-sprite tick-icon-list">
		<?php 
		$h = 1; 
		foreach( $hCards as $row ) {
		?>
		<div class="flex-3 box-3 <?php echo vcHasAnchor( $row['content'] ); ?>">
			<div class="box bg-blue-opacity-light">
			<?php 
			$dtIcon = $row['icon-dt'];
			$dtIconwp = $row['icon-dt-webp'];
			if( $dtIcon && $dtIconwp ){
			echo '<picture class="dark-theme-img">
			<source type="image/webp" srcset="'.$dtIconwp['url'].'">
			<source type="'.$dtIcon['mime_type'].'" srcset="'.$dtIcon['url'].'">
			<img loading="lazy" src="'.$dtIcon['url'].'" alt="'.$dtIcon['title'].'" width="'.$dtIcon['width'].'" 
			height="'.$dtIcon['height'].'"> 
			</picture>';
			}

			$ltIcon = $row['icon-lt'];
			$ltIconwp = $row['icon-lt-webp'];
			if( $ltIcon && $ltIconwp ){
			echo '<picture class="lighter-theme-img">
			<source type="image/webp" srcset="'.$ltIconwp['url'].'">
			<source type="'.$ltIcon['mime_type'].'" srcset="'.$ltIcon['url'].'">
			<img loading="lazy" src="'.$ltIcon['url'].'" alt="'.$ltIcon['title'].'" width="'.$ltIcon['width'].'" 
			height="'.$ltIcon['height'].'"> 
			</picture>';
			}
			?>
			<?php echo $row['content']; ?>
			</div>
		</div>
		<?php $h++; 
		} 
		?>
		</div>
		<?php endif; ?>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php endif; ?>

<!-- Section Used For Tech Stack -->
<?php  
$techStack = get_field('tech-stack');
if( $techStack ) : 
$tsEnable = $techStack['is_enabled'];
if( $tsEnable == "yes" ) {
?>
<section class="tech-stack-icon-list-section <?php echo $techStack['sc_background']; ?> tick-icon-list padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center"><?php echo $techStack['content']; ?></div>
		<?php 
		$tsBoxes = $techStack['cards'];
		if( $tsBoxes ){
		?>
		<div class="dis-flex col-box-outer for-tech-stack-icon">
			<?php 
			foreach( $tsBoxes as $box ){
				echo '<div class="flex-2 col-box">
				<div class="logo-box for-box-effect">
					<div class="content-box">'.$box['content'].'</div>';
					if( $box['tech'] ){
						echo '<div class="dis-flex justify-sb items-center logo-list-box bg-dark-theme">
						<div class="tech-stack-link">
						<div class="dis-flex">';
						foreach( $box['tech'] as $tech ){
							$tsicon 	= $tech['icon-dt'];
							$tsiconwp 	= $tech['icon-dt-wp'];

							$tslcon 	= $tech['icon-lt'];
							$tslconwp 	= $tech['icon-lt-wp'];

							echo '<a href="'.vc_siteurl($tech['link']).'" class="icon-box">';
							if( $tsicon && $tsiconwp ){
							echo '<picture>
							<source type="image/webp" srcset="'.$ticonwp['url'].'">
							<source type="'.$tsicon['mime_type'].'" srcset="'.$tsicon['url'].'">
							<img loading="lazy" src="'.$tsicon['url'].'" alt="'.vcparseanchor($tech['title']).'" width="'.$tsicon['width'].'" 
							height="'.$tsicon['height'].'"> 
							</picture>';
							}
							echo '<span class="text">'.$tech['title'].'</span></a>';
						}
						echo '</div></div>
						<div class="learn-more-btn text-right">
							<a href="'.vc_siteurl($box['link']).'" class="learn-more">Learn More <i class="round-arrow-icon"></i></a>
						</div></div>';
					}
				echo '</div></div>';
			} 
			?>
		</div>
		<?php } ?>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php } endif; ?>
<!-- Tech Stack #ends Here -->

<?php  
$vcProfile = get_field('vc-profile');
if( $vcProfile ) :
$vcProfileEnable = $vcProfile['is_enable'];
if( $vcProfileEnable == "yes" ) {

$imgAlign = $vcProfile['img-align'];
if( $imgAlign == "left" ){
?>
<section class="img-two-column-list-section <?php echo $vcProfile['sc_background']; ?> for-left-img padding-t-150 
	padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<!-- <small class="subhead-small">We Are India’s</small> -->
			<?php echo $vcProfile['top-content']; ?>
		</div>
		<div class="dis-flex col-box-outer with-pattern margin-t-100">
			<div class="flex-2 left-box with-pattern">
				<?php 
				$vpthumb 	= $vcProfile['image'];
				$vpthumbnwp = $vcProfile['section_image_webp_format'];
				if( $vpthumb && $vpthumbnwp ){
				echo '<picture>
				<source type="image/webp" srcset="'.$vpthumbnwp['url'].'">
				<source type="'.$vpthumb['mime_type'].'" srcset="'.$vpthumb['url'].'">
				<img loading="lazy" src="'.$vpthumb['url'].'" alt="'.$vpthumb['title'].'" width="'.$vpthumb['width'].'" height="'.$vpthumb['height'].'"> 
				</picture>';
				}
				?>
			</div>
			<div class="flex-2 content-box">
				<?php echo $vcProfile['content']; ?>
			</div>
		</div>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php 
}else{ ?>
	<section class="img-two-column-section bg-dark-theme padding-t-150 padding-b-150">
	<div class="container">
		<div class="dis-flex">
			<div class="flex-2 content-box tick-icon-list">
				<?php echo $vcProfile['content']; ?>
			</div>
			<div class="flex-2 img-box">
				<?php 
				$vpthumb 	= $vcProfile['image'];
				$vpthumbnwp = $vcProfile['section_image_webp_format'];
				if( $vpthumb && $vpthumbnwp ){
				echo '<picture>
				<source type="image/webp" srcset="'.$vpthumbnwp['url'].'">
				<source type="'.$vpthumb['mime_type'].'" srcset="'.$vpthumb['url'].'">
				<img loading="lazy" src="'.$vpthumb['url'].'" alt="'.$vpthumb['title'].'" width="'.$vpthumb['width'].'" height="'.$vpthumb['height'].'"> 
				</picture>';
				}
				?>
			</div>
		</div>
	</div>
</section>
<?php }
}
endif; ?>

<?php
$whyhire = get_field('vprofile-icons');
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
				<?php //if(!wp_is_mobile()) : ?>
				<picture>
					<source type="<?php echo $whyhire['section_image_webp_format']['mime_type']; ?>" 
						srcset="<?php echo $whyhire['section_image_webp_format']['url']; ?>">
					<source type="<?php echo $whyhire['image']['mime_type']; ?>" 
						srcset="<?php echo $whyhire['image']['url']; ?>">
					<img loading="lazy" src="<?php echo $whyhire['image']['url']; ?>" alt="Valuecoders" 
					width="<?php echo $whyhire['image']['width']; ?>" height="<?php echo $whyhire['image']['height']; ?>">
				</picture>
				<?php //endif; ?>
			</div>
		</div>
	</div>
</section>
<?php 
}
endif; 
?>

<?php
$peaceMind = get_field('vc-peace-mind');
if( $peaceMind ) :
$iswEnabled = isset($peaceMind['is_enable']) ? $peaceMind['is_enable'] : '';
if( $iswEnabled == "yes" ){
$secType = isset($peaceMind['img-align']) ? $peaceMind['img-align'] : '';
if( $secType == 'left' ){ ?>
<section class="valuecoders-img-section <?php echo ( !is_page(10213) ) ? ' padding-t-150' : ''; ?>  padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $peaceMind['content-top']; ?>
		</div>
		<div class="dis-flex col-box-outer margin-t-100">
			<div class="flex-2 left-box">
			<?php 
			//if( !wp_is_mobile() ) : 
			$dtImage 		= $peaceMind['image'];
			$dtImageWebp 	= $peaceMind['section_image_webp_format'];
			if( $dtImage && $dtImageWebp ) {
			echo '<picture>
			<source type="'.$dtImageWebp['mime_type'].'" srcset="'.$dtImageWebp['url'].'">
			<source type="'.$dtImage['mime_type'].'" srcset="'.$dtImage['url'].'">
			<img loading="lazy" src="'.$dtImage['url'].'" alt="Valuecoders" width="'.$dtImage['width'].'" height="'.$dtImage['height'].'"> 
			</picture>';	
			}	
			//endif; 
			?>
			</div>
			<div class="flex-2 right-box">
				<?php echo $peaceMind['content']; ?>
				<div class="icon-box-outer dis-flex margin-t-50">
					<div class="icon-box"><span class="icon icon1"></span>100% client satisfaction</div>
					<div class="icon-box"><span class="icon icon2"></span>No box <br> approach</div>
					<div class="icon-box"><span class="icon icon3"></span>Shorter time to market</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="counter-column-section">
	<div class="container for-pattern-img">
		<div class="dis-flex bg-dark-theme counter-column-outer">
			<div class="left-box">
				<h2>Ready To Get Started?</h2>
				<p>Consistently recognized as one of India's best software development companies and proven success over 17+ years with thousands of customers globally, you can entrust us with your software development and outsourcing needs.</p>
				<a class="green-btn" href="<?php echo site_url('/contact'); ?>">Contact Us <i class="arrow-icon"></i></a>
			</div>
			<div class="counter-icons">
				<div class="dis-flex justify-sb">
					<div class="flex-2 counter-box">
						<span class="icon icon1"></span>
						<span class="icon-txt"><span class="large-txt clr-white">4,200+</span>Projects Launched</span>
					</div>
					<div class="flex-2 counter-box">
						<span class="icon icon2"></span>
						<span class="icon-txt"><span class="large-txt clr-white">16+</span>Years Experience</span>
					</div>
					<div class="flex-2 counter-box">
						<span class="icon icon3"></span>
						<span class="icon-txt"><span class="large-txt clr-white">2,500+</span>Satisfied Customers</span>
					</div>
					<div class="flex-2 counter-box">
						<span class="icon icon4"></span>
						<span class="icon-txt"><span class="large-txt clr-white">97%+</span>Client Retention</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }else{ ?>
<section class="valuecoders-img-section for-revese-value-section <?php echo $iswEnabled['sc_background']; ?> padding-t-150 padding-b-150">
	<div class="container">
		<div class="dis-flex col-box-outer">
			<div class="flex-2 right-box">
				<?php echo $peaceMind['content']; ?>
				<div class="icon-box-outer dis-flex margin-t-50">
					<div class="icon-box"><span class="icon icon1"></span>100% client satisfaction</div>
					<div class="icon-box"><span class="icon icon2"></span>No box <br> approach</div>
					<div class="icon-box"><span class="icon icon3"></span>Shorter time to market</div>
				</div>
			</div>
			<div class="flex-2 left-box">
				<?php 
				//if( !wp_is_mobile() ) : 
				$dtImage 		= $peaceMind['image'];
				$dtImageWebp 	= $peaceMind['section_image_webp_format'];
				if( $dtImage && $dtImageWebp ) {
				echo '<picture>
				<source type="'.$dtImageWebp['mime_type'].'" srcset="'.$dtImageWebp['url'].'">
				<source type="'.$dtImage['mime_type'].'" srcset="'.$dtImage['url'].'">
				<img loading="lazy" src="'.$dtImage['url'].'" alt="Valuecoders" width="'.$dtImage['width'].'" height="'.$dtImage['height'].'"> 
				</picture>';	
				}	
				//endif; 
				?>
			</div>
		</div>
	</div>
</section>
<?php }
} 
endif;
?>



<?php 
$clientele = get_field( 'vc-clients' );
if( $clientele['is_enabled'] == 'yes' ) :
$dtImage 		= $clientele['image'];
$dtImageWebp	= $clientele['image-webp'];

$ltImage 		= $clientele['image-lt'];
$ltImageWebp	= $clientele['image-lt-webp'];
?>
<section class="client-img-section padding-t-150 padding-b-150 <?php echo $clientele['sc_background']; ?>">
	<div class="container">
		<div class="dis-flex col-box-outer items-center">
		<?php //if( !wp_is_mobile() ) : ?>
			<div class="flex-2 left-box">
				<?php 
				if( $dtImage && $dtImageWebp ){
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
			<?php //endif; ?>
			<div class="flex-2 right-box tick-icon-list"><?php echo $clientele['content']; ?></div>
		</div>
		<!-- <div class="text-center margin-t-100"><?php //vc_cta(); ?></div> -->
	</div>
</section>
<?php endif; ?>
<!-- ValueCoder clientele #Ends Here -->


<?php 
$guideTopics 	= get_field('guide-topics');
$gtEnabled 		= $guideTopics['is_enabled'];
if( $gtEnabled == 'yes' ) :
?>
<section id="has-ug" class="tab-scroll-section padding-t-150 padding-b-150 <?php echo $guideTopics['sc_background']; ?>">
	<div class="container">
		<div class="head-txt text-center">
			<?php echo $guideTopics['content']; ?>
		</div>
		<?php 
		$topics = $guideTopics['topics'];
		if( $topics ) :
		?>
		<div id="scroll-box" class="dis-flex margin-t-100 tab-contents">
			<div class="left-tabs" id="left-scroll">
				<div class="sticky-tab">
				<span class="tab-head clr-white">Guide Topics</span>
				<div class="tab-nav">
					<?php 
					$tn = 0;
					foreach( $topics as $topicNav ){
						$tn++;
						$isActive = "";
						if( $tn == 1 ){
							$isActive = "is-active";
						}
						echo '<a href="#ug'.$tn.'" class="tab-link">'.$topicNav['title'].'</a>';
					} 
					?>
				</div>
				</div>
			</div>
			<div class="right-tabs" id="right-scroll">
				<?php 
				$tn = 0;
				foreach( $topics as $topicText ){
					$tn++;
					$isActive = "";
					if( $tn == 1 ){
						$isActive = "is-active";
					}
					echo '<div class="tab-content" id="ug'.$tn.'">'.$topicText['text'].'</div>';
				} 
				?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>

<section class="experts-talk-first-section bg-blue-linear padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<h2>
			<?php 
			echo (isset($vcBtn['title-one']) && !empty($vcBtn['title-one'])) ? $vcBtn['title-one'] : 
			"Got a Project in Mind? Tell Us More"; ?>
			</h2>
			<p>
			<?php 
			echo (isset($vcBtn['text-one']) && !empty($vcBtn['text-one'])) ? $vcBtn['text-one'] : 
			"Drop us a line and we'll get back to you immediately to schedule a call and discuss your needs personally."; ?></p>
		</div>
		<div class="text-center margin-t-50">
			<a class="green-btn" href="<?php echo site_url('/contact'); ?>">
			<?php 
			echo (isset($vcBtn['link-one']) && !empty($vcBtn['link-one'])) ? $vcBtn['link-one'] : 
			"Talk To Our Experts"; 
			?> <i class="arrow-icon"></i></a>
		</div>
	</div>
</section>

<!-- Hire Model #Starts Here -->
<?php 
$hireModel 			= get_field('hiring_models');
$hireModelEnable 	= $hireModel['is_enabled'];
if( ($hireModelEnable == 'yes') && !is_page( $mainServicePage ) ) : 
if( is_page( 10158 ) ) {
?>
<section class="three-column-icon-section padding-t-150 padding-b-150 <?php echo $hireModel['sc_background']; ?>" 
id="vc-hiring_models">
	<div class="container">
		<div class="head-txt text-center">
			<h2><?php echo $hireModel['section_title_hiring_model']; ?></h2>
			<p><?php echo $hireModel['section_description_hiring_model']; ?></p>
		</div>
	  	<?php 
	  	$hCards = $hireModel['hiring_cards'];
	  	//debug_dd( $hCards ); die;
	  	if( $hCards ) : ?>
		<div class="dis-flex col-box-outer asp-net-usage-sprite tick-icon-list">
		<?php 
		$h = 1; 
		foreach( $hCards as $row ) {
		?>
		<div class="flex-3 box-3">
			<div class="box bg-blue-opacity-light">
			<?php 
			$dtIcon = $row['icon-dt'];
			$dtIconwp = $row['icon-dt-webp'];
			if( $dtIcon && $dtIconwp ){
			echo '<picture class="dark-theme-img">
			<source type="image/webp" srcset="'.$dtIconwp['url'].'">
			<source type="'.$dtIcon['mime_type'].'" srcset="'.$dtIcon['url'].'">
			<img loading="lazy" src="'.$dtIcon['url'].'" alt="'.$dtIcon['title'].'" width="'.$dtIcon['width'].'" 
			height="'.$dtIcon['height'].'"> 
			</picture>';
			}

			$ltIcon = $row['icon-lt'];
			$ltIconwp = $row['icon-lt-webp'];
			if( $ltIcon && $ltIconwp ){
			echo '<picture class="lighter-theme-img">
			<source type="image/webp" srcset="'.$ltIconwp['url'].'">
			<source type="'.$ltIcon['mime_type'].'" srcset="'.$ltIcon['url'].'">
			<img loading="lazy" src="'.$ltIcon['url'].'" alt="'.$ltIcon['title'].'" width="'.$ltIcon['width'].'" 
			height="'.$ltIcon['height'].'"> 
			</picture>';
			}
			?>
			<?php echo $row['content']; ?>
			</div>
		</div>
		<?php $h++; 
		} 
		?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php 
}else{
	hireModelCmn();
} 
endif; 
?>


<?php getPageCaseStudies( $thisPostID ); ?>

<?php 
$blogSec = get_field('bposts');
if( $blogSec ){
	if( isset( $blogSec['is_enabled'] ) && ($blogSec['is_enabled'] == "yes") ){
		$bTheme = ( isset($blogSec['sc_background']) && !empty( $blogSec['sc_background'] ) ) ? $blogSec['sc_background'] 
		: 'bg-dark-theme';
		$tagSlug = ( isset($blogSec['tag-pslug']) && !empty( $blogSec['tag-pslug'] ) ) ? $blogSec['tag-pslug'] : '';
		vcShowLatestPosts($bTheme, $tagSlug );
	}
} 
?>

<?php 
$faqs 		= get_field('faq-group');
$faqEnable 	= $faqs['is_enabled'];
if( $faqEnable == "yes" ) :
?>
<section class="faq-section padding-t-150 padding-b-150 <?php echo $faqs['sc_background']; ?>" data-nosnippet>
	<div class="container">
		<div class="head-txt text-center"><?php echo $faqs['content']; ?></div>
		<?php 
		if( $faqs['faq'] ){
			echo '<div class="faq-outer" itemscope itemtype="https://schema.org/FAQPage">';
			$faqCount = 0;
			foreach ($faqs['faq'] as $row){ $faqCount++;
				$isActive = "";
				if( $faqCount <= 3 ){
					$isActive = "active";
				}
				echo '<div class="faq-accordion-item-outer '.$isActive.'" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-accordion-toggle" itemprop="name">'.$row['title'].'</h3>
					<div class="faq-accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">'.$row['text'].'</div></div>
				</div>';
			}
			echo '</div>';
		} 
		?>
	</div>
</section>
<?php endif; ?>

<?php if( is_page( 11149 ) ){ ?>
<section class="table-list-section padding-t-150 padding-b-150">
	<div class="container">
		<div class="head-txt text-center">
			<h2>Comparative Analysis : In-House, Freelancers Or ValueCoders</h2>
			<p>There are many options available for hiring your IT talent. Some of these options are hiring an in-house talent, working with freelancers, or get offshore experts with us. Let’s do a comparative analysis of these options:</p>
		</div>
		<div class="dis-flex col-box-outer margin-t-100">
			<div class="flex-4 table-list">
				<ul>
					<li class="title clr-white">Factor</li>
					<li>Time to get right developers</li>
					<li>Time to start a project</li>
					<li>Recurring cost of training & benefits</li>
					<li>Time to scale size of the team</li>
					<li>Pricing (weekly average)</li>
					<li>Project failure risk</li>
				</ul>
			</div>
			<div class="flex-4 table-list bg-row-yellow">
				<ul>
					<li class="title">ValueCoders</li>					
					<li>1 day - 2 weeks</li>
					<li>1 day - 2 weeks</li>
					<li>0</li>
					<li>1 day - 2 weeks</li>
					<li>1.5X</li>
					<li>Extremely low, we have a 98% success rate</li>
				</ul>
			</div>
			<div class="flex-4 table-list">
				<ul>
					<li class="title clr-white">In - House</li>
					<li>4 - 12 weeks</li>
					<li>2 - 10 weeks</li>
					<li>$10,000 -$30,000</li>
					<li>4 - 16 weeks</li>
					<li>2X</li>
					<li>Low</li>
				</ul>
			</div>
			<div class="flex-4 table-list">
				<ul>
					<li class="title clr-white">Freelance</li>
					<li>1 - 12 weeks</li>
					<li>1 - 10 weeks</li>
					<li>0</li>
					<li>1 - 12 weeks</li>
					<li>1X</li>
					<li>Very High</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<?php 
$ctOptions = get_field('client-testimo');
if( $ctOptions['is_enabled'] == 'yes' ) :
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
<?php endif; ?>
<!-- Testimonail Section Ends Here -->
<?php get_footer(); ?>