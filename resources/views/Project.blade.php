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
                                <li class="current">Project</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Project</h4>
                            <p class="para1">As project admin, user will have the access to the project’s particular. In the Project Admin App, project admin is given the ability to edit project particulars. This includes but not limited to project name, project start and end date as well as project location.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4b_Power_BI" class="previous">&#8678;</a>
                            <a href="Step_5_Edit_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-10").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>