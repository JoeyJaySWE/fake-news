# fake-news
First code assignment from WU20 at YRGO

<h1><img src="/Assets/icons/fake_news_medium.svg"></h1>

<p>
    <em>"Now I can't even read the news today, it remind me of yesterday..."</em>
            The Swedish artist Sanna Nilsen sang this words in her song "Empty Room", and I agree with her.
            Have you ever read the news and felt "Woho! All is awsome in the world!" I mean, the news are sad, boring and often unintresting.
            FAKE NEWS! The one site where you can read about fake news without needing to worry about if it's fact check, we already done that part,
            and we are pretty sure it's all bogus. That said, enjoy a more intresting read!
</p>

<nav>
    <ol>
        <li><a href="https://github.com/JoeyJaySWE/fake-news#what-can-i-do-with-this">What can I do with this?</a></li>
        <li><a href="https://github.com/JoeyJaySWE/fake-news#what-do-i-get-to-work-with">What do I get to work with?</a></li>
        <li><a href="https://github.com/JoeyJaySWE/fake-news#install-instructions">Install instructions</a></li>
        <li><a href="https://github.com/JoeyJaySWE/fake-news#code-review-and-testers">Code Review and Testers</a></li>
    <li><a href="https://github.com/JoeyJaySWE/fake-news#known-bugs">Known bugs</a></li>
    </ol>
</nav>

<h2>What can I do with this?</h2>

<p>
    You can get a nice little reading done in case you want something that is more entertaining than true.
    <ul>
        <li>You can read news</li>
        <li>You can get a shareble link to the news after placing your vote and share to your friends</li>
        <li>You can like a news article</li>
        <li>You can DISLIKE a news article</li>
        <li>Aaaaaaand I guess that's it really. *shrug*</li>
    </ul> 
</p>

<h2>What do I get to work with?</h2>

In this repository you get a bunch of fun/scary files to look at (depending on coding experience).
<ul>
    <li> 
        A <strong>Assets</strong> folder that contains some cool stuff like
        <ul>
            <li>A <strong>icons</strong> folder that contains allt he images used in the site</li>
            <li><strong>articles.css</strong> - The design for all our articles (EXTRA! EXTRA! DEVELOPER LIES ABOUT "DESIGN")</li>
            <li><strong>defaults.css</strong> - Sets the default behaviour for elements that doesn't contain class specific codes</li>
    </li>
    <li>
        A <strong>updates</strong> folder (bonus files that wasn't part of assignment (SPOILERS!))
        <ul>
            <li><strong>vote-check.php</strong> - Here's where we check if you have liked or disliked a article</li>
        </ul>
    </li>
    <li>a <strong>LICENSE-file</strong>. - Makes sence to read (get it? SENCE?)</li>
    <li><strong>.editorconfig</strong> - You know, so you know, how I know, that you see, what I see.</li>
    <li><strong>articles.php</strong> - Fetches and lists all our articles fromt he database</li>
    <li><strong>data.php</strong> - for.... data (sorry but some of these should be self explenatory)</li>
    <li><strong>fake-news-db.sqlite3</strong> - Tis be the wholy grail, the database. Here we fetch all our hard work (and spend most of our time cursing it's very being).</li>
    <li><strong>footer.php</strong> - No, it's the bottom of the html tree, not a resturant (sorry guys...)</li>
    <li><strong>functions.php</strong> - List all the juicy functions of the site. (All out of apples though...)</li>
    <li><strong>header.php</strong> - Use your head! At least that's what the HTML is using this file for.</li>
    <li><strong>index.php</strong> - The main page that ties the net together (At least our site, maybe not the whole internet)</li>
    <li><strong>README.md</strong> - READ ME! Wait... you currently are... nevermind!</li>
    <li><strong>.gitignore</strong> - Feel free to ignore these..</li>
</ul>


<h2>Install instructions</h2>
<p>
    <ul>
        <li>Clone the file down</li>
        <li>Run the command "php -S localhost:8000" from the root folder</li>
        <li>if command fails, you may need to find a CDN for your OS to download and install it</li>
    </ul>
     <br>
    Buuuuut if you really wanna have more fun, try grabing the skin of a long dead cat,
    climb the highest mmountain growing in the shade of a radio tower, 
    gargle the some swamp water while citing from the holy bible in reverse,
    THEN try the stuff on the first row (it's really all you need to do).
</p>
<em>Psssst.... wanna see something more useful in W.I.P?<br> check this one out! &#128540; <a href="https://github.com/JoeyJaySWE/Fake-News-Extra">FAKE NEWS EXTRA!</a></em>

<h2>Code Review and Testers</h2>

<li>- I’m guessing you will add more articles later but here’s a reminder anyway In total you should have 5 different authors all with at least 2 different news feed items each.</li>

<li>- Nice SVG logo, I like it a lot, I can smell the fakeness from the green color. </li>

<li>- The site has a nice and clean design. Maybe the title font of the articles can be the same font as in the logo to keep the recognition factor, tiny picky stuff</li>

<li>- Mobile mode looks clean and I tried it on different browsers. On Firefox it seems like the “ahtur” text goes and sticks next to the dislike button, doesn’t seem to do that on the other browsers. </li>

<li>- Notice: Undefined index: user in fake-news/index.php on line 12 NULL // whatever that means xD</li>

<li>- I like the green sign-in button, makes it feel all gooey and icky and fake, I like the consistency.</li>

<em> Provided by <a href="https://github.com/gillybeans/">Gilda Ahmadniaye</a> <time>30-10-2020, 15:56</time></em>

<strong>Testers</strong>
<ul>
    <li>
        <a href="https://github.com/amandafager">Amanda Fager</a> 
    </li>
    <li>
        <a href="https://github.com/JoakimSjogren">Joakim Sjögren</a> 
    </li>
    <li>
        <a href="https://github.com/nausea87">Erik White</a>
    </li>
    <li>
        <a href="https://github.com/pnpjss">Lucas Nordeborg</a>
    </li>
</ul>

<h2>Known bugs</h2>

None that I know off, as of <time>30-10-2020, 18:15</time>
