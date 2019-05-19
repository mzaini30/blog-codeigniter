@extends('layout.default')
@section('isi')
	<div class="row">
		<div class="col-sm-8 theia">
			@yield('isi blog')
		</div>
		<div class="col-sm-4 theia">
			<form action="{{ base_url() }}index.php/blog/cari" method="get">
				<div class="form-group">
					<label for="">Cari</label>
					<input type="text" class="form-control" name="cari" required="">
				</div>
			</form>
			@yield('sidebar')
			<div class="panel panel-warning">
				<div class="panel-heading">Admin</div>
				<div class="list-group">
					@if($status != 'login')
						<a href="{{ base_url() }}index.php/blog/login" class="list-group-item">Login</a>
					@endif
					@if($status == 'login')
						<a href="{{ base_url() }}index.php/admin/postingan_baru" class="list-group-item">Postingan Baru</a>
						<a href="{{ base_url() }}index.php/admin/ganti_username_dan_password" class="list-group-item">Ganti Username dan Password</a>
						<a href="{{ base_url() }}index.php/blog/logout" class="list-group-item">Logout</a>
					@endif
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Komentar Terbaru</div>
				<div class="list-group">
					@foreach($data_komentar as $data_komentar)
						<a href="{{ base_url() }}index.php/blog/detail/{{ $data_komentar->slug }}#{{ $data_komentar->slug_komentar }}" class="list-group-item truncate">{{ $data_komentar->nama }} : {{ $data_komentar->komentar_plain }}</a>
					@endforeach
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Tulisan Lainnya</div>
				<div class="list-group">
					@foreach($acak as $acak)
						<a href="{{ base_url() }}index.php/blog/detail/{{ $acak->slug }}" class="list-group-item">{{ $acak->judul }}</a>
					@endforeach
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Minat Netizen</div>
				<div class="list-group">
					@foreach($minat as $minat)
						<a href="{{ base_url() }}index.php/blog/cari?cari={{ $minat->cari }}" class="list-group-item">{{ $minat->cari }}</a>
					@endforeach
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-body panel-detail">
					<p>Website ini <strong>tidak</strong> dibuat dengan Wordpress, melainkan dengan kode buatan sendiri <small>(lebih tepatnya sih Codeigniter + Blade)</small>.</p>
					<p>Ingin dibuatkan website juga untuk usahamu? Hubungi saya di 081545143654 (Whatsapp only).</p>
				</div>
			</div>
		</div>
	</div>
@endsection