
FOM(function(){
	var FOMitems = FOM("#wk_brand_ul");
	var FOMout = FOM(".wk_brand_main");	
	var FOMitems_child_width = FOMitems.children().outerWidth(true);
	var iLilen=FOMitems.children(".wk_brand_li").length;
	FOMitems.css('width',FOMitems_child_width*iLilen+'px');
	FOM("#wk_brand_left").click(function(){
		nextImg();
	});
	FOM("#wk_brand_right").click(function(){
		prevImg();
	});
	function nextImg(){
		FOMitems.stop().animate({left:"-"+FOMitems_child_width +"px"},500,function(){
			FOMitems.append(FOMitems.children().first());
			FOMitems.css("left",0);
		});	
	}			
	function prevImg(){
		FOMitems.css('left',-FOMitems_child_width);
		FOMitems.prepend(FOMitems.children().last());
		FOMitems.stop().animate({"left":0},500);
	}
	function arrowScroll(){
		nextImg();		
	};			
			
	var auto = setInterval(arrowScroll,3000);
	FOMout.hover(function(){
		clearInterval(auto);
	},function(){
		auto = setInterval(arrowScroll,3000);
	});
});



FOM(function(){
	var FOMitems = FOM("#wk_case_ul");
	var FOMout = FOM(".wk_case_main");	
	var FOMitems_child_width = FOMitems.children().outerWidth(true);
	var iLilen=FOMitems.children(".wk_case_li").length;
	FOMitems.css('width',FOMitems_child_width*iLilen+'px');
	FOM("#wk_case_left").click(function(){
		nextImg();
	});
	FOM("#wk_case_right").click(function(){
		prevImg();
	});
	function nextImg(){
		FOMitems.stop().animate({left:"-"+FOMitems_child_width +"px"},500,function(){
			FOMitems.append(FOMitems.children().first());
			FOMitems.css("left",0);
		});	
	}			
	function prevImg(){
		FOMitems.css('left',-FOMitems_child_width);
		FOMitems.prepend(FOMitems.children().last());
		FOMitems.stop().animate({"left":0},500);
	}
	function arrowScroll(){
		nextImg();		
	};			
			
	var auto = setInterval(arrowScroll,3000);
	FOMout.hover(function(){
		clearInterval(auto);
	},function(){
		auto = setInterval(arrowScroll,3000);
	});
});
