<?php

function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers=range($min, $max);
    shuffle($numbers); 
    return array_slice($numbers, 0, $quantity);
    }

$result=UniqueRandomNumbersWithinRange(1,5,2);
var_dump($result);


$em = $this->getDoctrine()->getManager();
$repo = $em->getRepository('mybundleBundle:TableName');
$quantity = 5; // We only want 5 rows (however think in increase this value if you have previously removed rows on the table)

// This is the number of rows in the database
// You can use another method according to your needs
$totalRowsTable = $repo->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();// This will be in this case 10 because i have 10 records on this table

$random_ids = UniqueRandomNumbersWithinRange(1,$totalRowsTable,$quantity);
// var_dump($random_ids);
// outputs for example:
// array(1,5,2,8,3);

$random_articles = $repo->createQueryBuilder('a')->where('a.id IN (:ids)')->setParameter('ids', $random_ids)
->setMaxResults(3)
->getQuery()
->getResult();