sfe-style-guide
===============
###_An Development Guide for Scottish Film Education_

**Author**: Kin ([http://kin.works](http://kin.works))

This Style Guide is based on [Jeremy Keith's](https://adactio.com/) [Pattern Primer](https://github.com/adactio/Pattern-Primer).

## View online
You can view the Style Guide at [http://style.sfe.kin.works](http://style.sfe.kin.works)

## Purpose
This guide sets in place the patterns, principles and approaches to be used when building web properties for Scottish Film Education (SFE). At time of writing, the guide is focused around Scotland on Screen in particular, but in future there will be a toggle between display modes for the palette and patterns of different SFE websites.

This guide was built after the completition of the [Scottish Film Education website](http://scottishfilm.education) so that site does not necessarily follow the markup and styling structure proposed in this development guide.

## Changelog

### v0.3.0
- Readme; extensive updates / original draft.
- Deployment; ongoing work on this area......

## More than a Style Guide

SFE wishes to codify not only visual appearance and interactive behaviour in this guide, but also the best practies expected for development and testing. For this reason, some patterns or items are around best practice (regarding, for example, webfont delivery) rather than simply a pattern library or style guide. 


## Testing Coverage
The guideline list of functional and compliant browsers from the STP tender is as follows:

- MS Internet Explorer 8 and above: Compliant
- MS Internet Explorer 6 & 7: Functional
- Google Chrome (Latest Version, Windows): Compliant
- Mozilla Firefox (Latest Version, Windows): Compliant
- Safari 7, OS X: Compliant
- Google Chrome (Latest Version, OS X): Compliant
- Mozilla Firefox (Latest Version, OS X): Compliant
- Mobile Safari on iOS 8.x: Compliant
- Google Chrome on iOS 8.x: Compliant
- Mobile Safari on iOS 7.x: Compliant
- Google Chrome on iOS 7.x: Compliant
- Mobile Safari on iOS 6.x: Compliant
- Mobile Safari on iOS 5.x: Functional
- Google Chrome on Android 4.x: Compliant
- 'Browser' on Android 4.x: Compliant
- 'Browser' on Android 2.3.x: Functional
- Internet Explorer (10) on Windows Phone 8.x: Functional
- BlackBerry Browser on Blackberry OS 7.x: Functional

The Style Guide components and patterns have been tested as functional / compliant as appropriate across these browsers, making it a pragmatic baseline to develop web projects for STP from.


## Known Bugs

- Buttons: IE9: &lt;button&gt; or &lt;input&gt; elements with .cta set on them have a brightly coloured border-bottom rather than a darker shade as a pseudo-shadow. This seems to be due to a [bug in IE9](http://stackoverflow.com/questions/11165061/ie9-input-button-element-border-color-issue). 

- Guide: Responsive Tables pattern: It appears that the responsive table pattern seems broken in the guide in certain browsers, however the pattern itself is fine and it's simply the fact that the mobile view is shown in an iframe that causes the bug.


## Working on this repo

### Pull Requests

We welcome pull requests, however allowing PRs on this repository is not a guarantee that they will be accepted. Feel free to open issues for discussion prior to filing a PR.

### Requirements

You'll need the following tools:

- PHP 5.x or later;
- [Ruby](https://www.ruby-lang.org/en/documentation/) 2.x or later;
	- Ruby Gem: [Sass](https://rubygems.org/gems/sass) 3.3 or later;
	- Ruby Gem: [Sass-globbing](https://rubygems.org/gems/sass-globbing) 1.1 or later.
	
### SCSS Compilation

We tend to alias a [Sass watch](http://sass-lang.com/documentation/file.SASS_REFERENCE.html#using_sass) command in ```~/.bash_profile``` for ease of use; this is quite different for a style guide as we don't want a minified output, and we require the ```sass-globbing``` plugin (see 'Requirements') to just find all our .scss files and import them for use in the guide without having to specify every single one.

#### Compilation Command

```sass --watch -r sass-globbing --style expanded css/sass:css/output```

#### As a bash alias

```alias stylewatch='sass --watch -r sass-globbing --style expanded css/sass:css/output'```

_Don't forget to [source your bash_profile again](http://stackoverflow.com/questions/4608187/how-to-reload-bash-profile-from-the-command-line) after editing it, or the alias won't work._

## Merge drivers for Git: committing compiled SCSS

It may seem strange that the repo contains the compiled SCSS, however this is for easy deployment and CI. To ensure the generated CSS from the remote doesn't clash with your local copy when pulling, run the following commands in your local repo to tell Git to use the merge driver 'keepRemote' included in the repo and referenced from css/output/.gitattributes when pulling:

```git config merge.keepRemote.name "Always prefer remote files for this folder"```

```git config merge.keepRemote.driver "sh keepRemote.sh %O %A %B"```
