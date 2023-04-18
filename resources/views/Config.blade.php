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
                                <li class="current">Config</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Config</h4>
                            <p class="para1">Reveron Insights has the ability to connect projects information to ProjectWise as well as Power BI. For this function to work, configuration need to be made by the project admin inside the Project Admin App. </p>
                            <p class="para2" style="margin-left:20px">1. <a href="Step_4_ProjectWise">ProjectWise</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Step_4b_Power_BI">Power BI</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_3b_Revise_Schedule" class="previous">&#8678;</a>
                            <a href="Step_4_ProjectWise" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-8").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>