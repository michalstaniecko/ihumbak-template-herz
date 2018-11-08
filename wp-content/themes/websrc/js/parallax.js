class Parallax {
	constructor() {
		this.i = true;
		this.$stones = $('.js-stones__item');
		this.afterDocumentScrolled = $(window).scrollTop();
		this.windowHeight = $(window).height();
		this.documentBottom = $('footer').outerHeight() + $('footer').offset().top;

		setInterval(() => {
			this.topWindowEdge = $(window).scrollTop();
			this.bottomWindowEdge = this.topWindowEdge + this.windowHeight;
			this.scrollTop = $(window).scrollTop() - this.afterDocumentScrolled;
			this.scrollDown = this.scrollTop > 0;
			this.ScrollUp = this.scrollTop < 0;
			this.documentBottom = $('footer').outerHeight() + $('footer').offset().top;

			this.scrollTopPercent = (this.scrollTop / this.documentHeight) * 100;
			this.windowHeight = $(window).height();
			this.windowHeightPercent = (this.windowHeight / this.documentHeight) * 100;

			this.$stones.each((index, element) => {
				this.stoneAnimation(element);
			});


			this.afterDocumentScrolled = $(window).scrollTop();

		}, 1);
	}

	stoneAnimation(element) {
		var $stone = $(element);
		var scrollRatio = $stone.data('scroll');

		var topStoneEdge = $stone.offset().top;
		var stoneHeight = $stone.outerHeight();
		var bottomStoneEdge = topStoneEdge + stoneHeight;
		var stoneInDocument = (bottomStoneEdge < this.documentBottom && topStoneEdge > 0);
		var stoneInViewport = (topStoneEdge < this.bottomWindowEdge && bottomStoneEdge > this.topWindowEdge);
		var stoneUnderViewport = (topStoneEdge > this.bottomWindowEdge);
		var stoneAboveViewport = (bottomStoneEdge < this.topWindowEdge);


		var positionStart = ($stone.data('start') / 100) * this.documentBottom;

		var positionAfterScroll = positionStart + this.topWindowEdge;

		if (positionAfterScroll + this.scrollTop + stoneHeight > this.documentBottom) {
			return false
		}

		if (positionAfterScroll + this.scrollTop < 0) {
			return false;
		}

		if (stoneInViewport) {
			if (this.scrollDown) {
			}
			if (this.scrollTop) {
			}
			$stone.css('top', positionAfterScroll + 'px');
		}

		//$('.debuger').html(this.documentBottom + ', ' + (positionAfterScroll + stoneHeight + this.scrollTop));
	}
}

new Parallax();