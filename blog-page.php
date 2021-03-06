<?php /* Template Name: Blog */ get_header(); ?>

<main>

	<section class="blog-banner">
		<div class="container">

			<div class="row">
				<div class="col-md-12">

					<h1>Ultimas actualizaciones</h1>

				</div>
			</div>
			
		</div>
	</section>

	<section class="blog-body">

		<div class="container">
	
			<div class="row">
	
				<div class="col-md-8">

					<?php 

					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

					if(!empty($_GET['tag']))
					{
						$tag = $_GET['tag'];

						$query = array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>3,'cat'=>1,'paged'=>$paged,'tag_id'=>$tag,'order'=>'DESC');
					}
					else
					{
						$query = array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>3,'cat'=>1,'paged'=>$paged,'order'=>'DESC');
					}

					$data_post = new WP_Query($query);

                    if ($data_post->have_posts()):

                        foreach ($data_post->posts as $value): ?>

                        <div class="container-blog-list">

							<div class="container-blog-list-header" style="background: transparent url('<?= get_field('blog_imagen', $value->ID); ?>') center center / cover no-repeat;">

								<a href="<?php echo get_permalink( $value->ID ); ?>" target="_self" class="btn btn-default">Contratos</a>

							</div>

							<div class="container-blog-list-content">

								<h3><?= $value->blog_fecha ?></h3>

								<a href="<?php echo get_permalink( $value->ID ); ?>" target="_self">
									
									<h2><?= $value->blog_titulo ?></h2>

									<p><?= $value->blog_contenido ?> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></p>
								
								</a>

							</div>

							<div class="container-blog-list-footer">

								<div class="row">

									<div class="col-xs-5 col-sm-6 col-md-6">

										<p>Publicado por: <?= get_user_by('ID', $value->post_author)->display_name ?></p>

									</div>

									<div class="col-xs-7 col-sm-6 col-md-6">
									
										<a onclick="window.open('http://www.facebook.com/sharer.php?u=<?= get_permalink($value->ID) ?>','_blank', 'width=700, height=300');">
											<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-blog-facebook.png" alt="Facebook">
										</a>
										<a onclick="window.open('http://twitter.com/share?&url=<?= get_permalink($value->ID) ?>','_blank', 'width=700, height=300');">
											<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-blog-twitter.png" alt="Twitter">
										</a>
										<a onclick="window.open('https://plus.google.com/share?url=<?= get_permalink($value->ID) ?>','_blank', 'width=700, height=300');">
											<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-blog-googleplus.png" alt="Google+">
										</a>
										<!--<a href="" target="_blank">
											50 <img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-blog-count.png" alt="Comentarios">
										</a>-->
									
									</div>

								</div>

							</div>

						</div>					

                    <?php endforeach;

                    endif;

                    wp_reset_postdata(); ?>		

					<div class="container-blog-list-paginator">

						<?php previous_posts_link( 'Anterior' ); ?>

						<?php next_posts_link( 'Siguiente', $data_post->max_num_pages ); ?>

						<!-- <a href="" target="_self" class="btn btn-default">Siguiente <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a> -->

					</div>
									
				</div>
				
				<div class="col-md-4">

					<div class="blog-sidebar-right-block-1">
					
						<div class="blog-sidebar-right-block-1-header">
					
							<a href="quienes-somos" target="_self" class="btn btn-default">Quienes somos</a>

							<img src="<?php bloginfo('template_url' ); ?>/assets/img/logo-blog-sidebar-right-block-1-header.png" class="img-responsive">
					
						</div>
					
						<div class="blog-sidebar-right-block-1-content">
					
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi doloremque iure consectetur? Officiis provident.</p>
					
						</div>

					</div>

					<div class="blog-sidebar-right-block-2">
					
						<div class="blog-sidebar-right-block-2-header">
					
							<h3>PUBLICACIONES RECIENTES</h3>
										
						</div>
					
						<div class="blog-sidebar-right-block-2-content">

							<?php $data_post = new WP_Query(array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>4,'cat'=>1,'order'=>'DESC'));

		                    if ($data_post->have_posts()):

		                        foreach ($data_post->posts as $value): ?>

		                        	<a href="<?php echo get_permalink( $value->ID ); ?>" target="_self">
										<div class="row">
											
											<div class="col-xs-12 col-sm-5 col-md-5">
												
												<img src="<?= get_field('blog_imagen', $value->ID); ?>" alt="titulo blog">
												
											</div>
											
											<div class="col-xs-12 col-sm-7 col-md-7">
												
												<h3><?= $value->blog_titulo ?></h3>
												
												<p><?= $value->blog_imagen ?> <?= $value->blog_fecha ?></p>
												
											</div>
											
										</div>
									</a>

		                        <?php endforeach;

		                    endif;

		                    wp_reset_postdata(); ?>							
							
						</div>
					
					</div>

					<div class="blog-sidebar-right-block-3">
					
						<div class="blog-sidebar-right-block-3-header">
					
							<h3>SIGUENOS</h3>
					
						</div>
					
						<div class="blog-sidebar-right-block-3-content">
					
							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-facebook-blue.png" alt="Facebook">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-twitter-blue.png" alt="Twitter">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-googleplus-blue.png" alt="Google +">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-vine-blue.png" alt="Vine">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-linkedin-blue.png" alt="Linkedin">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-tumblr-blue.png" alt="tumblr">
							</a>

							<a href="" target="_blank">
								<img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-youtube-blue.png" alt="YouTube">
							</a>
					
						</div>
					
					</div>

					<div class="blog-sidebar-right-block-4">
					
						<div class="blog-sidebar-right-block-4-header">
					
							<h3>TAGS</h3>
					
						</div>
					
						<div class="blog-sidebar-right-block-4-content">

					        <?php $tags = get_tags(); 
					            
					            foreach (array_chunk($tags, 3) as $array_chunk): ?>

					            	<div class="content">

					            	<?php foreach ($array_chunk as $tag): ?>

					            	<a href="blog/?tag=<?php echo($tag->term_id); ?>" target="_self" class="btn btn-default"><?php echo($tag->name); ?></a>					                
					            
					            <?php endforeach; ?>

					            </div>

					        <?php endforeach; ?>

						</div>

					</div>

					<div class="blog-sidebar-right-block-5">
					
						<img src="<?php bloginfo('template_url' ); ?>/assets/img/bg-blog-sidebar-right-block-1-header.jpg" class="img-responsive">
					
					</div>

					<!--<div class="blog-sidebar-right-block-6">
					
						<div class="blog-sidebar-right-block-6-header">
					
							<h3>SUSCRÍBETE</h3>
					
						</div>
					
						<div class="blog-sidebar-right-block-6-content">
					
							<form action="" method="post">
							
								<div class="form-group">
									<h3>No te pierdas las noticias</h3>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" placeholder="Tu email">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-default">ENVIAR</button>
								</div>
							
							</form>
					
						</div>
					
					</div>-->

				</div>
	
			</div>
	
		</div>
	</section>	

</main>

<?php get_footer(); ?>