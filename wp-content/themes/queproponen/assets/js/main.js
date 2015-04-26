
var QueProponenApp = null;

jQuery(document).ready(function ($) {
	
	QueProponenApp = {
			init : function() {
				window.scrollTo(0,0);
				
				QueProponenApp.getSectores();
				
			},
			modal : $('#myModal'),
			partidos : ["PLN", "PAC", "FA", "ML", "PUSC"],
			selectors : {
				'modal' : $('#myModal'),
				'menuButtonSocial' : '#social-media-icon',
			}, 
			// --------------------------------------
			// - AJAX get Propuestas x Sector
			// --------------------------------------
		    getPropuestas: function (sector, partidos) {
				$.ajax({
					type : "POST",
					url : '//' + document.domain + '/queproponen-wp/?json=planes.getPropuestas',
					data : {
						sector : sector, 
						partidos : partidos
					},
					async : true,
		

					beforeSend : function() {
						
						$("#matriz-propuestas td").html('<div class="list-group"></div>');
						
					},
					success : function(partidosConPlanes) {

						$.each(partidosConPlanes, function (i, planesXpartido){
							console.log(planesXpartido);
							if (planesXpartido != 'ok'){
								$.each(planesXpartido, function (i, plan){
									
									var detalle = '<span class="detalle-plan">';
									detalle += plan.post_content;
									detalle += '</span>';
									
									var partido = '<span class="partido-plan">';
									partido += plan.meta_value;
									partido += '</span>';
									
									
									var list_item = '<a href="#myModal" class="list-group-item" role="button" data-toggle="modal">';
									list_item += plan.post_title;
									list_item += detalle + partido + '</a>';
								
									console.log(plan.meta_value.toLowerCase());
									
									
									
									$('td.partido-' + plan.meta_value.toLowerCase() + ' .list-group').append(list_item);
								});
							}
						});
						
						
					},
					error : function(xhr, ajaxOptions, thrownError) {
						alert("Ha ocurrido un error, por favor intente despu\xe9s");
					}
				});
			}, 
			// --------------------------------------
			// - AJAX get Sectores
			// --------------------------------------
		    getSectores: function () {
				$.ajax({
					type : "POST",
					url : '//' + document.domain + '/queproponen-wp/?json=planes.getSectores',
					async : true,

					beforeSend : function() {
						
					},
					success : function(sectores) {
						$.each(sectores, function (i, sector){
							console.log(sector);
							if (sector != 'ok'){
								var li = "<li><a data-term-id='"+ sector.term_id +"' class='li-sector' href='#'>";
								li += sector.name;
								li += "</a></li>";
								$("#select-sectores").append(li);
							}
							
						});
					},
					error : function(xhr, ajaxOptions, thrownError) {
						alert("Ha ocurrido un error, por favor intente despu\xe9s");
					}
				});
			}
	}
	// ===============================================================
	// Shows and hides a column
    $("#selector-partidos input").on('change', function (e){
    	
    	QueProponenApp.partidos = $("#selector-partidos input:checked").map(function(){
    	      return $(this).val();
    	    }).get(); // <----
    	var partidosCount = QueProponenApp.partidos.length;

    	if(partidosCount >= 2){
    
        	if(!$(this).is(':checked')){
        		$('.partido-' + $(this).val().toLowerCase()).fadeOut(200);
        	}else{
        		$('.partido-' + $(this).val().toLowerCase()).fadeIn(200);
        	}
        	
        	if(partidosCount === 2){
        		$("#selector-partidos input:checked").attr("disabled", "disabled");
        	}else
        		{
        			$("#selector-partidos input:checked").removeAttr("disabled");
        		}
        	
    	}
    	var thWidth = 90 / partidosCount;
    	$('#matriz-propuestas th.theader').css('width', thWidth + '%');
    		
    	
    		
    });
    
    // -------
    // Setea la información del modal cuando se le da click a un punto de la
	// propuesta para determinado sector.
    $("#matriz-propuestas").on('click', 'a.list-group-item', function (){
    	
    	QueProponenApp.modal.find('.modal-title').html($(this).html() );
    	QueProponenApp.modal.find('.modal-body').html($(this).find('.detalle-plan').html());
    	$(this).find('.partido-plan').insertAfter(QueProponenApp.modal.find('.modal-title')).show();
    	
    });
    // -------
    $("#select-sectores").on('click', '.li-sector', function (){
    	$('#menuSector .dropdown-toggle').html($(this).html() + ' <b class="caret"></b>');
    	// alert($(this).data('term-id'));
    	QueProponenApp.getPropuestas($(this).data('term-id'), QueProponenApp.partidos.join(","));
    	$('#row-title').html($(this).html());
    });
  
    // -------
    QueProponenApp.getSectores();
    
    
});





