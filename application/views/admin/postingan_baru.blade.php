@extends('layout.editor')
@section('isi fokus')
	<form action="{{ base_url() }}index.php/admin/postingan_baru_do" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="judul">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="isi" id="" class="form-control" cols="30" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label for="">Gambar</label>
			<input type="text" class="form-control" name="gambar">
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="publish">
				Publish?
			</label>
		</div>
		<div class="form-group">
			<input type="submit" value="Posting" class="btn btn-default">
		</div>
	</form>
@endsection