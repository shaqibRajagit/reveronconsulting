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
                                <li class="current">What is included into the system provision?</li>
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>What is included into the system provision?</h4>
                            <p class="para1">•	URL to access your Reveron Insights instance.</p>
                            <p class="para2">•	System Admin’s account details</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="Introduction_Overview" class="previous">&#8678;</a>
                            <a href="What_is_Example_Project.php" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
    $(function() {
        $("#button1").css("display","block")
        $("#sl1-2").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>