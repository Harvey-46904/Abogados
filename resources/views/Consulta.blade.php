
@extends('Plantilla')
@section('rbody')
  <section id="inicio" class="hero-wrap js-fullheight" style="background-image: url(images/mias/fondoinicio.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-12 ftco-animate d-flex align-items-center">
			<div class="text text-center">
				<span class="subheading">Estoy aqui para atenderte</span>
				<h1 class="mb-4">Háblame sobre tu caso y en breve me comunicaré contigo.</h1>
				<p><a href="#Crear-Consulta" class="btn btn-primary btn-outline-primary px-4 py-2">Hablar ahora</a></p>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb" id="Crear-Consulta">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/mias/fondo\ b.jpg);">
							<div class="text">
								<h3>Derecho Penal</h3>
								<br><h3>Derecho Laboral</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-items-stretch">
						<div class="text-about py-5 px-4">
							<h1 class="logo">
								<a href="#"><span class=""></span>Atenderé tu solicitud en breve</a>
							</h1>
							<h2>Bienvenido a tu despacho legal</h2>
							<p>Por favor, coménteme su caso rellenando sus datos y su situación. En breve me comunicaré con usted.</p>
							
                            <div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form action="{{url('consulta_send')}}" class="appointment-form" method="POST">
						@csrf
	            <div class="row">
	              <div class="col-sm-12">
	                <div class="form-group">
			              <input name="nombres" type="text" class="form-control" id="appointment_name" placeholder="Nombres Completos" autocomplete="off" required>
			            </div>
	              </div>
	              <div class="col-sm-12">
	                <div class="form-group">
			              <input name="celular" type="number" class="form-control" id="appointment_email" placeholder="Celular" autocomplete="off" required >
			            </div>
	              </div>
	             
	           
	           
	            
	              <div class="col-md-12">
	              	<div class="form-group">
		                <textarea name="consulta" id="" cols="30" rows="7" class="form-control" placeholder="Consulta a realizar"></textarea>
		              </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input type="submit" value="Enviar Consulta" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
                          
						</div>
					</div>
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/mias/fondo\ a.jpg);">
							<div class="text">
								<h3>Derecho Comercial</h3>
								<h3>Derecho Civil</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p id="mensaje"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			@if (session('success'))
			<a href="/" class="btn btn-primary">Continuar</a>
			@endif

		

      </div>
    </div>
  </div>
</div>
    
  @endsection
