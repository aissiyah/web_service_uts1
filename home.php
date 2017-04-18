<?php
	include "header.php";
?>


<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/0e4b71198dc78edf/geolookup/conditions/q/IA/bulustalan.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'response'}->{'version'};
  $station_id = $parsed_json->{'response'}->{'termsofService'};
  $weather = $parsed_json->{'location'}->{'city'};
  $local = $parsed_json->{'current_observation'}->{'observation_time'};
  $dewpoint_string = $parsed_json->{'current_observation'}->{'dewpoint_string'};
  
  echo "term of services in ${location} is: ${station_id}\n";
  echo "<br>";
  echo "city in ${location} is: ${weather}\n";
  echo "<br>";
  echo "observation_time in ${location} is: ${local}\n";
  echo "<br>";
  echo "observation_time in ${location} is: ${dewpoint_string}\n";
 
?>
  </div> 
 
</div>

</body>
</html>
