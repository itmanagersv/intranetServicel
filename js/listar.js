     jQuery.fn.DataTable.ext.type.search.string = function(data) {
       return !data ?
         '' :
         typeof data === 'string' ?
         data
         .replace(/έ/g, 'ε')
         .replace(/ύ/g, 'υ')
         .replace(/ό/g, 'ο')
         .replace(/ώ/g, 'ω')
         .replace(/ά/g, 'α')
         .replace(/ί/g, 'ι')
         .replace(/ή/g, 'η')
         .replace(/\n/g, ' ')
         .replace(/[áÁ]/g, 'a')
         .replace(/[éÉ]/g, 'e')
         .replace(/[íÍ]/g, 'i')
         .replace(/[óÓ]/g, 'o')
         .replace(/[úÚ]/g, 'u')
         .replace(/ê/g, 'e')
         .replace(/î/g, 'i')
         .replace(/ô/g, 'o')
         .replace(/è/g, 'e')
         .replace(/ï/g, 'i')
         .replace(/ü/g, 'u')
         .replace(/ã/g, 'a')
         .replace(/õ/g, 'o')
         .replace(/ç/g, 'c')
         .replace(/ì/g, 'i') :
         data;
     };

     var tabla = $('#lista').DataTable( {
  //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
      "sPaginationType": "full_numbers",
      "oLanguage":  {
          "sProcessing":     "Procesando...",
      "sLengthMenu": 'Mostrar <select>'+
          '<option value="10">10</option>'+
          '<option value="20">20</option>'+
          '<option value="50">50</option>'+
          '<option value="-1">Todos</option>'+
          '</select> registros',
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Filtrar:",
      "sUrl":            "",
      "sInfoThousands":  ",",

      "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
      },
       //DAMOS FORMATO A LA PAGINACION(NUMEROS)

     });
     new jQuery.fn.dataTable.Responsive(tabla);

     jQuery(document).ready(function() {
       var table = $('#lista').DataTable( {
    //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
        "sPaginationType": "full_numbers",
        "oLanguage":  {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",

		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        },
         //DAMOS FORMATO A LA PAGINACION(NUMEROS)

       });

       // Remove accented character from search input as well
       jQuery('.form-control input-sm').keyup(function() {
         table
           .search(
             jQuery.fn.DataTable.ext.type.search.string(this.value)
           )
           .draw();
       });
     });
