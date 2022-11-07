<?php

use App\Http\Controllers\AdministracionNominaController;
use App\Http\Controllers\AsesoriaFinancieraController;
use App\Http\Controllers\AsesoriaFiscalController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\BolsaTrabajoController;
use App\Http\Controllers\ConstruccionController;
use App\Http\Controllers\ContabilidadGubernamentalController;
use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\WhatsAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  -----------------  NAVEGACIÓN ENTRE VENTANAS  -----------------  */

Route::get('/', HomeController::class);

Route::get('inicio', [HomeController::class,'inicio']);

Route::get('nosotros', [NosotrosController::class,'nosotros']);

Route::get('bolsa_trabajo', [BolsaTrabajoController::class,'bolsaTrabajo']);

Route::get('contactanos', [ContactanosController::class,'contactanos']);

Route::get('servicios', [ServiciosController::class, 'index']);

/*  -----------------  CONTROLADORES DE SERVICIOS  -----------------  */

Route::get('asesoria_financiera', [AsesoriaFinancieraController::class, 'asesoriaFinanciera']);

Route::get('asesoria_fiscal', [AsesoriaFiscalController::class, 'asesoriaFiscal']);

Route::get('administracion_nomina', [AdministracionNominaController::class, 'administracionNomina']);

Route::get('auditoria', [AuditoriaController::class, 'auditoria']);

Route::get('contabilidad_gubernamental', [ContabilidadGubernamentalController::class, 'contabilidadGubernamental']);

Route::get('whatsapp', [WhatsAppController::class, 'whatsapp']);

Route::get('construccion', [ConstruccionController::class, 'paginaConstruccion']);

?>