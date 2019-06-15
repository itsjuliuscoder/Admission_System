$patterns = "";
for(var i=1; i<= 20; i++){
	$img = 	"images/style-picker/pattern"+i+".jpg";	
	$patterns += '<li>';
	$patterns += '<a id="pattern'+i+'"  href="" title="">';
	$patterns += '<img src="'+ $img +'" alt="pattern'+i+'" title="pattern'+i+'"/>'
	$patterns += '</a>';
	$patterns += '</li>'; 
}

$color = ["skyblue", "blue", "chocolate", "coral", "blueturquoise", "brown", "burntsienna", "chillipepper", "graasgreen", "green", "orange", "pink", "radiantorchid", "red", "yellow"];
$colors = "";
for(var i=0; i<$color.length; i++){
	$img = 	"images/style-picker/"+$color[i]+".jpg";	
	$colors += '<li>';
	$colors += '<a id="'+$color[i]+'" href="" title="">';
	$colors += '<img src="'+ $img +'" alt="color-'+$color[i]+'" title="color-'+$color[i]+'"/>'
	$colors += '</a>';
	$colors += '</li>'; 
}


$str = '<!-- **DT Style Picker Wrapper** -->';
$str += '<div class="dt-style-picker-wrapper">';
$str += '	<a href="" title="" class="style-picker-ico"> <img src="images/style-picker/picker-icon.png" title="" alt="image"/> </a>';
$str += '	<div id="dt-style-picker">';
$str += '   	<h2> Select Your Style </h2>';
$str += '       <h3> Choose your layout </h3>';
$str += '		<ul class="layout-picker">';
$str += '       	<li> <a id="fullwidth" href="" title="" class="selected"> <img src="images/style-picker/fullwidth.jpg" alt="" title="" /> </a> </li>';
$str += '       	<li> <a id="boxed" href="" title=""> <img src="images/style-picker/boxed.jpg" alt="" title="" /> </a> </li>';
$str += '		</ul>';
$str += '		<div class="hr"> </div>';
$str += '       <h3> Choose your Scheme </h3>';
$str += '		<ul class="scheme-picker">';
$str += '       	<li> <a id="light" href="" title="" class="selected"> <img src="images/style-picker/light.png" alt="Light" width="41" height="11" /> </a> </li>';
$str += '       	<li> <a id="dark" href="" title=""> <img src="images/style-picker/dark.png" alt="Dark" width="39" height="10" /> </a> </li>';
$str += '		</ul>';
$str += '		<div class="hr"> </div>';
$str += '		<div id="pattern-holder" style="display:none;">';
$str +='			<h3> Patterns for Boxed Layout </h3>';
$str += '			<ul class="pattern-picker">';
$str += 				$patterns;
$str += '			</ul>';
$str += '			<div class="hr"> </div>';
$str += '		</div>';
$str += '		<h3> Color scheme </h3>';
$str += '		<ul class="color-picker">';
$str += 		$colors;
$str += '		</ul>';
$str += '	</div>';
$str += '</div><!-- **DT Style Picker Wrapper - End** -->';
jQuery(document).ready(function($){
	$("body > div.wrapper").before($str);
	$picker_container = $("div.dt-style-picker-wrapper");
	
	//Applying Cookies
	if ( $.cookie('control-open') == 1 ) { 
		$picker_container.animate( { left: -230 } );
		$('a.style-picker-ico').addClass('control-open');
	}

	//Check Cookies in diffent pages and do the following things
	if($.cookie("priority_skin")!= null){
		$href = $("link[id='skin-css']").attr("href");
		$href = $href.substr(0,$href.lastIndexOf("/"));
		$href = $href.substr(0,$href.lastIndexOf("/"))+"/"+$.cookie("priority_skin")+"/style.css";
		$("link[id='skin-css']").attr("href",$href);
		$("ul.color-picker a[id='"+$.cookie("priority_skin")+"']").addClass("selected");
	}else{
		$("ul.color-picker a:first").addClass("selected");
	}

	//Apply Layout
	if($.cookie("priority_layout") == "boxed"){
		$("ul.layout-picker li a").removeAttr("class");
		$("ul.layout-picker li a[id='"+$.cookie("priority_layout")+"']").addClass("selected");
		$("div#pattern-holder").removeAttr("style");

		$i = ($.cookie("priority_pattern")) ? $.cookie("priority_pattern")  : 'pattern1';
		$img = 	"images/patterns/"+$i+".jpg";
		$('body').css('background-image', 'url('+$img+')').addClass('boxed');;
		$("ul.pattern-picker a[id="+$.cookie("priority_pattern")+"]").addClass('selected');
	}
	//Applying Cookies End
	
	if($.cookie("priority_scheme") != null){
		if( $.cookie("priority_scheme") === "dark" ) {
			$("<link id='light-dark-css' href='dark/dark.css' rel='stylesheet' media='all' />").insertBefore($('#skin-css'));
			$("ul.scheme-picker a:first").addClass('selected');
			$('#logo img').attr('src', 'dark/images/logo-dark.png');
		}
		else if( $.cookie("priority_scheme") === "light" ) {
			$('#light-dark-css').remove();
			$("ul.scheme-picker a:last").addClass('selected');
			$('#logo img').attr('src', 'images/logo.png');
		}
	}
	
	//Picker On/Off
	$("a.style-picker-ico").click(function(e){
		$this = $(this);	
		if($this.hasClass('control-open')){
			$picker_container.animate({left: 0},function(){$this.removeClass('control-open');});
			$.cookie('control-open', 0);	
		}else{
			$picker_container.animate({left: -230},function(){$this.addClass('control-open');});
			$.cookie('control-open', 1);
		}
		e.preventDefault();
	});//Picker On/Off end

	//Layout Picker
	$("ul.layout-picker a").click(function(e){
		$this = $(this);
		$("ul.layout-picker a").removeAttr("class");
		$this.addClass("selected");
		$.cookie("priority_layout", $this.attr("id"));

		if( $.cookie("priority_layout") === "boxed") {
			$("body").addClass("boxed");
			$("div#pattern-holder").slideDown();
			
			if( $.cookie("priority_pattern") == null ){
				$("ul.pattern-picker a:first").addClass('selected');
				$.cookie("priority_pattern","pattern1",{ path: '/' });
			}else{
				$("ul.pattern-picker a[id="+$.cookie("priority_pattern")+"]").addClass('selected');
				$img = 	"images/patterns/"+$.cookie("priority_pattern")+".jpg";
				$('body').css('background-image', 'url('+$img+')');
			}
		} else {
			$("body").removeAttr("style").removeClass("boxed");
			$("div#pattern-holder").slideUp();
			$("ul.pattern-picker a").removeAttr("class");
		}
		window.location.href = location.href;
	e.preventDefault();
	});//Layout Picker End
	
	//Scheme Picker
	$("ul.scheme-picker a").click(function(e){
		$this = $(this);
		$("ul.scheme-picker a").removeAttr("class");
		$this.addClass("selected");
		$.cookie("priority_scheme", $this.attr("id"), { path: '/' });
		if( $.cookie("priority_scheme") === "dark" ) {
			$("<link id='light-dark-css' href='dark/dark.css' rel='stylesheet' media='all' />").insertBefore($('#skin-css'));
			$('#logo img').attr('src', 'dark/images/logo-dark.png');
		}
		else if( $.cookie("priority_scheme") === "light" ) {
			$('#light-dark-css').remove();
			$('#logo img').attr('src', 'images/logo.png');
		}
		e.preventDefault();
	});//Scheme Picker 

	//Pattern Picker
	$("ul.pattern-picker a").click(function(e){
		if($.cookie("priority_layout") == "boxed"){
			$this = $(this);
			$("ul.pattern-picker a").removeAttr("class");
			$this.addClass("selected");
			$.cookie("priority_pattern", $this.attr("id"), { path: '/' });
			$img = 	"images/patterns/"+$.cookie("priority_pattern")+".jpg";
			$('body').css('background-image', 'url('+$img+')');
		}
		e.preventDefault();
	});//Pattern Picker End
	

	//Color Picker
	$("ul.color-picker a").click(function(e){
		$this = $(this);
		$("ul.color-picker a").removeAttr("class");
		$this.addClass("selected");
		$.cookie("priority_skin", $this.attr("id"), { path: '/' });
		$href = $("link[id='skin-css']").attr("href");
		$href = $href.substr(0,$href.lastIndexOf("/"));
		$href = $href.substr(0,$href.lastIndexOf("/"))+"/"+$this.attr("id")+"/style.css";
		$("link[id='skin-css']").attr("href",$href);
		e.preventDefault();
	});//Color Picker End

});