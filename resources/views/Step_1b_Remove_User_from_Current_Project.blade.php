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
                                <li><a href="Project_Administration_Overview">Project Administration</a></li>
                                <li><a href="User">User</a></li>
                                <li class="current">Step 1b: Remove User from Current Project</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 1b: Remove User from Current Project</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/user.png" alt=""><b>User</b> ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/adduser.png" alt=""><b>Add/Remove User</b>.</p>
                            <p class="para2">2.	Tick checkbox of user in the <i>Member of Project</i> table list.</p>
                            <p class="para3">3.	Click the <kbd><</kbd> (left arrow button) to invite user to the project.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para5" style="margin-left:40px">• Notice user is moved from the <i>Member of Project</i> table to <i>All Available User</i> table.</p>
                            <p class="para6" style="margin-left:40px">• Admin can double-click user in <i>Member of Project</i> table in order to add invite user to the project.</p>
                            <p class="para7">5. Click the <b>Save</b> button.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_1_Invite_User_to_Current_Project" class="previous">&#8678;</a>
                            <a href="Data" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-3").css("display","block")
        $("#tl3-3-2").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>