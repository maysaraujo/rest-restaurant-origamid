<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('foto'); ?>" alt="<?php the_field('alt_text_historia') ?>">
			</div>

			<div class="grid-8">
				<?php
				$textos = get_field('textos');
				if (isset($textos)) {
					foreach ($textos as $texto) {
				?>
						<h2><?php echo $texto['titulo'] ?></h2>
						<p><?php echo $texto['conteudo'] ?></p>
				<?php }
				} ?>
			</div>
		</section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>
