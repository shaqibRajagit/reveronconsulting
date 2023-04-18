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
                                <li><a href="Project_Administration_Overview">Project Administration</a></li>
                                <li><a href="Schedule">Schedule</a></li>
                                <li class="current">Step 3: Add Schedule</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Project Administration</h3></div>
                        <div class="container-content">
                            <h4>Step 3: Add Schedule</h4>
                            <p class="para1">1.	Navigate to the sidebar and click<img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/calendar.png" alt=""><b>Data</b> ><img style="width: 25px; vertical-align: middle;"src="../Images/icons/admin_page/sidebar/light_color/editcalendar.png" alt=""><b>Add Schedule</b>.</p>
                            <p class="para2">2.	Select schedule type (weekly, monthly or quarterly).</p>
                            <p class="para3">3.	Select one of the schedules from the schedule list.</p>
                            <p class="para4">4.	Click the <kbd>ADD SCHEDULE</kbd> button.</p>
                            <p class="para5">5.	Click <kbd>CHOOSE FILE</kbd> button in the pop-up form.</p>
                            <p class="para6">6.	Browse and select .xml file to be added.</p>
                            <p class="para7">7.	Once satisfied, click <kbd>SAVE</kbd> button to save the uploaded schedule.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Schedule" class="previous">&#8678;</a>
                            <a href="Step_3b_Revise_Schedule" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button3").css("display","block")
        $("#button3-7").css("display","block")
        $("#tl3-7-1").addClass("active")
        $("#fl3 img").attr('src','../Images/icons/documentation/minus.png')
        $("#sl3-7 img").attr('src','../Images/icons/documentation/minus(1).png')
    });
    </script>
    </body>
</html>