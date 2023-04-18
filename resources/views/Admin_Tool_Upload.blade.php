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
                                <li class="current">Upload</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Upload</h4>
                            <p class="para1">There are 2 types of files that user can upload using the upload tool. The files are:</p>
                            <p class="para2" style="margin-left:20px">i. KML (Keyhole Mark-up Language).</p>
                            <p class="para3" style="margin-left:20px">ii. B3DM (Batched 3D Model).</p><br>
                            <p class="para4">1. Navigate to the Upload button by click the <b>Floating Action button</b> > <b>Administration</b> > <b>Upload</b>.</p>
                            <p class="para5">2. Choose type of file user want to upload (KML or B3DM)</p>
                            <p class="para6" style="margin-left:20px">a) Click the KML Tab to upload KML file.</p>
                            <p class="para7" style="margin-left:20px">b) Click the B3DM to upload B3DM file.</p>
                            <p class="para6">3.	Click <kbd>ADD FILE</kbd> to add file.</p>
                            <p class="para7">4.	Browse file from local storage and click <kbd>OPEN</kbd> .</p>
                            <p class="para8">5.	Click <kbd>START UPLOAD</kbd> to upload the file.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Tool" class="previous">&#8678;</a>
                            <a href="Admin_Tool_Administrative" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#tl4-7-1").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>