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
                                <li><a href="Reveron_Insights_Overview">Reveron Insights</a></li>
                                <li><a href="Navigation_Tool">Navigation Tool</a></li>
                                <li class="current">Gantt Chart</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Gantt Chart</h4>
                            <p class="para1">1.	Navigate to the Gantt Chart button by click the <b>Floating Action button</b> > <b>Navigation</b> > <b>Gantt Chart</b>.</p>
                            <p class="para2" style="margin-left:20px"><b>**Note</b>: Gantt chart window will appear.</p>
                            <p class="para3">2.	Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/navi_tool/show_apps.png" alt="">to toggle the sidebar of the gantt chart window.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Navigation_Tool_Arrange_View" class="previous">&#8678;</a>
                            <a href="Navigation_Tool_Dashboard" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-9").css("display","block")
        $("#tl4-9-4").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-9 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>