@extends('_tema.utama')

@section('konten')
<div class="row" style="padding:0 50px">
	<h1 class="text-center">
		Lokasi "{{ $bank->nama }}" 
		@if(Auth::check())
		<a href="{{ route('tambah-lokasi') }}" class="btn btn-default"><i class="glyphicon glyphicon-plus"> Tambah</i></a>
		@endif
	</h1>
	<br/>
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#utama" data-toggle="tab">Cabang Utama</a></li>
			<li><a href="#pembantu" data-toggle="tab">Cabang Pembantu</a></li>
			<li><a href="#atm" data-toggle="tab">ATM</a></li>
		</ul>
		<div class="tab-content">

			<div class="tab-pane active" id="utama">
				<br/>
				@if($utama->count())
					@foreach($utama as $temp)
					<div class="row">
						<div class="col-sm-4">
							@if(!$temp->foto)
								<div class="well text-center" style="color:#333">Tidak Ada Foto</div>
							@else
								<a href="{{ asset('foto') }}/{{ $temp->foto }}">
									<img src="{{ asset('foto') }}/{{ $temp->foto }}" class="img-responsive">
								</a>
							@endif
							
						</div>
						<div class="col-sm-8">
							<div class="well" style="color:#333">
								<li>Alamat : <strong>{{ $temp->alamat }}</strong></li>
								<li>Telepon : <strong>{{ ($temp->telp) ? $temp->telp : '-' }}</strong></li>
								<li>Website : <strong>{{ ($temp->website) ? $temp->website : '-' }}</strong></li>
								<br/>
								<p>
									<a href="{{ route('ubah', $temp->id) }}"><i class="glyphicon glyphicon-pencil"></i> Ubah</a> | 
									<a href="{{ route('hapus', $temp->id) }}"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
								</p>
							</div>
						</div>
					</div>
					@endforeach	
				@else
					<p>Maaf, lokasi cabang utama belum ada isinya.</p>
				@endif
			</div>

			<div class="tab-pane" id="pembantu">
				<br/>
				@if($pembantu->count())
					@foreach($pembantu as $temp)
					<div class="row">
						<div class="col-sm-4">
							@if(!$temp->foto)
								<div class="well text-center" style="color:#333">Tidak Ada Foto</div>
							@else
								<a href="{{ asset('foto') }}/{{ $temp->foto }}">
									<img src="{{ asset('foto') }}/{{ $temp->foto }}" class="img-responsive">
								</a>
							@endif
							
						</div>
						<div class="col-sm-8">
							<div class="well" style="color:#333">
								<li>Alamat : <strong>{{ $temp->alamat }}</strong></li>
								<li>Telepon : <strong>{{ ($temp->telp) ? $temp->telp : '-' }}</strong></li>
								<li>Website : <strong>{{ ($temp->website) ? $temp->website : '-' }}</strong></li>
								<br/>
								<p>
									<a href="{{ route('ubah', $temp->id) }}"><i class="glyphicon glyphicon-pencil"></i> Ubah</a> | 
									<a href="{{ route('hapus', $temp->id) }}"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
								</p>
							</div>
						</div>
					</div>
					@endforeach	
				@else
					<p>Maaf, lokasi cabang pembantu belum ada isinya.</p>
				@endif
			</div>

			<div class="tab-pane" id="atm">
				<br/>
				@if($atm->count())
					@foreach($atm as $temp)
					<div class="row">
						<div class="col-sm-4">
							@if(!$temp->foto)
								<div class="well text-center" style="color:#333">Tidak Ada Foto</div>
							@else
								<a href="{{ asset('foto') }}/{{ $temp->foto }}">
									<img src="{{ asset('foto') }}/{{ $temp->foto }}" class="img-responsive">
								</a>
							@endif
							
						</div>
						<div class="col-sm-8">
							<div class="well" style="color:#333">
								<li>Alamat : <strong>{{ $temp->alamat }}</strong></li>
								<li>Telepon : <strong>{{ ($temp->telp) ? $temp->telp : '-' }}</strong></li>
								<li>Website : <strong>{{ ($temp->website) ? $temp->website : '-' }}</strong></li>
								<br/>
								@if(Auth::check())
								<p>
									<a href="{{ route('ubah', $temp->id) }}"><i class="glyphicon glyphicon-pencil"></i> Ubah</a> | 
									<a href="{{ route('hapus', $temp->id) }}" onclick="return confirm('Yakin akan menghapus informasi ini?')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
								</p>
								@endif
							</div>
						</div>
					</div>
					@endforeach	
				@else
					<p>Maaf, lokasi ATM belum ada isinya.</p>
				@endif
			</div>

		</div>
	</div>
</div>	
@stop
