<!DOCTYPE html>
<html>
<head>
    <title>Tabla</title>
</head>
<body>
    @php
        $tablaArray = json_decode($$table, true);
    @endphp

    @if (!empty($tablaArray))
    <table border="1">
        <thead>
            <tr>
                <th>Album name</th>
                <th>Place</th>
                <th>Sold_units</th>
                <th>Duration</th>
                <th>Country</th>
                <th>Name Band</th>
                <th>Name Genr</th>
        </thead>
        <tbody>
            @foreach ($tablaArray as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['place'] }}</td>
                    <td>{{ $item['sold_units'] }}</td>
                    <td>{{ $item['duration'] }}</td>
                    <td>{{ $item['band']['country'] ?? '' }}</td> 
                    <td>{{ $item['band']['name'] ?? '' }}</td> 
                    <td>{{ $item['band']['genr']['name'] ?? '' }}</td>                
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No hay datos disponibles.</p>
    @endif
</body>
</html>
