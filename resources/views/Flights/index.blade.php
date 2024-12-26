<!DOCTYPE html>
<html>
<head>
    <title>Flights</title>
</head>
<body>
    <h1>List of Flights</h1>
    <ul>
        @foreach ($flights as $flight)
            <li>
                <strong>{{ $flight->airline }}</strong> (ID: {{ $flight->flight_id }})
                <ul>
                    @foreach ($flight->passengers as $passenger)
                        <li>{{ $passenger->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>