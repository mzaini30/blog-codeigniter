@extends('layout.fokus')
@section('isi fokus')
	<form action="{{ base_url() }}index.php/admin/ganti_do" method="post">
		<div class="form-group">
			<label for="">Ganti Username</label>
			<input type="text" class="form-control" value="{{ $data->username }}" name="username">
		</div>
		<div class="form-group">
			<label for="">Ganti Password</label>
			<input type="text" value="{{ $data->password }}" class="form-control" name="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Ubah" class="btn btn-default">
		</div>
	</form>
@endsection