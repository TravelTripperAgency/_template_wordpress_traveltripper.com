<?php
/**
 * The main loop template file.
 *
 * This template is used as the blog page when there is a static front-page.
 * Otherwise this template will be the actual front-page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">Blog</h1>
      <p class="page-header__description">The latest in marketing and distribution trends for hoteliers</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        // Featured Articles Query
        $query_featured_args = array(
            'posts_per_page' => 5,
            'meta_query' => array(
                array(
                    'key' => 'featured-checkbox',
                    'value' => 'yes'
                )
            )
        );
        $query_featured = new WP_Query( $query_featured_args );

        if ( $query_featured->have_posts() && !is_paged() ) { ?>

            <section class="featured-articles">

                <div class="featured-articles__title"><h2>Featured Articles</h2></div> <?php

                	// The Loop
                	while ( $query_featured->have_posts() ) {
                		$query_featured->the_post();

                        // Get the first category
                        $categories = get_the_category();
                        $category = $categories[0]->cat_name; ?>

                        <article class="featured-articles__item post entry">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <p class="entry-meta"><span class="entry-category"><?php echo $category; ?></span></p>
                            <p class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        </article> <?php

                	} ?>

                <section class="widget widget-cta">
                  <p class="widget-cta__type">Webinar</p>
                  <h3 class="widget-title">Optimizing Distribution Channels for Independent Hotels</h3>
                  <div class="widget-cta__time"><p>Friday February 2, 2017 @ 10:30AM EST</p></div>
                  <a href="#" class="btn btn-primary">reserve your spot</a>
                </section>

            </section> <?php

        	// Restore original Post Data
        	wp_reset_postdata();
        }

        // All Posts Query
        // $query2 = new WP_Query( $args2 );

        // if ( $query2->have_posts() ) {
        	// The 2nd Loop
        	// while ( $query2->have_posts() ) {
        	// 	$query2->the_post();
        	// 	echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
        	// }

        	// Restore original Post Data
        	// wp_reset_postdata();
        // } ?>

        <div class="latest-articles__title"><h2>The Latest</h2></div>

        <article class="latest-articles__item post entry">
          <div class="col-sm-6">
            <a href="/post/"><img class="featured-image" src="/images/437x255.png" alt="437x255"></a>
          </div>
          <div class="col-sm-6">
            <p class="entry-time"><time datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
            <p class="entry-category">Revenue Strategy</p>
            <p class="entry-title"><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            <p class="entry-content">There’s been a lot of buzz about blockchain in recent years—a topic we summarized in our booking trends for 2018 post. Yet despite the hype, the majority of people...</p>
            <p class="entry-author"><a href="/blog-author/"><img src="/images/blog-author-30x30.jpg" alt=""></a>by&nbsp;<span class="entry-author-name"><a href="/blog-author/">Nate Lane</a></span></p>
          </div>
        </article>

        <article class="latest-articles__item post entry">
          <div class="col-sm-6">
            <a href="/post/"><img class="featured-image" src="/images/437x255.png" alt="437x255"></a>
          </div>
          <div class="col-sm-6">
            <p class="entry-time"><time datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
            <p class="entry-category">Revenue Strategy</p>
            <p class="entry-title"><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            <p class="entry-content">There’s been a lot of buzz about blockchain in recent years—a topic we summarized in our booking trends for 2018 post. Yet despite the hype, the majority of people...</p>
            <p class="entry-author"><a href="/blog-author/"><img src="/images/blog-author-30x30.jpg" alt=""></a>by&nbsp;<span class="entry-author-name"><a href="/blog-author/">Nate Lane</a></span></p>
          </div>
        </article>

        <article class="latest-articles__item post entry">
          <div class="col-sm-6">
            <a href="/post/"><img class="featured-image" src="/images/437x255.png" alt="437x255"></a>
          </div>
          <div class="col-sm-6">
            <p class="entry-time"><time datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
            <p class="entry-category">Revenue Strategy</p>
            <p class="entry-title"><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            <p class="entry-content">There’s been a lot of buzz about blockchain in recent years—a topic we summarized in our booking trends for 2018 post. Yet despite the hype, the majority of people...</p>
            <p class="entry-author"><a href="/blog-author/"><img src="/images/blog-author-30x30.jpg" alt=""></a>by&nbsp;<span class="entry-author-name"><a href="/blog-author/">Nate Lane</a></span></p>
          </div>
        </article>

        <article class="latest-articles__item post entry">
          <div class="col-sm-6">
            <a href="/post/"><img class="featured-image" src="/images/437x255.png" alt="437x255"></a>
          </div>
          <div class="col-sm-6">
            <p class="entry-time"><time datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
            <p class="entry-category">Revenue Strategy</p>
            <p class="entry-title"><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            <p class="entry-content">There’s been a lot of buzz about blockchain in recent years—a topic we summarized in our booking trends for 2018 post. Yet despite the hype, the majority of people...</p>
            <p class="entry-author"><a href="/blog-author/"><img src="/images/blog-author-30x30.jpg" alt=""></a>by&nbsp;<span class="entry-author-name"><a href="/blog-author/">Nate Lane</a></span></p>
          </div>
        </article>

        <article class="latest-articles__item post entry">
          <div class="col-sm-6">
            <a href="/post/"><img class="featured-image" src="/images/437x255.png" alt="437x255"></a>
          </div>
          <div class="col-sm-6">
            <p class="entry-time"><time datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
            <p class="entry-category">Revenue Strategy</p>
            <p class="entry-title"><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            <p class="entry-content">There’s been a lot of buzz about blockchain in recent years—a topic we summarized in our booking trends for 2018 post. Yet despite the hype, the majority of people...</p>
            <p class="entry-author"><a href="/blog-author/"><img src="/images/blog-author-30x30.jpg" alt=""></a>by&nbsp;<span class="entry-author-name"><a href="/blog-author/">Nate Lane</a></span></p>
          </div>
        </article>

        <div class="archive-pagination pagination">
          <ul>
            <li class="pagination-prev"><a href="#"></a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="pagination-omission">...</li>
            <li><a href="#">29</a></li>
            <li><a href="#">30</a></li>
            <li><a href="#">31</a></li>
            <li class="pagination-next"><a href="#"></a></li>
          </ul>
        </div>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div>

<section class="pre-footer-links">
  <a class="pre-footer-link" href="#">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-resources.svg" alt="Resources icon">
      <p class="pre-footer-link__headline">Resources</p>
      <p class="pre-footer-link__description">Insights, knowledge, and information to help you dominate the online travel space.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="/blog/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-blog.svg" alt="Blog icon">
      <p class="pre-footer-link__headline">Blog</p>
      <p class="pre-footer-link__description">The latest in hotel marketing and distribution trends for independent hotels.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="/about/careers/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-careers.svg" alt="Careers icon">
      <p class="pre-footer-link__headline">Careers</p>
      <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
    </div>
  </a>
</section>

<?php
get_footer();
