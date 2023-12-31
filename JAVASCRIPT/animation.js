
$(document).ready(function(){
    
$(".iii").click(function(){
    if( $("ul")){
        $("ul").slideToggle()
    }
    
});

//============================== start document ==========================================//
let title=document.getElementById("title");
let price=document.getElementById("price");
let taxes=document.getElementById("taxes");
let ads=document.getElementById("ads");
let discount=document.getElementById("discount");
let ftotal=document.getElementById("ftotal");
let total=document.getElementById("total");
let count=document.getElementById("count");
let category=document.getElementById("category");
let submit=document.getElementById("submit");
//===============================function get total=============================================
function gettotal(){
    if(price.value !=''){
        let result=(+price.value+ +taxes.value+ +ads.value)-(+discount.value);
        total.innerHTML=result;
        ftotal.value=result;
        total.style.backgroundColor="white";
    }
    else{
         total.innerHTML="null";
         ftotal.value=0;
         total.style.backgroundColor="blue";
    }
        
}
$("#price").keyup(function(){
    gettotal();
});
$("#taxes").keyup(function(){
    gettotal();
});  
$("#ads").keyup(function(){
    gettotal();
});  
$("#discount").keyup(function(){
    gettotal();
});

    
/*  
$("#allelement").click(function(){
     $(".element").css({display:"block"});
});
  */
 
$("#depart").click(function(){
   $(".guiaddpro").css({display:"none"});
   $(".guiadd").css({display:"block"});
});

$("#product").click(function(){
    $(".guiadd").css({display:"none"});
    $(".guiaddpro").css({display:"block"});
 }); 
 
     setInterval(function(){
        window.time.innerHTML=new Date().toLocaleTimeString();
    },1000);
$(".slider").slideDown(2000);
    
var text="welcome to our website here you will finde what you need but order only";    
var len=0;    
var stoop=setInterval(function(){
    window.hed.innerHTML+=text[len++];
    if(len==text.length){
        clearInterval(stoop);
    }
    
},80);  
var text1="we provide for you collection of moral for differnce departments ";    
var len1=0;    
var stoop1=setInterval(function(){
    window.para.innerHTML+=text1[len1++];
    if(len1==text1.length){
        clearInterval(stoop1);
    }
    
},80);   

$("#slid1").click(function(){
    $("#show1").slideToggle(500);
});

$("#slid2").click(function(){
    $("#show2").slideToggle(500);
});

$("#slid3").click(function(){
    $("#show3").slideToggle(500);
});

//====================function get total ===============================
$("body").hover(function(){
    var fholds=0;
             var ftables=document.getElementById("tbody");
             for(let i=0;i<ftables.rows.length;i++){
              fholds+=parseInt(ftables.rows[i].cells[7].innerHTML);
          }
            window.dis.innerHTML=fholds;
});
//====================function get total ===============================
$(window).hover(function(){
    var fholds2=0;
             var ftables2=document.getElementById("tbody2");
             for(let i=0;i<ftables2.rows.length;i++){
              fholds2+=parseInt(ftables2.rows[i].cells[5].innerHTML);
          }
            window.dis2.innerHTML=fholds2;
});

//========================== function search =======================
$("#search").keyup(function(){
    let value=$(this).val().toLowerCase();
    $("main .fdiv").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);
    });
});
//========================== function search =======================
$(".search2").keyup(function(){
    let value=$(this).val().toLowerCase();
    $("#tbody tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);
    });
});


$("#blue").click(function(){
    $("#search").slideToggle(500);
});

$("input").keydown(function(){
    $(this).css({backgroundColor:"white"});
});

$("input").keyup(function(){
    $(this).css({backgroundColor:"#f0eeee"});
});
//==================================== member page ========================================

$("#myinfo").click(function(){
   
    $("#selecteds").fadeToggle(800);
    $("#availablec").fadeOut(100);
    $("#enrolledc").fadeOut(100);
    $("#allenrolledc").fadeOut(100);
    
});
$("#registration").click(function(){
    
    $("#availablec").fadeToggle(800);
    $("#selecteds").fadeOut(100);
    $("#enrolledc").fadeOut(100);
    $("#allenrolledc").fadeOut(100);
   
});
$("#current").click(function(){
  
    $("#enrolledc").fadeToggle(800);
    $("#availablec").fadeOut(100);
    $("#selecteds").fadeOut(100);
    $("#allenrolledc").fadeOut(100);
    
});
$("#allcourses").click(function(){
  
    $("#allenrolledc").fadeToggle(800);
    $("#availablec").fadeOut(100);
    $("#enrolledc").fadeOut(100);
    $("#selecteds").fadeOut(100);
    
});

});
