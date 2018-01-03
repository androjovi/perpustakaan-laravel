
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.3/moment.min.js"></script>
	
    

	{!! Html::script ('assets/js/bootstrap.min.js') !!}
{{ Html::script('assets/bootstrap-datetimepicker.min.js') }}

	<!--  Charts Plugin -->
	{!! Html::script('assets/js/chartist.min.js') !!}

    <!--  Notifications Plugin    -->
    {!! Html::script('assets/js/bootstrap-notify.js') !!}"

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	{!! Html::script('assets/js/light-bootstrap-dashboard.js?v=1.4.0') !!}

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	{!! Html::script('assets/js/demo.js') !!}

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	
					@if (Session::has('success'))
					$.notify({
            	icon: 'pe-7s-like',
            	message: " {!! Session::get('success') !!} "
            },{
                type: 'success',
                timer: 4000
            });
					@elseif (Session::has('error'))
							$.notify({
            	icon: 'pe-7s-close',
            	message: " {!! Session::get('error') !!} "
            },{
                type: 'danger',
                timer: 4000
            });
					@endif

    	});
	</script>