<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\AllowanceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'showDashboard']);
Route::get('/dashboard', [DashboardController::class, 'showDashboard']);


Route::get('/members', [MembersController::class, 'showMembers']);
Route::match(['get', 'post'], '/members-add', [MembersController::class, 'addNewMembers']);
Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::match(['get', 'post'], '/profile-edit', [ProfileController::class, 'editProfile']);
Route::delete('/profile/{memberID}', [ProfileController::class, 'deleteMember'])->name('member.delete');

Route::get('/grades-page', [GradesController::class, 'showGrades']);
Route::match(['get', 'post'], '/grades', [GradesController::class, 'showMemberGrades']);
Route::match(['get', 'post'], '/grades-add', [GradesController::class, 'addNewGrades']);
Route::match(['get', 'post'], '/grades-edit', [GradesController::class, 'editGrades']);
Route::delete('/grades/{memberID}/{gradeID}', [GradesController::class, 'deleteGrades'])->name('grades.delete');

Route::get('/reqs-page', [RequirementsController::class, 'showRequirements']);
Route::get('/reqs', [RequirementsController::class, 'showMemberRequirements']);
Route::match(['get', 'post'], '/reqs-add', [RequirementsController::class, 'addSubmitRequirements']);
Route::match(['get', 'post'], '/reqs_list-add', [RequirementsController::class, 'addRequirementsList']);
Route::match(['get', 'post'], '/reqs_list-edit', [RequirementsController::class, 'editRequirementsList']);
Route::delete('/reqs/{memberID}/{reqsID}', [RequirementsController::class, 'deleteReqs'])->name('reqs.delete');
Route::delete('/reqs-page/{reqs_listID}', [RequirementsController::class, 'deleteReqsList'])->name('reqs_list.delete');

Route::get('/allowance-page/{page?}', [AllowanceController::class, 'showAllowance'])->name('allowance-page');
Route::match(['get', 'post'], '/allowance', [AllowanceController::class, 'showMemberAllowances']);
Route::match(['get', 'post'], '/allowance-add', [AllowanceController::class, 'addNewAllowance']);
Route::match(['get', 'post'], '/allowance-edit', [AllowanceController::class, 'EditAllowance']);
Route::delete('/allowance/{memberID}/{allowanceID}', [AllowanceController::class, 'deleteAllowance'])->name('allowance.delete');
// Route::get('/allowance-page/{page}', [AllowanceController::class, 'showAllowance']);
