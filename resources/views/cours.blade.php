@extends('base')

@section('title','Cours')

@section('content')

<h2>Cours</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Tableau de Cours</h2>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Intitulé du Cours</th>
                <th>Horaire</th>
                <th>Salle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lundi 04 Décembre</td>
                <td>Zumba</td>
                <td>19h à 21h</td>
                <td>Salle 201</td>
            </tr>
            <tr>
                <td>Mardi 05 Décembre</td>
                <td>Pilate</td>
                <td>19h30 à 21h30</td>
                <td>Salle 203</td>
            </tr>
            <tr>
                <td>Jeudi 07 Décembre</td>
                <td>Boxe anglaise</td>
                <td>20h à 22h</td>
                <td>Salle 205</td>
            </tr>
            <tr>
                <td>Vendredi 08 Décembre</td>
                <td>Hiit</td>
                <td>20h à 22h</td>
                <td>Salle 205</td>
            </tr>
            <tr>
                <td>Samedi 09 Décembre</td>
                <td>Yoga</td>
                <td>9h à 11h</td>
                <td>Salle 205</td>
            </tr>
        </tbody>
    </table>

</body>
</html>



@endsection
