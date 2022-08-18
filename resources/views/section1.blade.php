<table class="table-fixed">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Age</th>
            <th>Genre</th>
        </tr>
    </thead>
    @foreach ($allMembres as $membre)
        <tbody>
            <tr>
                <td>{{ $membre->id }}</td>
                @if ($membre->genre == 'Homme')
                    <td class="text-blue-500">{{ $membre->nom }}</td>
                    <td class="text-blue-500">{{ $membre->age }}</td>
                    <td class="text-blue-500">{{ $membre->genre }}</td>
                @else
                    <td class="text-red-500">{{ $membre->nom }}</td>
                    <td class="text-red-500">{{ $membre->age }}</td>
                    <td class="text-red-500">{{ $membre->genre }}</td>
                @endif
            </tr>


        </tbody>
    @endforeach
</table>