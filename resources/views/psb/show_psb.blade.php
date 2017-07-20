@extends('layout.app')

@section('content')
	<br>
<div class="col-lg-8 col-lg-offset-2">
  
<form class="form-horizontal" action="/karyawan" method="post">
	{{csrf_field()}}
  <fieldset>
    <legend>
      <a href="/psb" class="btn btn-info pull-right">Kembali</a>
      <br>
    	Data Siswa {{$item->nama}}
    </legend>
    <div class="form-group">
      <label class="col-lg-3 control-label">Nama Siswa</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="nama" disabled="" value="{{$item->nama}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">No. Induk</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="noinduk" disabled="" value="{{$item->no_induk}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Nama Ayah</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="nm_ayah" disabled="" value="{{$item->nm_ayah}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Nama Ibu</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="nm_ibu" disabled="" value="{{$item->nm_ibu}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Tanggal Lahir</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="TTL" disabled="" value="{{$item->TTL}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Asal SMP</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="asal_smp" disabled="" value="{{$item->asal_smp}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Bidang Minat</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="minat" disabled="" value="{{$item->minat}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Jenis Kelamin</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="jenkel" disabled="" value="{{$item->jenkel}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="email" disabled="" value="{{$item->email}}">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Alamat</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="3" name="alamat" disabled="" placeholder="Alamat">{{$item->alamat}}</textarea>
      </div>
    </div>
  </fieldset>
</form>
</div>
@endsection