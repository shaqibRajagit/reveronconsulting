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
                                <li class="current">Step 4: Create Project</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 4: Create Project</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/project2.png" alt=""><b>Project</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/newproject.png" alt=""><b>New Project</b>.</p>
                            <p class="para2">2.	Fill in the <b>project details</b> at the first page of the Wizard. When finish, click <b>Next</b>.</p>
                            <img style="width: 600px" src="../Images/icons/documentation/pages/system_administration_Step4_2.png" alt="">
                            <p class="para3">3.	Fill in the <b>Project Timeline</b> information and click <b>Next</b>.</p>
                            <p class="para4">4.	Draw the project area boundary by holding the <b>SHIFT + Left Mouse</b> Click. When satisfied, click <b>Next</b>.</p>
                            <img style="width: 600px" src="../Images/icons/documentation/pages/system_administration_Step4_4.png" alt="">
                            <p class="para5">5.	<b>Tick</b> the <b>checkbox</b> on the left and assigning their role for the project. When finish, click <b>Next</b>.</p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/system_administration_Step4_5.png" alt="">
                            <p class="para6" style="margin-left:20px"><b>**Note:</b></p>
                            <p class="para7" style="margin-left:40px">• Use the search input to search for user’s email.</p>
                            <p class="para8" style="margin-left:40px">• Reset selection by checking the tick all checkbox and unchecking it.</p>
                            <p class="para9">6.	Review the project details. When satisfied, click <b>Save</b> to complete the process. Admin can go back to previous page to edit project detail by clicking the <b>Back</b> button.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Projects_Configuration" class="previous">&#8678;</a>
                            <a href="Step_4b_Update_Edit_Project_Information" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-5").css("display","block")
        $("#tl2-5-1").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
 </html>

    