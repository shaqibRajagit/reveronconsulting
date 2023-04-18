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
                                <li class="current">Add Camera</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Add Camera</h4>
                            <p class="para1">1.	Navigate to the Administrative button by click the <b>Floating Action button</b> > <b>Administration</b> > <b>Administrative Tool</b>.</p>
                            <p class="para2">2.	Click the <b>Add Camera</b> button.</p>
                            <p class="para3">3. Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/instructions/dark_red/rightclick.png" alt="">on the globe to mark the camera location.</p>
                            <p class="para4" style="margin-left:20px"><b>**Note</b>:  Camera Configuration Tool will appear.</p>
                            <p class="para5">4.	Select/Edit option given in the camera configuration tool.</p>
                            <p class="para6" style="margin-left:20px">a) <b>Camera Information</b> – Allows user to change Camera Name.</p>
                            <p class="para7" style="margin-left:20px">b) <b>Camera Pin Details</b> – Allows user to change height of the camera pin.</p>
                            <p class="para8">5.	Select the option to upload video or embed link.</p>
                            <p class="para9" style="margin-left:20px">a) Click on the upload video radio button to upload video, then browse video user wanted to upload.</p>
                            <p class="para10" style="margin-left:20px">b) Click on the embed link video button to embed a video link, then paste the video link to the text field provided.</p>
                            <p class="para11">8. Click <kbd>SAVE</kbd> to save the camera pin.</p>
                            <p class="para12">9. Click ok to continue.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Administrative_Edit_Location" class="previous">&#8678;</a>
                            <a href="Admin_Administrative_Delete_Entity" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#button4-7-3").css("display","block")
        $("#fol4-7-3-4").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
        $("#tl4-7-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>