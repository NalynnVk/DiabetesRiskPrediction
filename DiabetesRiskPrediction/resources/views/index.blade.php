<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetes Risk Prediction Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            text-align: center;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body class="container mt-5">

    <h1>DIABETES RISK PREDICTION DATA</h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Polyuria</th>
                    <th scope="col">Polydipsia</th>
                    <th scope="col">Sudden Weight Loss</th>
                    <th scope="col">Weakness</th>
                    <th scope="col">Polyphagia</th>
                    <th scope="col">Genital Thrush</th>
                    <th scope="col">Visual Blurring</th>
                    <th scope="col">Itching</th>
                    <th scope="col">Irritability</th>
                    <th scope="col">Delayed Healing</th>
                    <th scope="col">Partial Paresis</th>
                    <th scope="col">Muscle Stiffness</th>
                    <th scope="col">Alopecia</th>
                    <th scope="col">Obesity</th>
                    <th scope="col">Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diabetesData as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->age }}</td>
                        <td>{{ $data->gender->label }}</td>
                        <td>{{ $data->polyuria ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->polydipsia ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->sudden_weight_loss ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->weakness ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->polyphagia ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->genital_thrush ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->visual_blurring ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->itching ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->irritability ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->delayed_healing ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->partial_paresis ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->muscle_stiffness ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->alopecia ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->obesity ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->result->label }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <a href="{{ route('filter.positive') }}">Filter Positive Class</a>
    <a href="{{ route('filter.age', ['age' => 30]) }}">Filter Age > 30</a> --}}

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>

</body>

</html>
