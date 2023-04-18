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
                                <li><a href="Users_Configuration">Users Configuration</a></li>
                                <li class="current">Step 3:	Create User Individually</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 3:	Create User Individually</h4>
                            <p class="para1">1.	Navigate to Sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b> ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/adduser.png" alt=""><b>Add User</b>.</p>
                            <p class="para2">2.	A New User form will be prompted. Fill in the user information accordingly. Click the <b>Next</b> button when finished.</p>  
                            <p class="para3" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para4" style="margin-left:40px">• Username/Email column is used as login ID for user account. Hence, it must be unique per each Reveron Insights instance.</p>
                            <p class="para5" style="margin-left:40px">•	The Role column is used for Asset Management module of the Reveron Insights only.</p>
                            <p class="para6" style="margin-left:40px">•	There are only 2 User Types, namely System Admin and User. Only user account with System Admin role can access into the System Admin App.</p>
                            <p class="para7">3. Review the User Information. When satisfied, click <b>Save</b> to save to create the user.</p>
                            <p class="para8">4. To see the created user, navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeuser.png" alt=""><b>Active User</b>.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Users_Configuration" class="previous">&#8678;</a>
                            <a href="Step_3b_Create_User_Using_the_Import_from_Excel_Tool" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
                
            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-3").css("display","block")
        $("#tl2-3-1").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>