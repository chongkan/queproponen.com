<?php

$thisPage = get_page($page);
$content = apply_filters('the_content', $thisPage -> post_content);
?>

<!-- Layout -->
<?php get_header(); ?>

<?php

$thisPage = get_page($page);
$content = apply_filters('the_content', $thisPage -> post_content);
?>

<!-- Layout -->
<?php get_header(); ?>

<div class="content">

	<div class="panel panel-default">

		<div class="panel-body">
	
				<ul id="menuSector" class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sector <b class="caret"></b></a>
						<ul class="dropdown-menu"  id="select-sectores" >

						</ul>

					</li>
				</ul>
		
			<div id="selector-partidos" class="alert alert-info">
				<label class="checkbox-inline">
					<input type="checkbox" checked id="inlineCheckbox1" value="PLN">
					PLN</label>
				<label class="checkbox-inline">
					<input type="checkbox" checked id="inlineCheckbox2" value="PAC">
					PAC</label>
				<label class="checkbox-inline">
					<input type="checkbox" checked id="inlineCheckbox3" value="FA">
					FA </label>
				<label class="checkbox-inline">
					<input type="checkbox" checked id="inlineCheckbox3" value="ML">
					ML </label>
				<label class="checkbox-inline">
					<input type="checkbox" checked id="inlineCheckbox3" value="PUSC">
					PUSC </label>
			</div>
		</div>
	</div>
	<div id="tabla-comparativa" class="table-responsive">
		<table id="matriz-propuestas" class="table">
			<thead>
				<tr>
					<th style="width: 10%;">Sector</th>
					<th class="theader header-pln partido-pln"   style="width: 18%"><h3>PLN</h3><span class="bandera"></span><span class="sector-title-as-plan"> Liberación Nacional</span></th>
					<th class="theader header-pac partido-pac"   style="width: 18%"><h3>PAC</h3><span class="bandera"></span><span class="sector-title-as-plan"> Acción Ciudadana</span></th>
					<th class="theader header-fa partido-fa"     style="width: 18%"><h3>FA</h3><span class="bandera"></span><span class="sector-title-as-plan"> Frente Amplio</span></th>
					<th class="theader header-ml partido-ml"     style="width: 18%"f><h3>ML</h3><span class="bandera"></span><span class="sector-title-as-plan"> Movimiento Libertario</span></th>
					<th class="theader header-pusc partido-pusc" style="width: 18%"><h3>PUSC</h3><span class="bandera"></span><span class="sector-title-as-plan"> Unidad Social Cristiana</span></th>
				</tr>
			</thead>
			<tbody>
				<!-- ROW: Desigualdad Social -->
				<tr>
					<td id='row-title'>Candidatos</td>
					<td class="partido-pln"></td>
					<td class="partido-pac"></td>
					<td class="partido-fa"></td>
					<td class="partido-ml"></td>
					<td class="partido-pusc"></td>
				</tr>
				<!-- ROW: Seguridad Ciudadana -->

			</tbody>
		</table>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">Modal title</h4>

				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<div class="well">
						<span class="glyphicon glyphicon-new-window"></span> Fuente:<a href=""> Plan de Gobierno Johnny Araya 2014-2018</a>
						<em>Página(s)</em> 9, 10
					</div>
					<button type="button" class="btn btn-primary" data-dismiss="modal">
						Cerrar
					</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
