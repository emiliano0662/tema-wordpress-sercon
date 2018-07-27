<?php /* Template Name: Contactanos */ get_header(); ?>

<main>

	<section class="contact-banner">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.279790589794!2d-74.04728098579965!3d4.721388142793822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85439c9e716b%3A0x5a76718a3d786684!2sCra.+18+%23137-11%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1532233419024" allowfullscreen></iframe>

	</section>

	<section class="contact-body">
		<div class="container">
	
			<div class="row">
	
				<div class="col-md-6">

					<h1>Contáctenos</h1>

					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo natus laudantium officia reiciendis! Fugiat itaque perferendis laudantium, placeat quis fugit libero sunt ab, sit ducimus omnis animi, temporibus doloribus facilis?</p>

					<ul>
						<li>
							<a href="mailto:info@serviciosconvergentes.net" target="_blank">info@serviciosconvergentes.net</a>
						</li>
						<li>
							<a href="tel:+5713001513" target="_blank">+571 3001513</a> - <a href="tel:+5713001514" target="_blank">+571 3001514</a>
						</li>
						<li>
							<p>Carrera 18 # 137-11 Bogotá - Colombia</p>
						</li>
					</ul>

					<h3>Si quieres ser parte de nuestra <b>red de proveedores</b></h3>						
				
				</div>

				<div class="col-md-6">
					
					<div class="content-form">

						<form id="form-contactanos" action="http://proyectos.suwwweb.com/sercon/wp-admin/admin-ajax.php" method="POST">
							<input type="hidden" name="action" value="mailer">

							<div class="row">
								<div class="col-md-12">
							
									<h2>Formulario de contacto</h2>
							
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">

									<div class="form-group">
										<label for="name">Nombre y apellido</label>
										<input type="text" class="form-control" id="name" name="name">
									</div>

								</div>
							</div>

							<div class="row">

								<div class="col-md-6">
							
									<div class="form-group">
										<label for="affair">Asunto</label>
										<input type="text" class="form-control" id="affair" name="affair">
									</div>
							
								</div>

								<div class="col-md-6">
								
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
								
								</div>

							</div>

							<div class="row">
								<div class="col-md-12">
							
									<div class="form-group">
										<label for="message">Mensaje</label>
										<textarea class="form-control" id="message" name="message" rows="5"></textarea>
									</div>
							
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									
									<div class="form-group">
										<button type="submit" id="btn-form-contactanos" class="btn btn-default" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
									</div>

								</div>
							</div>

						</form>

						<div class="row">
							<div class="col-md-12">

								<div id="msn-alert"></div>

							</div>
						</div>

					</div>
				
				</div>
	
			</div>
	
		</div>
	</section>	

</main>

<?php get_footer(); ?>