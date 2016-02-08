# Reformed Church of Palmerston North Website

**Live Website:** http://rcpn.org.nz/

Welcome to the git repository for the Reformed Church of Palmerston North's SilverStripe website.

This repository contains all custom code for the redevelopment of the Reformed Church of New Plymouth's website in SilverStripe.

This project contains no modifications to SilverStripe CMS files - all extensions are via their APIs, and are available in this repository.

There are four licences you need to be aware of when using code from this project:

 * **GPL v3** The custom PHP, HTML, CSS, and JavaScript code created for this website is licensed under the GPL version 3.
 * **CCA 3.0** The original template used "Arcana by HTML5 UP" is licenced under the Creative Commons Attribution licence version 3.
 * **SilverStripe** The SilverStripe CMS is licensed under its own licence (see below).
 * **Reformed Church of Palmerston North** All rcpn.org.nz content is copyright the Reformed Church of Palmerston North. This content is managed by the church via the CMS.

Feel free to use code from this project for your own use.

### Deployment and Setup

To deploy this project:

 1. Install a copy of SilverStripe 3.2 or higher, following the usual instructions, including the Simple theme.
 2. Check out the git repository to your website directory
 3. Run http://{your-website-here}/dev/build?flush=all


To setup the website:
 1. Log into http://{your-website-here}/admin/ with your administrator account
 2. Change the theme to arcana via the Settings page
 3. Under Pages, select Contact Us, then select the Contact Form tab, and make sure all of the fields have values

## Arcana by HTML5 UP
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)


A business/corporate style responsive site template. It's pretty barebones but should
go over pretty well for folks wanting to get their serious business on.

Demo images* courtesy of Unsplash, a radtastic collection of CC0 (public domain) images
you can use for pretty much whatever.

(* = Not included)

Feedback, bug reports, and comments are not only welcome, but strongly encouraged :)

AJ
n33.co @n33co dribbble.com/n33

PS: Not sure how to get that contact form working? Give formspree.io a try (it's awesome).


Credits:

	Demo Images:
		Unsplash (unsplash.com)

	Icons:
		Font Awesome (fortawesome.github.com/Font-Awesome)

	Other:
		jQuery (jquery.com)
		html5shiv.js (@afarkas @jdalton @jon_neal @rem)
		CSS3 Pie (css3pie.com)
		background-size polyfill (github.com/louisremi)
		Respond.js (j.mp/respondjs)
		jquery.dropotron (n33.co)
		Skel (skel.io)

## SilverStripe

### Overview

Base project folder for a SilverStripe ([http://silverstripe.org](http://silverstripe.org)) installation. Requires additional modules to function:

 * [`framework`](http://github.com/silverstripe/silverstripe-framework): Module including the base framework
 * [`cms`](http://github.com/silverstripe/silverstripe-cms): Module including a Content Management System
 * `themes/simple` (optional)

### Installation ###

See [installation on different platforms](http://doc.silverstripe.org/framework/en/installation/),
and [installation from source](http://doc.silverstripe.org/framework/en/installation/from-source).

### Bugtracker ###

Bugs are tracked on github.com ([framework issues](https://github.com/silverstripe/silverstripe-framework/issues),
[cms issues](https://github.com/silverstripe/silverstripe-cms/issues)). 
Please read our [issue reporting guidelines](http://doc.silverstripe.org/framework/en/misc/contributing/issues).

### Development and Contribution ###

If you would like to make changes to the SilverStripe core codebase, we have an extensive [guide to contributing code](http://doc.silverstripe.org/framework/en/misc/contributing/code).

### Links ###

 * [Changelogs](http://doc.silverstripe.org/framework/en/changelogs/)
 * [Bugtracker: Framework](https://github.com/silverstripe/silverstripe-framework/issues)
 * [Bugtracker: CMS](https://github.com/silverstripe/silverstripe-cms/issues)
 * [Bugtracker: Installer](https://github.com/silverstripe/silverstripe-installer/issues)
 * [Forums](http://silverstripe.org/forums)
 * [Developer Mailinglist](https://groups.google.com/forum/#!forum/silverstripe-dev)

### License ###

	Copyright (c) 2007-2013, SilverStripe Limited - www.silverstripe.com
	All rights reserved.

	Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

	    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the 
	      documentation and/or other materials provided with the distribution.
	    * Neither the name of SilverStripe nor the names of its contributors may be used to endorse or promote products derived from this software 
	      without specific prior written permission.

	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
	IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
	LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE 
	GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, 
	STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY 
	OF SUCH DAMAGE.
