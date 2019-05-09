# REDDOC PHP APP - Simple LAMP PHP webapp to show several API documents easily

This is a very simple PHP app that plugin that shows JSON data in an horizontal calendar.

# Dependencies:
- Bootstrap (CSS only)
- ReDoc: https://github.com/Rebilly/ReDoc (only the standalone script: https://cdn.jsdelivr.net/npm/redoc@2.0.0-alpha.17/bundles/redoc.standalone.js)
- PHP 5.3+
- Apache with mod_rewrite module installed


# Quick and dirty installation:
	
1. Download all the code and upload it to the server of your choice.

2. Edit inc/settings.php with your data.

3. Edit spec_list.json with your api files.

4. Visit your server in a web browser


# How it works:

- The index.php file will read the json file. It will then generate links in the menu and the home page to your spec files, 

# Demo
https://respirainternet.com/redoc/



