@extends('layouts.plantilla')

@section('title', 'ACN | Asesoría Fiscal y Jurídica')

@section('content')

    <!-- --- BANNER DE ASESORÍA FISCAL Y JURÍDICA --- -->
    <div class="jumbotron jumbotron-fluid asesoria_fiscal_banner"> 
        <div class="container">
            <h1 class="display-4 text-center headline mt-5 text-uppercase"><span>Asesoría Fiscal y Jurídica</span></h1>
        </div>
    </div>

    <!-- --- DESCRIPCIÓN DEL SERVICIO --- -->
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9" style=" padding: 60px 0px 60px 0px;">
            <div class="text-center">
                <p class="h4 ml-1 mr-1" style="font-weight: 400; line-height: 170%; ">
                    <b>Ofrecemos asesorías en materia del pago de impuestos federales y locales. </b>
                    <br><br>
                    Te asesoramos en el régimen de tu interés, ya sea una <b> persona física o moral</b> no sólo en el <b> cumplimiento de sus responsabilidades fiscales</b>, nuestro servicio también cubre la creación de <b> estrategias confiables, oportunas y eficaces para el pago de impuestos</b>, siempre apegadas al marco legal.
                </p>
            </div>
        </div>
    </div>

    <!-- --- SERVICIOS DE LA ASESORÍA FISCAL Y JURÍDICA --- -->
    <div class="container-fluid  mb-4">
        <div class="row d-flex justify-content-center text-center" style="padding; 40px;">
            <div class="col text-center">
                <h2 style="font-weight: 700;">SERVICIOS</h2>
            </div>
        </div>
        <div class="row d-flex text-justify servicios_fiscales">
            <div class="col-lg-5 col-md-12 contenido_fiscal">
                <li>Estudio de precios de Transferencia.</li>
                <li>Asesoría en trámites: Autorización de donataria, recuperación de donataria.</li>
                <li>Devoluciones y compensaciones.</li>
                <li>Análisis e interpretación de las diferentes leyes para su correcta aplicación.</li>
                <li>Determinación de impuestos.</li>
            </div>
            <div class="col-lg-5 col-md-12 contenido_fiscal">
                <li>Apoyo para desahogar Auditorias.</li>
                <li>Asesoría en temas de esquemas reportables.</li>
                <li>Asesoría de la Ley de Operaciones de Procedencia Ilícita.</li>
                <li>Presentación de diversas declaraciones Fiscales.</li>
                <li>Actualización de las reformas y novedades fiscales que tendrán impacto en tu empresa.</li>
            </div>
        </div>
    </div>

    <!-- --- CONOCE MÁS DE NUESTROS SERVICIOS --- -->
    <div class="container-fluid mt-4 mb-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Conoce más de nuestros servicios</h2>
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
                <a href="administracion_nomina">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/AdministracionNomina.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Administración de Nómina y RRHH</h5>
            </div>
            <div class="col-lg-2 text-center">
                <a href="contabilidad_gubernamental">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/ContabilidadGubernamental.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Contabilidad Gubernamental</h5>
            </div>
        </div>
    </div>
@endsection()