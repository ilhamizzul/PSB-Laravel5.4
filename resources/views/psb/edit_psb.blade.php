@extends('layout.app')

@section('content')
	<br>
<div class="col-lg-8 col-lg-offset-2">
  @include('psb.partials.errors')
<form class="form-horizontal" action="/psb/{{$item->id}}" method="post">
  {{method_field('PUT')}}
	{{csrf_field()}}
  <fieldset>
    <legend>
    	Edit Data Siswa {{$item->nama}}
    	<a href="/psb" class="btn btn-info pull-right">Kembali</a>
    </legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Nama Siswa</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama" value="{{$item->nama}}" placeholder="Nama Siswa">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">No. Induk</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" value="{{$item->no_induk}}" name="no_induk" placeholder="Nomor Induk">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Nama Ayah</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nm_ayah" value="{{$item->nm_ayah}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Nama Ibu</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nm_ibu" value="{{$item->nm_ibu}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Tanggal Lahir</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="TTL" value="{{$item->TTL}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Asal SMP</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="asal_smp" value="{{$item->asal_smp}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Bidang Minat</label>
      <div class="col-lg-10">
        <select class="form-control" value="{{$item->minat}}" name="minat" id="minat">
          <option>--> Bidang Minat <--</option>
          <option value="RPL">RPL</option>
          <option value="TKJ">TKJ</option>
          <option value="Multimedia">Multimedia</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Jenis Kelamin</label>
      <div class="col-lg-10">
        <select class="form-control" value="{{$item->jenkel}}" name="jenkel" id="jenkel">
          <option>--> Jenis Kelamin <--</option>
          <option name="jenkel" value="Laki-Laki">Laki - Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="{{$item->email}}" name="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" {{$item->alamat}} name="alamat" placeholder="Alamat">{{$item->alamat}}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
@endsection