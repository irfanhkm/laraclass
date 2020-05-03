<html>
    <body>
        <form action="{{route('student.update', $data->id)}}" method="post">
            @method('PUT')
            @csrf
            <label>Nama</label>
            <input type="text" name="name" value="{{$data->name}}"><br>
            {{$errors->first('name')}}<br>
            <label>Umur</label>
            <input type="number" name="age" value="{{$data->age}}"><br>
            {{$errors->first('age')}}<br>
            <label>Alamat</label>
            <textarea name="address">{{$data->address}}</textarea><br>
            {{$errors->first('address')}}<br>
            <label>Tanggal Masuk</label>
            {{$data->date_in->format('m/d/Y')}}
            <input type="date" name="date_in" {{$data->date_in->format('m/d/Y')}}><br>
            {{$errors->first('date_in')}}<br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>
