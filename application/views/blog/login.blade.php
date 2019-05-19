@extends('layout.fokus')
@section('isi fokus')
	@if($pesan == 'error')
		<div class="alert alert-danger">Maaf, username dan password salah</div>
	@endif
	<form action="{{ base_url() }}index.php/blog/login_do" method="post">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Masuk" class="btn btn-default">
		</div>
	</form>
@endsection