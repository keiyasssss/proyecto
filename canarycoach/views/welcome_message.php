<!-- En este div colocaremos un slide de fotos inicial -->
<!-- <div id="owl-demo" class="owl-carousel owl-theme"> -->
<div id="owl-principal" class="owl-carousel owl-theme">
    <div class="item"><img class="img-responsive" src="<?php echo $resources.'/images/image1.jpg'?>" ></div>
    <div class="item"><img class="img-responsive" src="<?php echo $resources.'/images/image2.jpg'?>" ></div>
    <div class="item"><img class="img-responsive" src="<?php echo $resources.'/images/image3.jpg'?>" ></div>
</div>

<!-- En este div colocaremos un texto de bienvenida a la pagina -->
<div class="container">
	<div class="jumbotron" id="textoBienvenida">
		<center>
			<img class="img-responsive" src="<?php echo $resources.'/img/canarycoach.png'?>" width="300" height="200" title="Canary Coach" alt="canarycoach"/>
		</center>
	  	<h3 align="center">Comunidad canaria de intercambio de actividades</h3>
	  	<p>
	  		<pre>
		      	Este es tu sitio web ideal para publicitar la actividad
		      	que desees impartir o incluso unirte a aquella que
		      	más te guste. No lo dudes y únete, la experiencia será
		      	inolvidable.
	      	</pre>
	  	</p>
	  	<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
	</div>
</div>

<!-- En este div colocaremos las actividades recientes -->
<div class="container">
	<div class="jumbotron" id="textoBienvenida">
	  	<h2 align="center">Actividades recientes</h2>
	  	<br/>
	  	<div class="row">
		    <form>
		        <div class="form-inline text-center">
		            <label >Selecciona una isla:</label>
		            <select class="form-control">
		                <option value="Tenerife" >Tenerife</option>  
		                <option value="Gomera" >La Gomera</option>  
		                <option value="Palma" >La Palma</option>  
		                <option value="Hierro" >El Hierro</option>  
		                <option value="Granca" >Gran Canaria</option> 
		                <option value="fuerteventura" >Fuerteventura</option>  
		                <option value="Lanzarote" >Lanzarote</option>  
		            </select>
		            <label >Selecciona una actividad:</label>
		            <select class="form-control">
		                <option value="OPTION1" >OPTION1</option>  
		                <option value="OPTION2" >La OPTION2</option>  
		            </select>
		            <button type="button" class="btn btn-primary">
		            	<span class="glyphicon glyphicon-search"></span>
		            </button>
		        </div>        
		    </form>
		</div>
		<br/>
	  	<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
	  	<div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de aerobic</h3>
		      <div class="caption">		        
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_aerobic.jpg'?>" title="Clases de Aerobic" alt="ClasesDeAerobic">
		        <br/>
		        <p>Se imparten clase de aerobic 2 veces por semana. Monitor titulado y con 5 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de aerobic</h3>
		      
		      <div class="caption">
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_aerobic.jpg'?>" title="Clases de Aerobic" alt="ClasesDeAerobic">
		        <br/>  
		        <p>Se imparten clase de aerobic 2 veces por semana. Monitor titulado y con 5 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de aerobic</h3>

		      <div class="caption">
		      	<img class="img-responsive" src="<?php echo $resources.'/img/clase_aerobic.jpg'?>" title="Clases de Aerobic" alt="ClasesDeAerobic">
		      	<br/> 
		        <p>Se imparten clase de aerobic 2 veces por semana. Monitor titulado y con 5 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de aerobic</h3>

		      <div class="caption">
		      	<img class="img-responsive" src="<?php echo $resources.'/img/clase_aerobic.jpg'?>" title="Clases de Aerobic" alt="ClasesDeAerobic">
		      	<br/> 
		        <p>Se imparten clase de aerobic 2 veces por semana. Monitor titulado y con 5 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>
		</div>

		<nav>
		  <ul class="pager">
		    <li><a href="#">Anterior</a></li>
		    <li><a href="#">Siguiente</a></li>
		  </ul>
		</nav>
	</div>
</div>

<!-- En este div colocaremos las actividades mas destacadas -->
<div class="container">
	<div class="jumbotron" id="textoBienvenida">
		<h2 align="center">Actividades más destacadas</h2>
		<br/>
	  	<div class="row">
		    <form>
		        <div class="form-inline text-center">
		            <label >Selecciona una isla:</label>
		            <select class="form-control">
		                <option value="Tenerife" >Tenerife</option>  
		                <option value="Gomera" >La Gomera</option>  
		                <option value="Palma" >La Palma</option>  
		                <option value="Hierro" >El Hierro</option>  
		                <option value="Granca" >Gran Canaria</option> 
		                <option value="fuerteventura" >Fuerteventura</option>  
		                <option value="Lanzarote" >Lanzarote</option>  
		            </select>
		            <label >Selecciona una actividad:</label>
		            <select class="form-control">
		                <option value="OPTION1" >OPTION1</option>  
		                <option value="OPTION2" >La OPTION2</option>  
		            </select>
		            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
		        </div>        
		    </form>
		</div>
		<br/>
	  	<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
	  	<div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de escalada</h3>
		      <div class="caption">		        
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_escalada.jpg'?>" title="Clases de Escalada" alt="ClasesDeEscalada">
		      	<br/>
		        <p>Se imparten clase de escalada 2 veces por semana. Monitor titulado y con 15 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de escalada</h3>
		      <div class="caption">
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_escalada.jpg'?>" title="Clases de Escalada" alt="ClasesDeEscalada">
		      	<br/>
		        <p>Se imparten clase de escalada 2 veces por semana. Monitor titulado y con 15 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de escalada</h3>
		      <div class="caption">
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_escalada.jpg'?>" title="Clases de Escalada" alt="ClasesDeEscalada">
		      	<br/>
		        <p>Se imparten clase de escalada 2 veces por semana. Monitor titulado y con 15 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <h3>Clases de escalada</h3>
		      <div class="caption">
		        <img class="img-responsive" src="<?php echo $resources.'/img/clase_escalada.jpg'?>" title="Clases de Escalada" alt="ClasesDeEscalada">
		      	<br/>
		        <p>Se imparten clase de escalada 2 veces por semana. Monitor titulado y con 15 años de experiencia.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-plus"></span></a></p>
		      </div>
		    </div>
		  </div>
		</div>

		<nav>
		  <ul class="pager">
		    <li><a href="#">Anterior</a></li>
		    <li><a href="#">Siguiente</a></li>
		  </ul>
		</nav>
	</div>
</div>