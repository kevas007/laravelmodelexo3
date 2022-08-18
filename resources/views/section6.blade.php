
<table class="table-fixed">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Age</th>
            <th>Genre</th>
        </tr>
    </thead>
    @foreach ($exclus1824 as $item)
        <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                    <td >{{ $item->nom }}</td>
                    <td >{{ $item->age }}</td>
                    <td >{{ $item->genre }}</td>

            </tr>


        </tbody>
    @endforeach
</table>