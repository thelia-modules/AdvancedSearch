# Module Advanced Search Thelia 2

This module creates an advanced search engine based on the products features.

## How to install

This module must be into your ```modules/``` directory (thelia/local/modules/).

You can download the .zip file of this module or create a git submodule into your project like this :

```
cd /path-to-thelia
git submodule add https://github.com/thelia-modules/AdvancedSearch.git local/modules/AdvancedSearch
```

Next, go to your Thelia admin panel for module activation.

## How to use

An example of use is provided in the templates directory of the module.
The `view_all` view is overloaded to the search engine work fine with the Thelia default template.

The file `templates/frontOffice/default/ajax/product-list.html` load all products corresponding with the ajax search. This file init $nav_url argument to pass on the `templates/frontOffice/default/includes/advancedsearch-toolbar.html` file.

The file `templates/frontOffice/default/includes/advancedsearch-toolbar.html` is an overload of the `includes/toolbar.html` file of the Thelia default template.

The file `templates/frontOffice/default/advancedsearch-view-all.html` is an overload of the view_all file of the Thelia default template which include the advanced search engine.

The `view_all` route is overloaded by this module into the `Config/routing.xml` file.

To use this advanced search engine into your personnal template, get inspired by the example ;)
