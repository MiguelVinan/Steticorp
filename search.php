<?php get_header(); ?>

	<section class="SearchPage u-paddingSection">
		<div class="yellow-border"></div>
		<?php include(locate_template('layouts/search-box.php')); ?>
		<div class="container">
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h3 class="page-title">
			          Lo que encontramos para: <span><?php echo get_search_query() ?> </span>
						</h3>
					</header>

					<?php	while ( have_posts() ) : the_post(); ?>

						<a href="<?php the_permalink() ?>" class="result">
							<h3> <?php the_title() ?> </h3>
							<div class="">
								<?php the_excerpt(); ?>
							</div>
							<div class="meta">
								<time><strong><?php the_time('j F, Y'); ?></strong></time>
								<span class="btn-go"><i class="fa fa-arrow-circle-right"></i></span>
							</div>
						</a>

						<?php	endwhile;


				// If no content, include the "No posts found" template.
				else :?>
			      <h3 class="page-title">No encontramos resultados para <span><?php echo get_search_query(); ?></span>. Intenta de con otra busqueda, por favor.</h3>

			    <?php	endif;?>

			  </main>
			</section>
		</div>
	</section>

<?php get_footer(); ?>
