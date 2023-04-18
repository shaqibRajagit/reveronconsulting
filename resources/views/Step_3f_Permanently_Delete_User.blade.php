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
                                <li class="current">Step 3f: Permanently Delete User(s)</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 3f: Permanently Delete User(s)</h4>
                            
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/deleteduser.png" alt=""><b>Inactive User</b>.</p>
                            <p class="para2">2.	Select user to edit from the Inactive User table.</p>
                            <p class="para3" style="margin-left:20px">a) Tick the checkbox of user account that the admin wants to permanently remove from the system.</p>
                            <p class="para4" style="margin-left:20px">b) Admin can use the <b>search text field</b> to search for user’s email.</p>
                            <p class="para5" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para6" style="margin-left:40px">• Observe that there is a <b>Delete</b> button displayed upon ticking on the user account(s).</p>
                            <p class="para7">3. Click <b>Delete</b> to permanently delete selected user account.</p>
                            <p class="para8">4.	A confirmation alert will appear. Click <b>CONFIRM</b> to complete the process.</p>
                            <p class="para9">5. Click <b>OK</b> to continue.</p>
                            <p class="para10" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para11" style="margin-left:40px">• Observe that that the user(s) is then removed from the Inactive User List table.</p>

                        </div>
                        <div class="prevnext-button">
                            <a href="Step_3e_Restore_User" class="previous">&#8678;</a>
                            <a href="Projects_Configuration" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-3").css("display","block")
        $("#tl2-3-6").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>