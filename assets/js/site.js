$(document).ready(function(){
	$('.dropdown-submenu a.sub-drop').on("click", function(e){
		/* This is to hide all dropdown-menu children if the parent(dropdown-submenu) in the element have been clicked */ 
		$(this).next('ul').find('.dropdown-menu').each(function(){
			$(this).hide();
		});
		/* This is to find another dropdown-menu have has been opened and hide its submenu */   
		var xw = $(this);
		$(this).closest(".dropdown-menu").find('.dropdown-submenu a.sub-drop').not(xw).each(function(){
			if($(this).next("ul").is(":visible")){
				$(this).next("ul").hide();
			}

		});
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	});
});

// $(function() {
// 	$(".carousel").on("slide.bs.carousel", function(e) {
// 		var prev = $(this)
// 			.find(".active")
// 			.index();
// 		var next = $(e.relatedTarget).index();
// 		var video = $("#video-player")[0];
// 		var videoSlide = $("#video-player")
// 			.closest(".carousel-item")
// 			.index();
// 		if (next === videoSlide) {
// 			if (video.tagName == "IFRAME") {
// 				player.playVideo();
// 			} else {
// 				createVideo(video);
// 			}
// 		} else {
// 			if (typeof player !== "undefined") {
// 				player.pauseVideo();
// 			}
// 		}
// 	});
// });

// function createVideo(video) {
// 	var youtubeScriptId = "youtube-api";
// 	var youtubeScript = document.getElementById(youtubeScriptId);
// 	var videoId = video.getAttribute("data-video-id");

// 	if (youtubeScript === null) {
// 		var tag = document.createElement("script");
// 		var firstScript = document.getElementsByTagName("script")[0];

// 		tag.src = "https://www.youtube.com/iframe_api";
// 		tag.id = youtubeScriptId;
// 		firstScript.parentNode.insertBefore(tag, firstScript);
// 	}

// 	window.onYouTubeIframeAPIReady = function() {
// 	window.player = new window.YT.Player(video, {
// 		videoId: videoId,
// 		playerVars: {
// 		autoplay: 1,
// 		modestbranding: 1,
// 		rel: 0
// 		}
// 	});
// 	};
// }