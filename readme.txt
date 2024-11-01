=== Show Visitor IP Address ===
Contributors: Irfan Ardiansah
Tags: post, links, whois, domain, tools, user
Requires at least: 2.3.3
Tested up to: 2.5.1
Stable tag: 0.2

== Description ==
show-visitor-ip-address used to show visitor ip address in single post only or as widget, every visitor can only saw his/her ip address and they could click on their ip address.

If the ip address is clicked, they will be redirected to http://whois.domaintools.com/ and will be showed where do they come from and which isp owned the ip address.

New Feature: Now its Widget Ready, choose between show at single post or as widget.

= Basic Usage =
Just activate it from Plugin Management, it's ready to use.

To configure go to "Settings -> Show Visitor IP Address"

= About Author =
[Irfan Ardiansah](http://gadjah.net/category/wordpress/)

== Installation ==
1. Unzip show-visitor-ip-address.0.2.zip (it got 1 folder and 4 file inside)
   * show-visitor-ip-address
      * gd-user-ip.php
      * form.php
      * conf.php
      * readme.txt

2. Upload gd-user-ip folder to your Wordpress plugins directory, 
its usually "wp-content/plugin/"

3. Activate the plugin using Plugins Management menu in Wordpress

4. Go to "Settings -> Show Visitor IP Address" to configure
* To change text, change "Text To Use:"
* To change text format, change "Text Format:" to "Bold, Italic or Normal"
* To change it to widget version, change "Position:" to "As Widget"

== History ==
= 0.2 =
* Now it could choose different Text Format (Bold, Italic, Normal)
* Fixing Installation tutorial
* Widget Ready

= 0.1 =
* Making an IP Address reader
* Adding domaintools as IP Address checker
* Adding simple option page to configure text to show
* Read text from option
* Make it unique by adding gd to plugin, gd mean gadjah
* Show it only on single post at the last line
* Make configuration form user friendly
* Use CSS Wrap to make it preety
* Link will be opened at new tab

== To Do: ==
* Choosing where to put the text
* IP Address as image using GD Library
* Choosing whether showed as image based or text based
* Add Country based on IP Address
* Choosing where to open the link (New Window, New Tab or Same Tab)
