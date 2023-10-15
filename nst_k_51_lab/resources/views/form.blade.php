<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
<h1>Dane użytkownika</h1>
<p><strong>Imię:</strong> {{ $data['firstName'] }}</p>
<p><strong>Adres email:</strong> {{ $data['email'] }}</p>
<p><strong>Hasło: Tajne :) </strong> {{ $data['password'] }}</p>
<p><strong>Płeć:</strong>
    @if($data['gender'] == 'male')
        Mężczyzna
    @elseif($data['gender'] == 'female')
        Kobieta
    @endif
</p>

</body>
</html>
