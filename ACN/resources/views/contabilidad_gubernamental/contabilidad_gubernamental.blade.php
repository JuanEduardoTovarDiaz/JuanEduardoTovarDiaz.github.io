@extends('layouts.plantilla')

@section('title', 'ACN | Contabilidad Gubernamental')

@section('content')
    
    <!-- --- BANNER DE LA CONTABILIDAD GUBERNAMENTAL --- -->
    <div class="jumbotron jumbotron-fluid contabilidad_banner"> 
        <div class="container">
            <h1 class="display-4 text-center headline mt-5 text-uppercase"><span>Contabilidad Gubernamental</span></h1>
        </div>
    </div>

    <!-- --- DESCRIPCIÓN DEL SERVICIO --- -->
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9" style=" padding: 60px 0px 60px 0px;">
            <div class="text-center">
                <p class="h4 ml-1 mr-1" style="font-weight: 400; line-height: 170%; ">
                    Asesoramos respecto a la Contabilidad Gubernamental que se aplica a las organizaciones del sector público, cuya actividad está regulada por un marco constitucional, una base legal con estricto apego al cumplimiento de la Ley General de Contabilidad Gubernamental (LGCG).
                </p>
            </div>
        </div>
    </div>

    <!-- --- SERVICIOS DE LA CONTABILIDAD GUBERNAMENTAL --- -->
    <div class="container-fluid  mb-4">
        <div class="row d-flex justify-content-center text-center" style="padding; 40px;">
            <div class="col text-center">
                <h2 style="font-weight: 700;">SERVICIOS</h2>
            </div>
        </div>
        <div class="row d-flex servicios_contabilidad">
            <div class="col contenido_contabilidad">
                <li>Dictamen Gubernamental.</li>
                <li>Asesoría en la implementación contable conforme la CONAC.</li>
                <li>Asesoría en el llenado de formatos institucionales.</li>
                <li>Elaboración del Manual de Contabilidad.</li>
                <li>Evaluaciones de desempeño.</li>
                <li>Asesoría en disciplina financiera y transparencia.</li>
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
        </div>
    </div>
@endsection()