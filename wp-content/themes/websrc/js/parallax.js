class Parallax {
	constructor() {
		this.i = true;
		this.$stones = $('.js-stones__item');
		this.afterDocumentScrolled = $(window).scrollTop();
		this.windowHeight = $(window).height();

		setInterval(() => {
			this.topWindowEdge = $(window).scrollTop();
			this.bottomWindowEdge = this.topWindowEdge + this.windowHeight;
			this.scrollTop = $(window).scrollTop() - this.afterDocumentScrolled;
			this.documentHeight = $('body').height();

			this.scrollTopPercent = (this.scrollTop / this.documentHeight) * 100;
			this.windowHeight = $(window).height();
			this.windowHeightPercent = (this.windowHeight / this.documentHeight) * 100;
			this.$stones.each((index, element) => {
				this.stoneAnimation(element);
			});

			var document_window = this.documentHeight - this.windowHeight;
			this.document_window_scrollTop  = $(window).scrollTop() / document_window;

			this.afterDocumentScrolled = $(window).scrollTop();

		}, 10);
	}

	stoneAnimation(element) {
		var $stone = $(element);
		var positionStart = ($stone.data('start') / 100) * this.documentHeight;
		var positionStop = ($stone.data('stop') / 100) * this.documentHeight;
		var scrollRatio = $stone.data('scroll');
		var documentTopPercent = this.scrollTop / this.documentHeight;

		var cssTop = parseInt($stone.css('top')) / this.documentHeight;
		$('.debuger').html(cssTop + ', ' + this.windowHeight);
		var cssTopAfterScroll = $stone.offset().top * this.document_window_scrollTop;
		var topStoneEdge = $stone.offset().top;
		var bottomStoneEdge = topStoneEdge + $stone.outerHeight();
		if (topStoneEdge < this.bottomWindowEdge && bottomStoneEdge > this.topWindowEdge) {

			$stone.css('top', ((this.documentHeight - this.windowHeight - 1500) * this.document_window_scrollTop) + positionStart + 'px');
		} else if (topStoneEdge > this.bottomWindowEdge) {
			//$stone.css('top', positionStart);
		} else if (bottomStoneEdge < this.topWindowEdge) {
		}
	}
}

new Parallax();