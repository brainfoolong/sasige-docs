## Use the command line
Sasige is a command line tool that have some parameters and functions. 

## Commands

Just run the following command and you will find all required helpful parameters information that you need to work with Sasige.

    ./sasige/bin/sasige
    
You will get a similar output to that

    =====================================
    Sasige - Nullix Static Site Generator v.0.1
    Usage: sasige (build|watch|serve)
    =====================================
    build      Generate and build the project into the public folder. WARNING: All files in the output folder will be deleted by this command
    watch      Start a filewatcher that rebuild the project everytime a file in the project has changed
    serve      Start a debug webserver on port 4433
    =====================================
    
So calling

    ./sasige/bin/sasige build
    
will build your project.
    
## Notable hints

* The `public` folder will be deleted and modified by Sasige everytime you build the project. Don't modify the files by hand, it will be deleted sometimes.
* Use `watch` if you develop a theme, for example. It will automatically rebuild everything when you change a file in the project. Also when you change something fundamentaly (folder path's, config.php) than you have to kill the watch process and spawn a new.
* Use `serve` NEVER in an production environment. It is for testing purposes only.