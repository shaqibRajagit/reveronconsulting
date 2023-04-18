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
                                <li class="current">Step 3c: Update User Information</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 3c: Update User Information</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeuser.png" alt=""><b>Active User</b>.</p>
                            <p class="para2">2.	Select user to edit from the Active User table.</p>
                            <p class="para3" style="margin-left:20px">a) Click <b>row</b> of the table to have more details of the user’s information.</p>
                            <p class="para4" style="margin-left:20px">b) Admin can use the <b>search text field</b> to search for user’s email.</p>
                            <p class="para5">3.	To edit user’s detail, click the <b>Edit</b> button in the user detail popup.</p>
                            <p class="para6">4.	In the Edit User popup box, update the data accordingly. When satisfied, click <b>Next</b>.</p>
                            <p class="para7">5.	Review the updated details. When satisfied, click <b>Update</b>.</p>
                            <p class="para8">6.	A dialog box will appear. Click <b>Close</b>.</p>
                            <p class="para9">7.	To look at the updated user, navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeuser.png" alt=""><b>Active User</b>.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_3b_Create_User_Using_the_Import_from_Excel_Tool" class="previous">&#8678;</a>
                            <a href="Step_3d_Archive_User" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-3").css("display","block")
        $("#tl2-3-3").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>