We begin with the folder structure of a theme. In this section we always go from the theme root folder, in most cases this is the `theme` folder.

## Predefined folders

* src - A folder that can contain PHP classes, used to give theme creators a very good extensibility. For example a helper class to create some recursive listings.
* static - This will be copied without modification to output folder: `public/sasige-theme`. Use this for your themes static file like images and libraries.

## SCSS support

Sasige have built in SCSS support. Just create a `.scss` file wherever you want, for example in a `stylesheets` folder. In the theme page file you can use it than like that to generate a valid css file from one or many SCSS sources.

    <link href="<?= $page->getThemeCssUrl(["stylesheets/page.scss"]) ?>" rel="stylesheet">
    
Following variables are available in every SCSS file.
* `$themeUrl` Url to the root of the theme static folder

## Javascript files

We have a little helper for you. You can generate one big javascript file instead of many tiny onces. You not must use this, you can. You also can store the files in the theme static folder and than link to it. Whatever you prefer.

    <script type="text/javascript" src="<?= $page->getThemeJavascriptUrl(["scripts/jquery.js", "page.js"]) ?>"></script>

This will create one file that contain the contents of this 2 files.


## The rest is up to you

In the root theme folder you can insert whatever you want. Every `.php` file you create here is available as a template for the user by calling `$page->setThemeTemplate("xxx");`. In the real world there are some templates you should create. Best way to see what common standards are, you can use the starter project.

* site.php - Used to output raw HTML in the page layouts content.
* post.php - Used to output posts. Should have a headline, leadtext, timestamp and content.