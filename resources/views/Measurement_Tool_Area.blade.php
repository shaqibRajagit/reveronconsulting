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
                                <li class="current">Area</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Area</h4>
                            <p class="para1">Area measure tool allows user to measure area of a drawn polygon.</p>
                            <p class="para2">1.	Navigate to the Area button.</p>
                            <p class="para3" style="margin-left:20px">a) Click the <b>Floating Action button</b> > <b>Measurement</b> > <b>Area</b>.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note</b>:  Cursor will change from default to crosshair.</p>
                            <p class="para5">2.	Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/leftclick.png" alt="">on the first point of measurement.</p>
                            <p class="para6">3.	Add more point by clicking<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/leftclick.png" alt="">.</p>
                            <p class="para7">4.	When satisfied, click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/rightclick.png" alt="">to finish the drawing process.</p>
                            <p class="para8">5.	Press <kbd>ESC</kbd> to exit the tool.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Measurement_Tool_Length" class="previous">&#8678;</a>
                            <a href="Admin_Tool" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-5").css("display","block")
        $("#tl4-5-3").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>