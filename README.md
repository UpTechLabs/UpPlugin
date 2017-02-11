# UpPlugin

UpPlugin is a boilerplate for a custom WordPress plugin.  Use it to start your next custom plugin project.

## Installation

To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/plugins` folder of your project
2. Then type in terminal: `git clone git@github.com:UpTechLabs/UpPlugin.git`. 
3. Now you are ready to customize this plugin for your needs.

## Customizing

The boostrap file is the entry point for the plugin.  It's role is to launch the plugin.  That's it.

The Plugin class is like a controller.  Use it as a traffic controller and main organizer.

Code should be built into modules.  Each module goes into its own folder in the `src` folder.  Then have the `Plugin` controller autoload it. 

Be smart about how you build your plugin.  Think about the intent, readability, maintainability, and reusability.