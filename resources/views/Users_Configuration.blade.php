@section('content')
<h1>Home : {{ Auth::user()->name }}</h1>
@endsection


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('layouts.header');
<!--sidebar end-->
<!--main content start-->

           <div class="clickable-page" id="clickable" >
                <!--   main    -->
                <div id="main-clickable">
                    <!--About Page-->
                    <div class = 'main-container' id="clickable">
                        <div class="breadcrumb-nav">
                            <ul class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li><a href="System_Administration_Overview">System Administration</a></li>
                                <li class="current">Users Configuration</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Users Configuration</h4>
                            <p class="para1">Everyone in the project who is expecting to access their Reveron Insights instance needs a User Account. User accounts are created by the System Admin account at the System Admin App of the Reveron Insights. The System Admin App is only accessible by the System Account only. Upon provisioning a Reveron Insights instance, only a System Admin account is created. </p>
                            <p class="para2">Should you need more than 1 System Admin account for your Reveron Insights instance, refer to Step 3. The User section in the System Admin App is used for user management. System Admin basically can: </p>
                                <!--- note the link below -->
                            <p class="para3" style="margin-left:20px">1. <a href="Step_3_Create_User_Individually">Create new user individually</a> or <a href="Step_3b_Create_User_Using_the_Import_from_Excel_Tool">in a bulk using Excel</a></p>
                            <p class="para4" style="margin-left:20px">2. <a href="Step_3c_Update_User_Information">Update user information</a></p>
                            <p class="para5" style="margin-left:20px">3. <a href="Step_3d_Archive_User">Archive user(s)</a></p>
                            <p class="para6" style="margin-left:20px">4. <a href="Step_3e_Restore_User">Restore user(s)</a></p>
                            <p class="para7" style="margin-left:20px">5. <a href="Step_3f_Permanently_Delete_User">Permanently delete user(s)</a></p>
                            <p class="para8">Once a User Account is created, it can be assigned into the project(s) later. </p>
                            <p class="para9">Note: Azure Active Directory integration to be released in next release.</p>
                         </div>
                         <div class="prevnext-button">
                            <a href="System_Administration_Overview" class="previous">&#8678;</a>
                            <a href="Step_3_Create_User_Individually" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#sl2-2").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>