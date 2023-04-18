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
                                <li><a href="/home">Home</a></li>
                                <li>Introduction</li>
                                <li class="current">Overview</li>
                                
                            </ul>
                        </div>
                        <div class="container-header"><h3 class="headerText">Introduction</h3></div>
                        <div class="container-content">
                            <h4>Overview</h4>
                            <p class="para1">Upon provisioned the instance for client, the client’s system admin will be notified via email. Then the system configuration can be started.</p>
                        </div>
                        <div class="prevnext-button">
                            <a href="/home" class="previous">&#8678;</a>
                            <a href="/What_is_included_into_the_system_provision" class="next">&#8680;</a>
                        </div>
                    </div>
                </div>
            </div>
    <script>
    $(function() {
        $("#button1").css("display","block")
        $("#sl1-1").addClass("active")
        $("#fl1 img").attr('src','../Images/icons/documentation/minus.png')
    });
    </script>
    </body>
</html>