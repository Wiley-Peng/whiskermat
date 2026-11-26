<?php
/**
 * Title: Contact page
 * Slug: whiskermat/contact
 * Categories: whiskermat
 * Description: Contact WhiskerMat — form, contact details, map placeholder and quick answers.
 */
?>
<!-- wp:group {"tagName":"section","className":"wm-section is-cream wm-hero-contact","layout":{"type":"default"}} -->
<section class="wp-block-group wm-section is-cream wm-hero-contact">
	<!-- wp:group {"className":"wm-wrap wm-center","layout":{"type":"default"}} -->
	<div class="wp-block-group wm-wrap wm-center">
		<!-- wp:paragraph {"className":"wm-eyebrow"} -->
		<p class="wm-eyebrow">Contact</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"className":"wm-h1"} -->
		<h1 class="wp-block-heading wm-h1">Talk to a human.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"wm-lead"} -->
		<p class="wm-lead">No bots, no ticket numbers. A real person on our small team answers every message, usually within one business day.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"wm-section is-white","layout":{"type":"default"}} -->
<section class="wp-block-group wm-section is-white">
	<!-- wp:group {"className":"wm-wrap wm-contact","layout":{"type":"default"}} -->
	<div class="wp-block-group wm-wrap wm-contact">
		<!-- wp:group {"className":"wm-form-card","layout":{"type":"default"}} -->
		<div class="wp-block-group wm-form-card">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Send us a message</h2>
			<!-- /wp:heading -->
			<?php if ( shortcode_exists( 'fluentform' ) ) {
				echo do_shortcode( '[fluentform id="2"]' );
			} else { ?>
				<p class="wm-form-fallback">Email us at <a href="mailto:hello@whiskermat.com">hello@whiskermat.com</a> and we will reply within one business day.</p>
			<?php } ?>
			<!-- wp:paragraph -->
			<p><small>We reply within one business day, Monday to Friday. Replace this form with WPForms or Contact Form 7 for real delivery.</small></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wm-info-cards","layout":{"type":"default"}} -->
		<div class="wp-block-group wm-info-cards">
			<!-- wp:group {"className":"wm-info-card","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-info-card">
				<!-- wp:paragraph {"className":"wm-info-card__tag"} -->
				<p class="wm-info-card__tag">Mail</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Email us</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><a href="mailto:hello@whiskermat.com">hello@whiskermat.com</a><br /><small>Replies within 1 business day</small></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"wm-info-card","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-info-card">
				<!-- wp:paragraph {"className":"wm-info-card__tag"} -->
				<p class="wm-info-card__tag">Phone</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Call us</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><a href="tel:+14155550134">(415) 555-0134</a><br /><small>Mon&ndash;Fri, 9am&ndash;5pm PT</small></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"wm-info-card","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-info-card">
				<!-- wp:paragraph {"className":"wm-info-card__tag"} -->
				<p class="wm-info-card__tag">Hours</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Office hours</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>9:00 &ndash; 17:00 PT<br /><small>Closed on US holidays</small></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"wm-info-card","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-info-card">
				<!-- wp:paragraph {"className":"wm-info-card__tag"} -->
				<p class="wm-info-card__tag">Visit</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">WhiskerMat HQ</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>2140 Harrison St<br />San Francisco, CA<br /><small>By appointment only</small></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"wm-info-card is-mint","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-info-card is-mint">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Prefer self-serve?</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Most answers live in our FAQ &mdash; shipping, returns, sizing and care are all covered. <a href="#contact-faq">Read the FAQ &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"wm-section is-cream","layout":{"type":"default"}} -->
<section class="wp-block-group wm-section is-cream">
	<!-- wp:group {"className":"wm-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group wm-wrap">
		<!-- wp:group {"className":"wm-map","layout":{"type":"default"}} -->
		<div class="wp-block-group wm-map">
			<!-- wp:group {"className":"wm-map__pin","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-map__pin"></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"wm-map__card","layout":{"type":"default"}} -->
			<div class="wp-block-group wm-map__card">
				<!-- wp:paragraph -->
				<p><strong>WhiskerMat HQ</strong><small>2140 Harrison St, San Francisco</small></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"wm-section is-cream","layout":{"type":"default"},"anchor":"contact-faq"} -->
<section class="wp-block-group wm-section is-cream" id="contact-faq">
	<!-- wp:group {"className":"wm-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group wm-wrap">
		<!-- wp:paragraph {"className":"wm-eyebrow"} -->
		<p class="wm-eyebrow">Quick answers</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Before you write to us.</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"wm-faq","layout":{"type":"default"}} -->
		<div class="wp-block-group wm-faq">
			<!-- wp:details -->
			<details class="wp-block-details"><summary>Where is my order?</summary>
				<!-- wp:paragraph -->
				<p>Tracking goes out the morning after your order ships. Check your inbox, then the spam folder. Still missing after 48 hours? Send us the order number and we will chase it.</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary>Can I return a mat my cat rejected?</summary>
				<!-- wp:paragraph -->
				<p>Yes. You have 30 days, used or not. Cats are picky and we would rather you keep a mat that works than one that sits in a closet.</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details -->
			<details class="wp-block-details"><summary>Do you ship outside the US?</summary>
				<!-- wp:paragraph -->
				<p>We ship to Canada and the UK today, with EU delivery opening in 2026. International orders take 6&ndash;10 business days.</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
