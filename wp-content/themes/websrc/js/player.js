class Player {
	constructor() {
		this.$playerYoutubeContainers = $('.c-hero-scene__player--youtube');
		this.$playerVideoContainers = $('.c-hero-scene__player--video');
		this.firePlayVideo();
	}

	playVideo(targetSlide, isInit = false) {
		var $slide = $('.c-hero-scene__slider--video.swiper-slide-' + targetSlide);
		$('.c-hero-scene__play-icon').addClass('d-none');
		if (!$slide.length) return false;
		var mq = window.matchMedia('(max-width: 991px)');
		if (mq.matches) {
			var videoToPlay = $slide.find('video.c-hero-scene__video--mobile');
		} else {

			var videoToPlay = $slide.find('video.c-hero-scene__video--desktop');
		}
		var projectImage = $slide.find('.c-hero-scene__project');
		var promise = videoToPlay[0].play();


		if (promise !== undefined) {
			promise.then(_ => {
				// Autoplay started!
				if (isInit) {

					videoToPlay.css('z-index', 2);
					projectImage.css('z-index', 1);
					$('.c-hero-scene__play-icon').addClass('d-none');
				}
			}).catch(error => {
				if (isInit) {

					projectImage.css('z-index', 3);

					$('.c-hero-scene__play-icon').removeClass('d-none');

					// Autoplay was prevented.
					// Show a "Play" button so that user can start playback.
				}
			});
		}
		if (!isInit) {

			videoToPlay.css('z-index', 2);
			projectImage.css('z-index', 1);
			$('.c-hero-scene__play-icon').addClass('d-none');
		}

	}

	pauseVideo(targetSlide) {
		var $slide = $('.c-hero-scene__slider--video.swiper-slide-' + targetSlide);

		if (!$slide.length) return false;

		var videoToPlay = $slide.find('video');

		videoToPlay[0].pause();

	}

	firePlayVideo() {
		var playButton = $('.c-hero-scene__play-icon');
		playButton.on('click', () => {
			this.playVideo('active');
		});
	}

	youtube() {
		var playerYoutube = [];
		var $playerContainers = this.$playerYoutubeContainers;
		window.onYouTubeIframeAPIReady = () => {
			$.each($playerContainers, ($key, elem) => {
				var playerID = $(elem).attr('id');
				var youtubeID = $(elem).data('youtubeid');
				playerYoutube[$key] = new YT.Player(playerID, {
					width: '100%',
					height: '100%',
					videoId: youtubeID,
					playerVars: {'autoplay': 0, 'controls': 0, 'loop': 1, 'modestbranding': 0, 'rel': 0, 'showinfo': 0},
					events: {}
				});
			});
		}
	}
}

export var player = new Player();
//player.youtube();
