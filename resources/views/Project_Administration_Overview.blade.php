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
                                <li>Project Administration</li>
                                <li class="current">Overview</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Overview</h4>
                            <p class="para1">As Project admin, user will have control over several aspects of the project. This includes users inside the project, data displayed in the project and many other. To access these controls, user must have an admin role for a given project. In general, there are 5 aspects that project admin can control in a project. Those aspects are:</p>
                            <p class="para2" style="margin-left:20px">1.	User</p>
                            <p class="para3" style="margin-left:20px">2.	Data</p>
                            <p class="para4" style="margin-left:20px">3.	Schedule</p>
                            <p class="para5" style="margin-left:20px">4.	Config</p>
                            <p class="para6" style="margin-left:20px">5.	Project</p>
                            <p class="para7">Image below shows the layout of Project Admin Page. On the left of the page, highlighted in red, is the sidebar. Top of the page, highlighted in yellow is the navigation bar while the box highlighted in blue is where the main page is displayed.</p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/project_administration_overview.png" alt="">
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4e_Permanently_Delete_Project" class="previous">&#8678;</a>
                            <a href="User" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-1").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>