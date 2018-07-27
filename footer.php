<footer>

	<div class="footer-top">

		<div class="container">

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-4">

					<a href="" target="_self"><img src="<?php bloginfo('template_url' ); ?>/assets/img/logo-white.png" class="img-responsive"></a>

					<p>Prestación de los diferentes Servicios Públicos domiciliarios presentes en el mercado.</p>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">

					<h2>Mapa del sitio</h2>

					<ul>
						<li><a href="inicio" target="_self">Inicio</a></li>
						<li><a href="empresas-privadas" target="_self">Servicios</a></li>
						<li><a href="quienes-somos" target="_self">Quienes somos</a></li>
						<li><a href="blog" target="_self">Blog</a></li>
						<li><a href="contactanos" target="_self">Contáctanos</a></li>
					</ul>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					
					<h2>Contacto</h2>
					
					<ul>
						<li>Carrera 18 # 137-11</li>
						<li>Bogotá DC - Colombia</li>
						<li>info@serviciosconvergentes.net</li>
						<li>571 3000513 - 3000514</li>
						<li>
							<a href="" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-twitter.png"></a>
							
							<a href="" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-facebook.png"></a>
						</li>
					</ul>

				</div>

			</div>

		</div>

	</div>

	<div class="footer-bottom">
	
		<div class="container">

			<div class="row">
			
				<div class="col-md-7">
					<p>Todos los derechos reservados &copy; SERCON 2018</p>
				</div>
			
				<div class="col-md-5">
					<p>Hecho por <a href="https://www.suwwweb.com/" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icon-suwwweb.png"></a> - Páginas web</p>
				</div>
			
			</div>

		</div>

	</div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/assets/js/bundle.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	$('#form-contactanos').on('submit',function(event){
        event.preventDefault();

        var $btn = $('#btn-form-contactanos').button('loading');

        $.ajax({
            cache: false,
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serializeArray(),
            success:function(data){

                $('#msn-alert').empty();
                $('#msn-alert').append('<div class="alert alert-success" role="alert">Mensaje enviado!!!</div>');

                $("#form-contactanos").each(function(){ this.reset(); });

                $btn.button('reset');

                setTimeout(function(){ $('#msn-alert').empty(); }, 5000)
            },
            error:function(){

                $('#msn-alert').empty();
                $('#msn-alert').append('<div class="alert alert-danger" role="alert">Error al enviar los datos</div>');

                $btn.button('reset');

                setTimeout(function(){ $('#msn-alert').empty(); }, 5000)
            }
        });

    });

});
</script>

</body>
</html>