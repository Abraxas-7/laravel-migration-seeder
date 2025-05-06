<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-dark text-white">
        <div class="container py-4">
            <h1>i miei treni</h1>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>company</th>
                        <th>departure station</th>
                        <th>arrival station</th>
                        <th>departure time</th>
                        <th>arrival time</th>
                        <th>train code</th>
                        <th>number of carriages</th>
                        <th>is on time</th>
                        <th>is cancelled</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th>{{ $train->company }}</th>
                            <th>{{ $train->departure_station }}</th>
                            <th>{{ $train->arrival_station }}</th>
                            <th>{{ $train->departure_time }}</th>
                            <th>{{ $train->arrival_time }}</th>
                            <th>{{ $train->train_code }}</th>
                            <th>{{ $train->number_of_carriages }}</th>
                            <th>{{ $train->is_on_time }}</th>
                            <th>{{ $train->is_cancelled }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
