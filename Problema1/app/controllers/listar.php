<?php
/* Muesta la lista de tareas */
include_once(CTRL_PATH.'functions.php');

include_once(MODEL_PATH.'classdb.php');

$tabla = 'ofertas';

include_once(MODEL_PATH.'funcionesbase.php');

/*$tareas = RecogerOfertas($tabla);*/

include_once (CTRL_PATH.'funcionespaginacion.php');

$url = '?controllers=listar&';

define ('PROXPAG', 10);


if (isset($_GET['pag']))
	$pag=$_GET['pag'];
else
	$pag=1;

$maxpag=ceil((int) (NRegistros($tabla)-1)/PROXPAG);

if ($pag<1 || $pag>$maxpag)
	$pag=1;

$posIni=(($pag-1)*PROXPAG)+1;

$tareas = RegistrosPagina($tabla, $posIni, PROXPAG);

include_once (VIEW_PATH.'listado.php');












/*2º intento de paginar
 * 
 * 
 $pagi = 1;

$contar_pagi = (strlen($pagi));    // Contamos el numero de caracteres

// Numero de registros por pagina

$numer_reg = 10;

$numero_registros0 = NRegistros($tabla);

// ----------------------------- Pagina anterior
$prim_reg_an = $numer_reg - $pagi;
$prim_reg_ant = abs($prim_reg_an);        // Tomamos el valor absoluto

if ($pagi <> 0)
{
	$pag_anterior = "<a href='views=listado.php?pagi=$prim_reg_ant'>Pagina anterior</a>";
}
// ----------------------------- Pagina siguiente
$prim_reg_sigu = $numer_reg + $pagi;

if ($pagi < $numero_registros0 - ($numer_reg - 1))
{
	$pag_siguiente = "<a href='views=listado?pagi=$prim_reg_sigu'>Pagina siguiente</a>";
}
// ----------------------------- Separador
if ($pagi <> 0 and $pagi < $numero_registros0 - ($numer_reg - 1))
{
	$separador = "|";
}
// Creamos la barra de navegacion

$pagi_navegacion = "$pag_anterior $separador $pag_siguiente";

if ($contar_pagi > 0)
{
	// Si recibimos un valor por la variable $page ejecutamos esta consulta

	$numero_registros = RegistrosPagina($tabla, $pagi, $numer_reg);
}
*/



















/* 1º intento de paginar
 * 
 */
/*$tot_registros = NRegistros($tabla);

//Limito la busqueda
$TAMANO_PAGINA = 10;

//examino la página a mostrar y el inicio del registro a mostrar

$pagina = -1;

if ($pagina == -1) {
	$inicio = 0;
	$pagina = 1;
}
else {
	$pagina = $_GET["pagina"];
	$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
//calculo el total de páginas

$total_paginas = ceil($tot_registros / $TAMANO_PAGINA);

$rs_pagina = RegistrosPagina($tabla, $inicio, $TAMANO_PAGINA);

$url = '?views=listado.php';

if ($total_paginas > 1) {
	if ($pagina != 1)		
		echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>';
	for ($i=1;$i<=$total_paginas;$i++) {		
		if ($pagina == $i)
		{
			//si muestro el índice de la página actual, no coloco enlace			
			echo $pagina;
		}
		else
		{
			//si el índice no corresponde con la página mostrada actualmente,
			//coloco el enlace para ir a esa página
			echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
		}
	}
}*/


