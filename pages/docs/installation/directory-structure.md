To work with Sasige, the project will require some specific structure. You should not need to think about the structure, the `starter project` have everything in place.

## In detail

    /pages     -> Hold the pages and the textual page content
    /public    -> The output folder for the website generation
    /sasige    -> Guess what: The Sasige core
    /src       -> Your additional PHP classes for maximum customization
    /static    -> Hold static files like images, scripts, and stuff you want
                  merged into the public folder during the generation progress
    /theme     -> Your theme/template for your website, define's the website design
                  There a specific folders in a theme, but more on that in the theme docs
    config.php -> Specific configurations for your project
    
All folder's can be configured via the `config.php`.