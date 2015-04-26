<?php

$thisPage = get_page($page);
$content = apply_filters('the_content', $thisPage -> post_content);
?>

<!-- Layout -->
<?php get_header(); ?>

<div class="table-responsive">
	<table id="matriz-propuestas" class="table table-hover">
		<thead>
			<tr>
				<th>Sector</th>
				<th class="header-pln partido-pln"   style="width: 20%"><h3>PLN</h3><span class="sector-title-as-plan">Reto de Equidad y Cohesión Social</span></th>
				<th class="header-pac partido-pac"   style="width: 20%"><h3>PAC</h3><span class="sector-title-as-plan">Reto de Equidad y Cohesión Social</span></th>
				<th class="header-fa partido-fa"     style="width: 20%"><h3>FA</h3><span class="sector-title-as-plan">Reto de Equidad y Cohesión Social</span></th>
				<th class="header-ml partido-ml"     style="width: 20%"f><h3>ML</h3><span class="sector-title-as-plan">Reto de Equidad y Cohesión Social</span></th>
				<th class="header-pusc partido-pusc" style="width: 20%"><h3>PUSC</h3><span class="sector-title-as-plan">Reto de Equidad y Cohesión Social</span></th>
			</tr>
		</thead>
		<tbody>
			<!-- ROW: Desigualdad Social -->
			<tr class="desigualdad-social">
				<td>Desigualdad Social</td>
				<td class="partido-pln">
				<div class="list-group">
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Fortalecimiento de la cobertura y la calidad de educación pública.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Sostenibilidad Financiera de la CCSS y fortalecimiento del sistema de seguridad social.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Protección socila de los más débiles.</a>
				</div></td>

				<td class="partido-pac"></td>
				<td class="partido-fa">
				<div class="list-group">
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal"> Protección de los salarios </a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Empleo decente</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Fortalecimiento de la empresa nacional</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Combate directo a la pobreza</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Reestablecer verdadera igualdad,
					inclusión y superación de la pobreza.</a>
				</div></td>

				<td class="partido-ml">
				<div class="list-group">
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Programas Sociales y Atención a la Pobreza</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Vivienda</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Sociedad de Propietarios.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Cultura.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Deporte.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Juventud.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Niñez y Adolescencia.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Adulto Mayor.</a>
					<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">Mujer.</a>
				</div></td>

				<td class="partido-pusc"></td>
			</tr>
			<!-- ROW: Seguridad Ciudadana -->

		</tbody>
	</table>
</div>