<footer>
	<div style="float: left">
		<p>any.TV</p>
	</div>
	<div style="float: right">
		<p>Copyright 2013 Heartbeat | All Rights Reserved</p>
	</div>
</footer>

<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/js/jquery.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$('a#explore').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1100);
    return false;
});
</script>

	</body>
</html>