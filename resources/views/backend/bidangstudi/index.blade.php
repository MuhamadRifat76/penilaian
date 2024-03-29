@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                        <center>                                    	                                
                            <a href="{{ route('bidangstudi.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                     <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                            <tr>

                                
                                <th>Kode</th>
                                <th>Nama</th>
                                
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-bidangstudi">
                                @foreach ($bidangstudi as $data)
                                <tr>
                                
                                    <td>{{$data->bidang_kode}}</td>
                                    <td>{{$data->bidang_nama}}</td>
                                    
                                   
                                    <td style="text-align: center;">
                                        <form action="{{route('bidangstudi.destroy', $data->id)}}" method="post">
                                            {{csrf_field()}}
                                        <a href="{{route('bidangstudi.edit', $data->id)}}"
                                            class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                        </a>
                                        <a href="{{route('bidangstudi.show', $data->id)}}"
                                                class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> show
                                            </a>

                                        <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @endsection