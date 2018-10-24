import {player} from "./player";

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
			on: {
				init: () => {
					$(document).ready(()=>{
						player.playVideo('active');
					});
				},
				transitionEnd: () => {
				},
				slideChange: () => {
				},
				slideNextTransitionEnd: () => {

					player.pauseVideo('prev');
				},
				slidePrevTransitionEnd: () => {

					player.pauseVideo('next');
				},
				slideChangeTransitionStart: () => {

					player.playVideo('active');
				}
			}
		});
	}

	initPlayer() {
	}
}

var heroScene = new HeroScene();

heroScene.initSlider();