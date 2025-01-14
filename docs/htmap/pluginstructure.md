---
id: pluginstructure
title: Plugin Structure
sidebar_label: Plugin Structure
---
___
There are two ways to create your plugin structure: Automatic Method and Manual Method

### Automatic Method
Start your server and type below in the console to create your plugin structure automatically:
```
genplugin <YourPluginName> <YourName>
```
Note: Don't use `/` when typing the command in console!

It will generate a folder that is named your plugin name inside the `plugins` folder where your server is located. Inside it you have all the essential files and folders for your plugin.

### Manual Method
In your Pocketmine Server folder you would find a folder called `plugins` in there create a new folder and that folder will be your plugin, rename that folder to your plugin name, we will be renaming it to TestPlugin.   

In the plugin folder or TestPlugin create a file named `plugin.yml` and a folder named `src`.

Now your file structure should look like this:  
```yml title="/Pocketmine-Server*/plugins/"
TestPlugin 
    ├── plugin.yml 
    └── src
```

`*` Pocketmine-Server is the folder where you have your server setup at.

___
Thanks to [Sites4Code](https://sites4code.github.io/MCPE/) for making there website first, some of the stuff written here is from them.
___