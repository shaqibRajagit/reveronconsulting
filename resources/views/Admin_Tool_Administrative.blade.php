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
                                <li class="current">Administrative</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                        <h4>Administrative</h4>
                            <p class="para1">Administrative tool, has several functionalities that allows user to add or remove entity in the map/globe. Functionality in the administrative tool includes:</p>
                            <p class="para2" style="margin-left:20px">i. <a href="Admin_Administrative_Draw_Entity">Draw Entity</a></p>
                            <p class="para3" style="margin-left:20px">ii. <a href="Admin_Administrative_Mark_Location">Mark Location</a></p>
                            <p class="para4" style="margin-left:20px">iii. <a href="Admin_Administrative_Edit_Location">Edit Location</a></p>
                            <p class="para5" style="margin-left:20px">iv. <a href="Admin_Administrative_Add_Camera">Add Camera</a></p>
                            <p class="para6" style="margin-left:20px">v. <a href="Admin_Administrative_Delete_Entity">Delete Entity</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Tool_Upload" class="previous">&#8678;</a>
                            <a href="Admin_Administrative_Draw_Entity" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#tl4-7-2").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>