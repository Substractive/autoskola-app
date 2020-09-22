<!-- Navigation -->
<div class="navbar navbar-expand-md bsnav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src=" {{ asset('img/logo.png')}}" style="width: 65%;">
        </a>
        <button class="navbar-toggler toggler-spin"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-sm-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item"><a class="nav-link" href="{{  route('landing') }} }}/#" data-smoothie>Naslovna</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}/#why-choose" data-smoothie>O nama</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}/#pricing" data-smoothie>Cjenik</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}/#contact" data-smoothie>Kontakt</a></li>
                <!-- if not user -->
                @if(!Auth::user())
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Ispiti</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Prijava</a></li>
                @endif
               <!-- if not user -->

                <!-- if user -->
                @if(Auth::user())
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Ispiti</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link">Odjava</a></li>
                @endif
                <!-- if user -->

                <a class="mob-btn-nav d-md-none" href="#" role="button" style="margin-bottom: 15px; margin-top: 15px;">
                    <i class="fab fa-apple"></i>
                    Apple IOS
                </a>

                <a class="mob-btn-nav d-md-none" href="#" role="button">
                    <i class="fab fa-android"></i>
                    Android
                </a>
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".navbar-toggler").click(function () {
            $(".nav-link").click(function () {
                $(".bsnav-mobile").removeClass("in");
                $(".navbar-toggler").removeClass("active");
            });
        });
    });
</script>
