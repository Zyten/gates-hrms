	@if($flag =="pdf")
		<script> //coding asal
			var DEFAULT_URL = '{{ URL::asset("public")}}/{{$pdf}}?t=<?php echo time(); ?>';
			window.location.href = DEFAULT_URL;
		</script>

	@elseif($flag =="xls")

		<script>
			var DEFAULT_URL = '{{ URL::asset("public")}}/{{$xls}}?t=<?php echo time(); ?>';
			window.location.href = DEFAULT_URL;

		    setTimeout('history.go(-1)', 3000); //utk mengelakkan page download stay di bawah page blank 
		</script>
	@endif