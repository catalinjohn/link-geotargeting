# Free Link Geotargeting
Simple Link geotargeting - allows to redirect users to specific links/domains based on their country.

The Geotargeting works with websites served through Cloudflare (free service) and it helps in redirecting users to specific pages/domains based on the user country. Therefore, no database of IPs is required. It can be used in various stances, such as by affiliate marketers. Simply copy the redirect.php file and upload on your server, a folder like go/ or visit/ or any name you like. Edit the file name for your easy management, and edit the file code to set the geo-redirection. You can duplicate the file for multiple uses/offers.

At the end of the file there is the default link which should be set as the main redirection link, and for any country specific redirection, just uncomment the 3 lines of the country and add the redirection link for that region.

The code was developed for and published courtesy of [bonus.wiki](https://bonus.wiki/)

## What do I need to do to make this work?
* Copy the redirect.php file to your PC
* Edit the file: edit the default link for user redirection and also uncomment the country you need to redirect users to a different URL than the default link
* If the country you are interested in is not listed in the file (please note the file has only several countries listed for exeplification purposes, but more can be added or the ones listed there removed). Simply duplicate the 3 line code for country redirection and change the details to the country you are interested in. The code uses the 2 Lettter country code - complete list on [Wikipedia](https://en.wikipedia.org/wiki/ISO_3166-2)
* Make sure the code for the country redirection you want to use is uncommented. Save the file and upload to your server.
* The file should be used through a domain/subdomain server by Cloudflare service (free version is OK).
* In [Cloudflare](https://cloudflare.com/), go to the domain used to serve this file for geo-redirection > go to Rules > Transform Rules > Managed Transnforms > activate Add visitor location headers
* Link from your website to the georedirection file or share the link on the web and it will redirect users based on your settings and the user location

## Changelog

### 1.0 - May 16 2023
* published the geo-redirection code
