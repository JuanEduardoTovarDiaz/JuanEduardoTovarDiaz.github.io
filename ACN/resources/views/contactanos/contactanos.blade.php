@extends('layouts.plantilla')

@section('title', 'ACN | Contactanos')

@section('content')

    <!-- ---  BANNER CONTÁCTANOS  --- -->
    <div class="jumbotron jumbotron-fluid contactanos_banner" style="padding: 9% 0% 9% 0%">
        <div class="container">
            <h1 class="display-4 text-center jt-text jt-text-title"><span>CONTÁCTANOS</span></h1>
            <p class="lead text-center jt-text"><span>Asesores Contables Narváez S.C.</span></p>
        </div>
    </div>

    <!-- --- DATOS DEL LOCAL --- -->
    <div class="row d-flex align-items-center justify-content-center text-center ml-4 mr-4 mb-4 mt-3">

        <!-- UBICACIÓN -->
        <div class="col-lg-3 col-md-12 mt-4">
            <p>
                <i class="fa fa-map-marker iconContactanos"></i> <br>
                <b style="font-size: 25px;"> Ubicación </b> <br>
                Emiliano P. Nafarrete #150 <br>
                Zona Centro, 87000 <br>
                Ciudad Victoria, Tamaulipas.
            </p>
        </div>

        <!-- TELÉFONO -->
        <div class="col-lg-3 col-md-12 mt-4">
            <p>
                <i class="fa fa-phone-square iconContactanos"></i> <br>
                <b style="font-size: 25px;"> Teléfono </b> <br>
                + 52 834 312 99 80 <br>
                + 52 834 312 38 60 <br>
                + 52 442 324 08 84 <br>
                <i class="fa fa-whatsapp iconsfooter mt-3"></i> 834 165 91 22
            </p>
        </div>

        <!-- CORREO ELECTRÓNICO -->
        <div class="col-lg-3 col-md-12 mt-4">
            <p>
                <i class="fa fa-envelope iconContactanos"></i> <br>
                <b style="font-size: 25px;"> Correo Electrónico </b> <br>
                direccion1@asesoresnarvaez.com
            </p>
        </div>

        <!-- DISPONIBILIDAD -->
        <div class="col-lg-3 col-md-12 mt-4">
            <p>
                <i class="fa fa-clock-o iconContactanos"></i> <br>
                <b style="font-size: 25px;"> Disponibilidad </b> <br>
                Lunes a Viernes: 9:00 a 18:00 <br>
                Sábados: 9:00 a 14:00
            </p>
        </div>
    </div>

    <!-- --- EQUIPO DE TRABAJO --- -->
    <div class="col-lg-12 col-md-12 align-items-center justify-content-center text-center mt-3 mb-5 bolsaTrabajo">
        <div class="col-lg-12 col-md-12 back">
            <h2 class="text-uppercase mb-3" style="font-weight: bold;">
                ¿Quieres ser parte de nuestro equipo de trabajo?
            </h2>
            <h3 class="mb-4">
                Envíanos tu currículo al correo:
            </h3>
            <u style="color:#CCFF33">
                cv@asesoresnarvaez.com
            </u>
            <div id="registrate"></div>
        </div>
    </div>

    <!-- --- FORMULARIO 
    <div class="card ml-5 mr-5">
        <div class="card-header w-100 h5" style="background-color: #003300; color:white;">
            ¡Nuestro equipo se pondrá en contacto contigo!
        </div>
        <div class="row no-gutters ">
            <div class="col mt-3 ml-5">
                <form action="../resources/php/enviar.php" method="POST">
                    <div class="gridIn">
                        <label for="nombre" class="form-label">Nombre <span>*</span></label>
                        <label for="nombre" class="form-label">Apellidos <span>*</span></label>

                        <input type="text" name="nombre" id="nombre" class="form-control estiloInput" placeholder="Nombre">
                        <input type="text" name="apellido" id="apellido" class="form-control estiloInput" placeholder="Apellido">

                        <label for="nombre" class="form-label">Email <span>*</span></label>
                        <label for="nombre" class="form-label">Confirmar Email <span>*</span></label>

                        <input type="email" name="email" id="email" class="form-control estiloInput" placeholder="Email">
                        <input type="email" name="emailConfirmacion" id="emailConfirmacion" class="form-control estiloInput"
                            placeholder="Confirmar Email">
                    </div>

                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control estiloInput" placeholder="(Lada)"
                        style="width: 90%;">

                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" name="empresa" id="empresa" class="form-control estiloInput" placeholder="Empresa"
                        style="width: 90%;">

                    <label for="empresa" class="form-label text-left">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" class="form-control estiloInput" rows="3" style="width: 90%;" placeholder="Escriba su mensaje..."></textarea>

                    <div class="text-center mb-2" style="width:90%;">
                        <button type="submit" id="btnConfirmacion" class="btn btn-success btn-lg justify-content-center" style="height:3rem;">
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-5">
                <img src="../resources/images/Contactanos/contactoMessage.jpg" class="card-img" alt="" style="width: 100%;"
                    height="100%">
            </div>
        </div>
    </div -->

    <!-- --- FORMULARIO --- -->
    <div class="card ml-5 mr-5">
        <div class="card-header w-100 h5" style="background-color: #003300; color:white;">
            ¡Nuestro equipo se pondrá en contacto contigo!
        </div>
        <div class="row d-flex no-gutters formContact">
            <div class="col-lg-7 col-md-12 mt-3">
                

                <form id="form" action="#" method="POST"> <!-- ../resources/php/enviar.php -->
                    
                    <div class="gridIn">
                        <label for="nombre" class="form-label">Nombre <span>*</span></label>
                        <label for="nombre" class="form-label">Apellidos <span>*</span></label>

                        
                        <input type="text" name="nombre" id="nombre" class="form-control estiloInput" placeholder="Nombre">
                        <input type="text" name="apellido" id="apellido" class="form-control estiloInput" placeholder="Apellido">

                        
                        <label for="nombre" class="form-label">Email <span>*</span></label>
                        <label for="nombre" class="form-label">Confirmar Email <span>*</span></label>

                        
                        <input type="email" name="email" id="email" class="form-control estiloInput" placeholder="Email">
                        <input type="email" name="emailConfirmacion" id="emailConfirmacion" class="form-control estiloInput"
                            placeholder="Confirmar Email">
                    </div>

                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control estiloInput" placeholder="(Lada)"
                        style="width: 90%;">

                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" name="empresa" id="empresa" class="form-control estiloInput" placeholder="Empresa"
                        style="width: 90%;">

                    <label for="empresa" class="form-label text-left">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" class="form-control estiloInput" rows="3" style="width: 90%;" placeholder="Escriba su mensaje..."></textarea>

                    <div class="text-center mb-2" style="width:90%;">
                        <button 
                            type="submit" 
                            id="btnConfirmacion" 
                            class="btn btn-success btn-lg justify-content-center" 
                            style="height:3rem;"  
                            onclick = "validar();" >
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="../resources/images/Contactanos/contactoMessage.jpg" class="card-img" alt="" style="width: 100%;"
                    height="100%">
            </div>
        </div>
    </div>

    <!-- --- GOOGLE MAPS UBICACIÓN Y NUESTRAS REDES --- -->
    <div class="col-lg-12 col-md-12 align-items-center justify-content-center text-center">
        <h4 class="text-left font-weight-bold ml-5 mt-4 mb-3" style="color: #003300;">Puedes encontrarnos en</h4>
        <iframe class=" border border-dark rounded"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237.59852659693928!2d-99.15005655195897!3d23.73132960145878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8679530193545061%3A0x29be90fe67da5b1!2sEmiliano%20P.%20Nafarrete%2C%20Zona%20Centro%2C%2087000%20Cd%20Victoria%2C%20Tamps.!5e0!3m2!1ses!2smx!4v1617303222148!5m2!1ses!2smx"
            width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
        <h4 class="mt-3 mb-3" style="color: #003300;">
            ¡Siguenos en redes sociales!
            <i class="fa fa-facebook-square" style="color: #3B5998;"></i>
            <i class="fa fa-twitter-square" style="color: #00ACEE;"></i>
            <i class="fab fa-instagram-square"
                style="background: radial-gradient(circle at 20% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
        </h4>
    </div>

@endsection()
