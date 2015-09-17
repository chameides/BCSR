$(document).ready(function() {
	var sceneController = new ScrollMagic(),
		graphScene = new ScrollScene({triggerElement: '.graph-container'}),
		graphContainer = $('.graph-container'),
		studentsScene = new ScrollScene({triggerElement: '#our-students'});

	graphScene.addTo(sceneController);

	graphScene.on('enter', function() {
		// expand graph
		graphContainer.find('.bar').each(function(i, el) {
			var innerBar = $(el).find('div'),
				destinationPercentage = parseInt(innerBar.data('percentage'), 10) * 0.85;

			innerBar.animate({
				height: destinationPercentage + '%'
			}, 900)
		});
	});

	graphScene.on('leave', function() {
		// collapse graph
		graphContainer.find('.bar').each(function(i, el) {
			var innerBar = $(el).find('div');

			innerBar.animate({
				height: '10%'
			}, 900)
		});
	});

	studentsScene.addTo(sceneController);

	studentsScene.on('enter', function() {
		$('#our-students').find('.stat').addClass('active');
	});

	studentsScene.on('leave', function() {
		$('#our-students').find('.stat').removeClass('active');
	});
});