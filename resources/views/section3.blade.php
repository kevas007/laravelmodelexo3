<table class="table-fixed">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Age</th>
            <th>Genre</th>
        </tr>
    </thead>
    @foreach ($femmes as $femme)
        <tbody>
            <tr>
                <td>{{ $femme->id }}</td>
                    <td >{{ $femme->nom }}</td>
                    <td >{{ $femme->age }}</td>
                    <td >{{ $femme->genre }}</td>

            </tr>


        </tbody>
    @endforeach
</table>