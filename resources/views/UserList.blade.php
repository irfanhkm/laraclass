<html>
    <body>
        <table>
            <thead>
                <th>No</th><th>Nama</th><th>Umur</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{$no + $key}}</td><td>{{$value->name}}</td><td>{{$value->age}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
