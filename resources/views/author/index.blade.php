
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

            <!--figuriniuose skliausiaute href- nurodomas kelias ir kintamasis-->
            <td><a href="{{route('author.show', [$author]) }}"> {{$author->name }}</a></td>
            <td>{{ $author->surname }}</td>
            <td>{{ $author->username }}</td>
            {{-- //redagavimoForma.php?ID=5  --}}
            <td>
                <!-- editas per nuoroda-->
                <a href="{{route('author.edit', [$author]) }}">Edit</a>

                <!-- Delete vykdomas visada per forma-->
                <form method="POST" action="{{route('author.destroy', [$author]) }}">

                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>
