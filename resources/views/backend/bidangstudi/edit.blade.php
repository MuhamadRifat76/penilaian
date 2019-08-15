@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">edit bidangstudi</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('bidangstudi.update', $bidangstudi->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">kode</label>
                                <input class="form-control" type="text" name="bidang_kode" id="" value="{{$bidangstudi->bidang_kode}}">
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="bidang_nama" id="" value="{{$bidangstudi->bidang_nama}}">
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
