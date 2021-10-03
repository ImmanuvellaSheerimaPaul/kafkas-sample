<?php
$file=$_POST['file'];
$fp = fopen($_FILES['file']['tmp_name'], 'rb');
$conf = new RdKafka\Conf();
$conf->set('metadata.broker.list', 'localhost:9092');
//$conf->set('enable.idempotence', 'true');
$producer = new RdKafka\Producer($conf);
$topic = $producer->newTopic("testTopic");
  if(isset($_POST["submit"])) 
  {
     while ( ($line = fgets($fp)) !== false)
     {
	   $topic->produce(RD_KAFKA_PARTITION_UA, 0,  "$line");
       $producer->poll(0);
     }
  }	
echo "Message Sent";	
for ($flushRetries = 0; $flushRetries < 25; $flushRetries++)
 {
    $result = $producer->flush(10000);
    if (RD_KAFKA_RESP_ERR_NO_ERROR === $result) 
    {
        break;
		echo"error occured";
    }
}
if (RD_KAFKA_RESP_ERR_NO_ERROR !== $result)
 {
    throw new \RuntimeException('Was unable to flush, messages might be lost!');
	echo "Was unable to flush, messages might be lost!";
 }
?>
