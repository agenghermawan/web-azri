<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AyokeJawaTengah</title>
    @include('frontend.includes.style')
    <style>


    </style>
</head>

<body>


    <!-- navbar -->

    @include('frontend.includes.navbar')

    <!-- header -->

    <header class="text-center">
        <h1>Explore the Beautiful Central Java,
            <br>
            Feel the Experience and Beautiful Moments
        </h1>
   
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $takesejarahcount }}</h2>
                    <p>Wisata Sejarah</p>
                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $takealamcount }}</h2>
                     <p>Wisata Alam</p>

                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $takekeluargacount }}</h2>
                     <p>Wisata Alam</p>

                </div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $takekulinercount }}</h2>
                <p>Wisata Alam</p>

                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Pilihan</h2>
                        <p>
                            Sesuatu yang belum anda kunjungi sebelumnya
                            <br>
                            Wisata Pilihan terbaik yang kami rekomendasikan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($takealam as $item)
                        <a href="{{ route('detail',$item->id) }}">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column rounded"
                                    style="background-image: url('{{ url($item->galleries[0]->Photo) }} ');">
                                    <div class="travel-location">{{ $item->kabupaten }}</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{ route('detail',$item->id) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @foreach ($takesejarah as $item)
                        <a href="{{ route('detail',$item->id) }}">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column rounded"
                                    style="background-image: url('{{ url($item->galleries[0]->Photo) }} ');">
                                    <div class="travel-location">{{ $item->kabupaten }}</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{ route('detail',$item->id) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>

                        @endforeach
                        @foreach ($takekuliner as $item)
                        <a href="{{ route('detail',$item->id) }}">

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column rounded"
                                    style="background-image: url('{{ url($item->galleries[0]->Photo) }} ');">
                                    <div class="travel-location">{{ $item->kabupaten }}</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{ route('detail',$item->id) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>

                        @endforeach
                        @foreach ($takekeluarga as $item)
                        <a href="{{ route('detail',$item->id) }}">

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column rounded"
                                    style="background-image: url('{{ url($item->galleries[0]->Photo) }} ');">
                                    <div class="travel-location">{{ $item->kabupaten }}</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{ route('detail',$item->id) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>

                        @endforeach
                    </div>
                </div>
            </section>

        </div>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Jawa Tengah </h2>
                        <p>
                            Jawa Tengah adalah sebuah provinsi Indonesia yang terletak di bagian tengah Pulau Jawa.
                            Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra Hindia dan
                            Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di
                            sebelah utara.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container mx-auto">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center"> Pilihan Kami Untukmu </h2>
                        <section>
                            <div class="col-lg-12">
                                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 rounded img-thumbnail" style="height: 600px"
                                                src="{{ asset('frontend/frontend/images/sewu.jpg') }}"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded img-thumbnail" style="height: 600px"
                                                src="{{ asset('frontend/frontend/images/borobudur.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded img-thumbnail" style="height: 600px"
                                                src=" {{ asset('frontend/frontend/images/umbulponggok.jpg') }}"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="row mt-5">
                                    @foreach ($takesejarah as $item)
                                    <a href="{{ route('detail',$item->id) }}">
                                        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up"
                                        data-aos-delay="100" data-aos-offset="0">
                                        <img src="{{ url($item->galleries[0]->Photo) }}" class="img-thumbnail"
                                            style="width: 300px;height:220px">
                                        <div class="caption text-center">
                                            <p>Wisata Sejarah</p>
                                        </div>
                                    </a>
                                    </div>
                                    @endforeach
                                    @foreach ($takealam as $item)
                                    <a href="{{ route('detail',$item->id) }}">
                                        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-offset="0">
                                        <img src="{{ url($item->galleries[0]->Photo) }}" class="img-thumbnail"
                                            style="width: 300px;height:220px">
                                        <div class="caption text-center">
                                            <p>Wisata Alam</p>
                                        </div>
                                    </a>
                                    </div>
                                    @endforeach
                                    @foreach ($takekeluarga as $item)
                                    <a href="{{ route('detail',$item->id) }}">
                                        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up"
                                        data-aos-delay="300" data-aos-offset="0">
                                        <img src="{{ url($item->galleries[0]->Photo) }}" class="img-thumbnail"
                                            style="width: 300px;height:220px">
                                        <div class="caption text-center">
                                            <p>Wisata Keluarga</p>
                                        </div>
                                    </a>
                                    </div>
                                    @endforeach
                                    @foreach ($takekuliner as $item)
                                     <a href="{{ route('detail',$item->id) }}">
                                    <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up"
                                    data-aos-delay="400" data-aos-offset="0">
                                    <img src="{{ url($item->galleries[0]->Photo) }}" class="img-thumbnail"
                                        style="width: 300px;height:220px">
                                    <div class="caption text-center">
                                        <p>Wisata Kuliner</p>
                                    </div>
                                </a>
                                </div>
                                    @endforeach
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-4" style="background-color: lightgrey">
            <div class="container content">
                <div class="text-center">
                    <h4 class="font-weight-bold"> Pilihan Destinasi Seru Untuk Perjalananmu
                    </h4>
                    <p>
                        Kunjungi tempat-tempat ini minimal sekali seumur hidup.
                    </p>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        @php
                            $data = 100
                        @endphp
                        @foreach ($take6 as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-up" data-aos-delay="{{ $data += 100 }}">
                                <a class="itemfortake6" href="{{ route('detail',$item->id) }}">
                                    <img class="card-img-top" src="{{ url($item->galleries[0]->Photo) }}" width="220px"
                                        height="220px" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $item->nama }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>

    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <table class="h-100">
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <h3 class="text-upper font-weight-bold">Ayokejawatengah</h3>
                                    Menyediakan informasi pariwisata di Jawa Tengah yang terdapat di wilayah Brebes,
                                    Tegal,
                                    Pekalongan,
                                    Pemalang, Jepara, Semarang, Pati dan Klaten. Informasi wisata yang kami sediakan
                                    meliputi wisata
                                    sejarah, wisata alam, wisata kuliner dan wisata keluarga.
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend/frontend/images/kontak.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="section-footer mt-5 mb-4 border-top ">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2021 Copyright Is Azizah Indri . Jakarta
                </div>
            </div>
        </div>
    </footer>
    @include('frontend.includes.script')
</body>

</html>
