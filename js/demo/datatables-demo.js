// // // Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable( {
//   "language": {
//     "sSearch": "Carian : ",
//     "sEmptyTable"	:      "Tiada data",
//     "sInfo":            "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
// 	"sSearch"		: "Carian Pelajar : ",
// 	"sZeroRecords"	:      "Tiada padanan rekod yang dijumpai.",
//    	"oPaginate"		: {
// 	   "sFirst"		:"Pertama",
// 	   "sPrevious"	:"Sebelum",
// 	   "sNext"		:"Seterusnya",
// 	   "sLast"		:"Akhir"
//    		}
//   }
 //});
//   $('div.dataTables_filter input').attr( 'type', 'date' );
 //});


// function filterGlobal () {
//     $('#example').DataTable().search(
//         $('#global_filter').val(),
//         $('#global_regex').prop('checked'),
//         $('#global_smart').prop('checked')
//     ).draw();
// }
 
// function filterColumn ( i ) {
//     $('#example').DataTable().column( i ).search(
//         $('#col'+i+'_filter').val(),
//         $('#col'+i+'_regex').prop('checked'),
//         $('#col'+i+'_smart').prop('checked')
//     ).draw();
// }
 
// $(document).ready(function() {
//     $('#example').DataTable({
//     	"iDisplayLength": 100
//     });
 
//     $('input.global_filter').on( 'keyup click', function () {
//         filterGlobal();
//     } );
 
//     $('input.column_filter').on( 'keyup click', function () {
//         filterColumn( $(this).parents('tr').attr('data-column') );
//     } );
// } );

// "search": {
//     "search": "2020-07-01"
//   },



$('#example').DataTable({
	"language":{
		"sSearch"		: "Carian : "},

	
    	//});

	"iDisplayLength": 100, "search": {regex: true}}).column(1).search(val.join('|'), true, false).draw();