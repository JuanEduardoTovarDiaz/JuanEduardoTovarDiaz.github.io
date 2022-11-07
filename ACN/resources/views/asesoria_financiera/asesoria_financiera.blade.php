@extends('layouts.plantilla')

@section('title', 'ACN | Asesoría Contable y Financiera')

@section('content')

    <!-- --- BANNER DE ASESORÍA CONTABLE Y FINANCIERA --- -->
    <div class="jumbotron jumbotron-fluid asesoria_financiera_banner"> 
        <div class="container">
            <h1 class="display-4 text-center headline mt-5 text-uppercase"><span><b>
                Asesoría Contable y Financiera
            </b></span></h1>
        </div>
    </div>
 
    <!-- --- DESCRIPCIÓN DEL SERVICIO --- -->
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9" style=" padding: 60px 0px 60px 0px;">
            <div class="text-center">
                <p class="h4 ml-1 mr-1" style="font-weight: 400; line-height: 170%; ">
                    Proporcionamos registro de operaciones contables a nuestros clientes, por medio de la cual se genera información financiera de utilidad para su negocio. Asesoramos al cliente para comprender temas financieros que le permita tomar decisiones para el crecimiento de su negocio.
                </p>
            </div>
        </div>
    </div>

    <!-- --- SERVICIOS DE LA ASESORÍA CONTABLE Y FINANCIERA --- -->
    <div class="container-fluid mb-4">
        <div class="row d-flex justify-content-center text-center" style="padding; 40px;">
            <div class="col text-center">
                <h2 style="font-weight: 700;">SERVICIOS</h2>
            </div>
        </div>
        <div class="row d-flex servicios_financieros" >
            <div class="col contenido_financiero text-justify">
                <li>Registro actualizado de las operaciones contables de tu empresa de acuerdo a las normas profesionales emitidas por los organismos reguladores nacionales e internacionales.</li>
                <li>Obtención de tus reportes financieros.</li> 
                <li>Análisis e interpretación de tus reportes financieros y recomendaciones aplicando las razones financieras adecuadas que ayuden a conocer la Rentabilidad de tu empresa, entre otras como el punto de equilibrio.</li>
                <li>Implementación de modificaciones y actualizaciones a las normas contablesactuales.</li>
            </div>
        </div>
    </div>

    <!-- --- CONOCE MÁS DE NUESTROS SERVICIOS --- -->
    <div class="container-fluid mt-4 mb-4 ">
        <div class="text-center">
            <h2 class="font-weight-bold">Conoce más de nuestros servicios</h2>
        </div>
        <div class="row d-flex justify-content-center mt-4">
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