$(document).ready(function(){
    var q1="ahmed";
    var q2="ahmed hassan";
    var q3="sayed adel";
    var q4="mane ashmoawy";
    var q5="ahmed";
    
    let h1=window.dis1;
    let h2=window.dis2;
    let h3=window.dis3;
    let h4=window.dis4;
    let h5=window.dis5;
    
    var counte=0;
    function getandcorect(){
        
    }
    $("label[m='1']").click(function(){
        var sel=$(this).text();
        if(q1==sel){
             if(counte ==0){
                 counte+=20;
             }
        }
        else{
            if(counte != 0)
                {
                    counte-=20;
                }
        }
        //$("#distotal").text(counte);
        window.dis1.innerHTML=counte;
    
    });
    
    $("label[m='2']").click(function(){
        var sel=$(this).text();
        if(q2==sel){
             if(counte ==0){
                 counte+=20;
             }
        }
        else{
            if(counte != 0)
                {
                    counte-=20;
                }
        }
        //$("#distotal").text(counte);
        window.dis2.innerHTML=counte;
    
    });
    
    $("label[m='3']").click(function(){
        var sel=$(this).text();
        if(q3==sel){
             if(counte ==0){
                 counte+=20;
             }
        }
        else{
            if(counte != 0)
                {
                    counte-=20;
                }
        }
        //$("#distotal").text(counte);
        window.dis3.innerHTML=counte;
    
    });
    
    $("label[m='4']").click(function(){
        var sel=$(this).text();
        if(q4==sel){
             if(counte ==0){
                 counte+=20;
             }
        }
        else{
            if(counte != 0)
                {
                    counte-=20;
                }
        }
        window.dis4.innerHTML=counte;
    }); 
    $("label[m='5']").click(function(){
        var sel=$(this).text();
        if(q5==sel){
             if(counte ==0){
                 counte+=20;
             }
        }
        else{
            if(counte != 0)
                {
                    counte-=20;
                }
        }
        window.dis5.innerHTML=counte;
    });
    
    
    $("#button").hover(function(){ 
      window.distotal.innerHTML=(+h1.innerHTML+ +h2.innerHTML+ +h3.innerHTML+ +h4.innerHTML+ +h5.innerHTML );
      window.inputdegree.value=(+h1.innerHTML+ +h2.innerHTML+ +h3.innerHTML+ +h4.innerHTML+ +h5.innerHTML );
      //window.distotal.style.display="block";
        var total=$("#distotal").text();
        if(total <50)
        {
             $("#grade").text("F");
             $("#inputgrade").val("F");
        }
        
        else if(total >50 && total <64)
        {
            $("#grade").text("D");
             $("#inputgrade").val("D");
            
        }
        else if(total >65 && total <74)
        {
            $("#grade").text("C");
             $("#inputgrade").val("C");
        }
        else if(total >75 && total <84)
        {
            $("#grade").text("B");
             $("#inputgrade").val("B");
        }
        else if(total >85 && total <=100)
        {
            $("#grade").text("A");
             $("#inputgrade").val("A");
        }
        else{
             $("#grade").text("F");
             $("#inputgrade").val("F");
        }
         //window.grade.style.display="block";
        //scroll({top:0,behavair:'smooth',});
        //$("#grade").text(total);
    
    });
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});