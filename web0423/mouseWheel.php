
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
        body{
            overflow: hidden;
        }
        *{width: 100%;height: 100%;}
        ul,li{
            list-style: none;
        }
		section {
			width: 100%;
		    height: 100%;
			border: 10px solid #568;
			box-sizing: border-box;
			font-size: 50px;
			font-weight: bold;
			color: #568;
			position: relative;
            box-sizing: border-box;
		}
		.menu {
			position: fixed;
			bottom: 30px;
			right: 30px;
			width: 50px;
			height: 50px;
			background: #333;
			display: none;
		}
       

		.item {
            width: 50px;
			position: fixed;
			right: 20px;
			top: calc(50% - 60px)
		}

		.item li {
			width: 20px;
			height: 20px;
			background: #333;
			border: 2px solid #333;
			box-sizing: border-box;
			border-radius: 50%;
			margin-bottom: 5px;
		}

		li:hover {
			background: #888;
		}

		li.active {
			background: #568;
		}
	</style>
</head>

<body>
	<section>section1</section>
	<section>section2</section>
	<section>section3</section>
	<section>section4</section>
	<section>section5</section>

	<span class="menu"></span>
    <div class="item">
        <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ul> 
    </div>
    
	<script>
		var sample = [];
        
		$(window).on('scroll resize', function(e) {
            
			var html_top = $('html').scrollTop();
//            console.log(html_top);
//			console.log(html_top);
//			if (html_top > 0) {
//				$('.menu').fadeIn(500);
//			} else {
//				$('.menu').fadeOut(500);
//			}
			for (var i = 4; i > -1; i--) {
				var test1 = $('section').eq(i).offset().top;
				var test2 = $('section').eq(i).height()*2/3;
                
                sample.push(test1 + test2); //샘플이라는 배열에다가 
                console.log(sample.splice(i,1,test1 + test2)); // i라는 배열을 1부터 시작해서 test1 + test2 만큼 자름
//				var sec_height = $('section').height();
                
				if (html_top < sample[i]) {
					$('li').eq(i).addClass('active').siblings().removeClass('active');
				}
			}            
		});

		$('.menu').click(function(e) {
            $('html').scrollTop(0);
			$('html').animate({
				scrollTop: '0'
			}, 500);
		});

		$('li').click(function(e) {
			var idx = $(this).index(); //클릭한 li 인덱스 를 idx변수에 담음
			var sample = $('section').eq(idx).offset().top; // 섹션의 인덱스에 해당하는
                    // offset top (상대적 좌표인 탑 값 반환) 을 sample에 담음
			$('html').stop().animate({
				scrollTop: sample
			});
			$(this).addClass('active').siblings().removeClass('active');
		})
  



		$(window).on('mousewheel DOMMouseScroll', function(event) {
            
              var E = event.originalEvent;
              delta = 0;
                // console.log(E);
              if (E.detail) {
              delta = E.detail * -40;

                // $('body').text(delta);
              }else{
                delta = E.wheelDelta;

                // $('body').text(delta);
              };
		
			  var top = $('html').scrollTop(); //처음에는 0 //이동하면 값이 달라짐
			  var num1=$('section').eq(0).offset().top;
			  var num2=$('section').eq(1).offset().top;
			  var num=num2-num1; //상대적으로 다음섹션에서 이전섹션의 탑값을 빼준 값이다.

				if (delta >= 0) { //올라갈땐 120 반환하므로 양수
                    //이면 올라가는 것. 
                    // 수업에서 delta는 원래 event.originalEvent.wheelDelta(파폭지원x)였음
                    
                    // 이코드는 파이어폭스(크로스 브라우징)도 지원하는 코드이다.
																		
							 top=top-num;
												
					$('html, body').stop().animate({scrollTop:top}); 					  

					}else{ // 내려갈땐 -120 반환하므로 음수이면 내려가는 것.
                            top=top+num;
												
				    $('html, body').stop().animate({scrollTop:top});
						  

					}			   
				return false; //이벤트를 한번만 사용하고 중지 중복되지 않도록 처리하는 방법
		});

        
       
        
	</script>

</body>
</html>