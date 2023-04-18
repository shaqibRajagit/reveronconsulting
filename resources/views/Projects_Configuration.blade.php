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
                                <li class="current">Projects Configuration</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Projects Configuration</h4>
                            <p class="para1">Project is an important component for users in the Reveron Insights. Project is managed by the System Admin in the Project section of the System Admin App in the Reveron Insights. This section will be focusing on the project aspect in the System Admin App.</p>
                            <p class="para2">In the System Admin App, System Admin can:</p>
                            <p class="para3" style="margin-left:20px">1. <a href="Step_4_Create_Project">Create Project</a></p>
                            <p class="para4" style="margin-left:20px">2. <a href="Step_4b_Update_Edit_Project_Information">Update/Edit Project Information</a></p>
                            <p class="para5" style="margin-left:20px">3. <a href="Step_4c_Archiving_Project">Archive Project(s)</a></p>
                            <p class="para6" style="margin-left:20px">4. <a href="Step_4d_Recover_Project">Recover Project(s)</a></p>
                            <p class="para7" style="margin-left:20px">5. <a href="Step_4e_Permanently_Delete_Project">Permanently Delete Project(s)</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_3f_Permanently_Delete_User" class="previous">&#8678;</a>
                            <a href="Step_4_Create_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#sl2-4").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>