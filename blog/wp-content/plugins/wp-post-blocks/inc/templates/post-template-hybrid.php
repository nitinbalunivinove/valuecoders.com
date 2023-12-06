<?php

namespace WP_Post_Blocks;

/**
 * Post Module 2 - Post thumbnail is on the left
 * @since 1.0
 * 
 * .––––––––.  
 * |        |  This is the post title!
 * |        |  Post meta
 * .––––––––.
 */

if ( ! defined( 'ABSPATH' ) ) exit; 

if( !class_exists( 'Post_Template_Hybrid') ){

	if( !class_exists( 'Post_Template' ) ){
		require_once Plugin::get_dir() . 'inc/post-template.php';
	}

	class Post_Template_Hybrid extends Post_Template{
		static $thumb_size = 'post-thumbnail';
		static $uid			= 'pbs-module-hybrid';
		/**
		 * Render the block
		 */
		static function render( $settings = array(), $misc = array() ){

		?>
		<article <?php self::post_class( self::$uid );?>>
			<div class="pbs-hb-item-wrapper">
				<div class="pbs-hb-item-image">
					<?php
					// if( has_post_thumbnail() ): 

						
						?>
						<div class="post-thumbnail pbs_e-p-t<?php echo esc_attr( ($settings['thumb_style'] ? ' ' . $settings['thumb_style'] : '') );?>">
							<a href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php
								$thumb_size = !empty( $settings['thumb_size'] ) ? $settings['thumb_size'] : self::$thumb_size;
								$thumb_size = apply_filters( 'wp_post_blocks/post_thumbnail_size', $thumb_size, self::$uid );
								include( Plugin::locate_template('parts/post-thumbnail') );
							?>
							</a>

							<?php echo self::get_format_icon( get_post_format() );?>
							
							<?php
							
								if( !empty( $settings['thumb_cat'] ) ){
									self::post_meta( 'cats-alt', 'other' );
								}
							?>
						</div>
						<?php
						
					// endif;
					?>
				</div>
				<div class="pbs-hb-item-content">
					<header class="entry-header pbs_e-h">
						<?php 
						/**
						 * Above meta info
						 */
						if( !empty( $settings['info_above'] )): ?>
						<div class="entry-meta pbs_e-m above">
							<?php self::post_meta( $settings['info_above'] );?>
						</div><!-- .entry-meta -->
						<?php endif;?>

						<?php 
							$title_class = !empty( $settings['title_class'] ) ? ' ' . trim( $settings['title_class'] ) : '';
							the_title( wp_sprintf( '<h4 class="entry-title pbs_e-t %2$s"><a href="%1$s" rel="bookmark">', esc_url( get_permalink() ), esc_attr(  $title_class  ) ), '</a>' . self::get_edit_post_link() . '</h4>' );
						?>
					
						<?php 
						/**
						 * Below meta info
						 */
						if( !empty( $settings['info'] )): ?>
						<div class="entry-meta pbs_e-m below">
							<?php self::post_meta( $settings['info'], 'below' );?>
						</div><!-- .entry-meta -->
						<?php endif;?>

					</header><!-- .entry-header -->
					
					<?php if( !empty( $settings['excerpt'] )): ?>
					<div class="entry-summary pbs_e-s">
					<?php
						global $excerpt_length;
						$bk_excerpt_length = $excerpt_length;

						if( !empty( $settings['excerpt_length'] ) && absint( $settings['excerpt_length'] ) ){
							$excerpt_length = absint( $settings['excerpt_length'] );
						}

						echo wp_trim_words( get_the_excerpt(), $excerpt_length );

						$excerpt_length = $bk_excerpt_length;

					?>
					</div><!-- .entry-summary -->
					<?php endif;?>
				</div>
			</div>
		</article>
		<?php
		
		}
	}
}