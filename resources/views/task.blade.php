<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tâche {{$task->id}}</title>
</head>
<body>
	<h1>Tâche : {{$task->title}}</h1>
	<h2>description de la tâche :</h2>
	<p>{{$task->description}}</p>
	<p>Ajouté le {{$task->created_at->translatedFormat('d F Y')}}</p>
	<button onclick="window.location.href='/task/{{$task->id}}/delete'">Supprimer la tâche</button>
</body>
</html>