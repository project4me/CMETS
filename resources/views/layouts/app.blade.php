<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'CMETS')</title>

        <!-- App core CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/narrow-jumbotron.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <img src="{{ asset('images/black-ribbon.png') }}" style="position: absolute; top: -1px; left: -1px;">

            <div class="masthead">
                <div class="clearfix" style="padding-top: 10px;">
                    <span class="float-right text-muted" style="font-size: 12px;">
                        @if (Auth::check())
                        ยินดีต้อนรับ <a href="/profile">{{ Auth::user()->name }}</a> |
                        @if (Auth()->user()->role)
                        <a href="/admin/dashboard">Control Panel</a> |
                        @else
                        <a href="/profile">รายการทัวร์</a> |
                        @endif
                        <a href="/signout">ออกจากระบบ</a>
                        @else
                        ยินดีต้อนรับ โปรด<a href="/signin">เข้าสู่ระบบ</a> หรือ <a href="/signup">สมัครสมาชิกใหม่</a>
                        @endif
                    </span>
                </div>
                <div class="logo text-center">
                    <h3 class="text-muted">CM Empress</h3>
                    <small class="text-muted">Travel Service</small>
                </div>

                <!-- <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3"> -->
                <nav class="navbar navbar-expand-md rounded mb-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav text-md-center nav-justified w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">แพคเกจทัวร์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">รับจัดทัวร์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">โปรโมชั่น</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">เกี่ยวกับเรา</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">ติดต่อเรา</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ข้อมูลท่องเที่ยว</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>

            @yield('content')

            <!-- Site footer -->
            <footer class="footer">
                <p>&copy; Company 2017</p>
            </footer>

        </div> <!-- /container -->

        <!-- App core JavaScript -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        @yield('scripts')
    </body>
</html>
