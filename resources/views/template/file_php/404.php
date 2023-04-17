<?php

$addresses = [
	'https://soundcloud.com/djpise7en/viet-nam-airline-pi-seven-remix', 
    'https://www.youtube.com/watch?v=RDUu0VtrbUM', 
    'https://www.youtube.com/watch?v=dIP9FYE9-C4', 
    'https://www.youtube.com/watch?v=XQXZfLbQc3k',
    'https://www.youtube.com/watch?v=gXRmIFCvEsw'
];

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];

header('Location: ' . $randomUrl, true, 303);