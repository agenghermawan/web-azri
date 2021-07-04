    <div class="row button-details mx-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="Brebes">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/brebes.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Brebes </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="tegal">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/tegal.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Tegal </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="pekalongan">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/pekalongan.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Pekalongan </a>
                        </button>
                    </form>


                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="semarang">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/semarang.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Semarang </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="demak">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/demak.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Demak </a>
                        </button>
                    </form>


                </div>
                <div class="carousel-item">


                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="klaten">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/klaten.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Klaten </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="magelang">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/magelang.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Magelang </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="jepara">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/jepara.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Jepara </a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="pati">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/pati.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Pati</a>
                        </button>
                    </form>

                    <form action="{{ route('wisatasejarah.details') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="kabupaten" value="pemalang">
                        <button type="submit" class="px-4 text-weight-bold" style="border: none;outline:none;background:none"> <b>
                            </b>
                            <img src="{{ asset('frontend/frontend/images/pemalang.png') }}" width="60px" height="60px"
                            alt="">
                         &nbsp; Pemalang </a>
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
