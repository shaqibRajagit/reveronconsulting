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
                                <li>System Administration</li>
                                <li class="current">Overview</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">System Administration</h3></div>
                        <div class="container-content">
                            <h4>Overview</h4>
                            <p class="para1">Upon confirmation of the successful login into the Reveron Insights instance, the system administrator can start project creation process. Fundamentally, there are 2 configurations required, namely:</p>
                            <p class="para2" style="margin-left:20px">1.	Users</p>
                            <p class="para3" style="margin-left:20px">2.	Projects</p>
                            <p class="para4">Image below shows the layout of System Admin Page. On the left of the page, highlighted in red, is the sidebar. Top of the page, highlighted in yellow is the navigation bar and the box highlighted in blue is where the main page is displayed.</p>
                            <img style="width: 1020px" src="../Images/icons/documentation/pages/system_administration_overview.png" alt="">
                        </div>
                        <div class="prevnext-button">
                            <a href="Step_2b_Change_Account_Information" class="previous">&#8678;</a>
                            <a href="Users_Configuration" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button2").css("display","block")
        $("#sl2-1").addClass("active")
        $("#fl2 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>