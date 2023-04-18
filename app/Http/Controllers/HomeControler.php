<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client_new;
use App\Models\client_management;
use DB;
class HomeControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /** 
     * Show the form for creating a new resource.
     * 
     
     * @return \Illuminate\Http\Response
     */
    public function Introduction_Overview()
    {
        return view('Introduction_Overview');
    }
    public function What_is_included_into_the_system_provision()
    {
        return view('What_is_included_into_the_system_provision');
    }
    public function What_is_Example_Project()
    {
        return view('What_is_Example_Project');
    }
    public function Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account()
    {
        return view('Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account');
    }
    public function Step_2_Validate_User_Account_details()
    {
        return view('Step_2_Validate_User_Account_details');
    }
    public function Step_2b_Change_Account_Information()
    {
        return view('Step_2b_Change_Account_Information');
    }
    public function Users_Configuration()
    {
        return view('Users_Configuration');
    }
    
    public function System_Administration_Overview()
    {
        return view('System_Administration_Overview');
    }
    public function Step_3_Create_User_Individually()
    {
        return view('Step_3_Create_User_Individually');
    }
    public function Step_3b_Create_User_Using_the_Import_from_Excel_Tool()
    {
        return view('Step_3b_Create_User_Using_the_Import_from_Excel_Tool');
    }
        
    public function Step_3c_Update_User_Information()
    {
        return view('Step_3c_Update_User_Information');
    }
    public function Step_3d_Archive_User()
    {
        return view('Step_3d_Archive_User');
    }
    public function Step_3e_Restore_User()
    {
        return view('Step_3e_Restore_User');
    }
    public function Step_3f_Permanently_Delete_User()
    {
        return view('Step_3f_Permanently_Delete_User');
    }
    public function Projects_Configuration()
    {
        return view('Projects_Configuration');
    }	
    	
    public function Step_4b_Update_Edit_Project_Information()
    {
        return view('Step_4b_Update_Edit_Project_Information');
    }
    public function Step_4_Create_Project()
    {
        return view('Step_4_Create_Project');
    }
    public function Step_4c_Archiving_Project()
    {
        return view('Step_4c_Archiving_Project');
    }
    public function Step_4d_Recover_Project()
    {
        return view('Step_4d_Recover_Project');
    }
    public function Step_4e_Permanently_Delete_Project()
    {
        return view('Step_4e_Permanently_Delete_Project');
    }
    
    public function Project_Administration_Overview()
    {
        return view('Project_Administration_Overview');
    }
    public function User()
    {
        return view('User');
    }
    
    public function Data()
    {
        return view('Data');
    }
    public function Step_1_Invite_User_to_Current_Project()
    {
        return view('Step_1_Invite_User_to_Current_Project');
    }
    public function Step_1b_Remove_User_from_Current_Project()
    {
        return view('Step_1b_Remove_User_from_Current_Project');
    }
    
public function Step_2_Attach_Layer()
    {
        return view('Step_2_Attach_Layer');
    }
    
    public function Step_2b_Detach_Layer()
    {
        return view('Step_2b_Detach_Layer');
    }
    public function Step_2c_Share_Data()
    {
        return view('Step_2c_Share_Data');
    }
    public function Step_2d_Unshare_Data()
    {
        return view('Step_2d_Unshare_Data');
    }
    public function Step_2e_Delete_Data()
    {
        return view('Step_2e_Delete_Data');
    }
    public function Step_2f_View_Projects()
    {
        return view('Step_2f_View_Projects');
    }
    public function Step_2g_Adjust_Elevation()
    {
        return view('Step_2g_Adjust_Elevation');
    }
    public function Schedule()
    {
        return view('Schedule');
    }
    
    public function Step_3_Add_Schedule()
    {
        return view('Step_3_Add_Schedule');
    }
    public function Step_3b_Revise_Schedule()
    {
        return view('Step_3b_Revise_Schedule');
    }
    public function Config()
    {
        return view('Config');
    }
    
    public function Step_4_ProjectWise()
    {
        return view('Step_4_ProjectWise');
    }
    public function Step_4b_Power_BI()
    {
        return view('Step_4b_Power_BI');
    }
    public function Project()
    {
        return view('Project');
    }
    public function Step_5_Edit_Project()
    {
        return view('Step_5_Edit_Project');
    }
    
    public function Main_Tool()
    {
        return view('Main_Tool');
    }
    public function Reveron_Insights_Overview()
    {
        return view('Reveron_Insights_Overview');
    }
    
    public function Main_Tool_Globe()
    {
        return view('Main_Tool_Globe');
    }
    public function Main_Tool_Home()
    {
        return view('Main_Tool_Home');
    }
    public function Main_Tool_Layer()
    {
        return view('Main_Tool_Layer');
    }
    public function Main_Tool_Move()
    {
        return view('Main_Tool_Move');
    }
    public function Main_Tool_Scene_Mode()
    {
        return view('Main_Tool_Scene_Mode');
    }
    public function Main_Tool_Street_Map()
    {
        return view('Main_Tool_Street_Map');
    }
    public function Measurement_Tool()
    {
        return view('Measurement_Tool');
    }
    
    public function Measurement_Tool_Area()
    {
        return view('Measurement_Tool_Area');
    }
    public function Measurement_Tool_Length()
    {
        return view('Measurement_Tool_Length');
    }
    public function Measurement_Tool_Point()
    {
        return view('Measurement_Tool_Point');
    }
    public function Admin_Tool()
    {
        return view('Admin_Tool');
    }
    
    public function Admin_Tool_Administrative()
    {
        return view('Admin_Tool_Administrative');
    }
    public function Admin_Tool_Upload()
    {
        return view('Admin_Tool_Upload');
    }
    
    public function Admin_Administrative_Add_Camera()
    {
        return view('Admin_Administrative_Add_Camera');
    }
    public function Admin_Administrative_Delete_Entity()
    {
        return view('Admin_Administrative_Delete_Entity');
    }
    public function Admin_Administrative_Draw_Entity()
    {
        return view('Admin_Administrative_Draw_Entity');
    }
    public function Admin_Administrative_Edit_Location()
    {
        return view('Admin_Administrative_Edit_Location');
    }
    public function Admin_Administrative_Mark_Location()
    {
        return view('Admin_Administrative_Mark_Location');
    }
    
    public function Admin_Tool_Manage_Layer()
    {
        return view('Admin_Tool_Manage_Layer');
    }
    public function Navigation_Tool()
    {
        return view('Navigation_Tool');
    }
    
    public function Navigation_Tool_Arrange_View()
    {
        return view('Navigation_Tool_Arrange_View');
    }
    public function Navigation_Tool_Asset_Table()
    {
        return view('Navigation_Tool_Asset_Table');
    }
    public function Navigation_Tool_Camera_Feed()
    {
        return view('Navigation_Tool_Camera_Feed');
    }
    public function Navigation_Tool_Dashboard()
    {
        return view('Navigation_Tool_Dashboard');
    }
    public function Navigation_Tool_Folder_Directory()
    {
        return view('Navigation_Tool_Folder_Directory');
    }
    public function Navigation_Tool_Gantt_Chart()
    {
        return view('Navigation_Tool_Gantt_Chart');
    }
}
