var dfp;
    var dfwa;
    var dfwb;
    var dfwc;
    var dfwd;
    var dfwe;
    var dfwf;
    var dfwg;
    var dfwh;
    var dfwi;
    var dfwj;
    var dfwk;
    
    function ShowLocationDirectory(bshow) {
        dfwa.setVisible(bshow);
    }
    function ShowLayer(bshow) {
        dfwb.setVisible(bshow);
    }
    function ShowFolderDirectory(bshow) {
        dfwc.setVisible(bshow);
    }
    function ShowPowerBi(bshow) {
        dfwd.setVisible(bshow);
    }
    function CameraHeight(bshow) {
        dfwe.setVisible(bshow);
    }
    function ShowDefect(bshow) {
        dfwg.setVisible(bshow);
    }
    function ShowGanttChart(bshow) {
        dfwf.setVisible(bshow);
    }
    function ShowAssetTable(bshow) {
        dfwh.setVisible(bshow);
    }
    function PinPointTool(bshow) {
        dfwi.setVisible(bshow);
    }
    function VideoFrame(bshow) {
        dfwj.setVisible(bshow);
    }
    function CameraFeed(bshow) {
        dfwk.setVisible(bshow);
    }
    
   function setMasks() {
       var vmask = 0;
       if (document.getElementById('leftmask').checked) {
           vmask |= DSXDFPanel.LEFT_DOCK_MASK;
       }
       if (document.getElementById('rightmask').checked) {
           vmask |= DSXDFPanel.RIGHT_DOCK_MASK;
       }
       if (document.getElementById('topmask').checked) {
           vmask |= DSXDFPanel.TOP_DOCK_MASK;
       }
       if (document.getElementById('bottommask').checked) {
           vmask |= DSXDFPanel.BOTTOM_DOCK_MASK;
       }
       dfwa.setDockableSideMasks(vmask);
   }

   function setTime() {
       var time = document.getElementById('ahtime').value;
       dfp.setTimeForAutoHide(parseInt(time));
   }

   function enableHideButton() {
       var v = document.getElementById('hdbutton').checked;
       dfwb.enableNormalHiddenButton(v);
   }

   function getShowState() {
       var vst = dfwd.getShowState();
       var v;
       if (vst == DSXDFPanel.HIDDEN_DISABLED) // visible
       {
           v = "Visible State";
       }
       else if (vst == DSXDFPanel.HIDDEN_AUTO_HIDE) {
           v = "Auto Hide State"
       }
       else if (vst == DSXDFPanel.HIDDEN_IN_TAB) {
           v = "Hidden in Tabbed State";
       }
       else {
           v = "Normal Hidden";
       }
       document.getElementById('showstate').value = v;
   }

   function getAllPanels() {
       var pans = dfp.getDSXDFPanels(DSXDFUtil.ALL_DSXDFPanel);
       document.getElementById('allpanels').value = "Number of All Panels "+pans.length;
   }

   function getAllFloatPanels() {
       var pans = dfp.getDSXDFPanels(DSXDFUtil.Float_DSXDFPanel);
       document.getElementById('floatpanels').value = "Number of All Float Panels " + pans.length;
   }
   function getAllHiddenPanels() {
       var pans = dfp.getDSXDFPanels(DSXDFUtil.Hidden_DSXDFPanel);
       document.getElementById('hiddenpanels').value = "Number of All Hidden Panels " + pans.length;
   }

   function getAllAutoHidePanels() {
       var pans = dfp.getDSXDFPanels(DSXDFUtil.Hidden_AUTO_DSXDFPanel);
       document.getElementById('autohidepanels').value = "Number of All Hidden Panels " + pans.length;
   }

   function getAutoHidePanelsBySide() {
       var pans = dfp.getAutoHideDSXDFPanels(DSXDFUtil.fixedLeft);
       if (pans != null)
           document.getElementById('leftautohidepanels').value = "Number of Hidden Panels in Left Side " + pans.length;
       else {
           document.getElementById('leftautohidepanels').value = "Number of Hidden Panels in Left Side 0 ";
       }
   }

    function init() {
        dfp = DSXDFUtil.createDSXDFUtil();
        dfp.addFixedPanel(document.getElementById("RIContainer"), DSXDFUtil.fixedCenter);

        dfwa = dfp.createDFPanel("Location Directory", "mydfa");
        dfwa.addContentDiv(document.getElementById("function9-1"));
        dfwa.initLayout(0, 0, 300, 200,DSXDFPanel.dockLeft);

        dfwc = dfp.createDFPanel("Folder Directory", "mydfa");
        dfwc.addContentDiv(document.getElementById("function9-3"));
        dfwc.initLayout(0, 450, 250, 200,DSXDFPanel.dockLeft);

        dfwb = dfp.createDFPanel("Layer", "mydfa");
        dfwb.addContentDiv(document.getElementById("function9-2"));
        dfwb.initLayout(0, 450, 400, 400, DSXDFPanel.dockLeft);
 
        dfwd = dfp.createDFPanel("PowerBI", "mydfa");
        dfwd.addContentDiv(document.getElementById("function10"));
        dfwd.initLayout(0, 0, 300, 400, DSXDFPanel.dockRight);

        dfwe = dfp.createDFPanel("Camera Configuration", "mydfa");
        dfwe.addContentDiv(document.getElementById("cameraheight"));
        dfwe.initLayout(50, 550, 400, 430, DSXDFPanel.floated);

        dfwf = dfp.createDFPanel("Gantt Chart", "mydfa");
        dfwf.addContentDiv(document.getElementById("function11"));
        dfwf.initLayout(0, 0, 400, 200, DSXDFPanel.dockBottom);

        dfwg = dfp.createDFPanel("Defect", "mydfa");
        dfwg.addContentDiv(document.getElementById("function20"));
        dfwg.initLayout(840, 513, 385, 250, DSXDFPanel.floated);

        dfwh = dfp.createDFPanel("Asset Table", "mydfa");
        dfwh.addContentDiv(document.getElementById("jsonAssetTable"));
        dfwh.initLayout(700, 250, 650, 400, DSXDFPanel.floated);

        dfwi = dfp.createDFPanel("Pinpoint Tool", "mydfa");
        dfwi.addContentDiv(document.getElementById("pintpointTool"));
        dfwi.initLayout(25, 350, 550, 430, DSXDFPanel.floated);

        dfwj = dfp.createDFPanel("Video Frame", "mydfa");
        dfwj.addContentDiv(document.getElementById("videoframe"));
        dfwj.initLayout(0, 250, 420, 320, DSXDFPanel.floated);

        dfwk = dfp.createDFPanel("Camera Feed", "mydfa");
        dfwk.addContentDiv(document.getElementById("camerafeed"));
        dfwk.initLayout(0, 0, 450, 350, DSXDFPanel.dockLeft);

    }


    // function followfunction (){
    //     // logic for locating the location of the second button //
    //     var element = document.getElementsByClassName("button-menu active")
    //     var pos = element.getBoundingClientRect();
    //     console.log(pos.top, pos.right, pos.bottom, pos.left);
    //     var postop = pos.top + 15;
    //     console.log(postop)

    //     $(".third-button").css("top",postop)
    // } ;
    function closeAllWindow(){
        ShowLocationDirectory(false)
        ShowLayer(false)
        ShowFolderDirectory(false)
        ShowPowerBi(false)
        ShowDefect(false)
        ShowGanttChart(false)
        ShowAssetTable(false)
        PinPointTool(false)
        VideoFrame(false)
        var videoContainer = document.getElementById("videoContainer");
        var myVideo = $(videoContainer).find("video")[0]
        if($(videoContainer).find("video")[0]){
            myVideo.pause()
        }
        CameraFeed(false)
        CameraHeight(false)
        $('#ControlDiv.active').css('display', 'none')
        $('#ControlDiv.active').removeClass('active')
        keycontrol_trigger = false;
       // billboardFlag = false;
       
        $('#ScreenSpaceTool.active').css('display', 'none')
        $('#ScreenSpaceTool.active').removeClass('active')
        resetpinpointtoolVlaue()
        /*for(var i=0; i<videoPinsArray.length; i++){
            videoPinsArray[i].show = false;
        }*/
    }
$(function(){

    $(document).ready(function(){

        init()
        ShowLocationDirectory(false)
        ShowLayer(false)
        ShowFolderDirectory(false)
        ShowPowerBi(false)
        ShowGanttChart(false)
        ShowDefect(false)
        ShowAssetTable(false)
        PinPointTool(false)
        VideoFrame(false)
        CameraFeed(false)
        CameraHeight(false)
        $(".layer_popup").show();
    })

    /////function neutral navbar/////
    function neutralNavbar(){

        //$(".appsbar").animate({width:'toggle'},200);
        if(!$(".appsbar").hasClass('active')) {
        }
        else{
            $(".appscontainer .appsbutton button a").fadeOut(50)
            $(".appsbar").animate({width:'toggle'}, 150, function(){
                //$(".appsbar").css('display', 'none');
                $(".appsbar.active").removeClass('active');
            });
        }

        if(!$(".nav-bar").hasClass('active')) {
        }
        else{
            $(".nav-bar.active").removeClass('active');
            $(".nav-bar").animate({height:'toggle'},200);
            $(".minimize").css('display', 'block');
            document.getElementById("demo").innerHTML = '&or;';

            $(".dropitem.active").removeClass('active');
            $(".dropitem").css('display', 'none');
            
        }
    }
    /////     Pop up window click item     /////
    //animation for clicking the close pop up item//
    $('.popupboxfooter .popupbutton button').on("click", function(){
        let popuptoClose = $(this).attr('rel')
        $('#' + popuptoClose).css('display', 'none')
    })

    /////function neutral third button/////
    function neutralThirdbuttonActive(){

        $(".sidemenu .third-button .tool").removeClass('active');
        $(".sidemenu .third-button .admin").removeClass('active');
        $(".sidemenu .third-button .measure").removeClass('active');
        $(".sidemenu .third-button .nav").removeClass('active');
        $(".sidemenu .third-button .asset").removeClass('active');
        $(".sidemenu .third-button .bim").removeClass('active');
		
		$('#imageTool').attr('src', 'Images/icons/second_button/'+themeFolder+'/tools2.png')
		$('#imageMeasure').attr('src', 'Images/icons/second_button/'+themeFolder+'/ruler_square2.png')
		$('#imageAdmin').attr('src', 'Images/icons/second_button/'+themeFolder+'/admin2.png')
		$('#imageNav').attr('src', 'Images/icons/second_button/'+themeFolder+'/navigate2.png')
		$('#imageAsset').attr('src', 'Images/icons/second_button/'+themeFolder+'/asset2.png')
		$('#imageBim ').attr('src', 'Images/icons/second_button/'+themeFolder+'/building2.png')
 
    }

    function resetpinpointtoolVlaue(){
        viewer.scene.primitives.remove(tempModel);
        $('.inputcontainer .column1').find('input').val(''); 
        $('.inputcontainer .column2').find('input').val(''); 
        $('.inputcontainer .column3').find('input').val('');
    }

    function cleanmarkingandcursor(){
        // to clear flags and arrays for measure
		flagMeasure = false;
        for(var i=0; i<3; i++){
            labelEntity[i].label.show = false;
        };
        MeasureTool = "";
        document.getElementsByTagName("body")[0].style.cursor= "default";
        for (var i=0; i< distEntities.length; i++){
            viewer.entities.remove(distEntities[i]);
        };
        distanceEntity =0;
        distance = 0;
        flagPosEntities = false;

    }
    
    /////function to close/hide all dockable windows/////
   function cleanUpOnClickOfSecondButton(){
		// to clear flags for identity button
		viewer.selectedEntity = undefined;
		// to clear flags and arrays for measure
		flagMeasure = false;
			for(var i=0; i<3; i++){
				labelEntity[i].label.show = false;
			};
		MeasureTool = "";
		document.getElementsByTagName("body")[0].style.cursor= "default";
		for (var i=0; i< distEntities.length; i++){
			viewer.entities.remove(distEntities[i]);
		};
		distanceEntity =0;
		distance = 0;
		flagPosEntities = false;
	
		// to clear for administrative tool
		flagEntity = false;
		flagDraw = false;
        flagEdit = false;
        flagEditModel = false;
        resetpinpointtoolVlaue()
	
		//to remove video pins
		for(var i=0; i< videoPinsArray.length; i++){
            videoPinsArray[i].show = false;
        }
        $('#videoframe').removeClass('active')
        VideoFrame(false)
        var videoContainer = document.getElementById("videoContainer");
        var myVideo = $(videoContainer).find("video")[0]
        if($(videoContainer).find("video")[0]){
            myVideo.pause()
        }
			//for removing defects
		if(flagDefectEntities){
			flagDefectEntities = false;
			for(i=0; i< defectEntities.length; i++){
				defectEntities[i].show = false;
			};
		};
		viewer.selectedEntity = undefined;
    }
    
    $(".mydfaClose").on('click', function(){
        document.getElementsByTagName("body")[0].style.cursor= "default";
    })

    $("#button-logo").on("click", function(){
        $(".main-button").animate({padding:'toggle'},100);
        $(".second-button").animate({width:'toggle'},100);
        $(".sidemenu .second-button").css('display','flex');
        $(".sidemenu .second-button .button-menu#back").removeClass('active');

        neutralNavbar()
    })

    $(".sidemenu .second-button .button-menu#back").on("click", function (){

        neutralThirdbuttonActive()
        closeAllWindow()
		cleanUpOnClickOfSecondButton();
        neutralNavbar()
        $(".second-button").animate({padding:'toggle'},100);
        $(".main-button").animate({padding:'toggle'},100);
         
    })

    $(".sidemenu .second-button .button-menu").on("click", function (){
        let menuToShow = $(this).attr('rel');
		let secondButtonClicked = $(this).attr('id');
        cleanUpOnClickOfSecondButton();

        // logic for locating the location of the second button //
        var rect = this.getBoundingClientRect();
      //  console.log(rect.top, rect.right, rect.bottom, rect.left);
        var postop = rect.top + 15;
       // console.log(postop)
        
       if (menuToShow == "group3"){
			if(!flagMeasure){
				flagMeasure = true;
			}else{
				flagMeasure = false;
			}
		};
        if (!$(this).hasClass("active"))  {

            neutralThirdbuttonActive ()
            closeAllWindow()

			if (secondButtonClicked == "tool"){
                $('#imageTool').attr('src', 'Images/icons/second_button/'+themeFolder+'/tools.png')
            }else if (secondButtonClicked == "measure"){
                $('#imageMeasure').attr('src', 'Images/icons/second_button/'+themeFolder+'/ruler_square.png')
            }
            else if (secondButtonClicked == "admin"){
                $('#imageAdmin').attr('src', 'Images/icons/second_button/'+themeFolder+'/admin.png')
            }
            else if (secondButtonClicked == "nav"){
                $('#imageNav').attr('src', 'Images/icons/second_button/'+themeFolder+'/navigate.png')
            }
            else if (secondButtonClicked == "asset"){
                $('#imageAsset').attr('src', 'Images/icons/second_button/'+themeFolder+'/asset.png')
            }
            else if (secondButtonClicked == "bim"){
                $('#imageBim ').attr('src', 'Images/icons/second_button/'+themeFolder+'/building.png')
            }
			
            //deactivate prevous SECOND button and make clicked button active
            $(".sidemenu .second-button .button-menu.active").removeClass('active');
            $(this).addClass('active');

            //animate close and remove any THIRD button from active.
            $(".sidemenu .third-button.active").css('display','none', function(){
                $(this).removeClass("active")
            })
            // position the third button div besides the second button click //
            $(".third-button").css("top",postop)
            // then, animate to open and make THIRD button to active
            $('#'+menuToShow).animate({'margin':'toggle'},50).css('display','flex')
            $('#'+menuToShow).addClass('active')            
            
            //deactivate fourth layer button
            $('.topmenu .fourth-button.active').animate({'padding-top': 0}, 100, function(){
                $('.topmenu .fourth-button.active').css('display', 'none')
                $('.topmenu .fourth-button.active').removeClass('active');
                $('.topmenu .fourth-button button.active').removeClass('active');
            })
            //hide the control div function
            $("#ControlDiv.active").css("display","none")
            $("#ControlDiv.active").removeClass("active")
            keycontrol_trigger = false;
            $("#ScreenSpaceTool.active").css("display","none")
            $("#ScreenSpaceTool.active").removeClass('active')
    
        }
        //if already active:
        else{
            //deactivate prevous SECOND button
            $(".sidemenu .second-button .button-menu.active").removeClass('active');

			$('#imageTool').attr('src', 'Images/icons/second_button/dark_red/'+themeFolder+'/tools2.png')
			$('#imageMeasure').attr('src', 'Images/icons/second_button/'+themeFolder+'/ruler_square2.png')
			$('#imageAdmin').attr('src', 'Images/icons/second_button/'+themeFolder+'/admin2.png')
			$('#imageNav').attr('src', '../Images/icons/second_button/'+themeFolder+'/navigate2.png')
			$('#imageAsset').attr('src', 'Images/icons/second_button/'+themeFolder+'/asset2.png')
			$('#imageBim ').attr('src', 'Images/icons/second_button/'+themeFolder+'/building2.png')
        
            //deactivate fourth layer button
            $('.topmenu .fourth-button.active').animate({'padding-top': 0}, 100, function(){
                $('.topmenu .fourth-button.active').css('display', 'none')
                $('.topmenu .fourth-button.active').removeClass('active');
                $('.topmenu .fourth-button button.active').removeClass('active');
            })
			
            //close THIRD button by:
            //relate SECOND button rel to THIRD button ID
            let menuToShow = $(this).attr('rel');
            //close and remove active class
            $('#'+menuToShow).animate({margin:'toggle'},50,function (){
                $(this).removeClass('active');
            });
            
            let topmenuToShow = $(".sidemenu  .third-button .admin").attr('rel');

                //close and deactivate FOURTH button row
                $('#'+topmenuToShow).css({'padding-top':30}).animate({'padding-top': 0}, 100, function(){
                    $(this).css('display', 'none')
                    $(this).removeClass('active');
                })
                
                //deactivate third button active from showing fourth button              
                $('.sidebar').animate({width: '0'}, 100, function(){
                    //$(this).css('width', '25%')
                    $(this).css('display', 'none')
                    $(this).removeClass('active');
                })
                neutralThirdbuttonActive()
                closeAllWindow()
        }

    })
    /////third button (tool)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, nav)
    $(".sidemenu .third-button .tool").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let thingtoShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')


        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {

            closeAllWindow()

            //then, animate clicked fourth button and add class active

            $(".sidemenu .third-button .tool.active").removeClass('active')
            $('#'+thirdButtonClicked).addClass('active');

            //open last minute tool tools (navigation buttons and slider)
            $("." + thingtoShow).addClass('active')
            $("." + thingtoShow).css('display','block')

            $(".sidemenu .third-button .tool#home").removeClass('active')
            $(".sidemenu .third-button .tool#globe").removeClass('active')
            $(".sidemenu .third-button .tool#SwitchSceneMod").removeClass('active')
            $(".sidemenu .third-button .tool#SetCamAngle").removeClass('active')
            
            $(this).closest('button').find('id').not(this).removeClass('active');
            $(this).closest('button').find('id').not(this).css('display', 'none');
          
            switch(thirdButtonClicked){
                case 'layer':
                    ShowLayer(true)
                    break;
                case 'move':
                    keycontrol_trigger = true;
                    break;
                case 'home':
                    OnClickHome();
                    break
                case 'globe':
                    OnClickGlobe();
                    break;
            }

        }
        //if already active:
        else{
            //remove active and close.
            $(".sidemenu .third-button .tool.active").removeClass('active')
            $("." + thingtoShow).removeClass('active')
            $("." + thingtoShow).css('display','none')
            closeAllWindow()
        }
    });

    /////third button (Measure)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, nav)
    $(".sidemenu .third-button .measure").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let sidebarToShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')

        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {
            //then, animate clicked fourth button and add class active
            $(".sidemenu .third-button .measure.active").removeClass('active')
            $('#'+thirdButtonClicked).addClass('active');
           
        }
        //if already active:
        else{
            //remove active and close.
            $(".sidemenu .third-button .measure.active").removeClass('active')
            $('#'+topbarToShow).css('display', 'none');
            $('#'+topbarToShow).removeClass('active');
        }

    });


    /////third button (admin)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, admin)
    $(".sidemenu .third-button .admin").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let topmenuToShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')

        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {

            closeAllWindow()
            $('#'+topmenuToShow).removeClass('active');

            //then, animate clicked fourth button and add class active
            $(".sidemenu .third-button .admin.active").removeClass('active')
            $('#'+thirdButtonClicked).addClass('active');

            $('.topmenu .fourth-button.active').css({'padding-top':30}).animate({'padding-top': 0}, 100, function(){
                $(this).css('display', 'none')
                $(this).removeClass('active');
            })
            if(thirdButtonClicked=='administrative'){
                $('#'+topmenuToShow).addClass('active');
                $('#'+topmenuToShow).css('display', 'block')
                $('#'+topmenuToShow).css({'padding-top':0}).animate({'padding-top': 30}, 100)
                ShowLocationDirectory(true)
            }else if(thirdButtonClicked=='uploadkmlfunction'){
                $('#'+topmenuToShow).addClass('active');
                $('#'+topmenuToShow).css('display', 'block')
                $('#'+topmenuToShow).css({'padding-top':-30}).animate({'padding-top': 0}, 100)
                $("#uploadkmlImage").show();
                $(".buttoncontainer .hidden").hide()
                $(".statuscontainer").hide()
                $(".video-statuscontainer").css('display', 'none')
            }else if(thirdButtonClicked=='layermanagement'){
                let buttoncontainer = document.getElementById("buttoncontainer")
                let lyr_container =  document.getElementById("managelayer_container")
                lyr_container.insertAdjacentElement("afterbegin", buttoncontainer);
                $("#buttoncontainer").css("display","none");
                $("#buttoncontainer").removeClass("active");
                $("#projectLayerManagement").html("")
                $.ajax({
                    type: "POST",
                    url: 'Management/main_layerTable.php',
                    dataType: 'json',
                    success: function (obj, textstatus) {
                            for (let row of obj){
                                row = JSON.parse(row)
                                let def_view;
                                if (row.Default_View == 0){
                                    def_view = "OFF"
                                }else
                                {
                                    def_view = "ON" 
                                }
                                console.log(row)
                                upload_date = new Date(row.Added_Date.date);
                                upload_date = upload_date.toDateString();
                                $("#projectLayerManagement").append(
                                    "<tr onclick = 'OnClickLayerEdit(this)'>\
                                        <td>" + row.Data_ID+ "</td>\
                                        <td>" + row.Layer_Name+ "</td>\
                                        <td>" + row.Data_Type+ "</td>\
                                        <td>" + def_view + "</td>\
                                        <td>" + upload_date+ "</td>\
                                        <td style='display:none'>" + row.Data_Owner+ "</td>\
                                    </tr>"
                                )
                            }
                },
                    error:	function(xhr,textStatus,errorThrown){
                        var str = textStatus + " " + errorThrown;
                            console.log(str);
                        }
                })

                $('#'+topmenuToShow).addClass('active');
                $('#'+topmenuToShow).css('display', 'block')
                $('#'+topmenuToShow).css({'padding-top':-30}).animate({'padding-top': 0}, 200)
            }
        }
        //if already active:
        else{

            //remove active and close.
            $(".sidemenu .third-button .admin.active").removeClass('active')
            //remove active and close.
            $(".topmenu .fourth-button .admin-function.active").removeClass('active')

            $('#'+topmenuToShow).css({'padding-top':30}).animate({'padding-top': 0}, 100, function(){
                $('#'+topmenuToShow).css('display', 'none')
                $('#'+topmenuToShow).removeClass('active');
            })

            closeAllWindow()
        }
    });


    /////third button (Navigation)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, nav)
    $(".sidemenu .third-button .nav").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let menuToShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')
        if(thirdButtonClicked !== 'camera'){
            for(var i=0; i< videoPinsArray.length; i++){
                videoPinsArray[i].show = false;
            }
        }
        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {
            //then, animate clicked fourth button and add class active

            closeAllWindow()
            $('.sidemenu .third-button .nav').removeClass('active');
            
            $('#'+thirdButtonClicked).addClass('active');
          
            if(thirdButtonClicked=='arrangeview'){
                ShowFolderDirectory(true)
               // ShowPowerBi(true)
                ShowGanttChart(true)
                $('#arrangeview').removeClass('active')
            }else if(thirdButtonClicked=='directory'){
                ShowFolderDirectory(true)
                $('#directory').removeClass('active')
            }else if(thirdButtonClicked == 'ganttchart'){   
                changeSchedule()
                ShowGanttChart(true)
                $('#ganttchart').removeClass('active')
            }else if (thirdButtonClicked == 'dashboard'){
               // ShowPowerBi(true)
               // ShowFolderDirectory(true)
                $('#dashboard').removeClass('active')
            }else if(thirdButtonClicked == 'camera'){
                //ShowLocationDirectory(false)
                CameraFeed(true)
                CameraHeight(false);
                $('#camera').removeClass('active')
            }else if (thirdButtonClicked == 'assettable'){
                ShowAssetTable(true)
                $('#assettable').removeClass('active')
            }
            
        }
        //if already active:
        else{
            //remove active and close.
            if ($('#'+menuToShow).hasClass('fourth-button')){
                $('#'+menuToShow).css({'padding-top':30}).animate({'padding-top': 0}, 100, function(){
                    $(this).css('display', 'none')
                    $(this).removeClass('active');
                })
            }
            else if($('#'+menuToShow).hasClass('sidebar')){
                $('#'+menuToShow).animate({width: '0'}, 100, function(){
                    //$(this).css('width', '25%')
                    $(this).css('display', 'none')
                    $(this).removeClass('active');
                })
            }          
            closeAllWindow()
            $(".sidemenu .third-button .nav.active").removeClass('active')
        }
    });

    /////third button (Asset)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, nav)
    $(".sidemenu .third-button .asset").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let sidebarToShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')

        closeAllWindow()

        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {
            //then, animate clicked fourth button and add class active
            $(".sidemenu .third-button .asset.active").removeClass('active')
            $('#'+thirdButtonClicked).addClass('active');
            $('#'+sidebarToShow).css('display', 'block')
            $('#'+sidebarToShow).addClass('active');
        }
        //if already active:
        else{
            //remove active and close.
            $(".sidemenu .third-button .asset.active").removeClass('active')
            $('#'+sidebarToShow).css('display', 'none')
            $('#'+sidebarToShow).removeClass('active');

            closeAllWindow()
        }

    });

    /////third button (Admin)/////
    //if click third layer button (WITH SPECIFIC BUTTON GROUP, nav)
    $(".sidemenu .third-button .bim").on("click", function (){
        
        //Relate third button class rel to 4th button menu to be shown
        let sidebarToShow = $(this).attr('rel');
        let thirdButtonClicked = $(this).attr('id')

        closeAllWindow()

        //Make 4th button active and show fourth button by:
        // checking if the fourth button  is NOT active.
        if (!$('#'+thirdButtonClicked).hasClass("active"))  {
            //then, animate clicked fourth button and add class active
            $(".sidemenu .third-button .bim.active").removeClass('active')
            $('#'+thirdButtonClicked).addClass('active');
            $('#'+sidebarToShow).css('display', 'block')
            $('#'+sidebarToShow).addClass('active');
        }
        //if already active:
        else{
            //remove active and close.
            $(".sidemenu .third-button .bim.active").removeClass('active')
            $('#'+sidebarToShow).css('display', 'none')
            $('#'+sidebarToShow).removeClass('active');

            closeAllWindow ()
        }
    });

    /////fourth menu close button/////
    $(".topmenu .fourth-button #close").on("click", function (){

        let topmenuShown = $(this).parent('div').attr('id');
            //remove active and close.

            $('#'+topmenuShown).css({'padding-top':30}).animate({'padding-top': 0}, 100, function(){
                $('#'+topmenuShown).css('display', 'none')
                $('#'+topmenuShown).removeClass('active');

            })
            ShowLocationDirectory(false)
            PinPointTool(false)
            CameraFeed(false)
            CameraHeight(false)
            document.getElementsByTagName("body")[0].style.cursor= "default";
            $(".sidemenu .third-button .admin.active").removeClass('active')
            closeAllWindow()
    });

    /////fourth menu draw button/////
    $(".topmenu .fourth-button #draw").on("click", function (){

        $(".topmenu .fourth-button #addcamera.active").removeClass('active')
        if ($(".topmenu .fourth-button #draw").hasClass('active')){
            $(".topmenu .fourth-button #draw.active").removeClass('active')
            closeAllWindow()
			document.getElementsByTagName("body")[0].style.cursor= "default";
        }else{
            $(".topmenu .fourth-button #draw").addClass('active')
            closeAllWindow()
            ShowLocationDirectory(true)
            PinPointTool(true)
        }
    });

    /////fourth menu draw button/////
    $(".topmenu .fourth-button #addcamera").on("click", function (){

        $('#embedLinkInput').val("")
        $(".video-statuscontainer").css('display', 'none')
        cleanmarkingandcursor()
        videoR.cancel();
        flagCamera = true;
        cameraOpen()
        document.getElementsByTagName("body")[0].style.cursor = "url('Images/ccrosshair.cur'),auto";

        $(".topmenu .fourth-button #draw.active").removeClass('active')
        if ($("#addcamera").hasClass('active')){
            console.log("sd")
            $("#addcamera").removeClass('active')
            CameraFeed(false)
            //$("#addcameraModal").fadeOut(100)
            ShowLocationDirectory(true)
            for(var i=0; i< videoPinsArray.length; i++){
                videoPinsArray[i].show = false;
           }
			document.getElementsByTagName("body")[0].style.cursor= "default";
        }else{
            $("#addcamera").addClass('active')
            closeAllWindow()
            CameraHeight(true)
            CameraFeed(true)		
           // CameraHeight(true)
           // $("#addcameraModal").fadeIn(100)
            for(var i=0; i< videoPinsArray.length; i++){
                videoPinsArray[i].show = true;
           }			
        }
    });

    /////fourth menu draw button/////
    $(".topmenu .fourth-button button:not(#draw, #addcamera, #close)").on("click", function (){
        closeAllWindow()
        ShowLocationDirectory(true)
        $(".topmenu .fourth-button #draw.active").removeClass('active')
        $(".topmenu .fourth-button #addcamera.active").removeClass('active')
        resetpinpointtoolVlaue()
        for(var i=0; i< videoPinsArray.length; i++){
            videoPinsArray[i].show = false;
        }
        if(Cesium.defined(tempVideoPin)){
            viewer.entities.remove(tempVideoPin);
        };
    });

    /////    Saving and closing the pinpoint tool   /////
    $(".toolcontainer .inputcontainer .column1.button .save").on("click", function (){
        $(".topmenu .fourth-button #draw.active").removeClass('active')
        $(".topmenu .fourth-button #addcamera.active").removeClass('active')
        closeAllWindow()
    });

    $(".toolcontainer .inputcontainer .column2.button .cancel").on("click", function (){
        $(".topmenu .fourth-button #draw.active").removeClass('active')
        $(".topmenu .fourth-button #addcamera.active").removeClass('active')
        closeAllWindow()
		document.getElementsByTagName("body")[0].style.cursor= "default";
    });
    var orderStart
    var orderEnd
    $("#sortable").sortable({
           placeholder: "highlight",
           axis: 'y',
           revert: 100
        //    start: function( event, ui ) {
        //        //currently dragged item
        //        orderStart = $(ui.item).index();
        //    },
        //    stop: function(event, ui){
        //    // console.log($(ui.item).index()) //currently dragged item
        //     orderEnd = $(ui.item).index();
        //     let ele = $(ui.item)[0]
        //     let id = ele.id 
        //     kmlOrdering(id, orderStart, orderEnd)
        //    }
    });


});

    /// function for clicking the checkbox button in the edit entitty form in index page///
    $("#changePWPath").on("change", function(){
        if(!$("#changePWPath").is(':checked')){
            $(".modal-container#editentity .doublefield.appearoncheck").css('display','none')
            $(".modal-container#editentity #folderRoot.appearoncheck").css('display','none')
            $(".modal-container#editentity #refreshpwfolder.appearoncheck").css('display','none')
        }
        else{
            $(".modal-container#editentity .doublefield.appearoncheck").css('display','flex')
            $(".modal-container#editentity #folderRoot.appearoncheck").css('display','block')
            $(".modal-container#editentity #refreshpwfolder.appearoncheck").css('display','block')
            getProjectWiseFolders();
        }
    })

    // function for clicking the theme item in the theme selection window.
    function themeselect(ele){
        let themetoselect = $(ele).attr("rel");
        $(".container-cards .card input.log").prop("checked", false)
        $("input#"+themetoselect).prop("checked", true)
    }

