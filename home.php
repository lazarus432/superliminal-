<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?> /img/home-bg.jpg')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Nic Bold</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $args = array(
            'post_type' => 'post',
            'post_per_page' => 4,
            'paged' => $paged,
        );
        $wp_query = new WP_Query( $args );

        if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
        ?>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                <?php the_excerpt(); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> </p>
          </div>
          <hr>
        <?php endwhile; else: ?>
            <p>Sorry, no post yet.</p>
        <?php endif; ?>
        
          <!-- Pager -->
          <ul class="pager">
            <li class="previous">
                <?php previous_posts_link('&larr; Newer Posts'); ?>
            </li>
            <li class="next">
                <?php next_posts_link('Older Posts &rarr;'); ?>
            </li>
           </ul>
        </div>
      </div>
    </div>

<?php get_footer(); ?>