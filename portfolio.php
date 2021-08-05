<?php
/*
Template name: Портфолио

*/
?>


<?php

get_header();

$args = array(
    'numberposts' => 10,
    'post_type' => 'faq',
    'suppress_filters' => true,
);

$posts = get_posts($args);
?>
<div class="container">
<?php
foreach($posts as $post){
    setup_postdata( $post );
    
?>
    <div class="row">
        <div class="post_thumb col-2"><?php the_post_thumbnail(); ?></div>
        <div class="post_title col"><?php the_title(); ?></div>
    </div>    
    <div class="row">
        <div class="post_excerpt"><?php the_excerpt(); ?></div>
    </div>    
<?php 
}
 ?>
</div>
<?php 

get_footer();