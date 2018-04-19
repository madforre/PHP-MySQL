var gnbLi=$('.gnb>ul>li');
gnbLi.find('span').hide();
	var box=$('.box');
	gnbLi.hover(
		function(e){
			box.slideDown(0);
			$(this).find('span').show();
		},
		function(e){
			box.slideUp(0);
			$(this).find('span').hide();
		}
);

