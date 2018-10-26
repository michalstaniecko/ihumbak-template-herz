class Parallax {
	constructor() {
		this.parallax = skrollr.init({
			smoothScrollingDuration: 1,
			forceHeight: false
		});
	}
}

new Parallax();