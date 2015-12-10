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

### v0.3.2
- Readme update complete, with testing scope and details.

### v0.3.0
- Readme; extensive updates / original draft.
- Deployment; the guide now deploys to [http://style.sfe.kin.works](http://style.sfe.kin.works) when a new tag is pushed to Github.

## More than a Style Guide

SFE wishes to codify not only visual appearance and interactive behaviour in this guide, but also the best practies expected for development and testing. For this reason, some patterns or items are around best practice (regarding, for example, webfont delivery) rather than only the elements typically found pattern library or style guide. 


## Testing Coverage
We've studied six months' traffic to the SFE web properties Scotland on Screen, Languages on Screen and Screening Shorts, and prepared the following list of browsers for testing against.

### Source Material
You can review a flat image of the data from our 'Testing Explorer' spreadsheet [in the repo under /stats/](https://github.com/kinworks/sfe-style-guide/blob/master/stats/All-Sites-Combined-6mo-to-7th-dec-2015.png). This covers the period 7th June 2015 to 7th December 2015.

### What does 'Support' mean?
When building for SFE, or really the web in general, it's best not to consider browsers 'supported' or 'unsupported', but rather through use of web standards, progressive enhancement and best practices aim to work well in all browsers. So, rather than divide browsers into 'yes' and 'no' categories, we've studied the current usage data and drawn conclusions about the scope of testing necessary.

#### 'Compliant' Browsers
The design should be reasonably consistent, optimised and fully functional in the following browsers:

##### Android
Testing should be carried out across a range of tablet / phone handset sizes.
- 6.x: Stock Browser (Google Chrome)
- 5.x: Stock Browser (Google Chrome)
- 4.x: Stock Browser (Android Browser or Google Chrome)

##### Apple iOS
Testing should be carried out across a range of tablet / phone handset sizes.
- 9.x: Stock Browser (Safari); In-app webview;
- 8.x: Stock Browser (Safari); In-app webview;

##### Windows Phone
Testing should be carried out across a range of tablet / phone handset sizes.
- 8.1: Internet Explorer;

##### Microsoft Windows
Testing should be carried out across a range of tablet / desktop devices, with a suitable platform mix - across Windows 10, Windows 7, Windows XP and Windows 8.1.
- Microsoft Edge: Latest version & Previous version;
- Internet Explorer 10;
- Internet Explorer 9;
- Google Chrome: Latest version & Previous version;
- Firefox: Latest version & Previous version;

##### Mac OS X
Testing should be carried out across common desktop viewports.
- Safari 9 (10.11 El Capitan);
- Safari 8 (10.10 Yosemite);
- Safari 7 (10.9 Mavericks);
- Google Chrome: Latest version & Previous version;
- Firefox: Latest version & Previous version;

#### 'Functional' Browsers
The features of the site should be fully functional within reason, with sensible fallbacks in place, but the design standards may begin to slip if necessary. 

##### Apple iOS
Testing should be carried out on both handset and tablet devices.
- 7.x: Stock Browser (Safari); In-app webview;

##### Microsoft Windows
- Internet Explorer 8;

##### BlackBerry
- BlackBerry Browser on BB10.

#### The Legacy IE 'Question'

In our reports across 30,000 users of SFE properties, the total 6-month usage of Internet Explorer versions 6 and 7 was 0.1% and 0.26% of all users respectively.

In addition to low user demand, the continued usage of these browsers is problematic for the web as a whole, and SFE looks to do their part in this by encouraging users to upgrade where possible. In future, this will be added to the styleguide via a banner message to be displayed on these browsers.


## Known Bugs

- Development Guide » Responsive Tables pattern: It appears that the responsive table pattern seems broken in the guide in certain browsers, however the pattern itself is fine and it's simply the fact that the mobile view is shown in an iframe that causes the bug.


## Todo

- Details on build tools used to create and maintain this guide;
- Details on getting started contributing to this repo via Ansible, Vagrant, VirtualBox and Git;
- Details on Git merge driver behaviour;
- Toggle for switching mode betweeen the colour palettes and patterns for various SFE properties.
- We welcome pull requests, however allowing PRs on this repository is not a guarantee that they will be accepted. Feel free to open issues for discussion prior to filing a PR.