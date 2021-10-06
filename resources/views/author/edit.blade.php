
<form method="POST" action="{{route('author.update', [$author])}}">
    Name: <input type="text" name="author_name" value="{{$author->name}}">
    Surname: <input type="text" name="author_surname" value="{{$author->surname}}">
    Username: <input type="text" name="author_username" value="{{$author->username}}">

@csrf

<button type="submit">Edit</button>
</form>
