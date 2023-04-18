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
                                <li><a href="Config">Config</a></li>
                                <li class="current">Step 4b: Power BI</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 4b: Power BI</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/config.png" alt=""><b>Config</b> ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/powerbi.png" alt=""><b>Power BI</b>.</p>
                            <p class="para2">2.	Click <kbd>EDIT</kbd> button.</p>
                            <p class="para3">3.	Fill in the Power BI URL into text field.</p>
                            <p class="para4">4.	Once satisfied, click <kbd>SAVE</kbd> button to save the Power BI configuration.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4_ProjectWise" class="previous">&#8678;</a>
                            <a href="Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-9").css("display","block")
        $("#tl3-9-2").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-9 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>