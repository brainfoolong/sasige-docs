Helper classes are especially helpful when you have things that repeat often. For example you want to show a month table on different pages. That requires a lot of markup and it's mostly the same. That's a perfect case for a helper class.

## It goes into 'src'

In your project root folder, where your `pages, public, sasige` folder is in, you can create a folder named `src`.

## Helper class structure

An example

Filename: src/ListHelper.php

    <?php
    
    namespace Nullix\Sasige;
    
    class ListHelper
    {
        public static function showList()
        {
            echo '<ul>';
            echo '<li>Many more</li>';
            echo '</ul>';
        }
    }

There are a few things you need to know

* The filename must be the same as the class name. Case sensitive
* Every class file must begin with this two lines
  * `<?php`
  * `namespace Nullix\Sasige;`
* You cannot use an existing class name that is already used by `Sasige`. For example `Page` will result in an error. 
  * For sure, you can when you use another namespace but that make things a lot more complicated later. Just use a unique class name.
* Class name cannot contain any special characters. Only A-Z is the best.
* Only use static functions with `public static function yourFunctionName(){}`

## Helper class usage

Now that we know how we can create a helper class, we also want to use it. An example of usage in a page.

    <?php

    namespace Nullix\Sasige;
    
    $page = Page::getCurrent();
    $page->setPageTitle("Helper classes");
    ... // more page configs, skip for tutorial purposes
    $page->setContentByCallable(function (Page $page) {
        ?>
        My content bla foo bar
        <?php
        ListHelper::showList();
    });

As you can see, you need `$page->setContentByCallable` to be able to use helper classes. They cannot be used in markdown files or pure html files.

## The same rule for theme helper classes

Theme folder can also have a `src` folder. So, a theme can also provide helper classes.