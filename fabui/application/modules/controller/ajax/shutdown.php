<?php
/** FORCE RESET CONTROLLER */
$_command = 'sudo python /var/www/fabui/python/gmacro.py shutdown'; 
shell_exec($_command);


/** SHUTDOWN */
$_command = 'sudo php /var/www/fabui/script/shutdown.php';
shell_exec($_command);

shell_exec('sudo shutdown now');
$_response_items['status'] = true;

header('Content-Type: application/json');
echo json_encode($_response_items);

?>