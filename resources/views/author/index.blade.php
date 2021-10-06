
<h1>Author index </h1>
<p>Labas</p>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
    </tr>

    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->surname }}</td>
            <td>{{ $author->username }}</td>
            {{-- //redagavimoForma.php?ID=5  --}}
            <td><a href="{{route('author.edit', [$author]) }}">Edit</a></td>
        </tr>
    @endforeach

</table>
