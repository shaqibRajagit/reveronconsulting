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
                                <li class="current">Schedule</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Schedule</h4>
                            <p class="para1">Schedule configuration is made available for project admin in Reveron Insights. With this configuration, system admin can configure schedule to be displayed in Reveron Insights App, enabling user of a given project to view the configured project. Following are configurations that are available for project admin:</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Step_3_Add_Schedule">Add schedule</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Step_3b_Revise_Schedule">Revise schedule</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_2g_Adjust_Elevation" class="previous">&#8678;</a>
                            <a href="Step_3_Add_Schedule" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-6").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>