<?php
/** @var array $site_element */
$posts = apply_filters( 'get_post_listings', $site_element);
$postcount = 0;
$posttype = false;
if (!empty($posts)) {
    $first_post = $posts[0]; 
	$posttype = $first_post->post_type;
	$postcount = count($posts);
}

if($posttype == 'bags'):
?>
<div class="c-container c-text-block c-container-postlisting">
	<div class="c-row">
	<?php foreach ( $posts as $post ) {
		$title      = $post->post_title;
		$text       = $post->post_excerpt;
		$date       = get_the_date( 'd. M Y',$post->ID );
		$image_1    = get_field('bild_1',$post->ID );
		$available  = get_field('available',$post->ID );
		$model  = get_field('model',$post->ID );
		$preis      = apply_filters('c_format_price', get_field('preis',$post->ID ));
		$link		= get_permalink($post->ID);
		$email    	= apply_filters( 'c_get_option', 'company_email' );
		?>
		
		<div class="c-col-4 c-col-12-mobile">
			<article class="c-news-item c-box-small c-text-medium c-text-block">
				<?php if (!$available ): ?>
					<span class="c-available">Ausverkauft</span>
				<?php endif; ?>
				<?php if (!empty($image_1) ): ?>
					<a href="mailto:<?= $email ?>?subject=Ihre%20Anfrage #<?= $model ?>">
					<figure> <?= wp_get_attachment_image( $image_1, 'large' ) ;?></figure>
					</a>
				<?php endif; ?>
				<div class="c-subtitle"><?= '#' . $model ?></div>
				<div class="c-subtitle"><?= $preis ?></div>
			</article>
		</div>
	<?php } ?>
	</div>
</div>
<?php endif; ?>