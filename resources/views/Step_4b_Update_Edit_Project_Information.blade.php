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
                                <li class="current">Step 4b: Update/Edit Project Information</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 4b: Update/Edit Project Information</h4>
                            <p class="para1">1.	Navigate to Sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/project2.png" alt=""><b>Project</b>  ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/activeproject.png" alt=""><b>Active Project</b>.</p>
                            <p class="para2">2.	<b>Click</b> on one of the projects listed in the Project Table list.</p>
                            <p class="para3">3.	Click <b>Edit</b> button to update/edit the project information.</p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/system_administration_Step4b_3.png" alt="">
                            <p class="para4">4.	<b>Follow</b> the steps of the edit project wizard and fill all required fields.</p>
                            <p class="para5">5.	Review the edited project details. When satisfied, click the <b>Update</b>.</p>
                            <p class="para6">6.	Click the <b>OK</b> button to continue with the process.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_4_Create_Project" class="previous">&#8678;</a>
                            <a href="Step_4c_Archiving_Project" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#button2-5").css("display","block")
        $("#tl2-5-2").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl2-5 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
 </html>