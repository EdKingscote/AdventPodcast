<?php
$MYSERVER="https://www.myserver.net/mypath/";
# Generate a GUID using https://tools.rssblue.com/podcast-guid
$GUID="GUID";
header('Content-Type: application/rss+xml');
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
xmlns:podcast="https://podcastindex.org/namespace/1.0"
xmlns:atom="http://www.w3.org/2005/Atom"
xmlns:content="http://purl.org/rss/1.0/modules/content/">
  <channel>
    <atom:link href="<?php echo($MYSERVER);?>feed.php.rss" rel="self" type="application/rss+xml"/>
    <title>December Daily</title>
    <link><?php echo($MYSERVER);?></link>
    <language>en-us</language>
    <itunes:author>Author</itunes:author>
    <description>
                This is a podcast version of some content to publish daily in December.
    </description>
    <itunes:type>serial</itunes:type>
<podcast:guid><?php echo($GUID);?></podcast:guid>
<podcast:locked>no</podcast:locked>
<itunes:category text="Kids &amp; Family">
<itunes:category text="Stories for Kids"/>
</itunes:category>
<itunes:explicit>false</itunes:explicit>
<?php
$tz = new DateTimeZone("America/Toronto");

$now = date_create("now",$tz);
$month = date_format($now,'m');
$day = date_format($now,'d');
if ($month == 12) {
        #for ($i = 1; $i <= $day; $i++) {
        for ($i = $day; $i >= 1; $i--) {
        $pubDate=date("D, j M Y G:i:s T",mktime(0,0,0,12,$i));
        $fileNo=date("d",mktime(0,0,0,12,$i));
        $fileName="12_" . $fileNo . ".mp3";
        $fileSize=filesize($fileName);
?>
<item>
      <title>December <?php echo($i); ?></title>
      <itunes:episodeType>full</itunes:episodeType>
      <itunes:title>December <?php echo($i); ?></itunes:title>
      <description>
                Chapter <?php echo($i); ?> - December <?php echo($i); ?>
      </description>
      <pubDate><?php echo($pubDate);?></pubDate>
      <enclosure
        length="<?php echo($fileSize);?>"
        type="audio/mpeg"
        url="<?php echo($MYSERVER);?><?php echo($fileName); ?>"
      />
      <itunes:explicit>false</itunes:explicit>
</item>

<?php
        }
}
?>
</channel>
</rss>
