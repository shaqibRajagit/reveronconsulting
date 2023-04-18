$(function(){
    let newentityForm = $('#newentityForm')
    let newentityClose = $('#closebutton-newentityForm')
  
    $(newentityClose).on('click', function(){
        $(newentityForm).fadeOut(150);
        $(".sidemenu .third-button button.active").removeClass('active');
    });

    let editentityForm = $('#editentityForm')
    let editentityClose = $('#closebutton-editentityForm')
   
    $(editentityClose).on('click', function(){
        $(editentityForm).fadeOut(150);
        $(".sidemenu .third-button button.active").removeClass('active');
    });

    let modalentityForm = $('#modalentityForm')
    let modalentityClose = $('#closebutton-modalentityForm')
   
    $(modalentityClose).on('click', function(){
        $(modalentityForm).fadeOut(150);
        $(".sidemenu .third-button button.active").removeClass('active');
    });

    let uploadForm = $('#uploadform')
    let uploadformClose = $('#closebutton-uploadkml')
   
    $(uploadformClose).on('click', function(){
        $(uploadForm).fadeOut(150);
        $(".sidemenu .third-button button.active").removeClass('active');
		clearVar()
    });

    let managelayer = $('#managelayer')
    let managelayerClose = $('#closebutton-managelayer')
   
    $(managelayerClose).on('click', function(){
        $(managelayer).fadeOut(150);
        $(".sidemenu .third-button button.active").removeClass('active');
    });

    let cameraModal = $('#addcameraModal')
    let cameramodalClose = $('#closebutton-addcameraModal')
   
    $(cameramodalClose).on('click', function(){
        $(cameraModal).fadeOut(150);
        $(".topmenu .fourth-button button.active").removeClass('active');
        document.getElementsByTagName("body")[0].style.cursor= "default";
    });

    let loginModal = $('#login')
    let loginmodalClose = $('#closebutton-loginform')
   
    $(loginmodalClose).on('click', function(){
        $(loginModal).fadeOut(150);
    });
})