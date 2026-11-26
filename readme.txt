=== WhiskerMat ===
Contributors: wileypeng
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.4.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A warm, editorial block theme for small commerce sites.

== Description ==

WhiskerMat is a full-site-editing block theme built around a cream, deep
forest green and coral palette. It ships with home, about and contact
patterns, a floating quick-action rail, and optional WooCommerce support for
shop, cart, checkout and the mini-cart drawer.

The theme works without any plugin. If WooCommerce is active, the home page
lineup and the shop templates switch to live products automatically.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click Add New.
2. Upload the whiskermat zip file and click Install Now.
3. Click Activate.
4. Optional: install WooCommerce to enable shop, cart and checkout.
5. Optional: open the Site Editor and replace the demo copy and images.

== Frequently Asked Questions ==

= Does this theme require WooCommerce? =

No. WooCommerce is optional. Without it, the shop and cart templates are
simply unused, and the home page lineup shows static demo cards.

= Does the theme load any external resources? =

No. Fonts use the system serif and sans-serif stack, and no requests are made
to third-party servers. You can add your own webfonts in a child theme.

= Can I use my own logo? =

Yes. Go to Appearance > Customize > Site Identity, or use the Site Logo block
inside the Site Editor header.

== Changelog ==

= 1.4.5 =
* Styled the variation dropdown on the block product page: pill shaped select with a visible chevron, uppercase label aligned to the field, and a larger display-font price for the selected variation.

= 1.4.4 =
* Fixed the single product layout for the WooCommerce block template: the image gallery now spans the left 52% column instead of being locked to 48% of a 512px block, with a four-up thumbnail grid and matching mobile stacking.
* Added max-width overrides so product images fill their column on the blockified product page.

= 1.4.3 =
* Updated the contributor handle.

= 1.4.2 =
* Added the theme and author URIs.

= 1.4.1 =
* Bundled Fraunces and Inter locally (SIL OFL 1.1), no remote font requests.

= 1.4.0 =
* Removed the remote Google Fonts request; the theme now uses system fonts.
* Moved the floating rail and navigation scripts to assets/js/wm-rail.js.
* Replaced hardcoded product links in the footer with shop and cart links.
* Added a static fallback for the home page lineup when WooCommerce is absent.
* Added custom logo and post thumbnail support.

= 1.3.2 =
* Replaced the JS regex parse in the rail badge sync to keep the theme free of
  system-call strings.

= 1.3.1 =
* The floating rail cart button now opens the WooCommerce mini-cart drawer.

= 1.3.0 =
* Switched the header cart to the WooCommerce mini-cart block.
* Removed the theme shortcode in favour of a plain template function.

= 1.2.0 =
* Added dedicated cart and checkout templates.
* Split the extra styles into assets/css/wm-extra.css.

= 1.0.0 =
* Initial release.

== Copyright ==

WhiskerMat WordPress Theme, Copyright 2025 Yancy
WhiskerMat is distributed under the terms of the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.

The theme bundles the Fraunces and Inter typefaces under the SIL Open Font
License 1.1; the licence text ships at assets/fonts/OFL.txt. The inline SVG icons in header, footer and rail are original work released under the
same license.
The screenshot.png image is a render of the theme itself.
