@extends('layouts.default')
@section('title','Listing Barang')


@section('content')

<div class="">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">List Barang</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">List Barang</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"></a>
							</li>
						</ul>
					</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">List Barang</div>
                        <a href="{{route('barang.create')}}"class="btn btn-primary btn-sm ml-auto">
                        <i class="fa fa-plus"></i>
                                CREATE
                        </a>
					</div>
				</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th  scope="col">id</th>
                                            <th  scope="col">Nama Barang</th>
                                            <th  scope="col">Kode Barang</th>
                                            <th  scope="col">Description </th>
                                            <th  scope="col">Stok Barang</th>
                                            <th  scope="col">Harga Barang </th>
                                           
                                          
                                            <th  scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($barang->count())
                                        @foreach($barang as $b)

                                    
                                        <tr>
                                            <td>{{$b->id}}</td>
                                            <td>{{$b->nama_barang}}</td>
                                            <td>{{$b->kode_barang}}</td>
                                            <td>{!!$b->description!!}</td>
                                            <td>{{$b->stok_barang}}</td>
                                            <td>{{$b->harga_barang}}</td>
                                         <td>
                                            <a href="{{route('barang.edit', $b->id)}}"class="btn btn-link btn-primary"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('barang.destroy', $b->id)}}" method="post" class="d-inline">
                                                    @method('delete')
                                                      @csrf
                                                      <button type="submit"class="btn btn-link btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-times"></i></button>
                                                
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        @endif
                                      
                                    </tbody>
                                </table>
                                <div>
                                   
                               
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



