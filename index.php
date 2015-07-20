<?php get_header(); ?>

<div class="nav">
<?php wp_nav_menu( array( 'theme_location' => 'menu', 'container' => '', 'fallback_cb' => '' ) ); ?>
<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Powered by WordPress</p>
</div>

<div id="container">	

    <?php if (have_posts()) : $count = 0;  while (have_posts()) : the_post(); $count++; if( $count <= 1 ): ?>

	<?php $cover = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
	
	<div id="screen">
        <div id="mark">
            <div class="layer" data-depth="0.4">
                <img id="cover" src="<?php echo $cover[0] ?>" width="<?php echo $cover[1] ?>" height="<?php echo $cover[2] ?>"/>
            </div>
        </div>
        <div id="vibrant"></div>
        <div id="header"><div>
            <div class="icon-menu switchmenu"></div>
            <a class="icon-logo" href="/"></a>
        </div></div>
        <div id="post0">
            <p><?php the_time('F j, Y'); ?></p>
            <h2><a data-id="<?php the_ID() ?>" class="posttitle" href="<?php the_permalink(); ?>" /><?php the_title(); ?></a></h2>
            <!--p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"..."); ?></p-->
        </div>
	</div>

	<div style="display: none;">
	    <?php get_template_part( 'post' ); ?>
	</div>

    <div id="primary">

    <?php else : ?>

    <?php get_template_part( 'post' ); ?>

    <?php endif; endwhile; endif; ?>

    </div>
    
    <div id="pager"><?php next_posts_link(('加载更多')); ?></div>
  
</div>
<div id="preview"></div>
</body>
</html><!--
