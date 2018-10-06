<html lang="en">
  <head>
    <title>Timer </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

  	<title> </title>

	<script type="text/javascript" src="<?php echo base_url();?>/asset/js/timer_2.js"></script>

  </head>
  <body>


<div class="container">
<?php
$days = $hours = $minutes = $seconds = 0;
$total = 0;
////when to get from session in controller from database
	//$minutes = $this->session->userdata('time_of_exam');
//start with 1 hours
$minutes = 60;

	$seconds = $seconds * 1000; // Converted into milliseconds
	$minutes = $minutes * 60 * 1000; // Converted into milliseconds
	$hours = $hours * 60 * 60 * 1000; // Converted into milliseconds
	$days = $days * 24 * 60 * 60 * 1000; // Converted into milliseconds

	$total = $days + $hours + $minutes + $seconds; // Total milliseconds

// session to record last timw when refresh page
   if (!$this->session->userdata('count_timer_down'))
   {
	   $countDownDate = (time()*1000)+$total;
		$this->session->set_userdata('count_timer_down',$countDownDate);
   }

	$send_time = $this->session->userdata('count_timer_down');
?>
<div>Refresh any time ..... timer will continue don't worry </div>
<div style="float:left;width:150px; margin-right:0;">

	Time left:
					<div class="text-center">
						<div class="row">
							<label class="timer" id="timer_days"></label>
							<label class="timer" id="timer_hours"></label>:
							<label class="timer" id="timer_minutes"></label>:
							<label class="timer" id="timer_seconds"></label>
						</div>
					</div>

          <form name="End_timer_exam" action="<?php echo site_url();?>/timer/End_timer" method="post">
            <button class="btn btn-danger" style="margin-top:2px;">End Time</button>

          </form>
<div id="showtime"></div>
<div id="showtime2"></div>
</div>
</div>


</div>
<!-- JS Functions -->
<script type="text/javascript">


  //When Reset Timer button is pressed, this function gets called
  //function Reset() {
  //	TimerFunction(-97); // -97 is just a random selection
  //}

   //variable 'total' contains the total timer value in milliseconds
  var time_with_Milliseconds_now = new Date().getTime(); // Getting todays date and time in milliseconds
var time_Milliseconds_now = new Date().getMilliseconds();
var result_current_time = (time_with_Milliseconds_now-time_Milliseconds_now);
var countDownDate = <?php echo $send_time; ?>;
//document.getElementById("showtime").innerHTML =countDownDate - result_current_time;
//document.getElementById("showtime2").innerHTML =countDownDate - result_current_time ;

  TimerFunction(countDownDate); //Calling function from timer.js file
</script>


</body>
</html>
