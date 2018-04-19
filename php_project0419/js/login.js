var topBtn=$('.loginHeader >ul>li');	
		var arr1=['아이디','비빌번호'];
		var arr2=['주문번호','주문번호연락처'];
		
		var userId=$('input#userId');
		var userPw=$('input#userPw');
		
		topBtn.on('click',function(e){
			var idx=($(this).index());			
			$(this).addClass('on').siblings().removeClass('on');			
			if(idx==0){
				userId.attr( "placeholder" ,arr1[0]);
				userPw.attr( "placeholder" ,arr1[1]);
			}else if(idx==1){
				userId.attr( "placeholder" ,arr2[0]);
				userPw.attr( "placeholder" ,arr2[1]);
			}
});
		