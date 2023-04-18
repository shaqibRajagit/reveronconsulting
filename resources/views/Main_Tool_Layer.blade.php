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
                                <li class="current">Layer</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Layer</h4>
                            <p class="para1">Layer tools allows user to view, select and fly to the selected layer.</p>
                            <p class="para2">1.	Navigate to the Layer button.</p>
                            <p class="para3" style="margin-left:20px">a) Click the <b>Floating Action button</b> > <b>Main Tool</b> > <b>Layer</b>.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note</b>:  A layer window will pop up on the left of the screen.</p>
                            <p class="para5">2.	Click on the checkbox to turn on specific layer.</p>
                            <p class="para6">3.	Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/layer_window/binoculars.png" alt="">to fly to the location of the layer.</p>
                            <p class="para7">4.	Click and drag<img style="width: 25px; vertical-align: middle;"src="../Images/icons/layer_window/corner-handle2.png" alt="">to move the layer to top or bottom.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Main_Tool" class="previous">&#8678;</a>
                            <a href="Main_Tool_Globe" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-3").css("display","block")
        $("#tl4-3-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>