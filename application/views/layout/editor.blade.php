@extends('layout.kosongan')
@section('isi')
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/app/editor.css">
	<div class="container">
		@yield('isi fokus')
	</div>
@endsection