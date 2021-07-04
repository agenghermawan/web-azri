@extends('frontend.includes.layout')

@section('content')

    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="mb-5 text-center text-uppercase"> <b> Tentang Kami </b></h3>
                <p>
                <h4> <i> <b> Ayokejawatengah </b> </i> </h4>
                <p class="text-justify">
                    Menyediakan informasi pariwisata di Jawa Tengah
                    yang terdapat di wilayah Brebes, Tegal, Pekalongan, Pemalang, Jepara,
                    Semarang, Pati dan Klaten. Informasi wisata yang kami sediakan meliputi
                    wisata sejarah, wisata alam, wisata kuliner dan wisata keluarga.
                </p>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                <div class="container text-center">
                    <img src="{{ asset('frontend/frontend/images/nusa_penida_5.jpg') }}" class="rounded responsive" width="500px" alt="">
                </div>
            </div>
        </div>

    </div>

@endsection

@section('footer')
    <footer class="section-footer mb-4" style="padding-top: 130px">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center ">
                <div class="col-auto text-gray-500 font-weight-light">
                    2021 Copyright Is Azizah Indri . Jakarta
                </div>
            </div>
        </div>
    </footer>

@endsection
