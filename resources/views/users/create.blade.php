@extends('frontend.layouts.app')

@section('content')
<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">

    @csrf

<label for="name">Name</label>
<input class="form-control" placeholder="Full Name" type="text" name="name" id="name"/>
<br>

<label for="email">Email</label>
<input class="form-control" placeholder="email" type="email" name="email" id="email">
<br>

<label for="no_telp">Nomor Telpon</label>
<br>
<input class="form-control" type="text" name="no_telp" id="no_telp">
<br>

<label for="alamat">Alamat Lengkap</label>
<textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
<br>

<label for="foto">Foto</label>
<br>
<input type="file" class="form-control" id="foto" name="foto">
<hr class="my-3">

<label for="password">Password</label>
 <input
 class="form-control"
 placeholder="password"
 type="password"
 name="password"
 id="password"/>
 <br>

 <label for="password_confirmation">Password Confirmation</label>
 <input
 class="form-control"
 placeholder="password confirmation"
 type="password"
 name="password_confirmation"
 id="password_confirmation"/>
 <br>

 <input type="submit" class="btn btn-primary" value="SIMPAN DATA">

</form>
@endsection