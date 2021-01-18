# SCIWP Boilerplate Template

A starter plugin template using SCIWP Framewok

## Instructions

* Create a new directory inside the WordPress `wp-content\plugins\` folder. For this example we will use the `/my-plugin` folder.

* Download the latest release of the SCIWP Framework [from here](https://github.com/sciwp/sciwp-framework/releases "SCI WP Framework") and unzip the files into the `/my-plugin/framework/` directory.

* The base namespace will be the Pascal case version Plugin folder name. In this case, `MyPlugin`. To customize it, just edit the `main.php` file or set a namespace into the `main.php` file.

* Access WordPress administration panel and enable the plugin.

When you enable the plugin, the namespace of the files inside the `/my-plugin/framework/` will be replaced to match the configured namespace. If the Plugin namespace is `MyPlugin`, the framework namespace inside the Plugin will be set as ``` MyPlugin\Sci ```. The cache files will also be created automatically.

