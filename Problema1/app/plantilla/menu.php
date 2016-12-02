
<!--  <div style="float:left; width:8em; border-radius: 5px; border:1px solid #aaa; background: #ccffcc; margin-right: 1em;">-->
<div class="dropdown open" >
<ul class="nav nav-pills"> 
<li role="presentation" class="dropdown">
	<li><a class="dropdown-item" href='?controllers=inicio'><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Inicio</a></li>      
    <li><a class="dropdown-item" href='?controllers=anadirusuario'><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Añadir usuarios</a></li>
    <li><a class="dropdown-item" href='?controllers=listarusuarios'><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Listado de usuarios</a></li>
    <li><a class="dropdown-item" href='?controllers=alta'><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Nueva oferta</a></li>     
    <li><a class="dropdown-item" href='?controllers=listar'><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Listado de ofertas</a></li>
<?php

	$url = '?controllers=cerrarsesion';

	if (! empty($_SESSION['nombre_usuario']))
	{
		echo ' <li><a class="dropdown-item" href="'. $url .'"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Cerrar sesión</a></li>';          
	}?>    
</div>

 <!--    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
       <li class="dropdown">
          <a href='#' data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          Usuarios <span class="caret pull-right"></span>
          </a>          
            <ul class="nav nav-list">
              <li><a href='?controllers=anadirusuario'> Añadir</a></li>
              <li><a href='?controllers=listar'> Listado</a></li>
            </ul>
           </li>
          </div>
        </li>-->
        <!-- <li><a href='?controllers=inicio'>Inicio</a></li>
        <li><a href='?controllers=anadirusuario'>Añadir usuario</a></li>
        <li><a href='?controllers=listar'>Listar</a></li>
        <li><a href='?controllers=alta'>Alta</a></li>
        <li><a href='?controllers=listarusuarios'>Listado de usuarios</a></li> 
    </ul>    
</div>-->

