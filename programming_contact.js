$(document).ready(function(){
    
    setTimeout(function(){
    $("#centralis").animate({top:"200px",position:"abolute",fontSize:"20px"},1000,function(){
         $("#centralis").animate({top:"100px",position:"abolute",fontSize:"40px"},500,function(){
                  $("#centralis").animate({opacity:"0.1"},100);
                  $("#centralis").animate({opacity:"1.0"},100);
                  $("#centralis").animate({opacity:"0.1"},100);
                  $("#centralis").animate({opacity:"1.0"},100);
                  $("#centralis").animate({opacity:"0.9"},100,function(){
                  $("#centralis img").animate({width:"170px",height:"170px"},200,function(){
    setInterval(function(){
    window.clock.innerHTML=new Date().toLocaleTimeString();
    },1000);
                              $("#centralis img").css({border:"10px outset white"});
                         });
                      
                  });
               
         });
        
    });  
    },500);
    
    let mood="sign";
    

    $("#sign").click(function(){
        
    if(mood=="sign"){
    $("#sgin").css({display:"block"});
    $("#login").css({display:"none"});
        
    }
    else{
    $("#sgin").css({display:"none"});
    $("#login").css({display:"block"});   
        }
        
    });
    
    $("#sub").hover(function(){
        window.sign.innerHTML="log in";
        mood="log in";
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
});