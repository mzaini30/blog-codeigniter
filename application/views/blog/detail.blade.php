@extends('layout.blog')
@section('judul')
	{{ $data->judul }} - 
@endsection
@section('isi blog')
	<div class="panel @if($data->publish == 'on') panel-default @else panel-warning @endif">
		<div class="panel-heading">{{ $data->judul }}</div>
		<div class="panel-body panel-detail">
			@if($data->gambar)
				<p><img src="{{ $data->gambar }}" class="full"></p>
			@endif
			{!! $isi !!}
		</div>
		<div class="panel-footer">
			<small>
				{{ $data->created_at }}
				<br>
				{{ $data->updated_at }}
			</small>
		</div>
	</div>
	@foreach($komentar as $komentar)
		<a href="mailto:{{ $komentar->email }}" id='{{ $komentar->slug_komentar }}' class="postingan">
			<div class="panel panel-primary">
				<div class="panel-heading">{{ $komentar->nama }}</div>
				<div class="panel-body panel-detail">
					{!! $komentar->komentar !!}
				</div>
				<div class="panel-footer">
					<small>{{ $komentar->waktu }}</small>
				</div>
			</div>
		</a>
		@if($status == 'login')
			<p><a href="{{ base_url() }}index.php/admin/hapus_komentar/{{ $komentar->id }}/{{ $data->slug }}" class="btn btn-danger btn-sm">Hapus yang di atas</a></p>
		@endif
	@endforeach
	<div class="panel panel-success">
		<div class="panel-heading">Masukkan Komentar</div>
		<div class="panel-body">
			<form method="post" action="{{ base_url() }}index.php/blog/komentar/{{ $data->slug }}">
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="nama" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" required="" name="email">
				</div>
				<div class="form-group">
					<label for="">Komentar</label>
					<textarea name="komentar" id="" cols="30" class="form-control" rows="10" required=""></textarea>
				</div>
				<input type="submit" value="Kirim Komentar" class="btn btn-success">
			</form>
		</div>
	</div>
@endsection
@section('sidebar')
	@if($status == 'login')
		<div class="panel panel-danger">
			<div class="panel-heading">Postingan</div>
			<div class="list-group">
				<a href="{{ base_url() }}index.php/admin/edit_tulisan/{{ $data->slug }}" class="list-group-item">Edit</a>
				<a href="{{ base_url() }}index.php/admin/hapus_tulisan/{{ $data->slug }}" class="list-group-item">Hapus</a>
			</div>
		</div>
	@endif
@endsection