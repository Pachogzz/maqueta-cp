		<section id="home-slider" class="styled-carousel haz-flange after-flange">
			<div class="home-slider">
				<div id="mainSlideNav" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active align-items-center text-center" data-interval="6000">
							<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
							<div id="player"></div>

							<div 
								class="
									carousel-caption 
									d-none d-sm-block 
									my-auto 
									p-3 px-md-5 pl-lg-5 pr-lg-3 py-lg-3 
									col-5 col-sm-8 col-md-6 col-lg-4 col-xl-3 
									br-ntl-30 
									has-label"
							>
								<h2 class="text-yellow display-5 montserrat bolder"><strong>¡Bienvenido a Caja Popular Mexicana!</strong></h2>
								<h5 class="mb-2 montserrat medium">Somos una cooperativa de ahorro y préstamo, orgullosamente mexicana, cuyo motor son nuestros más de 2 millones 800 mil socios <strong>¡Vamos juntos, #CooperandoPorMéxico!</strong></h5>
								<a href="conocenos" class="btn btn-secondary br-30 px-5 font-weight-semibold">Saber más</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /. Slider Home -->

<script>

  var winwid = window.screen.width;
  var winhei = window.screen.height;

  // console.log(winwid);

  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: winhei,
      width: winwid,
      videoId: 'mYtq5f2a9D8',
      playerVars: { 'autoplay': 1, 'controls': 0, 'rel': 0, },
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
  	event.target.setVolume(0);
    event.target.playVideo();
	event.target.setPlaybackQuality('hd1080');
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.BUFFERING) {
      event.target.setPlaybackQuality('hd1080');
    }
    if (event.data == YT.PlayerState.PLAYING && !done) {
      // setTimeout(stopVideo, 27000);
      done = true;
    }
  }
  function stopVideo() {
    player.stopVideo();
  }
</script>
