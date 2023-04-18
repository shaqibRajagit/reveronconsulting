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
                                <li><a href="Main_Tool">Main Tool</a></li>
                                <li class="current">Street Map</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Street Map</h4>
                            <p class="para1">Scene tool allows user to toggle the globe between satellite map and street map.</p>
                            <p class="para2">1.	Navigate to the Street Map button.</p>
                            <p class="para3" style="margin-left:20px">a) Click the <b>Floating Action button</b> > <b>Main Tool</b> > <b>Street Map</b>.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note</b>:  The globe will change from satellite view to street view.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Main_Tool_Scene_Mode" class="previous">&#8678;</a>
                            <a href="Measurement_Tool" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-3").css("display","block")
        $("#tl4-3-6").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>