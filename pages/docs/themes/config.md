If you decide to give the user the choice to easily configure a theme, than you should go with [package.json](package.html) options and translations.

## Why?

You probably have some pagesets, some pagination, some background images, and other stuff that a user may want to modify. A configurable theme give the user the ability to modify the theme to their needs in one place, in their [config.php](../installation/configuration.html) in the project root.

The advantage of this is, a user don't need to hardcode into the theme. Your theme is far more flexible.

If you decide to use a config, than add an `option` section to your `package.json`.