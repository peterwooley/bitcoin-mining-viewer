steal
	.models('profile', 'stats')
	.controllers('summary')
	.plugins('jquery/view/tmpl')
	.then(function() {
		// User the Profile model to load the data for my account
		Profile.findOne({id: "23647-d6f58ace09a4340d7923fdf25edd6bb2"}, function(profile) {

			// Show stats on the current block
			Stats.findOne(null, function(stats) {
				console.log(profile, stats);
				$("#profile").summary({profile: profile, stats: stats});
			});
		});
});
