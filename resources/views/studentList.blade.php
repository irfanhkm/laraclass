<html>
    <body>
        <table>
            <a class="btn" href="{{route('student.create')}}">Create</a>
            <tr>
                <th>No</th><th>Nama</th><th>Umur</th><th>Alamat</th><th>Tanggal Masuk</th><th></th>
            </tr>
            <?php $no = 1;?>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{$no + $key}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->date_in->format('d/F/Y')}}</td>
                <td>
                    <a href="{{route('student.detail', $value->id)}}" class="btn">
                        Detail
                    </a>
                    <br>
                    <a href="{{route('student.delete', $value->id)}}" class="btn"
                       onclick="return confirm('apakah anda yakin menghapus data ini')">
                        Delete
                    </a>
                </td>
            </tr>
                @endforeach()
        </table>
    </body>
</html>
