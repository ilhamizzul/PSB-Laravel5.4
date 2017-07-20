@extends('layout.app')

@section('content')
	<br>
	@if(session()->has('message'))
	  <h1 class="alert alert-success" style="text-align:center;">{{session()->get('message')}}</h1>
	@endif
	<div class="col-lg-10 col-lg-offset-1">
	<center><h1>Tabel Siswa Baru</h1></center>
	<a href="/psb/create" class="glyphicon glyphicon-plus btn btn-info pull-right"></a>
	    <table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	    	<th  style="text-align: center;" class="col-lg-1">Nomor</th>
	      	<th>Nama Siswa</th>
	      	<th>No. Induk</th>
	      	<th>Bidang Minat</th>
	      	<th>Jenis Kelamin</th>
	      	<th class="col-lg-2">opsi</th>
	    </tr>
	  </thead>
	  @foreach($psbs as $psb)
	  <tbody>
	  	<tr>
	  		<th style="text-align: center;">{{$loop->index+1}}</th>
	  		<th>{{$psb->nama}}</th>
	  		<th>{{$psb->no_induk}}</th>
	  		<th>{{$psb->minat}}</th>
	  		<th>{{$psb->jenkel}}</th>
	  		<th>
	  			<a href="{{'/psb/'.$psb->id}}" class="glyphicon glyphicon-list-alt btn btn-info col-lg-4"></a>
        		<a href="{{'/psb/'.$psb->id.'/edit/'}}" class="btn btn-success col-lg-4 glyphicon glyphicon-edit"></a>
        		<form action="{{'/psb/'.$psb->id}}" method="post">
        		{{method_field('DELETE')}}
        		{{csrf_field()}}
        		<button type="submit" class="glyphicon glyphicon-trash btn btn-danger col-lg-4"></button>
        		</form>
	  		</th>
	  	</tr>
	  </tbody>
	  @endforeach
	</table>
	<div class="pull-right">{{$psbs->links()}}</div>
	
	</div>
@endsection