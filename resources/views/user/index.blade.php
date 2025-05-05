<!DOCTYPE html>
<html>
<head>
    <title>Form user</title>
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

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="password"name="password" placeholder="password"><br>
    <input type="password"name="password_confirmation" placeholder="konfirmasi password"><br>
    <button type="submit">Simpan</button>
    <a href="/contact/create"><button type="button">Ke Halaman Contact</button></a>
    <a href="/admin/create"><button type="button">Ke Halaman Admin</button></a>
</form>

</body>
</html>

