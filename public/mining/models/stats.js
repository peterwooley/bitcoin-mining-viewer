steal.plugins('jquery/model').then(function() {
	$.Model('Stats', {
		findOne: "/api/block"
	},
	{});

});
