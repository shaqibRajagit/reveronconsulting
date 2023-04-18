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
                                <li class="current">User</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>User</h4>
                            <p class="para1">In the user aspect of Project Admin App, user can invite or remove user from a given project. Here, project admin users will be exposed on how to do the following functionality in the Project Admin:</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Step_1_Invite_User_to_Current_Project">Invite user to current project</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Step_1b_Remove_User_from_Current_Project">Remove user from current project</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Project_Administration_Overview" class="previous">&#8678;</a>
                            <a href="Step_1_Invite_User_to_Current_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-2").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>