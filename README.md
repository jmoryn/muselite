#Muselite Songwriting App

##Issues
This was my first foray into PHP and it came with a decent number of hiccups. First I had to install about 100 things, including MAMP, PHP, Composer, Laravel, and more. This was issue enough, as they aren't all necessarily compatible with one another depending on what version you install, and especially as it pertains to Heroku, which is somewhat specific about which version of composer/php you're using.

The first large issue I encountered was related to Heroku, which gave me an error code that said "The requested package composer-plugin-api could not be found in any version, there may be a typo in the package name." There wasn't a typo in the package name, it was something else entirely. After about 4 hours of researching, I started by copying the php.ini file since my project claimed it didn't exist when I pulled up phpinfo(), but my zsh still claimed it did exist.

After that, I spent about 4 or 5 more hours researching. I think the largest issue was that somehow my MAMP was running PHP7.4.12, while my CLI said I was running 7.3.24. I updated to 7.4 on my machine and I THINK this was the root of the Heroku issues, but I can't be sure. I also tried about 100 different things with the composer.json file but I'm not sure if they helped or not.
