steal.plugins('jquery/controller').then(function() {
	$.Controller("Summary", {}, {
		init: function(el, options) {
			this.element.html('/mining/views/summary.tmpl', options);
			console.log(options);
		}
	});
});
