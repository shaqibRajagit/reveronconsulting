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
                                <li class="current">Step 2b: Change Account Information</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>Step 2b: Change Account Information</h4>
                            <p class="para1">1.	At the Account page, click on the Change Account Information.</p>
                            <p class="para2">2.	Fill in the details as requested.</p>
                            <p class="para3">3.	Upon clicked Submit, the request will be sent to Reveron Support team for action.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_2_Validate_User_Account_details" class="previous">&#8678;</a>
                            <a href="System_Administration_Overview" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button1").css("display","block")
        $("#button1-4").css("display","block")
        $("#tl1-4-3").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl1-4 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>