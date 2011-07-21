steal
	.models('profile', 'stats')
	.controllers('summary')
	.plugins('jquery/view/tmpl')
	.then(f:unction() {
		// User the Profile model to load the data for my account
		Profile.findOne({id: "23647-d6f58ace09a4340d7923fdf25edd6bb2"}, function(data) {
			$("section").summary(data);	
		});

		// 
		Stats.findOne(null, function(data) {
			console.log(data);
		});
});
