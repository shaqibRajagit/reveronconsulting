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
                                <li class="current">Admin Tool</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Admin Tool</h4>
                            <p class="para1">Admin tool allows user to control over information displayed in a project.</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Admin_Tool_Upload">Upload</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Admin_Tool_Administrative">Administrative</a></p>
                            <p class="para4" style="margin-left:20px">3. <a href="Admin_Tool_Manage_Layer">Manage Layer</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Measurement_Tool_Area" class="previous">&#8678;</a>
                            <a href="Admin_Tool_Upload" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#sl4-6").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>