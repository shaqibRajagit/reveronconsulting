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
                                <li class="current">Main Tool</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Main Tool</h4>
                            <p class="para1">Main tool allows user to primarily control the globe in the main page. In addition, it makes easier for user to navigate around the globe. There are 6 features available in the Main Tool. Features includes:</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Main_Tool_Layer">Layer</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Main_Tool_Globe">Globe</a></p>
                            <p class="para4" style="margin-left:20px">3. <a href="Main_Tool_Home">Home</a></p>
                            <p class="para5" style="margin-left:20px">4. <a href="Main_Tool_Move">Move</a></p>
                            <p class="para6" style="margin-left:20px">5. <a href="Main_Tool_Scene_Mode">Scene Mode</a></p>
                            <p class="para7" style="margin-left:20px">6. <a href="Main_Tool_Street_Map">Street Map Toggle</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Reveron_Insights_Overview" class="previous">&#8678;</a>
                            <a href="Main_Tool_Layer" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#sl4-2").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>