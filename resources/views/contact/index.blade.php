<!DOCTYPE html>
<html>
<head>
    <title>Form Contact</title>
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

<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="phone" placeholder="No. HP" value="{{ old('phone') }}"><br>
    <textarea name="message" placeholder="Message">{{ old('message') }}</textarea><br>
    <button type="submit">Kirim</button>
    <a href="/"><button type="button">Ke Halaman User</button></a>
    <a href="/admin/create"><button type="button">Ke Halaman Admin</button></a>
</form>

</body>
</html>

