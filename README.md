# AdventPodcast

This quick and dirty PHP script does daily updates of an RSS feed pointing to MP3 files during the month of December - effectively creating a daily advent podcast from the content files. 
This is intended to be used with [Yoto players](https://www.yotoplay.com) and the Make Your Own cards, however this script is nothing to do with Yoto themselves in any way.

It is expected that you have some PHP knowledge and skill to be able to succesfully make this work in your environment. This script is supplied as-is with no warranties.

You **MUST NOT** use this script for publicly distributing content that you do not have rights for.

# Usage

For the Yoto platform to be able to access the resulting RSS feed, this script needs to run on a publicly accessible webserver with PHP installed. 

Assuming that your web server software supports .htaccess files, update to IP addresses that are allowed to access the actual audio content files. This is especially important if you don't have copyright/distribution rights and want to ensure that only your players can access it from your home internet connection. Alternatively configure your webserver to ensure that this protection is in place.

You **MUST NOT** use this script for publicly distributing content that you do not have rights for.

Place a set of MP3 files with the content as 12_01.mp3, 12_02.mp3 etc. in the same directory as this script.

Update the MYSERVER and GUID paremeters at the top of the script to suit your environment. 
You can use [this tool](https://tools.rssblue.com/podcast-guid) to generate a suitable Podcast GUID.

You may also wish to adjust the timezone configuration.

Subscribe to the podcast (e.g. https://example.com/feed.php) via the Yoto platform. If it doesn't automatically update every day as expected, you may need to nudge things along by clicking "Get Podcast Details" in the UI again. 

