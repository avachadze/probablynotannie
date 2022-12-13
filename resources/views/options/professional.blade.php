@extends('layouts/app')

@section('section')
<title>Profesional</title>
<div class="cv">
    <div class="cajaPrincipal">
        <div class="right">
            <img class="imagen" src="logo/costado/logo_costado_trazo_blanco.png" alt="Annie">
        </div>
        <div class="info">
            <div class="col-md-3 col-12 cajaInfo caja1">
                <h1>
                    Desarrollo de aplicaciones web - Zubiri Manteo
                </h1>
            </div>
            <div class="col-md-3 col-12 cajaInfo caja2">
                <div class="content">
                    <h2>Annie</h2>
                    <h2>Annie</h2>
                </div>
                <br>

            </div>
            <div class="col-md-3 col-12 cajaInfo caja3">
                <ul>

                    <li class="socialLinks">
                        <i class="fa-brands fa-instagram" style="font-size: 2.5rem;"></i>
                        <span class="social">
                            Probablynotannie
                        </span>
                    </li>

                    <li class="mt-1">
                        <i class="fa-brands fa-discord" style="font-size: 2rem;"></i>
                        <span class="social">
                            Annie#51622
                        </span>
                    </li>
                    <li class="socialLinks">
                        <i class="fa-regular fa-envelope" style="font-size: 2rem;"></i>
                        <span class="social">
                            Probablynotannie@gmail.com
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="footer">
        <nav class="footerMenu">
            <ul class="menuCV">
                <a class="pr-3 " href="">
                    <li class="opcion selected"><i class="fa-solid fa-user"></i></li>
                </a>
                <a class="pr-3 " href="">
                    <li class="opcion "><i class="fa-solid fa-code"></i></i></li>
                </a>
                <a class="pr-3 " href="">
                    <li class="opcion "><i class="fa-solid fa-briefcase "></i></li>
                </a>
                <a href="">
                    <li class="opcion "><i class="fa-solid fa-globe"></i></li>
                </a>
            </ul>
        </nav>
    </footer>
</div>
<script>

    function disableClick() {
        document.onclick = function (event) {
            if (event.button == 2) {
                alert('Right Click Message');
                return false;
            }
        }
    }
    disableClick();
    const element = document.querySelector('.imagen2');
    element.classList.add('animate__animated', 'animate__bounceOutLeft');
</script>

@endsection