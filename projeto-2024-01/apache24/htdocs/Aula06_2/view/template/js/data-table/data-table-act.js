(function ($) {
 "use strict";
	
	$(document).ready(function() {

		$('#data-table-basic').dataTable({
			"bPaginate" : true,
			"bLengthChange" : true,
			"lengthMenu" : [ 10, 50, 100 ],
			"bFilter" : true,
			"bSort" : true,
			"bInfo" : true,
			"bAutoWidth" : false,
			order : [ [ 0, 'desc' ] ],
		});
	
	});
 
})(jQuery); 