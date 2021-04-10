<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#search').keyup(function() {
				$.ajax({
					url: 'backend.php',
					type: 'post',
					data: {search: $(this).val()},
					success: function(result){
						$('#result').html(result);
					}
				})
			})
		})
	</script>
</head>
<body>
	<input type="text" id="search">
	<span id="result"></span>
</body>
</html>