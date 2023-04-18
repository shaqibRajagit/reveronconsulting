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
                                <li><a href="Project">Project</a></li>
                                <li class="current">Step 5: Edit Project</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 5: Edit Project</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/project2.png" alt=""><b>Project</b>.</p>
                            <p class="para2">2.	Click <kbd>EDIT PROJECT</kbd> button.</p>
                            <p class="para3">3.	Fill in/edit information for the project.</p>
                            <p class="para4">4.	Click <kbd>GET DATASOURCE</kbd> button to get ProjectWise data sources.</p>
                            <p class="para5">5.	Fill in ProjectWise username field and ProjectWise password field.</p>
                            <p class="para6">6.	Once satisfied, click <kbd>SAVE</kbd> button to save the uploaded schedule.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Project" class="previous">&#8678;</a>
                            <a href="Reveron_Insights_Overview" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-11").css("display","block")
        $("#tl3-11-1").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-11 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>