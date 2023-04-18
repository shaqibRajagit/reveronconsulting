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
                                <li class="current">Asset Table</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Asset Table</h4>
                            <p class="para1">1.	Navigate to the Administrative button by click the <b>Floating Action button</b> > <b>Navigation</b> > <b>Asset Table</b>.</p>
                            <p class="para2">2.	Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/leftclick.png" alt="">on the asset in the asset table list.</p>
                            <p class="para3" style="margin-left:20px"><b>**Note</b>: Globe will zoom in to the location of the asset.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Navigation_Tool" class="previous">&#8678;</a>
                            <a href="Navigation_Tool_Camera_Feed" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-9").css("display","block")
        $("#tl4-9-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-9 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>