@extends ('base')

@section('title','Tarifs')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Tarifs</h2>

    <table>
        <thead>
            <tr>
                <th>Abonnement</th>
                <th>Tarifs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>adhésion annuelle à l'associtation</td>
                <td>15€</td>
            </tr>
            <tr>
                <td>la séance</td>
                <td>10€</td>
            </tr>
            <tr>
                <td>le carnet de 10 séances</td>
                <td>90€</td>
            </tr>
            <tr>
                <td>abonnement mensuel illimité sans cours</td>
                <td>30€</td>
            </tr>
            <tr>
                <td>abonnement mensuel illimité avec cours</td>
                <td>60€</td>
            </tr>
        </tbody>
    </table>

</body>
</html>




@endsection