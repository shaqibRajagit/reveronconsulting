
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
                                <li class="current">Step 1: Login to the Reveron Insights with the System Admin Account</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>Step 1: Login to the Reveron Insights with the System Admin Account.</h4>
                            <p class="para1">1.	Login into Reveron Insights at https://wsg.reveronconsulting.com with the system account details provided.</p>
                            <img style="width: 800px" src="../Images/icons/documentation/pages/introduction_Step1_1.png" alt="">
                            <p class="para2">(Note: Subjective to the license acquired by the account, the Reveron Insights at the URL above is based on shared resources, Dedicated resources can be deployed and new URL will be given.</p>
                            <p class="para3">2.	Upon clicked Login button, a selection list of Projects is displayed. As a System Admin, this account can access into the System Admin site, Besides, a default project called “Example Project” is also provided. </p>
                            <img style="width: 400px" src="../Images/icons/documentation/pages/introduction_Step1_2.png" alt="">
                            <p class="para4">3.	Select the Example Project from the project list and click Go button. You are then entering into the Reveron Insights system environment. With that, your Reveron Insights instance is tested successfully for the first-time login.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="What_is_Example_Project" class="previous">&#8678;</a>
                            <a href="Step_2_Validate_User_Account_details" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button1").css("display","block")
        $("#button1-4").css("display","block")
        $("#tl1-4-1").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl1-4 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>