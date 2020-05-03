<html>
    <body>
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" name="name"><br>
            {{$errors->first('name')}}<br>
            <label>Umur</label>
            <input type="number" name="age"><br>
            {{$errors->first('age')}}<br>
            <label>Alamat</label>
            <textarea name="address"></textarea><br>
            {{$errors->first('address')}}<br>
            <label>Tanggal Masuk</label>
            <input type="date" name="date_in"><br>
            {{$errors->first('date_in')}}<br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>
