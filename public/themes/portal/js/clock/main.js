$(document).ready(function() {
	$(".example--circle .countdown").countEverest({
		//Set your target date here!
		//day: 1,
		month: 1,
		year: 2016,
		leftHandZeros: false,
		onChange: function() {
			//drawCircle(document.getElementById('days'), this.days, 365);
			drawCircle(document.getElementById('hours'), this.hours, 24);
			drawCircle(document.getElementById('minutes'), this.minutes, 60);
			drawCircle(document.getElementById('seconds'), this.seconds, 60);
		}
	});

	function deg(v) {
		return (Math.PI/180) * v - (Math.PI/2);
	}

	function drawCircle(canvas, value, max) {
		var	circle = canvas.getContext('2d');
		
		circle.clearRect(0, 0, canvas.width, canvas.height);
		circle.lineWidth = 4;

		circle.beginPath();
		circle.arc(
				canvas.width / 2, 
				canvas.height / 2, 
				canvas.width / 2 - circle.lineWidth, 
				deg(0), 
				deg(360 / max * (max - value)), 
				false);
		circle.strokeStyle = '#282828';
		circle.stroke();

		circle.beginPath();
		circle.arc(
				canvas.width / 2, 
				canvas.height / 2, 
				canvas.width / 2 - circle.lineWidth, 
				deg(0), 
				deg(360 / max * (max - value)), 
				true);
		circle.strokeStyle = '#117d8b';
		circle.stroke();
	}
});