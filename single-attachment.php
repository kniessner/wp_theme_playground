<?php
/**
 * attachment Template
 *
 * This is the default singular template.  It is used when a more specific template can't be found to display
 * singular views of posts (any post type).
 *
 */
    get_header(); ?>
        <div class="container">
            <div class="row">

                <div class="col-sm-12">   
                                 <?php 
                    

					 echo wp_get_attachment_image( get_query_var('name'), 'large' );
					 $id = get_query_var('name');
					 ?>
                </div>
                
             
					 <?php
					 /*
					    <div class="col-sm-6">   
                <div id="meta">
				   	$meta = wp_get_attachment_metadata(get_query_var('name'));
						   	
				   echo "Resolution: ".$meta[width]." x ".$meta[height]."<br />";
		      //     echo "Credit:  ".$meta[image_meta][credit]."<br /> ";
		           echo "Camera:  ".$meta[image_meta][camera]."<br />";
		           echo "Focal length:  ".$meta[image_meta][focal_length]."<br />";
		           echo "Aperture:  ".$meta[image_meta][aperture]."<br />";
		           echo "ISO:  ".$meta[image_meta][iso]."<br />";
		           echo "Shutter speed:  ".$meta[image_meta][shutter_speed]."<br />";
			       $timestamped = $meta[image_meta][created_timestamp];
			       $created_timestamp = date("F j, Y, g:i a", $timestamped);	
		           echo "Time Stamp:  ".$created_timestamp."<br />";
		           echo "Photography &copy; Sascha-Darius Knießner ";
		           */
		           ?>
		           
		           
		           
		           
		            <div class="row">
             <div class="col-md-2"></div>
                <div class="col-md-4"> 
                	<div class="meta">
		              	<h5> Location</h5>  <?php echo get_the_term_list($id, 'location', '', ', ' ); ?>
		              	<h5> Album</h5>  <?php echo get_the_term_list( $id, 'album', '', ', ' ); ?>
		              	<h5> Categories</h5>  <?php echo get_the_term_list( $id, 'category', '', ', ' ); ?>
		              	<h5> Ranking</h5>  <?php echo get_the_term_list( $id, 'ranking', '', ', ' ); ?>
					</div>    
					<?php //comments_template( 'comments/comments.php', true ); // Loads the comments.php template. ?>
                </div>
                   <div class="col-md-4">   
					 <div id="meta">
							 <?php
							 
						   	$meta = wp_get_attachment_metadata($id);
								   	
						   echo "Resolution: ".$meta[width]." x ".$meta[height]."<br />";
				           echo "Camera:  ".$meta[image_meta][camera]."<br />";
				           echo "Focal length:  ".$meta[image_meta][focal_length]."<br />";
				           echo "Aperture:  ".$meta[image_meta][aperture]."<br />";
				           echo "ISO:  ".$meta[image_meta][iso]."<br />";
				           echo "Shutter speed:  ".$meta[image_meta][shutter_speed]."<br />";
					       $timestamped = $meta[image_meta][created_timestamp];
					       $created_timestamp = date("F j, Y, g:i a", $timestamped);	
				           echo "Time Stamp:  ".$created_timestamp."<br />";
				           echo "Photography &copy; Sascha-Darius Knießner ";
				           
				           ?>
		              </div>
				
				</div>
          </div>

           <?php
           
           
					if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <div <?php hybrid_attr( 'content' ); ?>>

                                <h1 <?php echo hybrid_get_attr( 'entry-title' ); ?>><?php the_title();?></h1>

                       		         <div class="entry-byline">
                            <!--    <span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>-->
                                    <time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
                                 <!--     <?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '% Comments', 'comments-link', '' ); ?>
                                    <?php edit_post_link(); ?>-->
                                </div><!-- .entry-byline -->

                                <div class="entry-content">
									<! -- <?php //echo get_query_var('name'); ?>-->



                                    <?php the_content(); ?>
                               <!--     <?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'shwib' ), 'after' => '</p>' ) ); ?>-->

                                </div><!-- .entry-content -->

                                <footer class="entry-footer">
                                    <?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => __( 'Posted in %s', 'hybrid-base' ) ) ); ?>
                                    <?php hybrid_post_terms( array( 'taxonomy' => 'album', 'text' => __( '%s', 'hybrid-base' ) ) ); ?>

                                   <br> <?php hybrid_post_terms( array( 'taxonomy' => 'location', 'text' => __( 'Place %s', 'hybrid-base' ) ) ); ?>
                                   <br> <?php hybrid_post_terms( array( 'taxonomy' => 'ranking', 'text' => __( 'Ranking %s', 'hybrid-base' ) ) ); ?>
                                    <?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => __( 'Tagged %s', 'hybrid-base' ), 'before' => '<br />' ) ); ?>
                                </footer><!-- .entry-footer -->
                            </div>

                            <?php get_template_part( 'loop/loop-nav' ); ?>

                            <?php get_template_part( 'sidebars/sidebar-after-singular' ); ?>

                            <?php comments_template( 'comments/comments.php', true ); // Loads the comments.php template. ?>

                        <?php endwhile; ?>

                    <?php else : ?>

                        <?php get_template_part( 'loop/loop-error' ); ?>

                    <?php endif; ?>

                </div> <!--/col-->

            </div> <!-- /row -->
        </div> <!-- /container -->
<?php get_footer(); ?>