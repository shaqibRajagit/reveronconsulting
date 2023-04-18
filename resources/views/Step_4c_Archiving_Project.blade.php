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
                                <li class="current">Step 4c: Archiving Project</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 4c: Archiving Project</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/project2.png" alt=""><b>Project</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeproject.png" alt=""><b>Active Project</b>.</p>
                            <p class="para2">2.	<b>Tick</b> the <b>checkbox</b> of the project to be archived.</p>
                            <img style="width: 800px" src="../Images/icons/documentation/pages/system_administration_Step4c_2.png" alt="">
                            <p class="para3" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para4" style="margin-left:40px">• Admin can select one or more project to be archived.</p>
                            <p class="para5" style="margin-left:40px">• Observe that the Delete button is display at the upper-left of the Active Project List Table upon one or more than one project is ticked.</p>
                            <p class="para6">3.	Click <b>Archive</b>. To archive the project. </p>
                            <p class="para7">4.	Click <b>Confirm</b> button to complete the process. And click <b>OK</b> to continue.</p>
                            <p class="para8" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para9" style="margin-left:40px">• The archived project is moved from Active Project to Archived project. Admin can always restore back any archived project.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4b_Update_Edit_Project_Information" class="previous">&#8678;</a>
                            <a href="Step_4d_Recover_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-5").css("display","block")
        $("#tl2-5-3").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
 </html>