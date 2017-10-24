Sometimes you need an image, a video file, a audio file, .zip or whatever. For that reason we have a `static` folder.

## Static meets output

So, the procedure is simple. ALL files in the `static` folder will be copied to the generated output folder. There is no way to exclude some files from the static folder. If you don't need a file included in the output folder, than do not put it in the static folder.

Here an example for better visualization

We have

    pages/index.php
    pages/docs/test.php
    pages/foo.php
    pages/....
    static/.htaccess
    static/images/logo.png
    static/myproduct.zip
    
And that's what it will be in the output folder `public`

    public/index.html
    public/docs/test.html
    public/foo.html
    public/.htaccess
    public/images/logo.png
    public/myproduct.zip
    
## Static wins

What is if you have, in our example, a file `static/index.html`? The static file wins and overwrite the generated file from the `pages` folder.

## Link to static files

Well, it should speech for itself. The files are in the same folder as the generated output html files. So you can work with relative path, almost like [link to pages](link-to-page.html).

Take above example and we want to use the `images/logo.png` in our `pages/index.php`. All you have to do is, for the html method

    <img src="images/logo.png">

Another example, we want to use the `images/logo.png` in our `pages/docs/test.php`. All you have to do is, for the html method

    <img src="../images/logo.png">
    
