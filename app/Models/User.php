<body>
    <h1>Data User</h1>
    <a href="/user/tambah">+ Tambah User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Kode Level</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $->user_id }}</td>
            <td>{{ $->usernamae }}</td>
            <td>{{ $->nama }}</td>
            <td>{{ $->level_id }}</td>
            <td>{{ $->level->level_kode }}</td> 
            <td>{{ $->level->level_nama}}</td>
            <td><a href="/user/ubah/{{ $d->user_id" }}>Ubah</a> | <a href="/user/hapus/{{ $d->user_id" }}>Hapus</a> </td>
        </tr>
        @endforeach
    </table>
</body>
