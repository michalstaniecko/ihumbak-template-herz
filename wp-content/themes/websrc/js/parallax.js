class Parallax {
	constructor() {
		this.i = true;
		this.$stones = $('.js-stones__item');
		this.afterDocumentScrolled = $(window).scrollTop();
		setInterval(()=>{
			this.scrollTop = $(window).scrollTop() - this.afterDocumentScrolled;
			this.documentHeight = $('body').height();

			this.scrollTopPercent = ( this.scrollTop / this.documentHeight ) * 100;
			this.windowHeight = $(window).height();
			this.windowHeightPercent = ( this.windowHeight / this.documentHeight ) * 100;
			this.$stones.each((index, element)=> {
				this.stoneAnimation(element);
			});

			this.afterDocumentScrolled = $(window).scrollTop();

			$('.debuger').html(this.scrollTopPercent + '%');
		}, 50);
	}

	stoneAnimation(element) {
		var $stone = $(element);
		var positionStart = $stone.data('start');
		var positionStop = $stone.data('stop');
		var scrollRatio = $stone.data('scroll');
		var documentTopPercent = this.scrollTop / this.documentHeight;
		var cssTop = parseInt($stone.css('top'));
		var cssTopAfterScroll = cssTop - this.scrollTop;
		$stone.css('top', cssTopAfterScroll);
	}
}

new Parallax();