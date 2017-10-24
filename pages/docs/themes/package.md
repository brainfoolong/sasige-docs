A `package.json` is the metafile for a theme. It contains some basic theme information as well as configs and translations. You can provide your theme in multilanguage if you want.

## Format
Just have a look at a full packed file.

    {
      "id": "sasige-docs",
      "name": "Sasige Docs Theme",
      "description": "This is the theme that is used by the sasige documentation website. The option `navigationPagesetTags` is used do determine which pages will show up in the navigation.",
      "github": "brainfoolong/sasige-docs",
      "option": {
        "navigationPagesetTags" : ["navigation"]
      },
      "translation": {
        "en": {
          "menu": "Menu",
          "lastUpdated" : "Last updated"
        },
        "de": {
          "menu": "Menü",
          "lastUpdated" : "Zuletzt aktualisiert"
        }
      }
    }
    
    
## Flags

What does each flag/key mean.
* `id` The internal id for a theme. Should be unique when you publish it to the theme gallery
* `name` Just the theme name
* `description` A brief description for your theme and possible option values
* `github` The github repository path
* `option` A key/value object of theme options and their default values
* `translation` A multidimensional key/value object of theme translation values
