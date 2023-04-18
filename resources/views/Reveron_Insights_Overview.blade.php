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
                        <div>
                            <ul class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li>Reveron Insights</li>
                                <li class="current">Overview</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Overview</h4>
                            <p class="para1">Reveron Insights is the stage where user will be primarily working on. Reveron Insights App is packed with features that allows user monitor and control a given project. These features can be categorized using different tools that available based on user role in a project. All features can be categorized to these 4 tools:</p>
                            <p class="para2" style="margin-left:20px">1.	Main Tool</p>
                            <p class="para3" style="margin-left:20px">2.	Measurement Tool</p>
                            <p class="para4" style="margin-left:20px">3.	Administration Tool</p>
                            <p class="para5" style="margin-left:20px">4.	Navigation Tool</p>
                            <p class="para6">Image below shows the layout of Project Insights. On the right of the page, highlighted in yellow, is the tool buttons. Top of the page, highlighted in blue is the navigation bar while the box highlighted in red is where the main page (globe) is displayed.</p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/reveron_insights_overview.png" alt="">
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_5_Edit_Project" class="previous">&#8678;</a>
                            <a href="Main_Tool" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#sl4-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>