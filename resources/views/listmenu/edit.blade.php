@extends('listmenu.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Listmenu</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('listmenu.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Kategori :</strong>
                    <select name="kategori" class="form-control">
                        <option value="">Pilih kategori</option>
                        @foreach ($icon_menus as $obj_icon)
                        <option value="{{ $obj_icon->name }}" {{ $product->icon_name === $obj_icon->name ? 'selected' : '' }}>{{ $obj_icon->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Nama Barang :</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Masukan nama barang">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Harga Beli :</strong>
                    <input type="number" class="form-control" name="hargabeli" value="{{ $product->hargabeli }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Harga Jual :</strong>
                    <input type="number" name="hargajual" class="form-control" value="{{ $product->hargajual }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Stok Barang :</strong>
                    <input step="1" type="number" name="stok" class="integer form-control" placeholder="Masukan jumlah stok barang" value="{{ $product->stok }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Upload Image :</strong>
                    <input type="file" name="image" class="form-control" placeholder="" value="{{ $product->image }}">
                </div>
            </div>
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('listmenu.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
   
    </form>
@endsection