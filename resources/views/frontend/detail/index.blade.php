@extends('frontend.includes.layout')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <h5 class="font-weight-bold"> Details Wisata </h5> 
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $data->nama }}</h1>
                            <p>
                                {{ $data->kabupaten }}
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ $data->galleries[0]->Photo }} " class="xzoom img-thumbnail" id="xzoom-default"
                                        xoriginal="{{ $data->galleries[0]->Photo }} ">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($data->galleries as $item)
                                         <a href="{{ url('frontend/frontend/images/details.jpg') }}">
                                        <img src="{{ url($item -> Photo) }}" class="xzoom-gallery rounded"
                                            width="128" height="128" xpreview="{{ url('frontend/frontend/images/details.jpg') }}">
                                    </a>  
                                    @endforeach
                                </div>
                            </div>
                            <h2 class="font-weight-bold mt-4">Tentang Wisata</h2>
                            <p class="text-justify">
                                {{ $data->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <iframe src="{{ $data->location }}" width="300" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="join-container">
                            <a href="{{ $data->locationmaps }}" class="btn btn-block btn-join-now mt-3 py-2"
                                target="_blank">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="section-footer mt-5 mb-4 border-top pb-4">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2021 Copyright Is Azizah Indri . Jakarta
                </div>
            </div>
        </div>
    </footer>

@endsection
