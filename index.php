<?php 
require 'src/Jobby/Jobby.php';

$jobby = new Jobby();
$jobs = $jobby->getJobs();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title></title>
  </head>
  <body>
  		<?php 
  			if(isset($_POST['submit']))
  			{
  				$job = array(
  					'command'=>$_POST['command'],
					'schedule'=>getSchedule($_POST),
					//'output'=>$_POST['status'],
					'name'=>$_POST['name'],		
					'enabled'=>$_POST['status'],
					'job_id'=>$_POST['job_id'],
				);
  				
  				$jobby->add($job['name'], $job);
				
  			}
  		
  			
  			//load the data if job_id is set in url
  			if(isset($_GET['job_id']))
  			{	
  				$job = $jobby->getJobs($_GET['job_id']);
  			}
  			
  			$name = isset($job['name']) ? $job['name'] : '';
  			$command = isset($job['command']) ? $job['command'] : '';
  			$schedule = isset($job['schedule']) ? $job['schedule'] : '';
  			$output = isset($job['output']) ? $job['output'] : '';
  			$enabled = isset($job['enabled']) ? $job['enabled'] : '';
  			//$job_id = isset($job['job_id']) ? $job['job_id'] : 0;

  		?>
  		
  		<dir>
  		<?php 
  			if (!empty($jobs))
  			{
  				?><ul><?php 
  				foreach($jobs as $key => $job)
  				{
  					?>
  						<li><a href="index.php?job_id=<?php echo $key  ?>" ><?php echo $job['name'] ?></a></li>
  					<?php 
  				}
  				?></ul><?php
  				unset($job);
  			}
  		?>
  	</dir>
  	
  	
		<form id="cronJobGenerator" name="" action="" method="POST">
          <i class="tips" style="margin-bottom: 5px; display: block;">(Ctrl + Click to select multiple entries)</i>
          <table class="generator">
              <tbody>
                  <tr>
                      <td>
                          <table class="generatorBlock">
                              <tbody>
                                  <tr>
                                      <th colspan="2">Minutes</th>
                                  </tr>
                                  <tr>
                                      <td>
                                          <label class="radio" for="everyMinute"><input id="everyMinute" type="radio" checked="checked" value="*" name="minutes">
                                          Every Minute</label>
                                          <label class="radio" for="everyEvenMinute"><input id="everyEvenMinute" type="radio" value="*/2" name="minutes">
                                          Even Minutes</label>
                                          <label class="radio" for="everyOddMinute"><input id="everyOddMinute" type="radio" value="1-59/2" name="minutes">
                                          Odd Minutes</label>
                                          <label class="radio" for="every5Minute"><input id="every5Minute" type="radio" value="*/5" name="minutes">
                                          Every 5 Minutes</label>
                                          <label class="radio" for="every15Minute"><input id="every15Minute" type="radio" value="*/15" name="minutes">
                                          Every 15 Minutes</label>
                                          <label class="radio" for="every30Minute"><input id="every30Minute" type="radio" value="*/30" name="minutes">
                                          Every 30 Minutes</label>
                                      </td>

                                      <td>
                                          <table class="multipleEntries">
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <input type="radio" value="select" name="minutes">
                                                      </td>
                                                      <td>
                                                          <select multiple="" size="10" name="selectMinutes[]">
                                                          <option value="0">0</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          <option value="6">6</option>
                                                          <option value="7">7</option>
                                                          <option value="8">8</option>
                                                          <option value="9">9</option>
                                                          <option value="10">10</option>
                                                          <option value="11">11</option>
                                                          <option value="12">12</option>
                                                          <option value="13">13</option>
                                                          <option value="14">14</option>
                                                          <option value="15">15</option>
                                                          <option value="16">16</option>
                                                          <option value="17">17</option>
                                                          <option value="18">18</option>
                                                          <option value="19">19</option>
                                                          <option value="20">20</option>
                                                          <option value="21">21</option>
                                                          <option value="22">22</option>
                                                          <option value="23">23</option>
                                                          <option value="24">24</option>
                                                          <option value="25">25</option>
                                                          <option value="26">26</option>
                                                          <option value="27">27</option>
                                                          <option value="28">28</option>
                                                          <option value="29">29</option>
                                                          <option value="30">30</option>
                                                          <option value="31">31</option>
                                                          <option value="32">32</option>
                                                          <option value="33">33</option>
                                                          <option value="34">34</option>
                                                          <option value="35">35</option>
                                                          <option value="36">36</option>
                                                          <option value="37">37</option>
                                                          <option value="38">38</option>
                                                          <option value="39">39</option>
                                                          <option value="40">40</option>
                                                          <option value="41">41</option>
                                                          <option value="42">42</option>
                                                          <option value="43">43</option>
                                                          <option value="44">44</option>
                                                          <option value="45">45</option>
                                                          <option value="46">46</option>
                                                          <option value="47">47</option>
                                                          <option value="48">48</option>
                                                          <option value="49">49</option>
                                                          <option value="50">50</option>
                                                          <option value="51">51</option>
                                                          <option value="52">52</option>
                                                          <option value="53">53</option>
                                                          <option value="54">54</option>
                                                          <option value="55">55</option>
                                                          <option value="56">56</option>
                                                          <option value="57">57</option>
                                                          <option value="58">58</option>
                                                          <option value="59">59</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                      <td>
                          <table class="generatorBlock">
                              <tbody>
                                  <tr>
                                      <th colspan="2">Hours</th>
                                  </tr>
                                  <tr>
                                      <td>
                                          <label class="radio" for="everyHour"><input id="everyHour" type="radio" checked="checked" value="*" name="hours">
                                          Every Hour</label>
                                          <label class="radio" for="everyEvenHour"><input id="everyEvenHour" type="radio" value="*/2" name="hours">
                                          Even Hours</label>
                                          <label class="radio" for="everyOddHour"><input id="everyOddHour" type="radio" value="1-23/2" name="hours">
                                          Odd Hours</label>
                                          <label class="radio" for="every6Hours"><input id="every6Hours" type="radio" value="*/6" name="hours">
                                          Every 6 Hours</label>
                                          <label class="radio" for="every12Hours"><input id="every12Hours" type="radio" value="*/12" name="hours">
                                          Every 12 Hours</label>
                                      </td>
                                      <td>
                                          <table class="multipleEntries">
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <input type="radio" value="select" name="hours">
                                                      </td>
                                                      <td>
                                                          <select multiple="" size="10" name="selectHours[]">
                                                          <option value="0">Midnight</option>
                                                          <option value="1">1am</option>
                                                          <option value="2">2am</option>
                                                          <option value="3">3am</option>
                                                          <option value="4">4am</option>
                                                          <option value="5">5am</option>
                                                          <option value="6">6am</option>
                                                          <option value="7">7am</option>
                                                          <option value="8">8am</option>
                                                          <option value="9">9am</option>
                                                          <option value="10">10am</option>
                                                          <option value="11">11am</option>
                                                          <option value="12">Noon</option>
                                                          <option value="13">1pm</option>
                                                          <option value="14">2pm</option>
                                                          <option value="15">3pm</option>
                                                          <option value="16">4pm</option>
                                                          <option value="17">5pm</option>
                                                          <option value="18">6pm</option>
                                                          <option value="19">7pm</option>
                                                          <option value="20">8pm</option>
                                                          <option value="21">9pm</option>
                                                          <option value="22">10pm</option>
                                                          <option value="23">11pm</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                      <td>
                          <table class="generatorBlock">
                              <tbody>
                                  <tr>
                                      <th colspan="2">Days</th>
                                  </tr>
                                  <tr>
                                      <td>
                                          <label class="radio" for="everyday"><input id="everyday" type="radio" checked="checked" value="*" name="days">
                                        Every Day</label>
                                          <label class="radio" for="everyEvenDay"><input id="everyEvenDay" type="radio" value="*/2" name="days">
                                        Even Days</label>
                                          <label class="radio" for="everyOddDay"><input id="everyOddDay" type="radio" value="1-31/2" name="days">
                                        Odd Days</label>
                                        <label class="radio" for="every5Days"><input id="every5Days" type="radio" value="*/5" name="days">
                                        Every 5 Days</label>
                                        <label class="radio" for="every5Days"><input id="every5Days" type="radio" value="*/10" name="days">
                                        Every 10 Days</label>
                                          <label class="radio" for="every15Days"><input id="every15Days" type="radio" value="*/15" name="days">
                                        Every Half Month</label>
                                      </td>
                                      <td>
                                          <table class="multipleEntries">
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <input type="radio" value="select" name="days">
                                                      </td>
                                                      <td>
                                                          <select multiple="" size="10" name="selectDays[]">
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          <option value="6">6</option>
                                                          <option value="7">7</option>
                                                          <option value="8">8</option>
                                                          <option value="9">9</option>
                                                          <option value="10">10</option>
                                                          <option value="11">11</option>
                                                          <option value="12">12</option>
                                                          <option value="13">13</option>
                                                          <option value="14">14</option>
                                                          <option value="15">15</option>
                                                          <option value="16">16</option>
                                                          <option value="17">17</option>
                                                          <option value="18">18</option>
                                                          <option value="19">19</option>
                                                          <option value="20">20</option>
                                                          <option value="21">21</option>
                                                          <option value="22">22</option>
                                                          <option value="23">23</option>
                                                          <option value="24">24</option>
                                                          <option value="25">25</option>
                                                          <option value="26">26</option>
                                                          <option value="27">27</option>
                                                          <option value="28">28</option>
                                                          <option value="29">29</option>
                                                          <option value="30">30</option>
                                                          <option value="31">31</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <table class="generatorBlock">
                              <tbody>
                                  <tr>
                                      <th colspan="2">Months</th>
                                  </tr>
                                  <tr>
                                      <td>
                                           <label class="radio" for="everyMonth"><input id="everyMonth" type="radio" checked="checked" value="*" name="months">
                                           Every Month</label>
                                           <label class="radio" for="everyEvenMonths"><input id="everyEvenMonths" type="radio" value="*/2" name="months">
                                           Even Months</label>
                                           <label class="radio" for="everyOddMonths"><input id="everyOddMonths" type="radio" value="1-11/2" name="months">
                                           Odd Months</label>
                                           <label class="radio" for="every4Months"><input id="every4Months" type="radio" value="*/4" name="months">
                                           Every 4 Months</label>
                                           <label class="radio" for="every6Months"><input id="every6Months" type="radio" value="*/6" name="months">
                                           Every Half Year</label>
                                      </td>
                                      <td>
                                          <table class="multipleEntries">
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                        <input type="radio" value="select" name="months">
                                                      </td>
                                                      <td>
                                                          <select multiple="" size="10" name="selectMonths[]" class="cron">
                                                          <option value="1">Jan</option>
                                                          <option value="2">Feb</option>
                                                          <option value="3">Mar</option>
                                                          <option value="4">Apr</option>
                                                          <option value="5">May</option>
                                                          <option value="6">Jun</option>
                                                          <option value="7">Jul</option>
                                                          <option value="8">Aug</option>
                                                          <option value="9">Sep</option>
                                                          <option value="10">Oct</option>
                                                          <option value="11">Nov</option>
                                                          <option value="12">Dec</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                      <td>
                          <table class="generatorBlock">
                              <tbody>
                                  <tr>
                                      <th colspan="2">Weekday</th>
                                  </tr>
                                  <tr>
                                      <td>
                                          <label class="radio" for="everyWeekday"><input id="everyWeekday" name="weekdays" value="*" checked="checked" type="radio">
                                          Every Weekday</label>
                                          <label class="radio" for="everyNonWeekenDays"><input id="everyNonWeekenDays" name="weekdays" value="1-5" type="radio">
                                          Monday-Friday</label>
                                          <label class="radio" for="everyWeekenDays"><input id="everyWeekenDays" name="weekdays" value="0,6" type="radio">
                                          Weekend Days</label>
                                      </td>
                                      <td>
                                          <table class="multipleEntries">
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <input type="radio" value="select" name="weekdays">
                                                      </td>
                                                      <td>
                                                          <select multiple="" size="10" name="selectWeekdays[]">
                                                          <option value="0">Sun</option>
                                                          <option value="1">Mon</option>
                                                          <option value="2">Tue</option>
                                                          <option value="3">Wed</option>
                                                          <option value="4">Thu</option>
                                                          <option value="5">Fri</option>
                                                          <option value="6">Sat</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3">
                          <table class="generatorBlock span12" style="display: table;">
                                <tbody>
                                  <tr>
                                      <th style="text-align:left; padding-left: 15px;">Job Name</th>
                                  </tr>
                                  <tr>
                                      <td style="padding-bottom: 5px;">
                                      <input class="span12" type="text" id="name" name="name" value="<?php echo $name ?>">
                                      </td>
                                  </tr>
								
								<tr></tr>
								
								<tr>
                                      <th style="text-align:left; padding-left: 15px;">Command To Execute</th>
                                  </tr>
                                  <tr>
                                      <td style="padding-bottom: 5px;">
                                      <input class="span12" type="text" id="command" name="command" value="<?php echo $command ?>">
                                      </td>
                                </tr>
                                
                                <tr></tr>
                                
                                <tr>
                                      <th style="text-align:left; padding-left: 15px;">Status</th>
                                  </tr>
                                  <tr>
                                      <td style="padding-bottom: 5px;">
                                      <input class="span12" type="text" id="status" name="status" value="<?php echo $enabled ?>">
                                      </td>
                                </tr>
                                
                                <tr>
                                      <th style="text-align:left; padding-left: 15px;">Schedule</th>
                                  </tr>
                                  <tr>
                                      <td style="padding-bottom: 5px;">
                                      <input class="span12" type="text" id="schedule" name="schedule" value="<?php echo $schedule ?>">
                                      </td>
                                </tr>
								
                          		</tbody>
                          </table>
                      </td>
                  </tr>
                  <input class="span12" type="hidden" id="job_id" name="job_id" value="<?php ?>">
<!-- 
                  <tr>
                      <td colspan="3">
                          <table class="generatorBlock" style="width: 100%;">
                              <tbody>
                                  <tr>
                                      <th style="text-align:left; padding-left: 15px;">How to Handle Cron Job's Output</th>
                                  </tr>
                                  <tr>
                                      <td style="padding-bottom: 5px;">
                                      <label class="radio" for="output1"><input id="output1" type="radio" value="1" name="output" checked="checked"> Mute the cron job execution (Don't save or send output)</label>
                                      <label class="radio" for="output2" style="display: inline-block; width: 140px;"><input id="output2" type="radio" value="2" name="output"> Save output to file: </label> <input type="text" id="filePath" name="filePath" style="width: 400px;"><br>
                                      <label class="radio" for="output3" style="display: inline-block; width: 140px;"><input id="output3" type="radio" value="3" name="output"> Send output to Email: </label> <input type="text" id="outputEmail" name="outputEmail" style="width: 400px;">
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                  </tr>	 -->
              </tbody>
          </table>
		<input type="submit" value="Generate Cron Job" name="submit">
	</form>
</body>
</html>

<?php 
function getSchedule($data)
{
	$minute = $_POST['minutes'];
	$hour = $_POST['hours'];
	$day = $_POST['days'];
	$month = $_POST['months'];
	$weekDay = $_POST['weekdays'];
	
	if($minute == 'select')		$minute = implode(',', $_POST['selectMinutes']);
	if($hour == 'select')		$hour = implode(',', $_POST['selectHours']);
	if($day == 'select')		$day = implode(',', $_POST['selectDays']);
	if($month == 'select')		$month = implode(',', $_POST['selectMonths']);
	if($weekDay == 'select')	$weekDay = implode(',', $_POST['selectWeekdays']);
	
	$cronStr = "$minute $hour $day $month $weekDay";
	
	return $cronStr;
}
?>