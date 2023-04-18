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
                                <li class="current">What is Example Project?</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>What is Example Project?</h4>
                            <p class="para1">The Example Project is a project system environment comes with the Reveron Insights by default. It has the globe display and the relevant tools provided based on the subscription, without any of the user data loaded. It allows users to test or try out functionality offered in Reveron Insights based on their role in an organization.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="What_is_included_into_the_system_provision" class="previous">&#8678;</a>
                            <a href="Step_1_Login_to_the_Reveron_Insights_with_the_System_Admin_Account" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
    $(function() {
        $("#button1").css("display","block")
        $("#sl1-3").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>