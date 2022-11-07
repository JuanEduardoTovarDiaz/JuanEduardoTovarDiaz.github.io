@extends('layouts.plantilla')

@section('title', 'ACN | Auditoría y Control Interno')

@section('content')
    
    <!-- --- BANNER DE LA AUDITORÍA Y CONTROL INTERNO --- -->
    <div class="jumbotron jumbotron-fluid auditoria_banner"> 
        <div class="container">
            <h1 class="display-4 text-center headline mt-5 text-uppercase"><span>Auditoría y Control Interno</span></h1>
        </div>
    </div>
    
    <!-- --- DESCRIPCIÓN DEL SERVICIO --- -->
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9" style=" padding: 60px 0px 60px 0px;">
            <div class="text-center">
                <p class="h4 ml-1 mr-1" style="font-weight: 400; line-height: 170%; ">
                    La auditoría, aporta una opinión independiente acerca de las prácticas contables y los riesgos de negocio de nuestros clientes, promoviendo la transparencia en la información financiera, al ser de utilidad para diversos grupos de interés relacionados con su negocio.
                </p>
            </div>
        </div>
    </div>

    <!-- --- SERVICIOS DE LA AUDITORÍA Y CONTROL INTERNO --- -->
    <div class="container-fluid mb-4">
        <div class="row d-flex justify-content-center text-center" style="padding; 40px;">
            <div class="col text-center">
                <h2 style="font-weight: 700;">SERVICIOS</h2>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center servicios_auditoria" >
            <div class="col-lg-5 col-md-12 contenido_auditoria" > 
                <li>Diagnóstico de control interno de la empresa.</li>
                <li>Revisión de control interno.</li>
                <li>Diseños de controles internos.</li>
                <li>Auditoría Fiscal.</li>
                <li>Auditoría Interna.</li>
            </div>
            <div class="col-lg-5 col-md-12 contenido_auditoria">                
                <li>Auditoría Financiera.</li>
                <li>Dictamen para efectos fiscales y financieros.</li>
                <li>Dictamen de IMSS e INFONAVIT.</li>
                <li>Dictamen de impuestos estatales.</li>
                <li>Dictámenes gubernamentales.</li>
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