
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah bidangstudi</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('bidangstudi.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="bidang_kode" id="">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="bidang_nama" id="">
                            </div>
                            
                        
                              
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 