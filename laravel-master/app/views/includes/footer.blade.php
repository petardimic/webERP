<!-- base url -->
<script>
	@if ($_SERVER['HTTP_HOST'] == 'localhost')
	var base_url = "{{ Config::get('app.url') }}/laravel-master/public/"
	@else
	var base_url = "{{ Config::get('app.url') }}"
	@endif
</script>


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>
<script src="/assets/js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/sorttable.js"></script>
<script src="/assets/js/skycons/skycons.js"></script>
<script src="/assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="/assets/js/calendar/moment-2.2.1.js"></script>
<script src="/assets/js/calendar/evnt.calendar.init.js"></script>
<script src="/assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="/assets/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="/assets/js/css3clock/js/script.js"></script>
<!--Sparkline Chart-->
<script src="/assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="/assets/js/flot-chart/jquery.flot.js"></script>
<script src="/assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="/assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="/assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="/assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="/assets/js/dashboard.js"></script>
<script src="/assets/js/custom-select/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="/assets/js/scripts.js"></script>