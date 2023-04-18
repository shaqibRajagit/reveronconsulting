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
                                <li><a href="Reveron_Insights_Overview">Reveron Insights</a></li>
                                <li class="current">Navigation Tool</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Reveron Insights</h3></div>
                        <div class="container-content">
                            <h4>Navigation Tool</h4>
                            <p class="para1">Navigation tool allows user to navigate over all aspect of the project. This includes but not limited to assets of the project, documents inside the project and information of the project itself. Below are tools that user can use in the navigation tool:</p>
                            <p class="para2" style="margin-left:20px">1. <a href="Navigation_Tool_Asset_Table">Asset Table</a></p>
                            <p class="para3" style="margin-left:20px">2. <a href="Navigation_Tool_Camera_Feed">Camera Feed</a></p>
                            <p class="para4" style="margin-left:20px">3. <a href="Navigation_Tool_Arrange_View">Arrange View</a></p>
                            <p class="para5" style="margin-left:20px">4. <a href="Navigation_Tool_Gantt_Chart">Gantt Chart</a></p>
                            <p class="para6" style="margin-left:20px">5. <a href="Navigation_Tool_Dashboard">Dashboard</a></p>
                            <p class="para7" style="margin-left:20px">6. <a href="Navigation_Tool_Folder_Directory">Folder Directory</a></p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Admin_Tool_Manage_Layer" class="previous">&#8678;</a>
                            <a href="Navigation_Tool_Asset_Table" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>

            </div>
    <script>
    $(function() {
        $("#button4").css("display","block")
        $("#sl4-8").addClass("active")
        $("#fl4 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>