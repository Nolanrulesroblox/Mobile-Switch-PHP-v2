<?php
//code is updated new devices once per 6 months (if any new devices)
$tablet_browser=0;
$mobile_browser=0; if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))){ $tablet_browser++;} if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))){ $mobile_browser++;} if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') >0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){ $mobile_browser++;} $mobile_ua=strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents=array( 'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac', 'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno', 'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-', 'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-', 'newt','noki','palm','pana','pant','phil','play','port','prox', 'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar', 'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-', 'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp', 'wapr','webc','winw','winw','xda ','xda-'); if (in_array($mobile_ua,$mobile_agents)){ $mobile_browser++;} if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') >0){ $mobile_browser++; $stock_ua=strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:'')); if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)){ $tablet_browser++;}}

//   you can make a Div, URL, link to file, etc inside the "$device ="

// blank device (must keep the ;)

// $device =  ;

if ($tablet_browser > 0) {
   $device ='<div class="hello"><a href="https://github.com">link inside of a div...</a></div>'; /* div works here */
}
else if ($mobile_browser > 0) {
   $device = header('Location: domain.com/file/index.php');
}
else {
   $device = header('Location: http://google.com');
}   
 
// (C) 2020 NRRINC Media nrrinc.net Apachev2 http://www.apache.org/licenses/

?>
