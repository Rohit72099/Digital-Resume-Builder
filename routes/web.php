<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', [ResumeController::class, 'welcome'])->name('welcome');
Route::get('/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/store', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/preview/{session_id}', [ResumeController::class, 'preview'])->name('resume.preview');
Route::get('/download/{session_id}/{template}', [ResumeController::class, 'download'])->name('resume.download');



Route::get('/preview-template/{session_id}/{template}', [ResumeController::class, 'previewTemplate'])->name('resume.preview_template');
