// Set the date we're counting down to
var today = new Date();
var lastDayOfMonth = new Date(today.getFullYear(), today.getMonth()+1, 0);

// var countDownDate = new Date("Jan 1, 201 00:00:00").getTime();
var countDownDate = new Date(lastDayOfMonth).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	if (days < 1)
      days = '';
	if (days == 1)
      days = days + ' giorno ';
	if (days > 1)
      days = days + ' giorni ';
	if (hours < 10)
      hours = '0' + hours;
	if (minutes < 10)
	  minutes = '0' + minutes;
	if (seconds < 10)
	  seconds = '0' + seconds;
    
    // Output the result in an element with id="demo"
    document.getElementById("clock").innerHTML = days + hours + ":" + minutes + ":" + seconds;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("clock").innerHTML = "1 giorno!";
    }
}, 1000);