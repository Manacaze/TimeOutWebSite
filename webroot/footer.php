<script src="<?=principal?>static/javascript/libaries/jquery-3.2.1.js"></script>
<script src="<?=principal?>static/javascript/libaries/bootstrap/js/bootstrap.js"></script>

	<script src="<?=principal?>static/javascript/libaries/angular-0.10.0.js"></script>
	<script src="<?=principal?>static/javascript/main.js"></script>
	<script>
		$(document).ready(function(){
			$("#btnEmail").click(function(event){
				event.preventDefault();
				if($("input[name='name']").val()=='' || $("input[name='email']").val()=='' || $("textarea[name='message']").val()==''){
					$("#modalEmailError").modal();
				}else {
					$("#modalEmail").modal();
				}
			});
		});
	</script>
</body>
</html>