@extends('layouts.plantilla')
@section('title', 'ACN | Nosotros')


@section('content')
    
    <!-- ---  BANNER NOSOTROS  --- -->
    <div class="jumbotron jumbotron-fluid jt-nosotros" style="padding: 9% 0% 9% 0%" >
        <div class="container">
            <h1 class="display-4 text-center jt-text"><span>NOSOTROS</span></h1>
            <p class="lead text-center jt-text"><span>Asesores Contables Narváez S.C.</span></p>
        </div>        
    </div>

    <!-- --- EXPERIENCIA EN EL NEGOCIO --- -->
    <div class="d-flex align-items-center justify-content-center mt-4 mb-4" style="height: 200px;">
        <div class="col-lg-9 text-center descripcion">
            <h5 style="line-height: 170%">
                Somos Contadores con más de 25 años de experiencia laborando de manera individual, nos hemos asociado desde 2006 para conformar la firma Asesores Contables Narváez S.C. (ACN).
                <br> <br>
                Hemos asesorado y dado consultoría a empresas de todos los tamaños tanto
                públicas, como privadas de diferentes sectores en México.
            </h5>
        </div>
    </div>

    <!-- --- ¿POR QUÉ CONTRATAR A LA FIRMA ASESORES CONTABLES NARVAEZ --- -->
    <div class="container-fluid custombgreen ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-4 text-center firma d-flex align-items-center">
                <p><span>¿Por qué contratar a la firma Asesores Contables Narváez S.C.?</span></p>
            </div>
            <div class="col-lg-8 col-md-8 cl2">
                <p class="text-center h5 ml-3 mr-3 mb-3 mt-1" style="font-size:25px;">
                   <b> Nuestros socios y el personal que labora está
                    comprometido al tener una preparación actualizada.</b>
                </p>
                <p class="text-center"style="font-size:25px;">Por ello contamos con:</p>
                <ul style="list-style-type: circle;line-height:200%;" >
                    <li style="font-size:20px;">Personal titulado en contaduría pública.</li>
                    <li style="font-size:20px;">
                        Certificado emitido por el Instituto Mexicano de Contadores Públicos.
                    </li>
                    <li style="font-size:20px;">Maestrías en Finanzas y Derecho Fiscal.</li>
                    <li style="font-size:20px;">Socios activos en el IMCP.
                    </li>
                </ul>
                <div id="ventajas"></div>
            </div>
        </div>
    </div>
    
    <!-- --- VENTAJAS DE TRABAJAR CON NUESTRA FIRMA --- -->
    <div class="container-fluid custombg">
        <!-- grid imagenes -->
        <div class="text-center" style="padding-top: 50px">
            <h2 class="font-weight-bold text-uppercase">ventajas de entablar servicio contable con nuestra firma:</h2>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-1.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Optimización de Impuestos</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Creación de estrategias confiables, oportunas y eficaces para el pago de impuestos.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-2.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Asesoría Personalizada</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Se asigna Contador Titulado para la atención de consultas y pago de impuestos de su negocio.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-4.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Ahorro de Costos en Plantilla Laboral</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Ahorra costos en tu plantilla laboral al
                        contratar el servicio de contabilidad por medio
                        de un despacho externo.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-5.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Capacitación y Asesoría en Línea</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Capacitación y asesoría en línea,
                        evita movilizar a tu personal y ahorra
                        tiempo.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-7.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Experiencia de más de 25 años</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Hemos trabajado con diferentes
                        empresas en asesoramiento
                        contable y fiscal.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-6.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Disponibilidad de Horario</h5>
                    <p class="text-justify" style="font-size:18px;">
                        Nos encontramos en la mejor disponibilidad para atender tu situación.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4" style="padding-bottom: 50px">
            <div class="col-lg-5 d-flex align-items-center servicio">
                <img class="ventajasImg" src="../resources/images/ventajas/vt-3.jpg" alt="Generic placeholder image">
                <div class="ml-4">
                    <h5 class="font-weight-bold">Actualización de Boletines</h5>
                    <p class="text-justify" style="font-size:18px;">Actualización continua mediante
                        boletines emitidos por nuestro despacho
                        sobre novedades contables y fiscales por lo
                        que las empresas evitan errores y ahorran
                        capacitación a su personal en la materia.
                    </p>
                </div>
            </div>
        </div>        
    </div>
   
    <!-- --- CONOCE NUESTROS SERVICIOS --- -->
    <div class="container-fluid mt-4 mb-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Conoce nuestros servicios</h2>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-2 text-center">
                <a href="asesoria_financiera">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/AsesoriaContable.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Asesoría Contable y Financiera</h5>
            </div>
            <div class="col-lg-2 text-center">
                <a href="auditoria">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/Auditoria.jpg" alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Auditoría y Control Interno</h5>
            </div>
            <div class="col-lg-2 text-center">
                <a href="asesoria_fiscal">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/AsesoriaFiscal.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Asesoría Fiscal y Jurídica</h5>
            </div>
            <div class="col-lg-2 text-center">
                <a href="contabilidad_gubernamental">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/ContabilidadGubernamental.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Contabilidad Gubernamental</h5>
            </div>
            <div class="col-lg-2 text-center">
                <a href="administracion_nomina">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/AdministracionNomina.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Administración de Nómina y RRHH</h5>
            </div>
        </div>
    </div>


@endsection() 
