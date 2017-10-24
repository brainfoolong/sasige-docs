Yes, Sasige is able to handle a static website in multiple languages. How this can be archived?

## One page per language

A page's metadata is defined in the `metafile`. In this metafile you can set a language by `$page->setLanguage("es");` to whatever you want. This language than will be used in the `<html>` tag of a website to indicate in which language the page is written.

## Multiple languages

So how to work when you have multiple languages for a single page? It's basically just [writing a new page](write-post.html) in your other language.

Here is an example folder structure when writing a post in german and english

    pages/welcome.php # english
    pages/willkommen.php # german
    
You notice that you don't need a language prefix in the filename? Awesome, isn't it? For sure, you can use one if you prefer it. The sort of the pages in the generated website does also NOT depend on the filename, you can configure it all in the `metafile`.

## But how i build a website navigation for multilanguage?

This is where our [pagesets](pageset.html) come in. Pageset's are basically a group of pages filtered and accumulated by different values. One could be the page language.