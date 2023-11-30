<?php 
// Core XML Functions
// Originally written by Hashaam Zahid
error_reporting(0);
if (!$xml = simplexml_load_file("https://lexfridman.com/feed/podcast/")) {
    echo "Unable to load XML file";
} else {
    $channel_title = $xml->channel->title;
    $channel_description = $xml->channel->description;
    $channel_lastBuildDate = $xml->channel->lastBuildDate;
    $image_title = $xml->channel->image->title;
    $image_url = $xml->channel->image->url; 
    $i = 0;
    $outlines = array(); 
    foreach ($xml->channel->item as $item) {
        $iCounter[] = $i++;
        $item_title[] = $item->title;
        $item_link[] = $item->link;
        $item_pubDate[] = $item->pubDate;
        $item_category[] = $item->category;
        $description = (string)$item->description;
        $outlineIndex = strpos($description, 'OUTLINE:');
        if ($outlineIndex !== false) {
            $outlineText = substr($description, $outlineIndex);
            $lines = explode("\n", $outlineText);
            $start = false;
            $count = 0;
            foreach ($lines as $line) {
                if ($start && $count < 5) {
                    $outlines[] = trim($line); // Store the extracted line
                    $count++;
                }
                if (strpos($line, 'OUTLINE:') !== false) {
                    $start = true; // Start capturing lines after 'OUTLINE:'
                }
            }
        }
        $enclosureAttributes = $item->enclosure->attributes();
        $enclosureURL[] = (string)$enclosureAttributes['url'];
        $enclosureLength[] = (string)$enclosureAttributes['length'];
        $enclosureType[] = (string)$enclosureAttributes['type'];
        $duration_podcast = $item->children('itunes', true); // Access the itunes namespace
        $duration_podcast = (string)$duration_podcast->duration; // Get the value inside itunes:duration
        $duration[] = $duration_podcast; // Display the iTunes duration
        if ($iCounter[$i - 1] == 5) { // Check if it's the 5th record
            break; // Stop the loop after getting the 5th record
        }
        //$usesPodping= $item->children('podcast', true)->podping['usesPodping'];
        // echo $usesPodping[]= $usesPodping;
    }
}
// var_dump($duration_podcast);

?>