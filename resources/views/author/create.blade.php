



<form method="POST" action="{{route('author.store')}}">
    Name: <input type="text" name="author_name">
    Surname: <input type="text" name="author_surname">
    Username: <input type="text" name="author_username">

    @csrf

    <button type="submit">Add</button>
    </form>
