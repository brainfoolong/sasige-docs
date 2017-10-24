Your website will need internal links to other pages. The progress here is straight forward. The generated website file is always the same name as the `metafile` but with the extension `.html` instead of `.php`.

## Links and path in general - Everything is relative

Let's assume you have this pages

    pages/index.php
    pages/welcome.php
    pages/docs/index.php
    pages/docs/installation/foo.php
   
You write content in `pages/docs/installation/foo.php` and want to link to `pages/welcome.php`. All what you need to to is to follow the path relative from your page where you currently in.

In our example you will have path like this: `../../welcome.html`. This is basic folder structure knowledge. `../../` means jump 2 parents up,we're in `pages` now. Than link to the `welcome.html` of that folder.

## Links in markdown

Links in markdown are following the same rules. Let's take our above example.

    I am a happy link to the [welcome](../../welcome.html) page.

## Links in html

Links in html are following the same rules. Let's take our above example.

    I am a happy link to the <a href="../../welcome.html">welcome</a> page.