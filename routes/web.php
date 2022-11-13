<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login/1', function () {
    return view('login1');
});
Route::get('/login/2', function () {
    return view('login2');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard/1', function () {
    return view('dashboard1');
});

Route::get('/dashboard/2', function () {
    return view('dashboard2');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/hris', function () {
    return view('hrisempinfo');
});
Route::get('/hris/register', function () {
    return view('hrisregister');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/setting/roles', function () {
    return view('settingroles');
});
Route::get('/setting/company', function () {
    return view('settingcompany');
});
Route::get('/setting/department', function () {
    return view('settingdepartment');
});
Route::get('/setting/unit', function () {
    return view('settingunit');
});
Route::get('/setting/branch', function () {
    return view('settingbranch');
});
Route::get('/setting/designation', function () {
    return view('settingdesignation');
});
Route::get('/setting/jobgrade', function () {
    return view('settingjobgrade');
});
Route::get('/setting/sop', function () {
    return view('settingsop');
});
Route::get('/setting/news', function () {
    return view('settingnews');
});
Route::get('/setting/typeoflog', function () {
    return view('settingtypeoflog');
});
Route::get('/project', function () {
    return view('projectregcustomers');
});

Route::get('/setting/employmenttype', function () {
    return view('settingemploymenttype');
});
Route::get('/hris/editprofile', function () {
    return view('hris-editprofile');
});
Route::get('/hris/edit', function () {
    return view('hrisedit');
});
Route::get('/project/projectinformation', function () {
    return view('projectinformation');
});
Route::get('/project/projectregistration', function () {
    return view('projectregistration');
});
Route::get('/project/projectupdate', function () {
    return view('projectupdate');
});
Route::get('/project/projectrequest', function () {
    return view('projectrequest');
});
Route::get('/project/projectregmyproject', function () {
    return view('projectregmyproject');
});
Route::get('/report/projectlisting', function () {
    return view('reportprojectlisting');
});
Route::get('/report/viewprojectlisting', function () {
    return view('viewprojectlisting');
});


Route::get('/hris/myprofile', function () {
    return view('hris-myprofile');
});

Route::get('/e-att', function () {
    return view('myattendance');
});

Route::get('/org', function () {
    return view('phonedirectory');
});

Route::get('/org/orgchart', function () {
    return view('organizationchart');
});

Route::get('/org/dept-tree', function () {
    return view('departmenttree');
});


Route::get('/reporting/projectstatus', function () {
    return view('projectstatus');
});


Route::get('/projectstatus/customername', function () {
    return view('statuscustomername');
});
Route::get('/projectstatus/all', function () {
    return view('statusall');
});
Route::get('/projectstatus/financialyear', function () {
    return view('statusfinancialyear');
});
Route::get('/projectstatus/accountmanager', function () {
    return view('statusaccountmanager');
});
Route::get('/projectstatus/projectmanager', function () {
    return view('statusprojectmanager');
});
Route::get('/projectstatus/status', function () {
    return view('statusstatus');
});
Route::get('/projectstatus/employeename', function () {
    return view('statusemployeename');
});
Route::get('/projectstatus/projectname', function () {
    return view('statusprojectname');
});
Route::get('/project/viewlocassign', function () {
    return view('viewlocassign');
});
Route::get('/project/viewlocassignmyproject', function () {
    return view('viewlocassignmyproject');
});
Route::get('/timesheet/mytimesheet', function () {
    return view('mytimesheet');
});
Route::get('/timesheet/timesheetapproval', function () {
    return view('timesheetapproval');
});
Route::get('/timesheet/viewtimesheet', function () {
    return view('viewtimesheet');
});
Route::get('/timesheet/timesheetrealtime', function () {
    return view('timesheetrealtime');
});
Route::get('/timesheet/eventrealtime', function () {
    return view('eventrealtime');
});
Route::get('/timesheet/reportingstatusreport', function () {
    return view('reportingstatusreport');
});
Route::get('/timesheet/reportingtimesheetemployee', function () {
    return view('reportingtimesheetemployee');
});
Route::get('/timesheet/timesheetreportingsummary', function () {
    return view('timesheetreportingsummary');
});
Route::get('/timesheet/timesheetreportingproject', function () {
    return view('timesheetreportingproject');
});
Route::get('/timesheet/timesheetreportingdepartment', function () {
    return view('timesheetreportingdepartment');
});
Route::get('/timesheet/viewtimesheetemployee', function () {
    return view('viewtimesheetemployee');
});
Route::get('/timesheet/timesheetovertimereport', function () {
    return view('timesheetovertimereport');
});
Route::get('/setting/timesheetperiod', function () {
    return view('settingtimesheetperiod');
});
Route::get('/timesheet/timesheetemployeereportall', function () {
    return view('timesheetemployeereportall');
});
Route::get('/eclaim/myclaim', function () {
    return view('eclaim/eclaimmyclaim');
});
Route::get('/eclaim/viewmyclaim', function () {
    return view('eclaim/eclaimviewmyclaim');
});
//

Route::get('/report/reportingclaimreport', function () {
    return view('eclaim/reportingclaimreport');
});
Route::get('/report/claimreportall', function () {
    return view('eclaim/claimreportall');
});
Route::get('/report/claimreportproject', function () {
    return view('eclaim/claimreportproject');
});
Route::get('/report/claimreportdepartment', function () {
    return view('eclaim/claimreportdepartment');
});
Route::get('/report/claimreportemployee', function () {
    return view('eclaim/claimreportemployee');
});
Route::get('/report/claimreportrefnum', function () {
    return view('eclaim/claimreportrefnum');
});
Route::get('/report/cashadvreportall', function () {
    return view('eclaim/cashadvreportall');
});
Route::get('/report/reportingcashadvance', function () {
    return view('eclaim/reportingcashadvance');
});
