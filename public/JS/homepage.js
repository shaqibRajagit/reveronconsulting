$(function (){

    ///// expand the second layer button when the first button is clicked /////
    $(".sidebar-container .sidebar-firstlayer .firstlayer-button").on('click', function(){
        let $buttonClicked = $(this).attr('id')
        let $secondlayerShow = $(this).attr('rel')

        if (!$('#' + $secondlayerShow).hasClass('active')){
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/minus.png')
            $('#' + $secondlayerShow).slideDown(100)
            $('#' + $secondlayerShow).addClass('active')
            //$('#' + buttonClicked + ' a').css('color', 'red')   
        }else {
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/add.png')
            $('#' + $secondlayerShow).slideUp(100)
            $('#' + $secondlayerShow).removeClass('active')
            //$('#' + buttonClicked + ' a').css('color', 'white')
        }
    })

    ///// expand the third layer button when the second button is clicked /////
    $(".sidebar-secondlayer .secondlayer-button").on('click', function(){
        let $buttonClicked = $(this).attr('id')
        let $thirdlayerShow = $(this).attr('rel')


        if (!$('#' + $thirdlayerShow).hasClass('active')){
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/minus(1).png')
            $('#' + $thirdlayerShow).slideDown(100)
            $('#' + $thirdlayerShow).addClass('active')
            
            //$('#' + buttonClicked + ' a').css('color', 'red')
        }else{
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/add(1).png')
            $('#' + $thirdlayerShow).slideUp(100)
            $('#' + $thirdlayerShow).removeClass('active')
            
           // $('#' + buttonClicked + ' a').css('color', 'white')
        }
    })

    ///// expand the fourth layer button when the third button is clicked /////
    $(".sidebar-thirdlayer .thirdlayer-button").on('click', function(){
        let $buttonClicked = $(this).attr('id')
        let $fourthlayerShow = $(this).attr('rel')

        if (!$('#' + $fourthlayerShow).hasClass('active')){
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/minus(1).png')
            $('#' + $fourthlayerShow).slideDown(100)
            $('#' + $fourthlayerShow).addClass('active')
            //$(this).removeClass('expanded')
            //$('#' + buttonClicked + ' a').css('color', 'red')
        }else{
            $('#' + $buttonClicked + " img").attr('src','../Images/icons/documentation/add(1).png')
            $('#' + $fourthlayerShow).slideUp(100)
            $('#' + $fourthlayerShow).removeClass('active')
            //$(this).removeClass('expanded')
           // $('#' + buttonClicked + ' a').css('color', 'white')
        }
    })
    
/////////////function to open page///////////////
    $(".sidebar-secondlayer .secondlayer-button").on('click', function(){
        let $click = $(this).attr('rel')
        if(!$(this).hasClass('active')){
            $(".sidebar-fourthlayer .fourthlayer-button").removeClass('active')
            $(".sidebar-thirdlayer .thirdlayer-button").removeClass('active')
            $(".sidebar-secondlayer .secondlayer-button").removeClass('active')
            $(this).addClass('active')
            $(".main-container#homepage").load($click + '.php')
        }else{
        }
    })

/////////////function to open page/////////////// 
    $(".sidebar-thirdlayer .thirdlayer-button").on('click', function(){
        let $click = $(this).attr('rel')
        if(!$(this).hasClass('active')){
            $(".sidebar-fourthlayer .fourthlayer-button").removeClass('active')
            $(".sidebar-thirdlayer .thirdlayer-button").removeClass('active')
            $(".sidebar-secondlayer .secondlayer-button").removeClass('active')
            $(this).addClass('active')
            $(".main-container#homepage").load($click + '.php')
        }else{
        }
    })
/////////////function to open page/////////////// 
    $(".sidebar-fourthlayer .fourthlayer-button").on('click', function(){
        let $click = $(this).attr('rel')
        if(!$(this).hasClass('active')){
            $(".sidebar-fourthlayer .fourthlayer-button").removeClass('active')
            $(".sidebar-thirdlayer .thirdlayer-button").removeClass('active')
            $(".sidebar-secondlayer .secondlayer-button").removeClass('active')
            $(this).addClass('active')
            $(".main-container#homepage").load($click + '.php')
        }else{
        }
    })
})

/////////////function to get URL parameter/////////////// 
$(function () {
    var url_string = window.location.href
     var url = new URL(url_string);
     var urlParam = url.searchParams.get("section");
     if(urlParam){
         document.getElementById(urlParam).click();
     }else{
     }
 })

////////////to print section page///////////////
function myfunctionprint() {
    var print_div = document.getElementById("main-documentation");
    var print_area = window.open();
    print_area.document.write(print_div.innerHTML);
    print_area.document.close();
    print_area.print();
    print_area.close();
    event.preventDefault()
    }



