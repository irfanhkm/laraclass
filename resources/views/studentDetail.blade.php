<html>
    <body>
        <table>
            <tr>
                <td>Nama : </td><td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>Umur : </td><td>{{$data->age}}</td>
            </tr>
            <tr>
                <td>Alamat : </td><td>{{$data->address}}</td>
            </tr>
            <tr>
                <td>Tanggal Masuk : </td><td>{{$data->date_in}}</td>
            </tr>
        </table>
        <a href="{{route('student.edit', $data->id)}}">Update</a>
    </body>
</html>
