# Lex Fridman Podcast Rss Based Website

## Overview
This project constitutes a website dedicated to Lex Fridman, an influential AI researcher and scientist. The website acts as a centralized platform to access Lex Fridman's thought-provoking podcast series, covering a diverse array of topics, including science, technology, history, philosophy, and more. It fetches and organizes data from Lex Fridman's official website RSS feed, presenting it in an intuitive and user-friendly manner.
Working with XML was initially challenging due to my limited expertise in this area, but I have since gained familiarity and proficiency. Additionally, I ensured the website's design is highly responsive by utilizing Bootstrap. Users can conveniently access and play the most recent five podcasts, with the latest one prominently displayed at the top for easy access

## Author
[Hashaam Zahid](https://www.linkedin.com/in/hashaam-zahid)
![Screenshot](https://raw.githubusercontent.com/hashaam-zahid/lex-fridman/master/images/web.jpeg)
![Screenshot](https://raw.githubusercontent.com/hashaam-zahid/lex-fridman/master/images/lex.png)

## Project Description
The primary objective of this web application is to provide an immersive experience for fans and followers of Lex Fridman's podcasts. Utilizing PHP, the website extracts and interprets XML data sourced from Lex Fridman's official website RSS feed. It offers a seamless interface to view vital details such as channel information, podcast titles, descriptions, publication dates, and direct links to audio files. The responsive design, built with Bootstrap, ensures a smooth and engaging browsing experience across a variety of devices.

## Key Features
- Display of the five most recent podcasts, User can Play Podcast, prominently highlighting the latest episode at the top for easy access.
- Detailed information provided for each podcast, including titles, publication dates, descriptive summaries, and direct audio links for convenient listening.
- Implementation of XML parsing techniques in PHP to accurately extract and present podcast details.
- Responsive web design offering optimal user experience and accessibility across different devices and screen sizes.

## Setup and Usage

- [XAMPP](https://www.apachefriends.org/index.html) or a similar PHP development environment.

### Setup Steps
1. Clone or download this repository into the root directory of your local web server.
2. Initiate the Apache services using the XAMPP control panel.
3. Access the website through a web browser using `localhost/lex-fridman`.

## XML Parsing Snippet

```php
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
    $image_url = $xml->channel->image->url; // Display the image URL

    $i = 0;
    $outlines = array(); // Initialize an array to store extracted outline lines

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
        // Get data from the enclosure tag
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
Replace the Your XML parsing code goes here... comment with your actual XML parsing code from your project.
```
### Folder Structure

 ```php
│
├── src/
│   ├── header/
│   │   ├── header.php
│   │   ├── header_assets.php
│   │── footer/
│   │   ├── footer.php
│   │
│   └── ... (other library files)
│
├── index.php  <-- Rss Podcast from Lex Fridman Offical website
└── Readme.md
```
Thank You 


