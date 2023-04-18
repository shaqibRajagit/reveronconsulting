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
                        <div class="container-header"><h3 class="headerText">Home</h3></div>
                        <div class="container-content">
                            <img src="{{ asset('/Images/icons/documentation/pages/home1.png') }}" alt="">
                            <img src="{{ asset('/Images/icons/documentation/pages/home2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>