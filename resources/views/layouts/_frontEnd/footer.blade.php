<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div>

                    @php
                        $setting_toko = DB::table('setting_toko')->first();
                    @endphp

                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="pull-left">
                                    <span class="icon fa-stack fa-lg">
                                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p style="text-align: justify">{{ $setting_toko->alamat }}</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                                    <span class="icon fa-stack fa-lg">
                                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p>{{ $setting_toko->telpon }}</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                                    <span class="icon fa-stack fa-lg">
                                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <span><a href="#">{{ $setting_toko->email }}</a></span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Link Menu</h4>
                    </div>

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="{{ route('dashboard') }}" title="Contact us">Sale</a>
                            </li>
                            <li><a href="{{ route('tentang-kami') }}" title="About us">About Us</a></li>
                            <li><a href="{{ route('cara-belanja') }}" title="Popular Searches">Cara Belanja</a></li>
                            <li><a href="{{ route('kontak') }}" title="faq">Kontak</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Jam Operasional</h4>
                    </div>

                    <div class="module-body">
                        <p><b style="color: white">Senin - Jumat : <span class="badge badge-secondary"> 10:00 - 17:00
                                </span> </b></p>
                        <p><b style="color: white">Sabtu : <span class="badge badge-secondary"> 10.00 - 16.00</span>
                            </b></p>
                        <p><b style="color: white">Minggu & Tanggal Merah : <span
                                    class="badge badge-secondary">Libur</span> </b></p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Sosial Media</h4>
                    </div>
                    <div class="module-body">
                        <a href="https://www.facebook.com/exa.komputer" target="_blank"><img
                                src="{{ asset('temp-front-end/facebook.png') }}" alt="" width="25px"
                                height="25px"></a>
                        &nbsp;
                        <a href="https://www.instagram.com/exa_computer/" target="_blank"><img
                                src="{{ asset('temp-front-end/instagram.png') }}" alt="" width="27px"
                                height="27px"></a>
                        &nbsp;
                        <a href="https://tokopedia.link/dArcKyoAXzb" target="_blank"><img
                                src="{{ asset('temp-front-end/tokopedia.png') }}" alt="" width="27px"
                                height="27px">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
