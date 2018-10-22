class HeroScene {
	constructor() {
		this.heroSceneContainer = '.js-hero-scene__swiper-container';
	}

	initSlider() {
		this.heroSceneSlider = new Swiper('.swiper-container', {

		});
	}
}

var heroScene = new HeroScene();

heroScene.initSlider();