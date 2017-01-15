<?php get_header(); ?>
<div class="animsition">
<section id="intro">
	<div id="date"></div>
	<div id="time"></div>
</section>
<section id="title-flash">
	<div><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo"></div>
</section>
</div>
<script>

jQuery(document).ready(function($) {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
var place= "Amsterdam";
// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#date').html(monthNames[newDate.getMonth()] + '. ' + newDate.getDate() + '. ' + newDate.getFullYear() + '. ' + place);


function checkTime(i) {
	return (i < 10) ? "0" + i : i;
}
function startTime() {
	var today = new Date(),
	h = checkTime(today.getHours()),
	m = checkTime(today.getMinutes()),
	s = checkTime(today.getSeconds());
	ms = checkTime(today.getMilliseconds());
	$('#time').html(h + ":" + m + ":" + s + ":" + ms.toString().substring(0, 2));
	t = setTimeout(function () {
		startTime()
	}, 200);
}

startTime();

$('body').on("click", function(){
	showTitle();
});

function showTitle(){
	$("#intro").velocity("fadeOut", { 
		duration: 1500, 
		mobileHA: false,
		complete: function(elements) { 
			$("#title-flash")
				.velocity("fadeIn", { 
					duration: 1500,
					mobileHA: false,
					complete: function(){
						window.location.href = "/home";
					}
				});
    	// 		.velocity("fadeOut", { 
    	// 			delay: 500, 
    	// 			duration: 1500, 
    	// 			complete: function(){
					// 	window.location.href = "/home";
					// }		

    	// 		});

		}
	});
}

});
</script>
<?php get_footer(); ?>
