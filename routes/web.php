<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as FormController;
use App\Http\Controllers\GenerarReporte;



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', [FormController::class, 'index']);

Route::post('/submit_form', [FormController::class, 'store'])->name('form.store');
    Route::get('/admin', [FormController::class, 'admin'])->name('admin.index');

    Route::get('/personas-naturales-reclamos', [FormController::class, 'consultarReclamosPN'])->name('admin.consultarReclamosPN');
    Route::get('/personas-naturales-quejas', [FormController::class, 'consultarQuejasPN'])->name('admin.consultarQuejasPN');
    Route::get('/reclamos-atendidos', [FormController::class, 'consultarDatosClientesA'])->name('admin.PN.atendidos');
    Route::get('/quejas-atendidas', [FormController::class, 'ConsultaQuejasAtendidasPN'])->name('admin.PN.Quejas.atendidos');
    Route::get('/personas-juridicas-reclamos', [FormController::class, 'ConsultaReclamosEmpresas'])->name('admin.consultarReclamosPJ');
    Route::get('/personas-juridicas-quejas', [FormController::class, 'ConsultaQuejasEmpresas'])->name('admin.consultarQuejasPJ');
    Route::get('/quejas_por_atender', [FormController::class, 'ConsultaQuejasPorAtenderPN'])->name('admin.PN.Quejas.por_atender');
    Route::get('/quejas_en_atencion', [FormController::class, 'ConsultaQuejasEnAtencionPN'])->name('admin.PN.Quejas.en_atencion');
    Route::get('/reclamos_por_atender', [FormController::class, 'ConsultaReclamosPorAtenderPN'])->name('admin.PN.Reclamos.por_atender');
    Route::get('/reclamos_en_atencion', [FormController::class, 'ConsultaReclamosEnAtencionPN'])->name('admin.PN.Reclamos.en_atencion');

    Route::get('/reporte-excel', [GenerarReporte::class, 'reporteExcel'])->name('reporte.excel');
    Route::get('/reporte-pdf', [GenerarReporte::class, 'reportePDF'])->name('reporte.pdf');

    
});