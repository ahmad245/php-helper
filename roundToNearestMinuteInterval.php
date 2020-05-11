<?php 

/**
 * Round minutes to the nearest interval of a DateTime object.
 * 
 * @param \DateTime $dateTime
 * @param int $minuteInterval
 * @return \DateTime
 */
 function roundToNearestMinuteInterval(\DateTime $dateTime, $minuteInterval = 10)
{
    return $dateTime->setTime(
        $dateTime->format('H'),
        round($dateTime->format('i') / $minuteInterval) * $minuteInterval,
        0
    );
}
$date = new DateTime("2018-06-27 20:37:00");

$date = roundToNearestMinuteInterval($date);

// Rounded from 37 minutes to 40
//  2018-06-27 20:40:00
echo $date->format("Y-m-d H:i:s");


$date = new DateTime("2018-06-27 20:33:00");

$date = roundToNearestMinuteInterval($date);

// Rounded from 33 minutes to 30
//  2018-06-27 20:30:00
echo $date->format("Y-m-d H:i:s");