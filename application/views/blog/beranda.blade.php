@extends('layout.blog')
@section('isi blog')
	@foreach($data as $data)
		<a href="{{ base_url() }}index.php/blog/detail/{{ $data->slug }}" class="postingan">
			<div class="panel @if($data->publish == 'on') panel-default @else panel-warning @endif">
				<div class="panel-heading">{{ $data->judul }}</div>
				<div class="panel-body">
					@if($data->gambar)
						<p><img src="{{ $data->gambar }}" class="full"></p>
					@endif
					<div class="truncate">{{ $data->isi }}</div>
				</div>
			</div>
		</a>
	@endforeach
	{!! $halaman !!}
@endsection