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
                                <li class="current">Move</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Move</h4>
                            <p class="para1">Move tool allows user to finely adjust the camera position. In addition to camera position, move tool also allows user to adjust the globe brightness and point cloud enhancer.</p>
                            <p class="para2">1.	Navigate to the Move button.</p>
                            <p class="para3" style="margin-left:20px">a) Click the <b>Floating Action button</b> > <b>Main Tool</b> > <b>Move</b>.</p>
                            <p class="para4">2.	Click the <b>forward</b> button to zoom the camera into an object.</p>
                            <p class="para5">3.	Click the <b>backward</b> button to zoom out the camera from the object.</p>
                            <p class="para6">4.	Click the <b>up</b> button to move the camera upward.</p>
                            <p class="para7">5.	Click the <b>down</b> button to move the camera downward.</p>
                            <p class="para8">6.	Click the <b>left</b> button to pan the camera to the left.</p>
                            <p class="para9">7.	Click the <b>right</b> button to pan the camera to the right.</p>
                            <p class="para10">8. Move the <b>brightness slider</b> to change the globe brightness.</p>
                            <p class="para11">9. Move the <b>point cloud enhancer</b> slider to change the point cloud sharpness.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Main_Tool_Home" class="previous">&#8678;</a>
                            <a href="Main_Tool_Scene_Mode" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-3").css("display","block")
        $("#tl4-3-4").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>