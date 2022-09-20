<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>
    <h1>Trains</h1>
    <ul>
        @foreach($trains as $train)
            <li>
                <h2>From: {{$train->departure_station}} | To: {{$train->arrival_station}}</h2>
                <p>Departure Time: {{$train->departure_time}} | Arrival Time: {{$train->arrival_time}}</p>
                <p>Train Code: {{$train->train_code}} | Carriage Number: {{$train->carriage_number}}</p>

                @if($train->cancelled) 
                    <p>CANCELLED</p> 
                @endif
                
                @if(!$train->cancelled && $train->on_time) 
                    <p>ON TIME</p>  
                @elseif(!$train->cancelled && !$train->on_time) 
                    <p>LATE</p> 
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>