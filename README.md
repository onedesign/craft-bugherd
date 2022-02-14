# Bugherd plugin for Craft CMS 3.x

Easily install Bugherd on your Craft CMS site

![Screenshot](resources/img/bugherd-logo.png)

## Requirements

This plugin requires Craft CMS 3.5 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require onedesign/craft-bugherd

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Bugherd.

## Bugherd Overview

Provides a simple way to include Bughed on your Craft CMS sites.

## Configuring Bugherd

There are only two settings within the plugin

### Enable Bugherd
When enabled, the Bugherd script will be output when the `\yii\web\View::EVENT_END_BODY` event is fired (just before the closing `</body>` tag).

### Project Id
The ID of your Bugherd project


## Using Bugherd

Adding your project ID and enabling Bugherd is all that is required to use this plugin.

Brought to you by [One Design Company](https://onedesigncompany.com/)
