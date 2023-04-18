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
                                <li class="current">Delete Entity</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Delete Entity</h4>
                            <p class="para1">1.	Navigate to the Administrative button by click the <b>Floating Action button</b> > <b>Administration</b> > <b>Administrative Tool</b>.</p>
                            <p class="para2">2.	Delete selected entity.</p>
                            <p class="para3" style="margin-left:20px">a) Select an entity in the globe.</p>
                            <p class="para4" style="margin-left:20px">b) Click the delete entity button.</p>
                            <p class="para5">3. Click ok to continue.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Administrative_Add_Camera" class="previous">&#8678;</a>
                            <a href="Admin_Tool_Manage_Layer" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#button4-7-3").css("display","block")
        $("#fol4-7-3-5").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
        $("#tl4-7-3 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>