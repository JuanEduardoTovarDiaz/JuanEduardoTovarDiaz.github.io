@extends('layouts.plantilla')

@section('title', 'ACN | Servicios')

@section('content')

    <!-- BANNER NUESTROS SERVICIOS -->
    <div class="jumbotron jumbotron-fluid servicios_banner" style="padding: 9% 0% 9% 0%">
        <div class="container">
            <h1 class="display-4 text-center jt-text"><span>NUESTROS SERVICIOS</span></h1>
            <p class="lead text-center jt-text"><span>Asesores Contables Narváez S.C.</span></p>
        </div>
    </div>

    <!-- DESCRIPCIÓN NUESTROS SERVICIOS -->
    <div class="d-flex align-items-center justify-content-center mt-4" style="height: 200px;">
        <div class="col-lg-8 col-md-9 col-sm-10">
            <div class="text-center descripcion">
                <h3 style="line-height: 150%">
                    En Asesores Contables Narváez contamos con servicios que van desde asesorías a empresas de cualquier
                    tamaño en cuestiones contables, fiscales, financieras y auditorías.
                </h3>
            </div>
        </div>
    </div>

    <!-- FILA 1 - NUESTROS SERVICIOS -->
    <div class="row d-flex align-items-center justify-content-center ml-4 mr-4">
        <div class="col-lg-6 col-md-12 mt-4">
            <div class="card card-servicios-bg">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../resources/images/Servicios/AsesoriaContable.jpg" class="card-img" style="height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-weight:bold;">Asesoria Contable y Financiera</h5>
                            <p class="card-text text-justify">
                                Proporcionamos registro de operaciones contables a nuestros clientes, por medio de la cual se genera información financiera de utilidad para su negocio.
                            </p>
                            <a href="asesoria_financiera" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mt-4">
            <div class="card card-servicios-bg">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../resources/images/Servicios/Auditoria.jpg" class="card-img" style="height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-weight:bold;">Auditoria y Control Interno</h5>
                            <p class="card-text text-justify">
                                La auditoría, aporta una opinión independiente acerca de las prácticas contables y los riesgos de negocio de nuestros clientes, permitiendo desarrollar áreas de oportunidad.
                            </p>
                            <a href="auditoria" class="btn btn-success">Ver más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --- FILA 2 - NUESTROS SERVICIOS --- -->
    <div class="row d-flex align-items-center justify-content-center  mb-4 ml-4 mr-4">
        <div class="col-lg-6 col-md-12 mt-4">
            <div class="card card-servicios-bg">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../resources/images/Servicios/AsesoriaFiscal.jpg" class="card-img" style="height: 100%;">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-weight:bold;">Asesoría Fiscal y Jurídica</h5>
                            <p class="card-text text-justify">
                                Ofrecemos asesorías en materia del pago de impuestos federales y locales. 
                                Te asesoramos en el régimen de tu interés, ya sea una persona física o moral.
                            </p>
                            <a href="asesoria_fiscal" class="btn btn-success">Ver más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mt-4">
            <div class="card card-servicios-bg">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../resources/images/Servicios/AdministracionNomina.jpg" class="card-img" style="height: 100%;">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-weight:bold;">Administración de Nómina y RRHH</h5>
                            <p class="card-text text-justify">
                                El capital humano, siempre es una parte valiosa y fundamental en toda empresa, por lo que asesoramos desde el cumplimiento de obligaciones. 
                            </p>
                            <a href="administracion_nomina" class="btn btn-success">Ver más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --- FILA 3 - NUESTROS SERVICIOS --- -->
    <div class="row d-flex align-items-center justify-content-center  mb-4 ml-4 mr-4">
        <div class="col-lg-6 col-md-12 mt-4">
            <div class="card card-servicios-bg">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../resources/images/Servicios/ContabilidadGubernamental.jpg" class="card-img" style="height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-weight:bold;">Contabilidad Gubernamental</h5>
                            <p class="card-text text-justify">
                                Asesoramos respecto a la Contabilidad Gubernamental que se aplica a las organizaciones del sector público.
                            </p>
                            <a href="contabilidad_gubernamental" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --- DIAGNOSTICO FISCAL --- -->
    <div class="container-fluid custombgreen">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-4 text-center d-flex align-items-center justify-content-center imagen-col2">
                <span><b>¿Necesitas asesoría?</b></span>
            </div>
            <div class="col-lg-8 col-md-8 order-lg-1 order-md-1 order-sm-2 order-2 text-center cl3" style="padding: 20px 50px;">
                <h4 style="line-height: 170%">
                    Comunícate con nosotros si tienes alguna duda, nos encontramos con la mejor disposición de apoyarle.
                </h4> 
                <br><h3>¡Registrate nosotros te asesoramos!</h3><br>
                <a href="contactanos#registrate" class="btn btn-success btn-lg">Regístrate</a>
            </div>
        </div>
    </div>


@endsection()
