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
                                <li class="current">Data</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Data</h4>
                            <p class="para1">Another aspect that available in Project Admin App, is Data configuration. As project admin, user will be able to access this configuration setting and manage uploaded Layer data inside Reveron Insight. Data uploaded in upload tool can be attached and detach, share and delete from a given project. This section will be discovering the functionality offered in Data configuration. Followings are the functionality offered in Data configuration:</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Step_2_Attach_Layer">Attach Layer</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Step_2b_Detach_Layer">Detach Layer</a></p>
                            <p class="para4" style="margin-left:20px">3. <a href="Step_2c_Share_Data">Share Data</a></p>
                            <p class="para5" style="margin-left:20px">4. <a href="Step_2d_Unshare_Data">Unshare Data</a></p>
                            <p class="para6" style="margin-left:20px">5. <a href="Step_2e_Delete_Data">Delete Data</a></p>
                            <p class="para7" style="margin-left:20px">6. <a href="Step_2f_View_Projects">View Projects</a></p>
                            <p class="para8" style="margin-left:20px">7. <a href="Step_2g_Adjust_Elevation">Adjust Elevation</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_1b_Remove_User_from_Current_Project" class="previous">&#8678;</a>
                            <a href="Step_2_Attach_Layer" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#sl3-4").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>