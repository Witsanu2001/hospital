jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,

        width:500,

        height:310,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        donotresize:false,

        enabletouchswipe:true,

        fullscreen:false,

        autoplayvideo:false,

        addmargin:true,

        randomplay:false,

        isresponsive:false,

        pauseonmouseover:false,

        playvideoonclickthumb:true,

        slideinterval:5000,

        fullwidth:false,

        transitiononfirstslide:false,

        scalemode:"fill",

        loop:0,

        autoplay:true,

        navplayvideoimage:"play-32-32-0.png",

        navpreviewheight:60,

        timerheight:2,

        descriptioncssresponsive:"font-size:12px;",

        shownumbering:false,

        skin:"RightTabsDark",

        addgooglefonts:true,

        navshowplaypause:true,

        navshowplayvideo:true,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbnavigationarrowimageheight:32,

        navpreviewarrowheight:8,

        lightboxshownavigation:false,

        showshadow:false,

        navfeaturedarrowimagewidth:8,

        navpreviewwidth:120,

        googlefonts:"Inder",

        navborderhighlightcolor:"#1896d3",

        bordercolor:"#ffffff",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        lightboxthumbwidth:80,

        navthumbnavigationarrowimagewidth:32,

        navthumbtitlehovercss:"",

        texteffectresponsivesize:600,

        navcolor:"#999999",

        arrowwidth:32,

        texteffecteasing:"easeOutCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:5,

        navarrowimage:"navarrows-28-28-0.png",

        ribbonimage:"ribbon_topleft-0.png",

        navwidth:70,

        navheight:72,

        arrowimage:"arrows-32-32-0.png",

        timeropacity:0.6,

        arrowhideonmouseleave:1000,

        navthumbnavigationarrowimage:"carouselarrows-32-32-4.png",

        navshowplaypausestandalone:false,

        texteffect1:"slide",

        navpreviewbordercolor:"#ffffff",

        texteffect2:"slide",

        customcss:"",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 11px Arial,Helvetica,sans-serif;color:#ccc;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"mouseover",

        navthumbtitleheight:18,

        textpositionmargintop:24,

        buttoncssresponsive:"",

        navswitchonmouseover:false,

        playvideoimage:"playvideo-64-64-0.png",

        arrowtop:50,

        textstyle:"static",

        playvideoimageheight:64,

        navfonthighlightcolor:"#666666",

        showbackgroundimage:false,

        navpreviewborder:4,

        navshowplaypausestandaloneheight:28,

        shadowcolor:"#aaaaaa",

        navbuttonshowbgimage:true,

        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",

        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);",

        textpositiondynamic:"bottomleft",

        navpreviewarrowwidth:16,

        playvideoimagewidth:64,

        buttoncss:"display:block; position:relative; margin-top:8px;",

        navshowpreviewontouch:false,

        bottomshadowimagewidth:110,

        showtimer:true,

        navradius:0,

        navmultirows:false,

        navshowpreview:false,

        navmarginy:16,

        navmarginx:16,

        navfeaturedarrowimage:"featuredarrow-8-16-2.png",

        showribbon:false,

        navstyle:"thumbnails",

        textpositionmarginleft:24,

        descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#cccccc; margin-top:8px;",

        navplaypauseimage:"navplaypause-28-28-0.png",

        backgroundimagetop:-10,

        timercolor:"#ffffff",

        numberingformat:"%NUM/%TOTAL ",

        navdirection:"vertical",

        navfontsize:12,

        navhighlightcolor:"#333333",

        texteffectdelay1:1000,

        navimage:"bullet-24-24-5.png",

        texteffectdelay2:1500,

        texteffectduration1:600,

        navshowplaypausestandaloneautohide:false,

        texteffectduration2:600,

        navbuttoncolor:"#999999",

        navshowarrow:true,

        texteffectslidedirection:"left",

        navshowfeaturedarrow:true,

        lightboxbarheight:64,

        titlecss:"display:block; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;",

        ribbonimagey:0,

        ribbonimagex:0,

        texteffectslidedistance1:120,

        texteffectslidedistance2:120,

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        navshowbuttons:false,

        lightboxthumbtopmargin:12,

        titlecssresponsive:"font-size:12px;",

        navshowplaypausestandalonewidth:28,

        navfeaturedarrowimageheight:16,

        navopacity:1.0,

        textpositionmarginright:24,

        backgroundimagewidth:120,

        textautohide:true,

        navthumbtitlewidth:400,

        navpreviewposition:"top",

        texteffectseparate:false,

        arrowheight:32,

        arrowmargin:8,

        texteffectduration:600,

        bottomshadowimage:"bottomshadow-110-95-4.png",

        border:0,

        lightboxshowdescription:false,

        timerposition:"bottom",

        navfontcolor:"#333333",

        navthumbnavigationstyle:"arrowinside",

        borderradius:0,

        navbuttonhighlightcolor:"#333333",

        textpositionstatic:"bottom",

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"imageandtitledescription",

        texteffecteasing1:"easeOutCubic",

        textcss:"display:block; padding:12px; text-align:left;",

        navbordercolor:"#222",

        navpreviewarrowimage:"previewarrow-16-8-0.png",

        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 12px Arial,Helvetica,sans-serif;color:#fff;",

        showbottomshadow:false,

        texteffectslidedistance:30,

        texteffectdelay:500,

        textpositionmarginstatic:0,

        backgroundimage:"",

        navposition:"right",

        texteffectslidedirection1:"right",

        navborder:4,

        textformat:"Bottom bar",

        texteffectslidedirection2:"right",

        bottomshadowimagetop:95,

        texteffectresponsive:true,

        shadowsize:5,

        lightboxthumbbottommargin:8,

        textpositionmarginbottom:24,

        lightboxshowtitle:true,

       slice: {

            duration:1500,

            easing:"easeOutCubic",

            checked:true,

            effects:"up,down,updown",

            slicecount:10

        },

        transition:"slice",

        scalemode:"fill",

        isfullscreen:false,

        textformat: {



        }

    });

});