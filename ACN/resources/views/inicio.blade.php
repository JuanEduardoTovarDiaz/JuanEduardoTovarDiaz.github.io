@extends('layouts.plantilla')

@section('title', 'ACN | Inicio')

@section('content')

    <!-- --- PARALLAX VIDEO --- -->
    <div class="ParaVideo">
        <video autoplay muted loop>
            <source src="https://drive.google.com/uc?export=download&id=1-V33n5229gCEz1EJiylZWwp54LFBH2Wj" type="video/mp4">
        </video>
    </div>

    <!-- ---  BANNER INICIO  --- -->
    <div class="bann">
        <div class="container h-100 mh-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="d-flex text-center bottom-buffer">
                    <img src="../resources/images/logo/LogoACNB.png" width="190" class="d-inline-block align-top"
                        alt="Logo">
                </div>
                <div class="w-100 text-white banncont">
                    <h1 class="display-4"> <b> Asesores Contables Narváez </b></h1>
                    <p class="lead mb-0">
                        Con mas de 25 años de experiencia <br>
                        Servicios contables, fiscales y
                        auditoria en todo México
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- ----  MISIÓN Y VISIÓN  ---- -->
    <div class="bcw">
        <div class="row d-flex align-items-center justify-content-center text-center ml-4 mr-4 misYvis">
            <!-- MISIÓN -->
            <div class="col-lg-6 col-md-12 mt-4">
                <p class="h1"> <b> MISIÓN <br> </b> </p>
                <p class="h4 text-justify" style="font-weight: 400; line-height: 150% ">
                    Trascender asesorando a los negocios para lograr su desarrollo financiero y cumplimiento fiscal.
                </p>
            </div>
            <!-- VISIÓN -->
            <div class="col-lg-6 col-md-12 mt-4">
                <p class="h1"> <b> VISIÓN <br> </b> </p>
                <p class="h4 text-justify mb-4" style="font-weight: 400; line-height: 150% ">
                    Consolidarnos como Despacho, brindando asesoría personalizada a nuestros clientes mediante herramientas
                    digitales que eficienticen los servicios ofrecidos en materia Contable, Fiscal, Financiera y Auditoría,
                    respaldado por personal Profesional y actualizado en la materia.
                </p>
            </div>
        </div>
    </div>


    <!-- ----  NUESTRA EXPERIENCIA  ---- -->
    <div class="d-flex align-items-center justify-content-center" style="background-color: #003300; ">
        <div class="col-lg-8 col-md-8 col-sm-8" style="color:white; padding: 60px 0px 60px 0px">
            <div class="text-center experiencia">
                <p class="h1"> <b> NUESTRA EXPERIENCIA <br> </b> </p>
                <p class="h4 ml-5 mr-5" style="font-weight: 400; line-height: 150% ">
                    Hemos asesorado y dado consultoría a empresas de todos los tamaños tanto públicos, como privados
                    de diferentes sectores en México.
                </p>
            </div>
        </div>
    </div>

    <!-- ----  CUIDAMOS TU NEGOCIO  ---- -->
    <div class="col-12 bcw mt-0">
        <div class="text-center">
            <p class="h2"><br> <b>CUIDAMOS TU NEGOCIO COMO SI FUERA NUESTRO</b> </p>
            <p class="h5 ml-5 mr-5"><br> ¿Cuáles son las ventajas de contar con nuestra firma? <br></p>
        </div>
        <br>
        <div class="text-center ventajasInc">
            <div class="row">
                <div class="col-lg-4 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-1.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b>Optimización de Impuestos</b>
                        </h5>
                    </a>
                </div>
                <div class="col-lg-4 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-2.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b> Asesoría Personalizada</b>
                        </h5>
                    </a>
                </div>
                <div class="col-lg-3 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-3.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b> Actualización de Boletines</b>
                        </h5>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-4.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b> Ahorro de Costos en Plantilla Laboral </b>
                        </h5>
                    </a>
                </div>
                <div class="col-lg-4 mg servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-5.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b> Capacitación y Asesoría en Linea </b>
                        </h5>
                    </a>
                </div>
                <div class="col-lg-3 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-6.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b> Disponibilidad de Horario </b>
                        </h5>
                    </a>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 servicio">
                    <a href="nosotros#ventajas">
                        <img class="ventajasImg" src="../resources/images/Ventajas/vt-7.jpg"
                            alt="Generic placeholder image">
                        <h5>
                            <b>Experiencia de más de 25 años </b>
                        </h5>
                    </a>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <br>
        </div>
    </div>

    <!-- ----  NUESTROS SERVICIOS  ---- -->
    <div class="container-fluid ParaImage bg1">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-4 text-center d-flex align-items-center justify-content-center service">
                <p><span><b> NUESTROS SERVICIOS </b></span></p>
            </div>
            <div class="col-lg-8 col-md-8 cl2 ">
                <div class="row">
                    <div class="col-lg-4 servicios">
                        <div class="servicio">
                            <a href="asesoria_financiera" class="servicio" style="text-decoration: none;">
                                <div class="servicioImg" id="servicio1"></div>
                                <br>
                                <p class="" style="color:black;"> <b> Asesoría Contable y Financiera </b></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 servicios">
                        <div class="servicio">
                            <a href="asesoria_fiscal" class="servicio " style="text-decoration: none;">
                                <div class="servicioImg" id="servicio2"></div>
                                <br>
                                <p style="color:black;"> <b> Asesoría Fiscal y Jurídica </b></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 servicios">
                        <div class="servicio">
                            <a href="administracion_nomina" class="servicio" style="text-decoration: none;">
                                <div class="servicioImg" id="servicio3">
                                </div>
                                <br>
                                <p style="color:black;"> <b> Administración de Nómina y RRHH </b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 servicios">
                        <div class="servicio">
                            <a href="auditoria" class="servicio" style="text-decoration: none;">
                                <div id="servicio4" class="servicioImg">
                                </div>
                                <br>
                                <p style="color:black;"> <b> Auditoría y Control Interno </b> </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 servicios">
                        <div class="servicio">
                            <a href="contabilidad_gubernamental" class="servicio" style="text-decoration: none;">
                                <div class="servicioImg" id="servicio5">
                                </div>
                                <br>
                                <p style="color:black;"><b> Contabilidad Gubernamental </b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --- DIAGNOSTICO FISCAL --- -->
    <div class="container-fluid bcw">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8 col-md-8 order-lg-1 order-md-1 order-sm-2 order-2 text-center cl3"
                style="padding: 20px 50px;">
                <h4 style="line-height: 170%">
                    Solicita un diágnostico fiscal y te proponemos como
                    puedes regularizar tu situación y vivir con tranquilidad.
                    No más multas.
                </h4>
                <br>
                <h3>¡Registrate nosotros te asesoramos!</h3><br>
                <a href="contactanos#registrate" class="btn btn-success btn-lg">Regístrate</a>
            </div>
            <div
                class="col-lg-4 col-md-4 order-lg-2 order-md-2 order-sm-1 order-1 text-center d-flex align-items-center justify-content-center df-imagen">
                <span><b>¿Necesitas un diagnóstico fiscal?</b></span>
            </div>
        </div>
    </div>
    
    <!-- Página Desarrollada por: -->
        <!-- Rodrigo de la Garza Arredondo -->
        <!-- Christian Alejandro Saldaña Calderón -->
        <!-- Juan Eduardo Tovar Díaz -->
    
@endsection()
