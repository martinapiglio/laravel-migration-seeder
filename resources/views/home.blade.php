<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container py-4">

        <h1 class="pb-3">Trains -  {{ $curDt }} </h1>

        <table class="table">

            <thead class="table-dark">
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">No. Carriages</th>
                    <th scope="col">Train on schedule</th>
                    <th scope="col">Train Cancelled</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>
                            {{ $train->company }}
                        </td>
                        <td>
                            {{ $train->departure_station }}
                        </td>
                        <td>
                            {{ $train->departure_time }}
                        </td>
                        <td>
                            {{ $train->arrival_station }}
                        </td>
                        <td>
                            {{ $train->arrival_time }}
                        </td>
                        <td>
                            {{ $train->train_code }}
                        </td>
                        <td>
                            {{ $train->no_train_carriages }}
                        </td>
                        <td>
                            {{ $train->is_on_schedule == 1 ? 'Yes' : 'No' }}
                        </td>
                        <td>{{ $train->is_cancelled == 1 ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</body>

</html>