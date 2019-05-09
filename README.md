# REDDOC PHP Wrapper APP - 

This is a very simple PHP App that makes publishing several related OpenAPI docs in a single website super easy and SEO friendly.


# Demo
https://respirainternet.com/redoc/

Examples from https://github.com/OAI/OpenAPI-Specification/tree/master/examples/v3.0


# Dependencies:
- Bootstrap 4 (CSS only)
- ReDoc: https://github.com/Rebilly/ReDoc (we only use the standalone script: https://cdn.jsdelivr.net/npm/redoc@2.0.0-alpha.17/bundles/redoc.standalone.js)
- PHP 5.3+
- Apache with mod_rewrite module installed


# Quick and dirty installation:
	
1. Download all the code and upload it to the server of your choice.

2. Edit inc/settings.php with your data.

3. Edit spec_list.json with your openapi spec files.

4. Visit your server in a web browser



# How it works:

- The index.php file will read the spec_list.json file in the inc folder. It will then generate links in the menu and the home page to your spec files.

- When you visit that link, the index.php will get the name of the spec from the url and will render the spec formatted with ReDoc.

- The spec files must be coded with yaml, and they must be in the spec folder.

- This webapp supports splitting your specs across multiple yaml files. You may want to add them in the spec/inc folder, but it is entirely optional.



