<?php
get_header();
simple_breadcrumb();
get_sidebar();
//get_template_part('content', 'page' ) ;
//echo "Our Team";
?>

<?php
function getpost(){

while (have_posts()) : the_post(); 
						

$imageUrl = catch_that_image();
					
$title = $post->post_title;
$id = "tippy_tipSample".$count;

$contentBS = "Hello World";

$perma = get_permalink();

echo "<div id='imgcap-ourteam' >";
  
echo "<b>";
the_title();
echo "</b><br />";
echo "<img src='$imageUrl' id='imgcap-img'>";

//$pos = strpos($post->post_content, '</h6>');
$pos = strpos(get_the_content(), '</h6>');
//$firstsent = substr($post->post_content, 0, $pos+1);
$firstsent = substr(get_the_content(), 0, $pos+1);
$firstsent =  substr(strip_tags($firstsent), 0, 250);
//$contentBS = trim($post->post_content, "\t");
$contentBS = trim(get_the_content(), "\t");
$contentBS = substr($contentBS, $pos, 250);
$contentBS =  substr(strip_tags($contentBS), 0, 200);

$readmore = "<a href='$perma'>...Read more</a>";
$contentBS = $contentBS." ".$readmore;

echo "<br />";
echo "<p class='header-imgcap-ourteam'>";
echo "<b>";
echo $firstsent ;
echo "</b>";
echo "</p>";
echo "<p class='imgcap-para'>";
echo $contentBS ;
echo "</p>";			
echo "</div>";

$count = $count + 1;
endwhile;
}?>
		<section class="primary">
			<div id="contentpage">
			<div id="contentpage-title"><?php the_title(); ?></div>
			
			<div class="entry-content" >
			<div id="entry-content2">
				
			<?php /*if (ICL_LANGUAGE_CODE == 'en') {*/
				
			//if(in_category('16') || in_category'(64')){
			if(is_page(1389)){ //SEACO Exec
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '64'
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					
			}
			
			if(is_page(1387)){ //SAG
				      $vip = array(1658);
					
				      foreach($vip as $v){
					$args = array(
 					'post_type' => 'page',
 					'post__in' => array($v),
 					'order' => 'asc',
					'cat' => '60'
  					);
					query_posts($args);
					getpost();
					}
					
					//echo "In 60";
					$args = array(
 					'post_type' => 'page',
 					'post__not_in' => array(1658, 1359, 1387),
 					'cat' => '60'
  					);
					query_posts($args);
					getpost();
					
					$args = array(
 					'post_type' => 'page',
 					'post__in' => array(1359),
 					'cat' => '60'
  					);
					query_posts($args);
					getpost();
					
			}
			if(is_page(1391)){ //Staff
			
			$vip = array(524,1359,1366,1964);
				
				foreach($vip as $v){
				 $args = array(
				   'post_type' => 'page',
				   'post__in' => array($v),
				   'cat' => '63'                       
				 );
				 query_posts($args);
				 getpost();
				}
			
			
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
 					'post__not_in' => array(524,1359,1366,1964,4026),
					'cat' => '63',
                                        'numberposts'=>-1,
                                        'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
              
              		//echo $GLOBALS['wp_query']->request;
					
			}
			if(is_page(1384)){ //Board members
				$vip = array(1583, 1658);
				
				foreach($vip as $v){
				 $args = array(
				   'post_type' => 'page',
				   'post__in' => array($v),
				   'cat' => '61'
				 );
				 query_posts($args);
				 getpost();
				}

					//echo "In 61";
					$args = array(
 					'post_type' => 'page',
 					'post__not_in' => array(1583, 1658, 524, 1964),
 					'cat' => '61'
  					);
					query_posts($args);
					getpost();
					
					$args = array(
 					'post_type' => 'page',
 					'post__in' => array(524),
 					'cat' => '61'
  					);
					query_posts($args);
					getpost();

					$args = array(
 					'post_type' => 'page',
 					'post__in' => array(1964),
 					'cat' => '61'
  					);
					query_posts($args);
					getpost();
									
					
			}
			if(is_page(1393)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '62'
					//'post__in' => array(1658)
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					
			}	
			
			if(is_page(3248)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '77'
					//'post__in' => array(1658)
  					);
					query_posts($args);
					getpost();
					//echo "In 61
			}

			if(is_page(3188)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '76'
					//'post__in' => array(1658)
  					);
					query_posts($args);
					getpost();
					//echo "In 61				
			}

			if(is_page(4286)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '88'
  					);
					query_posts($args);
					getpost();
					//echo "In 61				
			}
				
				
			
			//} 
			
			/*if (ICL_LANGUAGE_CODE == 'my') {
				
				
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
  					'cat' => 51
  					);
					query_posts($args);
			
		
			} */ 
			
			/*CEC*/
			/* Bekok CEC Members */
			if(is_page(4676)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '95',
                                        'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					//echo "In 97";
			}	

			/* Chaah CEC Members */
			if(is_page(4690)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '96',		//96
					'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					//echo "In 97";
			}	

			/* Gemereh CEC Members */
			if(is_page(4714)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '97',		//99
                                         'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					//echo "In 97";
			}	

			/* Sg Segamat CEC Members */
			if(is_page(4712)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '98',		//100
                                        'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					//echo "In 97";
			}	

			/* Jabi CEC Members */
			if(is_page(4716)){
					$args = array(
 					'post_type' => 'page',
 					'order' => 'asc',
					'cat' => '99',			//101
                                        'posts_per_page'=>-1
  					);
					query_posts($args);
					getpost();
					//echo "In 61";
					//echo "In 97";
			}				
			
			?>
				
				<!-- Mark the spot -->

				   </div>
				   </div>
			</div>
		</section><!-- #primary -->
		<div class="clearMenu"></div>
                        

<?php
//get_footer();
include("footer-content.php");
?>