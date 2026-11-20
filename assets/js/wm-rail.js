/**
 * WhiskerMat front-end behaviour.
 *
 * 1. Back to top button in the floating rail.
 * 2. Rail cart button opens the WooCommerce mini-cart drawer when available.
 * 3. Keeps the rail badge in sync with the mini-cart badge.
 * 4. Marks the current page in the navigation.
 */
(function () {
	'use strict';

	function initBackToTop() {
		var btn = document.querySelector('.wm-rail__top');
		if (!btn) {
			return;
		}
		var toggle = function () {
			btn.classList.toggle('is-on', window.scrollY > 420);
		};
		toggle();
		window.addEventListener('scroll', toggle, { passive: true });
		btn.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	function initRailCart() {
		var railBtn = document.querySelector('.wm-rail__cart');
		if (railBtn) {
			railBtn.addEventListener('click', function () {
				var trigger = document.querySelector('.wm-header .wc-block-mini-cart__button');
				if (trigger && !trigger.disabled) {
					trigger.click();
					return;
				}
				var url = railBtn.getAttribute('data-cart-url');
				if (url) {
					window.location.href = url;
				}
			});
		}

		var headerBtn = document.querySelector('.wm-header .wc-block-mini-cart__button');
		var badges = document.querySelectorAll('.wm-cart-count');
		if (!headerBtn || !badges.length) {
			return;
		}

		var sync = function () {
			var label = headerBtn.getAttribute('aria-label') || '';
			var cut = label.lastIndexOf(':');
			if (cut === -1) {
				return;
			}
			var num = parseInt(label.slice(cut + 1), 10);
			if (isNaN(num)) {
				return;
			}
			for (var i = 0; i < badges.length; i++) {
				badges[i].textContent = num;
			}
		};

		sync();
		new MutationObserver(sync).observe(headerBtn, { attributes: true, attributeFilter: ['aria-label'] });
	}

	function initNavCurrent() {
		var path = location.pathname.replace(/\/+$/, '') || '/';
		var map = { '/product/': '/shop', '/product-category/': '/shop', '/shop/': '/shop' };

		document.querySelectorAll('.wp-block-navigation-item__content').forEach(function (a) {
			var href = a.getAttribute('href') || '';
			var p;
			try {
				p = new URL(href, location.origin).pathname.replace(/\/+$/, '') || '/';
			} catch (e) {
				return;
			}
			var hit = p === path;
			if (!hit && p !== '/') {
				hit = path.indexOf(p + '/') === 0;
			}
			if (!hit) {
				Object.keys(map).forEach(function (k) {
					if (path.indexOf(k) === 0 && map[k] === p) {
						hit = true;
					}
				});
			}
			if (hit) {
				a.setAttribute('aria-current', 'page');
			}
		});
	}

	function boot() {
		initBackToTop();
		initRailCart();
		initNavCurrent();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}
})();
