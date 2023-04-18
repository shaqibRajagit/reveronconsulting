<!DOCTYPE html>
<html lang="en" class="gr__127_0_0_1">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/themes/default/style.min.css" />
        <link rel="stylesheet" href="{{ asset('/CSS/newcss/menuAnimation.css') }}">
        <link rel="stylesheet" href="{{ asset('/CSS/newcss/clickable.css') }}">
        <link rel="stylesheet" href="{{ asset('/CSS/newcss/kbd.css') }}">
    </head>
    <body>
        <!--For top navigation bar-->
        <nav class="nav-bar active"> 
            <ul class="button">
                <li>
                    <a style="text-decoration: none;" href="https://www.reveronconsulting.com/" target="_blank" reveronconsulting.com>
                    <img src="{{ asset('/Images/icons/navbar/dark_red/logo-light.png') }}">
                    <span>Reveron Insights</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="documentation-page" id="homepage">
            <!--   sidebar    -->
            <div id="sidebar-documentation" class='active'>
                <div class="sidebar-container"><!--for scrolling-->
                    <ul class="sidebar-homelayer"><li class="home-button" rel="" id="home"><img class="non-expandable" src="../Images/icons/documentation/home.png"><a class="non-expandable" href="/home">Home</a></li></ul> 
                    <ul class="sidebar-firstlayer">
                        <li class="firstlayer-button" rel="button1" id="fl1"><img class="expandable" src="{{ asset('/Images/icons/documentation/add.png') }}"><a class="expandable">Introduction</a></li>
                        <ul class="sidebar-secondlayer" id="button1">
                            <li class="secondlayer-button non-expandable" rel=""id="sl1-1" ><img class="non-expandable" src="../Images/icons/documentation/add(1).png"><a class="non-expandable" href="Introduction_Overview">Overview</a></li>
                            <li class="secondlayer-button non-expandable" rel="" id="sl1-2" ><img class="non-expandable" src="../Images/icons/documentation/add(1).png"><a class="non-expandable" href="What_is_included_into_the_system_provision">What is included into the system provision?</a></li>
                            <li class="secondlayer-button non-expandable" rel="" id="sl1-3" ><img class="non-expandable" src="../Images/icons/documentation/add(1).png"><a class="non-expandable" href="What_is_Example_Project">What is Example Project?</a></li>
                            <li class="secondlayer-button expandable" rel="button1-4" id="sl1-4"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">How to login into Reveron Insight?</a></li>
                            <ul class="sidebar-thirdlayer" id="button1-4">
                                <li class="thirdlayer-button" rel="" id="tl1-4-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account">Step 1: Login to the Reveron Insights with the System Admin Account</a></li>
                                <li class="thirdlayer-button" rel="" id="tl1-4-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2_Validate_User_Account_details">Step 2: Validate User Account details</a></li>
                                <li class="thirdlayer-button" rel="" id="tl1-4-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2b_Change_Account_Information">Step 2b: Change Account Information</a></li>
                            </ul>
                        </ul>
                        <li class="firstlayer-button" rel="button2" id="fl2"><img class="expandable" src="../Images/icons/documentation/add.png"><a class="expandable">System Administration</a></li>
                        <ul class="sidebar-secondlayer" id="button2">
                            <li class="secondlayer-button non-expandable" rel="" id="sl2-1" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="System_Administration_Overview">Overview</a></li>
                            <li class="secondlayer-button non-expandable" rel="" id="sl2-2" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Users_Configuration">Users Configuration</a></li>
                            <li class="secondlayer-button expandable" rel="button2-3" id="sl2-3"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable" >Users Configuration Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button2-3">
                                <li class="thirdlayer-button" rel="" id="tl2-3-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3_Create_User_Individually">Step 3: Create User Individually</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-3-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3b_Create_User_Using_the_Import_from_Excel_Tool">Step 3b: Create User Using the “Import from Excel” Tool</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-3-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3c_Update_User_Information">Step 3c: Update User Information</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-3-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3d_Archive_User">Step 3d: Archive User(s)</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-3-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3e_Restore_User">Step 3e: Restore User(s)</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-3-6"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3f_Permanently_Delete_User">Step 3f: Permanently Delete User(s)</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl2-4" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Projects_Configuration">Projects Configuration</a></li>
                            <li class="secondlayer-button expandable" rel="button2-5" id="sl2-5"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Projects Configuration Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button2-5">
                                <li class="thirdlayer-button" rel="" id="tl2-5-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4_Create_Project">Step 4: Create Project</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-5-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4b_Update_Edit_Project_Information">Step 4b: Update/Edit Project Information</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-5-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4c_Archiving_Project">Step 4c: Archiving Project</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-5-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4d_Recover_Project">Step 4d:	Recover Project(s)</a></li>
                                <li class="thirdlayer-button" rel="" id="tl2-5-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4e_Permanently_Delete_Project">Step 4e: Permanently Delete Project(s)</a></li>
                            </ul>
                        </ul>
                        <li class="firstlayer-button" rel="button3" id="fl3"><img class="expandable" src="../Images/icons/documentation/add.png"><a class="expandable">Project Administration</a></li>
                        <ul class="sidebar-secondlayer" id="button3">
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-1" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Project_Administration_Overview">Overview</a></li>
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-2" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="User">User</a></li>
                            <li class="secondlayer-button expandable" rel="button3-3" id="sl3-3"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">User Functionality Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button3-3">
                                <li class="thirdlayer-button" rel="" id="tl3-3-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_1_Invite_User_to_Current_Project">Step 1: Invite User to Current Project</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-3-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_1b_Remove_User_from_Current_Project">Step 1b: Remove User from Current Project</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-4" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Data">Data</a></li>
                            <li class="secondlayer-button expandable" rel="button3-5" id="sl3-5"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Data Functionality Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button3-5">
                                <li class="thirdlayer-button" rel="" id="tl3-5-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2_Attach_Layer">Step 2: Attach Layer</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2b_Detach_Layer">Step 2b: Detach Layer</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2c_Share_Data">Step 2c: Share Data</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2d_Unshare_Data">Step 2d: Unshare Data</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2e_Delete_Data">Step 2e: Delete Data</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-6"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2f_View_Projects">Step 2f: View Projects</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-5-7"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_2g_Adjust_Elevation">Step 2g: Adjust Elevation</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-6" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Schedule">Schedule</a></li>
                            <li class="secondlayer-button expandable" rel="button3-7" id="sl3-7"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Schedule Functionality Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button3-7">
                                <li class="thirdlayer-button" rel="" id="tl3-7-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3_Add_Schedule">Step 3: Add Schedule</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-7-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_3b_Revise_Schedule">Step 3b: Revise Schedule</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-8" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Config">Config</a></li>
                            <li class="secondlayer-button expandable" rel="button3-9" id="sl3-9"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Config Functionality Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button3-9">
                                <li class="thirdlayer-button" rel="" id="tl3-9-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4_ProjectWise">Step 4: ProjectWise</a></li>
                                <li class="thirdlayer-button" rel="" id="tl3-9-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_4b_Power_BI">Step 4b: Power BI</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl3-10" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Project">Project</a></li>
                            <li class="secondlayer-button expandable" rel="button3-11" id="sl3-11"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Project Functionality Steps</a></li>
                            <ul class="sidebar-thirdlayer" id="button3-11">
                                <li class="thirdlayer-button" rel="" id="tl3-11-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Step_5_Edit_Project">Step 5: Edit Project</a></li>
                            </ul>
                        </ul>
                        <li class="firstlayer-button" rel="button4" id="fl4"><img class="expandable" src="../Images/icons/documentation/add.png"><a class="expandable">Reveron Insights</a></li>
                        <ul class="sidebar-secondlayer" id="button4">
                            <li class="secondlayer-button non-expandable" rel="" id="sl4-1" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Reveron_Insights_Overview">Overview</a></li>
                            <li class="secondlayer-button non-expandable" rel="" id="sl4-2" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool">Main Tool</a></li>
                            <li class="secondlayer-button expandable" rel="button4-3" id="sl4-3"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Main Tool Features</a></li>
                            <ul class="sidebar-thirdlayer" id="button4-3">
                                <li class="thirdlayer-button" rel="" id="tl4-3-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Layer">Layer</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-3-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Globe">Globe</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-3-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Home">Home</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-3-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Move">Move</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-3-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Scene_Mode">Scene Mode</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-3-6"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Main_Tool_Street_Map">Street Map</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl4-4" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Measurement_Tool">Measurement Tool</a></li>
                            <li class="secondlayer-button expandable" rel="button4-5" id="sl4-5"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Measurement Tool Features</a></li>
                            <ul class="sidebar-thirdlayer" id="button4-5">
                                <li class="thirdlayer-button" rel="" id="tl4-5-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Measurement_Tool_Point">Point</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-5-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Measurement_Tool_Length">Length</a></li>
                                <li class="thirdlayer-button" rel="Measureen_Tool_Area" id="tl4-5-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Measurement_Tool_Area">Area</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl4-6" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Tool">Admin Tool</a></li>
                            <li class="secondlayer-button expandable" rel="button4-7" id="sl4-7"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Admin Tool Features</a></li>
                            <ul class="sidebar-thirdlayer" id="button4-7">
                                <li class="thirdlayer-button" rel="" id="tl4-7-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Tool_Upload">Upload</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-7-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Tool_Administrative">Administrative</a></li>
                                <li class="thirdlayer-button expandable" rel="button4-7-3" id="tl4-7-3"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Administrative Functionalities</a></li>
                                <ul class="sidebar-fourthlayer" id="button4-7-3">
                                    <li class="fourthlayer-button" rel="" id="fol4-7-3-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Administrative_Draw_Entity">Draw Entity</a></li>
                                    <li class="fourthlayer-button" rel="" id="fol4-7-3-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Administrative_Mark_Location">Mark Location</a></li>
                                    <li class="fourthlayer-button" rel="" id="fol4-7-3-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Administrative_Edit_Location">Edit Location</a></li>
                                    <li class="fourthlayer-button" rel="" id="fol4-7-3-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Administrative_Add_Camera">Add Camera</a></li>
                                    <li class="fourthlayer-button" rel="" id="fol4-7-3-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Administrative_Delete_Entity">Delete Entity</a></li>
                                </ul>
                                <li class="thirdlayer-button" rel="" id="tl4-7-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Admin_Tool_Manage_Layer">Manage Layer</a></li>
                            </ul>
                            <li class="secondlayer-button non-expandable" rel="" id="sl4-8" ><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool">Navigation Tool</a></li>
                            <li class="secondlayer-button expandable" rel="button4-9" id="sl4-9"><img class="expandable" src="../Images/icons/documentation/add(1).png"><a class="expandable">Navigation Tool Features</a></li>
                            <ul class="sidebar-thirdlayer" id="button4-9">
                                <li class="thirdlayer-button" rel="" id="tl4-9-1"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Asset_Table">Asset Table</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-9-2"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Camera_Feed">Camera Feed</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-9-3"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Arrange_View">Arrange View</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-9-4"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Gantt_Chart">Gantt Chart</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-9-5"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Dashboard">Dashboard</a></li>
                                <li class="thirdlayer-button" rel="" id="tl4-9-6"><img class="non-expandable" src="../Images/icons/documentation/add.png"><a class="non-expandable" href="Navigation_Tool_Folder_Directory">Folder Directory</a></li>
                            </ul>
                        </ul>
                    </ul>
                </div>
            </div>
            
            
            <!--   main    -->
            <div id="main-documentation" >
                <!--Home-->
                <div class = 'main-container' id="homepage">
                    <div class="container-header"><h3 class="headerText">Home</h3></div>
                    <div class="container-content">
                        <!-- Print -->
                        <a class="printer" href="../RI Documentation/System_Configuration_Manual_v1.docx" download="System Configuration Manual.docx">
                            <img style="width: 30px"src="{{ asset('/Images/icons/documentation/printer.png') }}">
                        </a>
                            
        <script src="{{ asset('/JS/formsanimation.js') }}"></script>
        <script src="{{ asset('/JS/navbaranimation.js') }}"></script>
        <script src="{{ asset('/JS/homepage.js') }}"></script>
    
