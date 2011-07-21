steal.plugins('jquery/model').then(function() {
	$.Model('Profile', {
		findOne: "/api/profile/{id}"
	},
	{});
});
