class TopBar {
	constructor() {
		this.topbar = '.c-topbar';
		this.$window = $(window);
		this.$body = $('html, body');
		this.duration = $(this.topbar).css('animation-duration');
		this.$window.on('scroll load', () => {
			var topScroll = this.$body.scrollTop();
			var isScrolled = topScroll > $(this.topbar).height();
			var pushTopbar = topScroll > 300;
			$(this.topbar)
				.toggleClass('c-topbar--push', pushTopbar)


		});
	}
}

new TopBar();