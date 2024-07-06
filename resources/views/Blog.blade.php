
@extends('Plantilla')
@section('rbody')
<style>
    .fondo-inicio {
        background-image: url('{{ asset('images/mias/fondoinicio.jpg') }}');
    }
</style>
<section class="hero-wrap hero-wrap-2 fondo-inicio"  data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Blog</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="row">

                    @foreach($items as $item)
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                        <a href="blog/{{$item->Titulo}}" class="block-20" style="background-image: url('{{ $item->Portada }}');">
                        </a>
                        <div class="text d-block pl-md-4">
                            <div class="meta mb-3">
                            <div><a >{{$item->created_at}}</a></div>
                            <div><a >MR</a></div>
                         
                            </div>
                            <h3 class="heading"><a href="blog/{{$item->Titulo}}">{{$item->Titulo}}</a></h3>
                            <p>{{$item->Enunciado}}</p>
                            <p><a href="blog/{{$item->Titulo}}" class="btn btn-primary py-2 px-3">Leer Mas</a></p>
                        </div>
                        </div>
                    </div>
                    @endforeach
						</div>
						<div class="row mt-5">
		          <div class="col">
                    <!-- .col-md-8 
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div> -->
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box bg-light">
              <form action="#" class="search-form bg-light">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
           

            <div class="sidebar-box bg-light ftco-animate">
              <h3 class="heading-2">Blogs Recientes</h3>
              @foreach($items as $item)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{$item->Portada}});"></a>
                <div class="text">
                  <h3 class="heading-1"><a >{{$item->Titulo}}</a></h3>
                  <div class="meta">
                    <div><a"><span class="icon-calendar"></span> {{$item->created_at}}</a></div>
                    <div><a ><span class="icon-person"></span> MR</a></div>
              
                  </div>
                </div>
              </div>
            @endforeach
            </div>

            <div class="sidebar-box bg-light ftco-animate">
              <h3 class="heading-2">Tags</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Gratis</a>
                <a href="#" class="tag-cloud-link">Abogados Pasto</a>
                <a href="#" class="tag-cloud-link">Derecho Penal</a>
                <a href="#" class="tag-cloud-link">Consultas Gratis</a>
                <a href="#" class="tag-cloud-link">Abogados</a>
                <a href="#" class="tag-cloud-link">Bullyng</a>
          
              </div>
            </div>

            <div class="sidebar-box bg-light ftco-animate">
              <h3 class="heading-2">Parrafo</h3>
              <p>En este blog, exploraremos temas como derechos civiles, leyes laborales, consejos legales prácticos, y mucho más. Mi objetivo es proporcionarte el conocimiento y la orientación necesaria para entender tus derechos y tomar decisiones informadas.

Como profesional del derecho, he dedicado mi carrera a ayudar a individuos y empresas a navegar por el complejo mundo legal. Aquí encontrarás artículos que clarifican conceptos legales, analizan casos actuales, y ofrecen consejos prácticos que pueden marcar la diferencia en tu situación legal.</p>
            </div>
          </div>

        </div>
      </div>
    </section> 
    
    
  @endsection
