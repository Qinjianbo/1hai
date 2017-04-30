// 多个属性运动框架  添加回调函数
		 function animate(obj,json,fn) {  // 给谁    json
        clearInterval(obj.timer);
        obj.timer = setInterval(function() {
            var flag = true;  // 用来判断是否停止定时器   一定写到遍历的外面
            for(var attr in json){   
               
                var current = 0;
                if(attr == "opacity")
                {
                    current = Math.round(parseInt(getStyle(obj,attr)*100)) || 0;
                   
                }
                else
                {
                    current = parseInt(getStyle(obj,attr)); // 数值
                }
               // console.log(current);
                
                var step = ( json[attr] - current) / 10; 
                step = step > 0 ? Math.ceil(step) : Math.floor(step);
                //判断透明度
                if(attr == "opacity")  
                {
                     if("opacity" in obj.style) 
                     {
                         
                         obj.style.opacity = (current + step) /100;
                     }
                    else
                     {  // obj.style.filter = alpha(opacity = 30)
                         obj.style.filter = "alpha(opacity = "+(current + step)*10+")";
                         alert(obj.style.filter);

                     }
                }
                else if(attr == "zIndex")
                {
                    obj.style.zIndex = json[attr];
                }
                else
                {
                    obj.style[attr] = current  + step + "px" ;
                }

                if(current != json[attr])  
                {
                    flag =  false;
                }
            }
            if(flag)  
            {
                clearInterval(obj.timer);
              
                if(fn)   
                {
                    fn(); 
                }
            }
        },30)
    }
    function getStyle(obj,attr) {  
        if(obj.currentStyle)  
        {
            return obj.currentStyle[attr];  
        }
        else
        {
            return window.getComputedStyle(obj,null)[attr];  
        }
    }
    
        var banner=document.getElementsByClassName("banner")[0];
		var imgs=document.getElementsByClassName("imgs")[0];
	
		var pre=document.getElementsByClassName("arrow")[0];
		var next=document.getElementsByClassName("arrow")[1];
		var animated=false;
	
        var count=1;
		function animate(offset){
			animated=true;			
			var newleft=imgs.offsetLeft+offset;
			var timer=1000;
			var interval=10;
			
			var speed=offset/30;
			function go(){		
				if((speed<0&&imgs.offsetLeft>newleft)||(speed>0&&imgs.offsetLeft<newleft)){		
					imgs.style.left=imgs.offsetLeft+speed+"px";
				   setTimeout(go,interval);
				}
				else{
					if(newleft<-1960){
				      newleft=0;
			        }else if(newleft>0){
				      newleft=-1960;
			        }		        
			    imgs.style.left=newleft+"px";
			    animated=false;
				}
			}
			go();
		}
		next.onclick=function(){
	        if(animated){
			return;
			}
	        animate(-1100);
			count++;
			if(count>5){
				count=1;
			}
			
		}
		pre.onclick=function(){
	        if(animated){
			return;
			}
			animate(+1100);
			count--;
			if(count<1){
				count=5;
			}
	
		}
		function play(){
		  timer2=setInterval(
		  	next.onclick
		  	,3000)
		}
		
		function stop(){
			clearInterval(timer2);
		}
		
		banner.onmouseover = stop;
        banner.onmouseout = play;
        play();
