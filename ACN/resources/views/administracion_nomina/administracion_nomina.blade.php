@extends('layouts.plantilla')

@section('title', 'ACN | Administración de Nómina y RRHH')

@section('content')

    <!-- --- BANNER DE ADMINISTRACIÓN DE NÓMINA Y RECURSOS HUMANOS --- -->
    <div class="jumbotron jumbotron-fluid administracion_nomina_banner"> 
        <div class="container">
            <h1 class="display-4 text-center headline mt-5 text-uppercase"><span>Administración de Nómina y RRHH</span></h1>
        </div>
    </div>

    <!-- --- DESCRIPCIÓN DEL SERVICIO --- -->
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9" style=" padding: 60px 0px 60px 0px;">
            <div class="text-center">
                <p class="h4 ml-1 mr-1" style="font-weight: 400; line-height: 170%; ">
                    El capital humano, siempre es una parte valiosa y fundamental en toda empresa, por lo que asesoramos desde el cumplimiento de obligaciones fiscales, como obligaciones en tema de derecho laboral. 
                </p>
            </div>
        </div>
    </div>

    <!-- --- SERVICIOS DE LA ADMINISTRACIÓN DE NÓMINA Y RECURSOS HUMANOS --- -->
    <div class="container-fluid  mb-4">
        <div class="row d-flex justify-content-center text-center" style="padding; 40px;">
            <div class="col text-center">
                <h2 style="font-weight: 700;">SERVICIOS</h2>
            </div>
        </div>
        <div class="row d-flex text-justify servicios_nomina" >
            <div class="col-lg-5 col-md-12 contenido_nomina">
                <li>Elaboración de Nómina.</li>
                <li>Cálculos de nóminas para la determinación de ISR o subsidio.</li>
                <li>Cálculo de finiquito e indemnizaciones.</li>
                <li>Cálculo de cuotas al Instituto Mexicano del Seguro Social (IMSS).</li>
                <li>Calculo anual de los trabajadores.</li>
                <li>Cálculo de Impuesto sobre Nómina.</li>
                <li>Presentación de SIROC.</li>
            </div>
            <div class="col-lg-5 col-md-12 contenido_nomina">
                <li>Asesoría en materia de obligaciones fiscales relacionadas con la nómina.</li>
                <li>Presentación de avisos al IDSE.</li>
                <li>Conciliación de Nómina Contable Vs Visor del SAT.</li>
                <li>Presentación de la declaración de Riesgo del IMSS.</li>
                <li>Emisión de CFDI de Nómina.</li>
                <li>Elaboración de declaración anual de impuesto sobre nomina.</li>
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
                <a href="contabilidad_gubernamental">
                    <img class="servicio serv-decor" src="../resources/images/Servicios/ContabilidadGubernamental.jpg"
                    alt="Generic placeholder image">
                </a>
                <h5 class="mt-3">Contabilidad Gubernamental</h5>
            </div>
        </div>
    </div>
@endsection()