// JavaScript Document

jQuery(document).ready(function(){
  /*jQuery("#us_list_btn").click(function(){
	  jQuery("#us_list").slideToggle(500);
  });*/
  


jQuery('#side_open').click(function() {
    if(jQuery('body').css('overflow-x') != 'hidden') {
        jQuery('body').css('overflow-x', 'hidden'); 
        jQuery('#content').addClass('openr');
        jQuery('#side_nv').addClass('oy');
    } else {
        jQuery('body').css('overflow-x', '');
        jQuery('#content').removeClass('openr');
        jQuery('#side_nv').removeClass('oy');
    }
});

  	if($('.scrolltop').length > 0) {
		scrolltop.init($('.scrolltop'));
	}

});


var scrolltop = {
	obj : null,
	init : function(obj) {
		scrolltop.obj = obj;
		var fixed = this.isfixed();
		obj.css('opacity', '.618');
		if(fixed) {
			obj.css('bottom', '58px');
		} else {
			obj.css({'visibility':'visible', 'position':'absolute'});
		}
		$(window).on('resize', function() {
			if(fixed) {
				obj.css('bottom', '58px');
			} else {
				obj.css('top', ($(document).scrollTop() + $(window).height() - 40) + 'px');
			}
		});
		obj.on('tap', function() {
			$(document).scrollTop($(document).height());
		});
		$(document).on('scroll', function() {
			if(!fixed) {
				obj.css('top', ($(document).scrollTop() + $(window).height() - 40) + 'px');
			}
			if($(document).scrollTop() >= 400) {
				obj.removeClass('bottom')
				.off().on('tap', function() {
					window.scrollTo('0', '1');
				});
			} else {
				obj.addClass('bottom')
				.off().on('tap', function() {
					$(document).scrollTop($(document).height());
				});
			}
		});

	},
	isfixed : function() {
		var offset = scrolltop.obj.offset();
		var scrollTop = $(window).scrollTop();
		var screenHeight = document.documentElement.clientHeight;
		if(offset == undefined) {
			return false;
		}
		if(offset.top < scrollTop || (offset.top - scrollTop) > screenHeight) {
			return false;
		} else {
			return true;
		}
	}
};

function auto_height(){
	var h = document.documentElement.clientHeight - 0;
	var high = document.getElementById('wp');
	high.style.height = h + "px";
}	

var MAX_IMAGE_SIZE = {
    x: 98,
    y: 65
};
 
function resize(obj) {
    var img = obj || this;
    var size = MAX_IMAGE_SIZE;
    var rate = img.offsetWidth / img.offsetHeight;
	if(img.offsetWidth > img.offsetHeight) {
			img.style.height = size.y + "px";
			img.style.width = size.y * rate + "px";
	}
	if(img.offsetWidth < img.offsetHeight) {
			img.style.width = size.x + "px";
			img.style.height = size.x * rate + "px";
	}
    // 如果有需要居中的话，用CSS也可以实现
    reCenter(img, size);
}
 
function reCenter(img, size) {
    /*if (img.offsetHeight < size.y) {
        img.style.marginTop = (size.y - img.offsetHeight)/2 + "px";
    }*/
    if (img.offsetWidth > size.x) {
		//alert(img.offsetWidth);
        img.style.marginLeft = '-' + (img.offsetWidth - size.x)/2 + "px";
    }
    if (img.offsetWidth < size.x) {
		//alert(img.offsetWidth);
        img.style.marginLeft = (size.x - img.offsetWidth)/2 + "px";
    }
}


