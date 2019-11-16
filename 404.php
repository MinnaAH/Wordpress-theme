<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<div class="container my-4">
        <div class="content p-4">
			<h2><?php _e( 'Nyt tapahtui jotain...', 'Bootstrap Theme' ); ?></h2>
            <p><?php _e( 'Sivua ei löytynyt. Navigaation kautta pääsee hyvin liikkumaan!', 'Bootstrap Theme' ); ?></p>
        </div>
	</div>

<?php get_footer(); ?>