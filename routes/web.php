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
//my claim
Route::get('/eclaim/myclaim', function () {
    return view('eclaim/myclaim/eclaimmyclaim');
});
Route::get('/eclaim/viewmyclaim', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewmyclaim');
});
Route::get('/eclaim/applygeneralclaim', function () {
    return view('eclaim/myclaim/applyclaim/eclaimapplygeneral');
});
Route::get('/eclaim/applyclaim', function () {
    return view('eclaim/myclaim/applyclaim/eclaimapplyclaim');
});
Route::get('/eclaim/cashadvance', function () {
    return view('eclaim/myclaim/applyclaim/eclaimcashadvance');
});
Route::get('/eclaim/appealclaim', function () {
    return view('eclaim/myclaim/applyclaim/eclaimappealclaim');
});
Route::get('/eclaim/viewgeneralclaim', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewgeneralclaim');
});
Route::get('/eclaim/updateapply', function () {
    return view('eclaim/myclaim/updateclaim/eclaimupdateapply');
});
Route::get('/eclaim/viewcashprojectoutstation', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewcapo');
});
Route::get('/eclaim/viewcashprojectnoneoutstation', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewcapno');
});
Route::get('/eclaim/viewcashothersoutstation', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewcaoo');
});
Route::get('/eclaim/viewcashothersnoneoutstation', function () {
    return view('eclaim/myclaim/viewmyclaim/eclaimviewcaono');
});
//update
Route::get('/eclaim/updatemontly', function () {
    return view('eclaim/myclaim/updateclaim/updatemtc');
});
Route::get('/eclaim/updategeneral', function () {
    return view('eclaim/myclaim/updateclaim/updategnc');
});
Route::get('/eclaim/updateappeal', function () {
    return view('eclaim/myclaim/updateclaim/updateappeal');
});
Route::get('/eclaim/updatecashadvance', function () {
    return view('eclaim/myclaim/updateclaim/updatecashadvance');
});
// setting eclaim
Route::get('/setting/cashadvancecontroller', function () {
    return view('eclaim/setting/cashadvancecontroller/cashAdvancedController');
});
Route::get('/setting/claimcategory', function () {
    return view('eclaim/setting/claimcategory/Claim-Category');
});
Route::get('/setting/addclaim', function () {
    return view('eclaim/setting/claimcategory/add/add-claim');
});
Route::get('/setting/updateclaim', function () {
    return view('eclaim/setting/claimcategory/update/update-claim');
});
Route::get('/setting/claimdate', function () {
    return view('eclaim/setting/claimdate/Claim-Date');
});
Route::get('/setting/claimmonth', function () {
    return view('eclaim/setting/claimmonth/claimmonth');
});
Route::get('/setting/entitlement', function () {
    return view('eclaim/setting/entitlement/settingEntitlement');
});
Route::get('/setting/addentitlement', function () {
    return view('eclaim/setting/entitlement/add/AddEntitlementGroup');
});
Route::get('/setting/updateentitlement', function () {
    return view('eclaim/setting/entitlement/update/UpdateEntitlementGroup');
});
Route::get('/setting/eclaimgeneral', function () {
    return view('eclaim/setting/general/settinggeneral');
});
Route::get('/setting/approvalconfiguration', function () {
    return view('eclaim/setting/approvalconfiguration/approvalconfigure');
});
Route::get('/setting/approvalrole', function () {
    return view('eclaim/setting/approvalrole/approvalrole');
});
//approval supervisor
Route::get('/claimapproval/supervisor', function () {
    return view('eclaim/claimapproval/supervisor/supervisorapproval');
});
Route::get('/claimapproval/viewmtcsupervisor', function () {
    return view('eclaim/claimapproval/supervisor/view/viewmtc');
});
Route::get('/claimapproval/viewgncsupervisor', function () {
    return view('eclaim/claimapproval/supervisor/view/viewgnc');
});
Route::get('/claimapproval/viewappealsupervisor', function () {
    return view('eclaim/claimapproval/supervisor/view/viewappeal');
});

//approval hod
Route::get('/claimapproval/hod', function () {
    return view('eclaim/claimapproval/hod/hodapproval');
});
Route::get('/cashadvance/hodcashadvance', function () {
    return view('eclaim/claimapproval/hod/cashadvance/hodcashadvance');
});
//approval finance recommender
Route::get('/claimapproval/financerecommender', function () {
    return view('eclaim/claimapproval/financerecommender/frapproval');
});
//approval finance checker
Route::get('/claimapproval/financechecker', function () {
    return view('eclaim/claimapproval/financechecker/fcapproval');
});
Route::get('/cashadvance/financechecker', function () {
    return view('eclaim/claimapproval/financechecker/cashadvance/fccashadvance');
});
//approval finance approver
Route::get('/claimapproval/financeapprover', function () {
    return view('eclaim/claimapproval/financeapprover/faapproval');
});
//approval admin checker
Route::get('/claimapproval/adminchecker', function () {
    return view('eclaim/claimapproval/adminchecker/acapproval');
});
//approval admin recommender
Route::get('/claimapproval/adminrecommender', function () {
    return view('eclaim/claimapproval/adminrecommender/arapproval');
});
//approval admin approver
Route::get('/claimapproval/adminapprover', function () {
    return view('eclaim/claimapproval/adminapprover/apapproval');
});
//cash advance
Route::get('/claimapproval/supervisorcashadvance', function () {
    return view('eclaim/claimapproval/supervisor/cashadvance/approvalcashadvance');
});
Route::get('/claimapproval/hodcashadvance', function () {
    return view('eclaim/claimapproval/hod/cashadvance/hodcashadvance');
});
Route::get('/claimapproval/challenge', function () {
    return view('eclaim/claimapproval/supervisor/challengeroute');
});

//view supervisor
Route::get('/claimapproval/viewprojectoutstation', function () {
    return view('eclaim/claimapproval/supervisor/view/supervisorviewcapo');
});
Route::get('/claimapproval/viewprojectnoneoutstation', function () {
    return view('eclaim/claimapproval/supervisor/view/supervisorviewcapno');
});
Route::get('/claimapproval/viewothersoutstation', function () {
    return view('eclaim/claimapproval/supervisor/view/supervisorviewcaoo');
});
Route::get('/claimapproval/viewothersnoneoutstation', function () {
    return view('eclaim/claimapproval/supervisor/view/supervisorviewcaono');
});

//view adminchecker
Route::get('/adminchecker/viewmtc', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewmtc');
});
Route::get('/adminchecker/viewgnc', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewgnc');
});
Route::get('/adminchecker/viewcapo', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewcapo');
});
Route::get('/adminchecker/viewcapno', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewcapno');
});
Route::get('/adminchecker/viewcaoo', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewcaoo');
});
Route::get('/adminchecker/viewcaono', function () {
    return view('eclaim/claimapproval/adminchecker/view/acviewcaono');
});
//view finance checker
Route::get('/financechecker/viewmtc', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewmtc');
});
Route::get('/financechecker/viewgnc', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewgnc');
});
Route::get('/financechecker/viewcapo', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewcapo');
});
Route::get('/financechecker/viewcapno', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewcapno');
});
Route::get('/financechecker/viewcaoo', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewcaoo');
});
Route::get('/financechecker/viewcaono', function () {
    return view('eclaim/claimapproval/financechecker/view/acviewcaono');
});
////////////////////
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

//eleave setting
Route::get('/eleave/eleaveentitlement', function () {
    return view('eleave/setting/eleaveentitlement');
});
Route::get('/eleave/leavetypes', function () {
    return view('eleave/setting/leavetypes');
});
Route::get('/eleave/holidaylist', function () {
    return view('eleave/setting/holidaylist');
});


//Eleave Approval
Route::get('/eLeave/LeaveApproval', function () {
    return view('eLeave/leaveAppr');
});
