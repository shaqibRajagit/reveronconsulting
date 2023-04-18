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
                                <li><a href="Admin_Tool">Admin Tool</a></li>
                                <li><a href="Admin_Tool_Administrative">Administrative</a></li>
                                <li class="current">Draw Entity</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Draw Entity</h4>
                            <p class="para1">1.	Navigate to the Administrative button by click the <b>Floating Action button</b> > <b>Administration</b> > <b>Administrative Tool</b>.</p>
                            <p class="para2">2.	Click the <b>draw</b> button.</p>
                            <p class="para3">3. Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/leftclick.png" alt="">on the globe.</p>
                            <p class="para4">4. Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/rightclick.png" alt="">to continue.</p>
                            <p class="para5" style="margin-left:20px">a) <b>Shape</b> – Allows user to change the entity shape to box or ellipsoid.</p>
                            <p class="para6" style="margin-left:20px">b) <b>Size</b> – Allows user to change the size of selected shape.</p>
                            <p class="para7" style="margin-left:20px">c) <b>Orientation</b> – Allows user to edit the orientation of the entity.</p>
                            <p class="para8">6.	Click <kbd>SAVE</kbd> to save the drawing.</p>
                            <p class="para9" style="margin-left:20px"><b>**Note</b>:  Modal Tool will appear.</p>
                            <p class="para10">7. Fill in all mandatory fields.</p>
                            <p class="para11">8. Click <kbd>SAVE</kbd> to save the entity.</p>
                            <p class="para12">9. Click ok to continue.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Tool_Administrative" class="previous">&#8678;</a>
                            <a href="Admin_Administrative_Mark_Location" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#button4-7-3").css("display","block")
        $("#fol4-7-3-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
        $("#tl4-7-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>