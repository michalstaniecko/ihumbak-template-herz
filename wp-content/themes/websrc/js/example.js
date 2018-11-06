class Example {
	constructor() {
		this.i = true;
		setInterval(()=>{
			$('.debuger').html($(window).scrollTop());
		}, 100);
	}
}

new Example();