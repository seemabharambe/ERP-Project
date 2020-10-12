<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JController;
use App\Http\Controllers\JsubtaskController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Storage;
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


Route::get('/', function () {
    return view('welcome');
});






Route::view('jupiter','jp');
Route::view('pipe','pipe');

//header start

Route::view('addtask','maintask1');




Route::view('employee','emp');

Route::view('department','dept');


Route::view('party','party');
//header end



//main task start

Route::post('/insert',[JController::class,'insertmaintask']);


//Route::get('/insert','JController@insertmaintask');


Route::get('maintaskdisplay',[JController::class,'maintaskdashboard']);


Route::get('delete/{rid}',[JController::class,'delete']);


Route::view('edit','editmaintask');


Route::get('edit/{rid}',[JController::class,'edit']);


Route::post('update/{rid}',[JController::class,'updatemt']);

//download file
//Route::view('copy','download');
Route::get('attached/{id}',[JController::class,'stored']);



//joins4.projectsubtaskdetails

Route::get('projectsubtaskdetails',[JController::class,'projectsubtasks']);





//main task end



//subtask start

Route::view('addsubtask','subtaskinsert');

Route::post('/insertsubtask',[JsubtaskController::class,'insertsubtask']);

Route::get('subtask',[JsubtaskController::class,'subtaskdashboard']);


Route::get('deletest/{rid}',[JsubtaskController::class,'deletesubtask']);


Route::get('editsubt/{rid}',[JsubtaskController::class,'editsubtask']);


Route::post('updatesubt/{rid}',[JsubtaskController::class,'updatesubtask']);
//download
Route::get('attach/{id}',[JsubtaskController::class,'store']);

//joi

//subtask end


//departments start


Route::post('insertdeptrecord',[DeptController::class,'deptinsert']);


Route::get('deptdashboard',[DeptController::class,'displaydept']);

Route::get('deptdel/{rid}',[DeptController::class,'deletedept']);

Route::get('editd/{rid}',[DeptController::class,'editdept']);


Route::post('updated/{rid}',[DeptController::class,'updatedept']);
//download



//joins 

Route::get('deptwise',[DeptController::class,'deptreport']);

//Route::view('deptr','depthistory');

//Route::get('depthistory',[DeptController::class,'deptsubtaskreport']);




//department end




//employee start

Route::view('insertemployee','empinfo');

Route::post('inserte',[EmpController::class,'empinsert']);


Route::get('emp',[EmpController::class,'displayemp']);



Route::get('deletee/{rid}',[EmpController::class,'deleteemp']);


Route::get('editempinfo/{rid}',[EmpController::class,'editemp']);


Route::post('updateemp/{rid}',[EmpController::class,'empupdate']);

//joins 2 tbales  maintask & subtask
Route::get('empdetails',[EmpController::class,'empinfo']);

//Route::get('empwork',[EmpController::class,'displayempinfo']);


Route::get('empworkdatedetails',[EmpController::class,'empdatework']);



Route::view('emptask','emptask');
Route::post('taskdate',[EmpController::class,'emptaskdate']);
//employee end




//party start
Route::view('insertparty','insertparty');

Route::post('insertparty',[PartyController::class,'partyinsert']);

Route::get('partyshow',[PartyController::class,'displayparty']);


Route::get('deletep/{rid}',[PartyController::class,'deleteparty']);


Route::view('editparty','editp');
Route::get('editp/{rid}',[PartyController::class,'editparty']);
Route::post('updatep/{rid}',[PartyController::class,'updateparty']);
//party end



//gantt chart

Route::view('gchart','gantt');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
