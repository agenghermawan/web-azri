@extends('includesbackend.layout')

@section('content')
<div class="card">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <div class="portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="caption uppercase">
                        <b><i class="icon-tag" style="margin-top:2px"></i></b> &nbsp;Detail Wisata 
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered" style="border: 1px solid #DDDDDD">
                                <tr>
                                    <td width="20%">
                                        Nama Wisata
                                    </td>
                                    <td>
                                        {{ $data -> nama }}
                                    </td>

                                </tr>
                                <tr>
                                    <td width="20%">
                                        Kategori
                                    </td>
                                    <td>
                                        {{ $data ->kategori -> kategori }}
                                    </td>

                                </tr>
                                <tr>
                                    <td width="20%">
                                        Kabupaten
                                    </td>
                                    <td>
                                        {{ $data -> kabupaten }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                       Alamat
                                    </td>
                                    <td>
                                        {{ $data -> alamat }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        Deskripsi
                                    </td>
                                    <td>
                                        {{ $data -> deskripsi }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                       Location
                                    </td>
                                    <td>
                                        <iframe src="{{ $data->location }}" width="900px" height="450" style="border:0;"
                                            allowfullscreen="" loading="lazy"></iframe>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        Photos
                                    </td>
                                    <td>
                                        <div class="row" style="height: 200px" >
                                            @foreach ($data->galleries as $item)
                                            <div class="photos" style="margin-right: 50px">
                                                <img src="{{ $item->Photo }}" alt="" class="rounded" width="200px" height="200px" > 
                                            </div>
                                             @endforeach
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
