<table class="table-fixed">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Age</th>
            <th>Genre</th>
        </tr>
    </thead>
    @foreach ($hommes as $homme)
        <tbody>
            <tr>
                <td>{{ $homme->id }}</td>
                    <td >{{ $homme->nom }}</td>
                    <td >{{ $homme->age }}</td>
                    <td >{{ $homme->genre }}</td>

            </tr>


        </tbody>
    @endforeach
</table>