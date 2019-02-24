<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>gyhttjuiiiiiiiiiiii</h1>
	<form action="{{url('insertStudent')}}" method="post">
	@csrf
	<!-- <input type="" name=""> -->
	<input type="number" name="id"><br>
	<input type="text" name="name"><br>
	<input type="text" name="phone"><br>
	<input type="text" name="email"><br>
	<input type="button" name="submit" value="submit">
</form>
</body>
</html>