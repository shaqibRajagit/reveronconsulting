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
                                <li><a href="Measurement_Tool">Measurement Tool</a></li>
                                <li class="current">Point</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Point</h4>
                            <p class="para1">Point measure tool allow user to get information of selected point. This includes latitude, longitude, height and terrain height.</p>
                            <p class="para2">1.	Navigate to the Point button.</p>
                            <p class="para3" style="margin-left:20px">a) Click the <b>Floating Action button</b> > <b>Measurement</b> > <b>Point</b>.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note</b>:  Cursor will change from default to crosshair.</p>
                            <p class="para5">2.	Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/leftclick.png" alt="">on the point user want to measure.</p>
                            <p class="para6">3.	Press <kbd>ESC</kbd> to exit the tool.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Measurement_Tool" class="previous">&#8678;</a>
                            <a href="Measurement_Tool_Length" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-5").css("display","block")
        $("#tl4-5-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>