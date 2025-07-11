jQuery(document).ready(function(){

	var items = [];
	var current = {};
	var tilesources = [];
	var overlay = false;
	var selectionMode = false;
	var currentimg = "";
	var messages = [];
	var imgurl = "";


        let height = window.innerHeight - 220;
        jQuery("#output-window").css('height',height+"px");



	function load() {
	  imgurl = jQuery('#manifest').val();
	  chat();
	  jQuery("#chat").val("");
	}


	jQuery("#add-manifest-form").submit(function(event){
	  load();
	  event.preventDefault();
	});


	jQuery("#sendchat").submit(function(e){
	  e.preventDefault();
	  chat();
	  jQuery("#chat").val("");
	});	
	    
	/************************************
	* Show or hide the image
	******************************/
	jQuery("#reveal").click(function(e){
	  e.preventDefault();
	  if(jQuery("#img_overlay").hasClass('on')) {
	    jQuery("#img_overlay").removeClass('on');
	    jQuery(this).text('Hide');
	  }
	  else {
	    jQuery("#img_overlay").addClass('on');
	    jQuery(this).text('Reveal');
	  }
	});

	/************************************
	* Send messages
	******************************/
	function chat() {

	    //jQuery("#output").empty();
	    //jQuery("#output").append("<img src='assets/images/wait.gif' style='margin:10% 40%;'/>");

	    var sModelId = "gpt-4o-mini";
	    //messages.push({"role": "user", "content": inputstr});
	    
	    var prompt = jQuery("#chat").val();
	    
	    if(prompt == "") { prompt = "What is in this image?"; }
	    
	    var bubble = "<div class='user-bubble'>"+prompt+"</div>";
	    jQuery("#output").prepend(bubble);	

	    //var imgurl = jQuery("#preview").attr('src');

	    var d = {"prompt":prompt, "imgurl": imgurl}
	    
	    jQuery.post('fetch.php', d, function(response){
		var bubble = "<div class='bot-bubble'>"+response.response+"</div>";
		jQuery("#output").prepend(bubble);		  
		  
	    });
	}	



	/************************************
	* get a variable from the URL
	******************************/
	function getParam(parameterName) {
	    var result = null,
		tmp = [];
	    location.search
		.substr(1)
		.split("&")
		.forEach(function (item) {
		  tmp = item.split("=");
		  if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
		});
	    return result;
	}
	
	
	/************************************
	* you can add an image as a URL GET varaiable (?url=...)
	******************************/
	if(getParam('url') != '') {
	  load();
	}



});


