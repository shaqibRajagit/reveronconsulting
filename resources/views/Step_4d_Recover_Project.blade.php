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
                                <li><a href="System_Administration_Overview">System Administration</a></li>
                                <li><a href="Projects_Configuration">Projects Configuration</a></li>
                                <li class="current">Step 4d: Recover Project(s)</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 4d: Recover Project(s)</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/project2.png" alt=""><b>Project</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/archivedproject.png" alt=""><b>Archived Project</b>.</p>
                            <p class="para2">2.	<b>Tick</b> checkbox of the project to be recover.</p>
                            <p class="para3" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para4" style="margin-left:40px">• Observe that there is Recover and Delete button displayed upon ticking on the project(s).</p>
                            <p class="para5">3.	Click the <b>Recover</b> button to recover ticked project.</p>
                            <p class="para6">4.	Click <b>Confirm</b> button to continue the process. Click <b>OK</b> to finish.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4c_Archiving_Project" class="previous">&#8678;</a>
                            <a href="Step_4e_Permanently_Delete_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-5").css("display","block")
        $("#tl2-5-4").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
 </html>