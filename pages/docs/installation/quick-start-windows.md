## Install dependencies

Sasige only have a single dependency, PHP. Minimum version is 5.6

1. Download the PHP binaries at http://windows.php.net/download/ - Most likely you want the latest `x64 Non Thread Safe`.
2. Additionaly you may need a VCREDIST package. For that see the left sidebar on the php.net download page.
3. Unpack the downloaded zip and extract it to a folder, for example `c:\php`
4. Add this new folder to your system environment variable `PATH`.

Now open a new command/power shell window and execute

    php -v
    
You should see something similar to this

    PHP 7.2.0RC3 (cli) (built: Sep 26 2017 15:23:56) ( ZTS MSVC15 (Visual C++ 2017) x64 )
    Copyright (c) 1997-2017 The PHP Group
    Zend Engine v3.2.0-dev, Copyright (c) 1998-2017 Zend Technologies
    
If not, you probably have not configured your PATH environment variable correctly or you miss the above suggested VCREDIST package.
    
## Create a new project

Head to the [Create new project](create-new-project.html).