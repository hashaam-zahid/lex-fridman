<?php 
require_once('../header/header_assets.php');

class XmlParser {
    private $xml;
    
    public function __construct($filePath) {
        $this->xml = simplexml_load_file($filePath);
    }

    public function getChannelTitle() {
        return $this->xml->channel->title;
    }

    public function getChannelDescription() {
        return $this->xml->channel->description;
    }

    public function getChannelLastBuildDate() {
        return $this->xml->channel->lastBuildDate;
    }

    public function getImageTitle() {
        return $this->xml->channel->image->title;
    }

    public function getImageUrl() {
        return $this->xml->channel->image->url;
    }

    public function getItems($limit = 5) {
        $items = [];

        $i = 0;
        $outlines = [];

        foreach ($this->xml->channel->item as $item) {
            $itemData = [
                'title' => (string)$item->title,
                'link' => (string)$item->link,
                'pubDate' => (string)$item->pubDate,
                'category' => (string)$item->category,
                'duration' => (string)$item->children('itunes', true)->duration
            ];

            $description = (string)$item->description;
            $outlineIndex = strpos($description, 'OUTLINE:');

            if ($outlineIndex !== false) {
                $outlineText = substr($description, $outlineIndex);
                $lines = explode("\n", $outlineText);

                $start = false;
                $count = 0;
                foreach ($lines as $line) {
                    if ($start && $count < 5) {
                        $outlines[] = trim($line);
                        $count++;
                    }
                    if (strpos($line, 'OUTLINE:') !== false) {
                        $start = true;
                    }
                }
            }

            $itemData['outlines'] = $outlines;
            $items[] = $itemData;

            if (++$i === $limit) {
                break;
            }
        }

        return $items;
    }
}

// Usage:
$parser = new XmlParser("lexx.xml");
$channelTitle = $parser->getChannelTitle();
$channelDescription = $parser->getChannelDescription();
$channelLastBuildDate = $parser->getChannelLastBuildDate();
$imageTitle = $parser->getImageTitle();
$imageUrl = $parser->getImageUrl();
$items = $parser->getItems();

?>