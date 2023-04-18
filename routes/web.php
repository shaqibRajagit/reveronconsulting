<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\research_management_page;
use App\Http\Controllers\Dynamicfield;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PressReleaseControler;
use App\Http\Controllers\UserController;

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

/*
Route::get('/', function () {
    return view('index');
});*/
Route::get('/logind', function () {
    return view('login');
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:4,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});



Route::group(['middleware'=>'auth'],function(){
    
	Route::get('home',[AuthController::class,'home'])->name('home');
	/*
	Route::get('report_management',[AuthController::class,'report_management'])->name('report_management');
    Route::post('storess',[AuthController::class,'storess']);
	Route::get('report_management',[AuthController::class,'reports']);
	Route::get('edit/{id}',[AuthController::class,'edit']);
	Route::put('update/{id}',[AuthController::class,'update']);
	Route::get("search",[AuthController::class,'search']);
	*/
    
    
    
	
	Route::get('Introduction_Overview',[HomeControler::class,'Introduction_Overview'])->name('Introduction_Overview');
	Route::get('What_is_included_into_the_system_provision',[HomeControler::class,'What_is_included_into_the_system_provision'])->name('What_is_included_into_the_system_provision');
	Route::get('What_is_Example_Project',[HomeControler::class,'What_is_Example_Project'])->name('What_is_Example_Project');
	Route::get('Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account',[HomeControler::class,'Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account'])->name('Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account');
	Route::get('Step_2_Validate_User_Account_details',[HomeControler::class,'Step_2_Validate_User_Account_details'])->name('Step_2_Validate_User_Account_details');
	Route::get('Step_2b_Change_Account_Information',[HomeControler::class,'Step_2b_Change_Account_Information'])->name('Step_2b_Change_Account_Information');
	Route::get('Users_Configuration',[HomeControler::class,'Users_Configuration'])->name('Users_Configuration');
	Route::get('System_Administration_Overview',[HomeControler::class,'System_Administration_Overview'])->name('System_Administration_Overview');
	Route::get('Step_3b_Create_User_Using_the_Import_from_Excel_Tool',[HomeControler::class,'Step_3b_Create_User_Using_the_Import_from_Excel_Tool'])->name('Step_3b_Create_User_Using_the_Import_from_Excel_Tool');
	Route::get('Step_3_Create_User_Individually',[HomeControler::class,'Step_3_Create_User_Individually'])->name('Step_3_Create_User_Individually');

	Route::get('Step_3c_Update_User_Information',[HomeControler::class,'Step_3c_Update_User_Information'])->name('Step_3c_Update_User_Information');
	Route::get('Step_3d_Archive_User',[HomeControler::class,'Step_3d_Archive_User'])->name('Step_3d_Archive_User');
	Route::get('Step_3e_Restore_User',[HomeControler::class,'Step_3e_Restore_User'])->name('Step_3e_Restore_User');
	Route::get('Step_3f_Permanently_Delete_User',[HomeControler::class,'Step_3f_Permanently_Delete_User'])->name('Step_3f_Permanently_Delete_User');
	Route::get('Projects_Configuration',[HomeControler::class,'Projects_Configuration'])->name('Projects_Configuration');

	Route::get('Step_4b_Update_Edit_Project_Information',[HomeControler::class,'Step_4b_Update_Edit_Project_Information'])->name('Step_4b_Update_Edit_Project_Information');
	Route::get('Step_4_Create_Project',[HomeControler::class,'Step_4_Create_Project'])->name('Step_4_Create_Project');
	Route::get('Step_4c_Archiving_Project',[HomeControler::class,'Step_4c_Archiving_Project'])->name('Step_4c_Archiving_Project');
	Route::get('Step_4d_Recover_Project',[HomeControler::class,'Step_4d_Recover_Project'])->name('Step_4d_Recover_Project');
	Route::get('Step_4e_Permanently_Delete_Project',[HomeControler::class,'Step_4e_Permanently_Delete_Project'])->name('Step_4e_Permanently_Delete_Project');

	Route::get('Project_Administration_Overview',[HomeControler::class,'Project_Administration_Overview'])->name('Project_Administration_Overview');
	Route::get('User',[HomeControler::class,'User'])->name('User');
	Route::get('Step_1b_Remove_User_from_Current_Project',[HomeControler::class,'Step_1b_Remove_User_from_Current_Project'])->name('Step_1b_Remove_User_from_Current_Project');
	Route::get('Data',[HomeControler::class,'Data'])->name('Data');
	Route::get('Step_1_Invite_User_to_Current_Project',[HomeControler::class,'Step_1_Invite_User_to_Current_Project'])->name('Step_1_Invite_User_to_Current_Project');
	
	Route::get('Step_2_Attach_Layer',[HomeControler::class,'Step_2_Attach_Layer'])->name('Step_2_Attach_Layer');
	Route::get('Step_2b_Detach_Layer',[HomeControler::class,'Step_2b_Detach_Layer'])->name('Step_2b_Detach_Layer');
	Route::get('Step_2c_Share_Data',[HomeControler::class,'Step_2c_Share_Data'])->name('Step_2c_Share_Data');
	Route::get('Step_2d_Unshare_Data',[HomeControler::class,'Step_2d_Unshare_Data'])->name('Step_2d_Unshare_Data');
	Route::get('Step_2e_Delete_Data',[HomeControler::class,'Step_2e_Delete_Data'])->name('Step_2e_Delete_Data');
	Route::get('Step_2f_View_Projects',[HomeControler::class,'Step_2f_View_Projects'])->name('Step_2f_View_Projects');
	Route::get('Step_2g_Adjust_Elevation',[HomeControler::class,'Step_2g_Adjust_Elevation'])->name('Step_2g_Adjust_Elevation');
	Route::get('Schedule',[HomeControler::class,'Schedule'])->name('Schedule');
	Route::get('Step_3_Add_Schedule',[HomeControler::class,'Step_3_Add_Schedule'])->name('Step_3_Add_Schedule');
	Route::get('Config',[HomeControler::class,'Config'])->name('Config');
	Route::get('Step_3b_Revise_Schedule',[HomeControler::class,'Step_3b_Revise_Schedule'])->name('Step_3b_Revise_Schedule');
	Route::get('Step_4_ProjectWise',[HomeControler::class,'Step_4_ProjectWise'])->name('Step_4_ProjectWise');
	Route::get('Step_4b_Power_BI',[HomeControler::class,'Step_4b_Power_BI'])->name('Step_4b_Power_BI');
	Route::get('Project',[HomeControler::class,'Project'])->name('Project');
	Route::get('Step_5_Edit_Project',[HomeControler::class,'Step_5_Edit_Project'])->name('Step_5_Edit_Project');

	Route::get('Main_Tool',[HomeControler::class,'Main_Tool'])->name('Main_Tool');
	Route::get('Reveron_Insights_Overview',[HomeControler::class,'Reveron_Insights_Overview'])->name('Reveron_Insights_Overview');
	Route::get('Main_Tool_Globe',[HomeControler::class,'Main_Tool_Globe'])->name('Main_Tool_Globe');
	Route::get('Main_Tool_Home',[HomeControler::class,'Main_Tool_Home'])->name('Main_Tool_Home');
	Route::get('Main_Tool_Layer',[HomeControler::class,'Main_Tool_Layer'])->name('Main_Tool_Layer');
	Route::get('Main_Tool_Move',[HomeControler::class,'Main_Tool_Move'])->name('Main_Tool_Move');
	Route::get('Main_Tool_Scene_Mode',[HomeControler::class,'Main_Tool_Scene_Mode'])->name('Main_Tool_Scene_Mode');
	Route::get('Main_Tool_Street_Map',[HomeControler::class,'Main_Tool_Street_Map'])->name('Main_Tool_Street_Map');
	Route::get('Measurement_Tool',[HomeControler::class,'Measurement_Tool'])->name('Measurement_Tool');
	
	Route::get('Measurement_Tool_Area',[HomeControler::class,'Measurement_Tool_Area'])->name('Measurement_Tool_Area');
	Route::get('Measurement_Tool_Length',[HomeControler::class,'Measurement_Tool_Length'])->name('Measurement_Tool_Length');
	Route::get('Measurement_Tool_Point',[HomeControler::class,'Measurement_Tool_Point'])->name('Measurement_Tool_Point');
	Route::get('Admin_Tool',[HomeControler::class,'Admin_Tool'])->name('Admin_Tool');
	Route::get('Admin_Tool_Administrative',[HomeControler::class,'Admin_Tool_Administrative'])->name('Admin_Tool_Administrative');
	Route::get('Admin_Tool_Upload',[HomeControler::class,'Admin_Tool_Upload'])->name('Admin_Tool_Upload');
	
    Route::get('Admin_Administrative_Add_Camera',[HomeControler::class,'Admin_Administrative_Add_Camera'])->name('Admin_Administrative_Add_Camera');
	Route::get('Admin_Administrative_Delete_Entity',[HomeControler::class,'Admin_Administrative_Delete_Entity'])->name('Admin_Administrative_Delete_Entity');
	Route::get('Admin_Administrative_Draw_Entity',[HomeControler::class,'Admin_Administrative_Draw_Entity'])->name('Admin_Administrative_Draw_Entity');
	Route::get('Admin_Administrative_Edit_Location',[HomeControler::class,'Admin_Administrative_Edit_Location'])->name('Admin_Administrative_Edit_Location');
	Route::get('Admin_Administrative_Mark_Location',[HomeControler::class,'Admin_Administrative_Mark_Location'])->name('Admin_Administrative_Mark_Location');
    Route::get('Admin_Tool_Manage_Layer',[HomeControler::class,'Admin_Tool_Manage_Layer'])->name('Admin_Tool_Manage_Layer');
	Route::get('Navigation_Tool',[HomeControler::class,'Navigation_Tool'])->name('Navigation_Tool');

	Route::get('Navigation_Tool_Arrange_View',[HomeControler::class,'Navigation_Tool_Arrange_View'])->name('Navigation_Tool_Arrange_View');
	Route::get('Navigation_Tool_Asset_Table',[HomeControler::class,'Navigation_Tool_Asset_Table'])->name('Navigation_Tool_Asset_Table');
	Route::get('Navigation_Tool_Camera_Feed',[HomeControler::class,'Navigation_Tool_Camera_Feed'])->name('Navigation_Tool_Camera_Feed');
	Route::get('Navigation_Tool_Dashboard',[HomeControler::class,'Navigation_Tool_Dashboard'])->name('Navigation_Tool_Dashboard');
	Route::get('Navigation_Tool_Folder_Directory',[HomeControler::class,'Navigation_Tool_Folder_Directory'])->name('Navigation_Tool_Folder_Directory');
	Route::get('Navigation_Tool_Gantt_Chart',[HomeControler::class,'Navigation_Tool_Gantt_Chart'])->name('Navigation_Tool_Gantt_Chart');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    






    
    
    
    
});

