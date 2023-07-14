@extends('layouts.default')
@section('title','CREATE Listing Barang ')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		     <div>
           <h1><i class="fas fa-inbox text-white my-3">CREATE</i></h1>  
				<h5 class="text-white op-7 mb-2"></h5>
			</div> 
			<!-- <div class="ml-md-auto py-2 py-md-0">
			 <a href="#" class="btn btn-white btn-border btn-round mr-2"></a>
				<a href="#" class="btn btn-secondary btn-round"></A>
			</div> -->
		</div>
        {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-primary">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                           </div>
               @endif
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Barang</div>
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
                        <a href="#">Barang</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">create</a>
                    </li>
                </ul>
                        <a href="{{route('barang.index')}}"class="btn btn-primary btn-sm ml-auto"> BACK  TO INDEX</a>
					</div>
				</div>
				<div class="card-body">
                        <div class="table-responsive">
                                <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                        <input type="text" class="form-control " name="nama_barang"id="text" placeholder="Nama Barang"required>
                                    </div>
                                    <div class="form-group">
                                    <label for="kode">Kode Barang </label>
                                        <input type="text" class="form-control" id="text"name="kode_barang" placeholder="Kode Barang" required>
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="editor1" name="description" required></textarea>
                                    </div>
                                        <div class="form-group">
                                        <label for="tujuan">Stok Barang</label>
                                        <input type="text" class="form-control" id="number"name="stok_barang" placeholder="masukan asal surat" required>
                                      </div>
                               
                                    </div>
                                        <div class="form-group">
                                        <label for="hal">Harga Barang</label>
                                        <input type="text" class="form-control" id="text"name="harga_barang" placeholder="Harga Barang" required>
                                      </div>
                              
                                   
                                  
                                  <div class="form-group">
                                     <label for="status">status</label>
                                        <select class="form-control" name="is_active">
                                            <option value="1">publish</option>
                                            <option value="0">draft</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group">
                                  <button type="submit"class="btn btn-primary  btn-sm ">save</button>
                                  <button type="reset"class="btn btn-danger  btn-sm ">reset</button>
                          </div>
                  </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



