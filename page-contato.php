<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('imagem_mapa'); ?>" alt="Mapa para o Rest"></a>
			</div>

			<div class="grid-1-3 contato-item">
				<?php
				$dados_conteudo = get_field('dados_conteudo');
				if (isset($dados_conteudo)) {
					foreach ($dados_conteudo as $dados) {
				?>
						<h2><?php echo $dados['titulo'] ?></h2>
						<p><?php echo $dados['primeiro_texto'] ?></p>
						<p><?php echo $dados['segundo_texto'] ?></p>
						<p><?php echo $dados['terceiro_texto'] ?></p>
				<?php }
				} ?>
			</div>
			<div class="grid-1-3 contato-item">
				<?php
				$dados_conteudo2 = get_field('dados_conteudo_dois');
				if (isset($dados_conteudo2)) {
					foreach ($dados_conteudo2 as $dados) {
				?>
						<h2><?php echo $dados['titulo'] ?></h2>
						<p><?php echo $dados['primeiro_texto'] ?></p>
						<p><?php echo $dados['segundo_texto'] ?></p>
						<p><?php echo $dados['terceiro_texto'] ?></p>
				<?php }
				} ?>
			</div>
			<div class="grid-1-3 contato-item">
				<?php
				$dados_conteudo3 = get_field('dados_conteudo_tres');
				if (isset($dados_conteudo3)) {
					foreach ($dados_conteudo3 as $dados) {
				?>
						<h2><?php echo $dados['titulo'] ?></h2>
						<p><?php echo $dados['primeiro_texto'] ?></p>
						<p><?php echo $dados['segundo_texto'] ?></p>
						<p><?php echo $dados['terceiro_texto'] ?></p>
				<?php }
				} ?>
			</div>
		</section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>
