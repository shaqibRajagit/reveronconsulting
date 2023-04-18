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
                                <li class="current">Step 2f: View Projects</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 2f: View Projects</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/data.png" alt=""><b>Data</b>.</p>
                            <p class="para2">2.	Select a layer in the Layer Data Table.</p>
                            <p class="para3" style="margin-left:20px">a) Click <b>row</b> of Data listed in the Layer Data table.</p>
                            <p class="para4" style="margin-left:20px">b) Admin can use the <b>search text field</b> to search for Layer Data name.</p>
                            <p class="para5">3.	Click the <kbd>VIEW PROJECTS</kbd> button.</p>
                            <p class="para6" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para7" style="margin-left:40px">• A form showing layer information will pop-up.</p>
                            <p class="para8" style="margin-left:40px">• In this form, admin can refer which project is using this layer.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_2e_Delete_Data" class="previous">&#8678;</a>
                            <a href="Step_2g_Adjust_Elevation" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-5").css("display","block")
        $("#tl3-5-6").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>