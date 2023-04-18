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
                                <li class="current">Step 3d: Archive User(s)</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 3d: Archive User(s)</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeuser.png" alt=""><b>Active User</b>.</p>
                            <p class="para2">2.	Select user to edit from the Active User table.</p>
                            <p class="para3" style="margin-left:20px">a) Tick the checkbox of user that the admin wants to archive from the system.</p>
                            <p class="para4" style="margin-left:20px">b) Admin can use the <b>search text field</b> to search for user’s email.</p>
                            <p class="para5" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para6" style="margin-left:40px">• User account deletion can be done for one or more than one at each time.</p>
                            <p class="para7" style="margin-left:40px">• When one or more checkbox is ticked, an <b>Archive</b> button along with selection counter will appear at the top.</p>
                            <p class="para8">3.	Click the <b>Archive</b> button to archive selected user(s).</p>
                            <p class="para9">4.	A confirmation alert will appear. Click <b>CONFIRM</b> to complete the process.</p>
                            <p class="para10">5. Click <b>OK</b> to continue.</p>
                            <p class="para11" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para12" style="margin-left:40px">• Observe that the user(s) selected is removed from the Active User List table.</p>
                            <p class="para13" style="margin-left:40px">• The archived user(s) is moved from the Active User section to the Inactive User section. It isn’t permanently deleted from the System yet. There is still opportunity to recover it.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_3c_Update_User_Information" class="previous">&#8678;</a>
                            <a href="Step_3e_Restore_User" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-3").css("display","block")
        $("#tl2-3-4").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>