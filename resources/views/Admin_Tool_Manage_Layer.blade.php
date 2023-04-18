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
                                <li class="current">Manage Layer</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Manage Layer</h4>
                            <p class="para1">Manage layer allows user to manage layer into the project. With this tool, user will be able to rename layer name, detach/reattach layer and make the layer as default:</p>
                            <p class="para2">1.	Navigate to the Manage Layer button by click the <b>Floating Action button</b> > <b>Admin Tool</b> > <b>Manage Layer</b>.</p>
                            <p class="para3">2.	Select one of the layers listed in the layer list.</p>
                            <p class="para4">3.	Click <kbd>EDIT</kbd> to edit the layer name.</p>
                            <p class="para5">4.	Click <kbd>SAVE</kbd> to save new layer name.</p>
                            <p class="para6">5.	Click <kbd>DETACH</kbd> to detach the layer from current project.</p>
                            <p class="para7">6.	Click <kbd>TURN ON</kbd> to make the layer as default layer for the current project.</p>
                            <p class="para8">7.	Click <kbd>TURN OFF</kbd> to turn off the layer.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Administrative_Delete_Entity" class="previous">&#8678;</a>
                            <a href="Navigation_Tool" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
            
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#button4-7").css("display","block")
        $("#tl4-7-4").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl4-7 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>