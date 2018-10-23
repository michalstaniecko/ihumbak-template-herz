class HeroScene {
	constructor() {
		this.heroSceneContainer = '.js-hero-scene__swiper-container';
	}

	initSlider() {
		this.heroSceneSlider = new Swiper(this.heroSceneContainer, {
			/*effect: 'cube',
			grabCursor: true,
			cubeEffect: {
				shadow: true,
				slideShadows: true,
				shadowOffset: 20,
				shadowScale: 0.94,
			},*/
		});
	}
}

var heroScene = new HeroScene();

heroScene.initSlider();