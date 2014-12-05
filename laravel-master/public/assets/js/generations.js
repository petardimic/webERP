
$(function() {
	$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#format" ).change(function() {
		$( ".datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
	});
});

// A $( document ).ready() block.
$( document ).ready(function() {
	$( '.datepicker, [name="graph_filter"]' ).on('change',function(){
		// $.post('dashboard/generations', { graph_filter: $(".dp1").val(), graph_filter2: $(".dp2").val(), type : $('[name="graph_filter"]:checked').val() } ,function( data ) {
		$.post('dashboard/generations/'+systemID, { graph_filter: $(".dp1").val(), type : $('[name="graph_filter"]:checked').val() } ,function( data ) {

			// $('body').prepend(JSON.stringify(data));
 
			// $( "#chart_div" ).html( data );
			// google.load("visualization", "1", {packages:["corechart"]});
			// google.setOnLoadCallback(drawChart(data));
		})
		.done(function(data) {
			// chart_data = data;
			// drawChart();
			// $energyGraph.setData([{period:'abc', itouch: 20}])
			$energyGraph.setxLabels($('[name="graph_filter"]:checked').val());
			
            if ($('[name="graph_filter"]:checked').val() == 'day') {
            	$energyGraph.setLabel( ['Power']," W");
            } else {
            	$energyGraph.setLabel( ['Energy'], " Wh");
            }
			$energyGraph.setData(data);
			
			console.log( "second success" );
		})
		.fail(function(a,b,c) {
			console.log( "error" );
		});
	});
});

$(function () {
	
	 $energyGraph = Morris.Area({
	        element: 'graph-area',
	        padding: 10,
	        behaveLikeLine: true,
	        gridEnabled: false,
	        gridLineColor: '#dddddd',
	        axes: true,
	        fillOpacity:.7,
	        data: chart_data,
	        lineColors:['#CF8906'],
	        xkey: 'period',
	        xLabels:'hour',
	        ykeys: ['energy'],
	        labels: ["Power"],
	        postUnits:" W",
	        pointSize: 0,
	        lineWidth: 0,
	        hideHover: 'auto',
	        yLabelformat:function (y) { return y.toString() + 'km'; },
	        parseTime: true,

	    });
});