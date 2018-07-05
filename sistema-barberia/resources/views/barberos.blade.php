<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de barberos</title>
</head>
<body>
	<h1> {{ $titulo }}</h1>

	@unless (empty($users))
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@else
    <p>No hay usuarios registrados.</p>	
@endif
</body>
</html>