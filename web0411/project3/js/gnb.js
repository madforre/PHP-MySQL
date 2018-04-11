    var gnbLi=document.querySelectorAll('.gnb>ul>li');
    var gnbOut=document.querySelector('.section')
//    var box=document.querySelector('.box');
    var box=$('.box');
    for(i=0;i<gnbLi.length;i++){
       gnbLi[i].addEventListener('mouseover', function(){
//        console.log($(this).index());
        box.fadeIn(0);
        });
        gnbLi[i].addEventListener('mouseover', function(){
        box.fadeOut(0);
        });
        }