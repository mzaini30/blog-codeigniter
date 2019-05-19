@extends('layout.blog')
@section('isi blog')
	<div class="alert alert-success">Hasil pencarian untuk <em>{{ $cari }}</em></div>
	@foreach($data as $data)
		@if(($status == 'login' && $data->publish != 'on') || ($data->publish == 'on'))
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
		@endif
	@endforeach
@endsection