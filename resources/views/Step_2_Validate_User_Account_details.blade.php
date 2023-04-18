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
                                <li><a href="Introduction_Overview">Introduction</a></li>
                                <li class="current">Step 2: Validate User Account details</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>Step 2: Validate User Account details.</h4>
                            <p class="para1">1.	Continue from Step 1, otherwise login into the Reveron Insights with the URL and account details provided.</p>
                            <p class="para2">2.	Select System Admin App:</p>
                            <p class="para3" style="margin-left:20px">a) Click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/navbar/light_color/show-apps-button.png" alt="">button on the navigation bar, to show App & Project Sidebar. </p>
                            <p class="para4" style="margin-left:20px">b) Click the<img style="width: 25px; vertical-align: middle;"src="../Images/icons/appsbar/sysadmin.png" alt="">System Admin application in the Apps section. </p>
                            <p class="para5">3.	In the System Admin page, click the<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/shield.png" alt="">Account button. </p>
                            <p class="para6">4.	Then account details will be displayed as shown in the figure below. </p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/introduction_Step2_4.png" alt="">
                            <p class="para7">5.	To update or rectify the account information, click on Change Account Information. Refer to Tutorial 2b process. </p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account" class="previous">&#8678;</a>
                            <a href="Step_2b_Change_Account_Information" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button1").css("display","block")
        $("#button1-4").css("display","block")
        $("#tl1-4-2").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl1-4 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>