<div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstName}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->birthday}}</td>
            </tr>
         @endforeach
        </tbody>

    </table>
</div>
