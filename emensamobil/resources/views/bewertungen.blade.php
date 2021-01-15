<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('bewertung.css')}}">
    <title>Bewertung</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <th>gericht id</th>
                <th>bewertung</th>
                <th>bemerkung</th>

                @foreach($bewertungen as $row)
                    <tr>
                    <td>{{$row->gerichtid}}</td>
                    <td>{{$row->sterne}}</td>
                    <td>{{$row->bemerkung}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">
            <a href="/">zurück</a>
        </div>
    </div>
</body>
</html>
