
<article id="post-<?php the_ID(); ?>" <?php post_class( 'boxed' ); ?>>
	<?php $nothumb = "no-thumb"; ?>
	<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="home-thumb boxed">
			<?php the_post_thumbnail(); ?>
		</a>
		<?php $nothumb = ""; ?>
	<?php endif; ?>

	<header class="entry-header <?php echo esc_attr( $nothumb ); ?>">
		<div class="entry-meta">
			<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'upright' ) );
			
			if ( $categories_list && upright_categorized_blog() ) {
				printf( '%1$s <span class="sep">/</span> ', $categories_list );
			}
			
			upright_posted_on();
			?>
			
			<span class="sep">/</span> <span
				class="comments-link"><?php comments_popup_link( esc_html__( 'Leave a comment', 'upright' ), esc_html__( '1 Comment', 'upright' ), esc_html__( '% Comments', 'upright' ) ); ?></span>
			
		</div><!-- .entry-meta -->
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"
		                           title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'upright' ), the_title_attribute( 'echo=0' ) ) ); ?>"
		                           rel="bookmark"><?php the_title(); ?></a></h2>

	</header><!-- .entry-header -->

	<div class="entry-summary  <?php echo esc_attr( $nothumb ); ?>">
		<?php the_excerpt(); ?>

		<p class="read-more"><a href="<?php the_permalink(); ?>"
		                        title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'upright' ), the_title_attribute( 'echo=0' ) ) ); ?>"
		                        rel="bookmark"><?php esc_html_e( "Read More &rarr;", 'upright' ); ?></a></p>
	</div><!-- .entry-summary -->

</article>
