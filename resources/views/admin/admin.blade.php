<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
</head>
<body>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="no_hp" placeholder="Masukan Nomor hp" value="{{ old('no_hp') }}"><br>
    <input type="text" name="alamat" placeholder="Masukan alamat anda" value="{{ old('alamat') }}"><br>
    <select name="role">
        <option value="">Select Role</option>
        <option value="super_admin">Super Admin</option>
        <option value="kasir">Kasir</option>
    </select><br><br>
    <button type="submit">Kirim</button>
    <a href="/"><button type="button">Add User Page</button></a>
    <a href="/contact/create"><button type="button">Add Contact Page</button></a>
</form>

</body>
</html>

