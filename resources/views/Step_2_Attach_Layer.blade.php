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
                                <li><a href="Project_Administration_Overview">Project Administration</a></li>
                                <li><a href="Data">Data</a></li>
                                <li class="current">Step 2: Attach Layer</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 2: Attach Layer</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/data.png" alt=""><b>Data</b>.</p>
                            <p class="para2">2.	Select a layer in the Layer Data Table.</p>
                            <p class="para3" style="margin-left:20px">a) Click <b>row</b> of Data listed in the Layer Data table.</p>
                            <p class="para4" style="margin-left:20px">b) Admin can use the <b>search text field</b> to search for Layer Data name.</p>
                            <p class="para5">3.	Click the <kbd>ATTACH</kbd> button to attach the layer data to current project.</p>
                            <p class="para6">4.	Enter layer name in the text field provided.</p>
                            <p class="para7">5. Click <kbd>SAVE</kbd> to complete the process.</p>
                            <p class="para8">6.	Click <b>OK</b>.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Data" class="previous">&#8678;</a>
                            <a href="Step_2b_Detach_Layer" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-5").css("display","block")
        $("#tl3-5-1").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>