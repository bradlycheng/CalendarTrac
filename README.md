# CalendarTrac

Keep track of your favorite NFL teams schedule, favorite NBA teams schedule, favorite TV shows scedule, upcoming Apple music release and upcoming movie releases all on one calendar website.
<br>
<br>

My CalendarTrac.com renewal ended awhile ago and the hosting service wiped my data.

I scavengered my files from my old unorganized college laptop that had CalendarTrac source code.

Uploaded what I can to Github.
<br>
<br>

<b>Process:</b>
<br>
CalendarTrac uses Curl https://github.com/curl/curl to do fetch from JSON from API sites.

Then parses the JSON data to mySQL database.

The bootstrap calendar uses mySQL database with SQL queries based on the user's selected topics.
<br>
<br>

The all.php will gather all the JSON parsed data from all my different API sources and updates the mySQL database.

Takes about 1 minute to complete all.php process.

I used to run all.php daily to keep my database up to date.
<br>
<br>

Started October 2018. Up and Running in November 2018. Stop renewal February 2019 (started new job).
