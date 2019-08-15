@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('dokter.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
							<label class="control-label col-lg-4">Kode Dokter</label>
							<div class="col-lg-4">
								<input type="text" name="kode_dokter" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Nama Dokter</label>
						<div class="col-lg-2">
						<input type="text" class="form-control" name="nama_dokter" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Spesialis</label>
							<div class="col-lg-4">
								<input type="text" required name="spesialis" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Alamat Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="Alamat_dokter" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Telepon Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="tlp_dokter" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_klinik" class="form-control" />
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="control-label col-lg-4">Taris</label>
							<div class="col-lg-4">
								<input type="text" required name="Tarif" class="form-control" />
							</div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('dokter.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
  	
</body>
</html>
©
@endsection