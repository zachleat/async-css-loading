# async-css-loading

Current state of the art is [`filamentgroup/loadCSS`](https://github.com/filamentgroup/loadcss). Every other individual test below has major limitations in at least one modern browser.

## Default (always blocks)

* `<link>` in `<head>`
	* [Source code](./default.html)
	* [Demo](https://www.zachleat.com/async-css-loading/default.html)

## Link in `<body>`

* `<link>` in middle of `<body>`
	* [Source code](./link-body-middle.html)
	* [Demo](https://www.zachleat.com/async-css-loading/link-body-middle.html)
	* _blocks in Chrome, Chrome for Android, Mobile Safari_
* `<link>` at the end of `<body>`
	* [Source code](./link-body-end.html)
	* [Demo](https://www.zachleat.com/async-css-loading/link-body-end.html)
	* _blocks in Chrome, Chrome for Android, Mobile Safari_

_Related Chromium issue_: [#481122](https://bugs.chromium.org/p/chromium/issues/detail?id=481122) Allow the page to render before `<link>` tags in body

## Attribute toggle using JavaScript

* `<link>` toggles `media` attribute
	* [Source code](./link-mediatoggle.html)
	* [Demo](https://www.zachleat.com/async-css-loading/link-mediatoggle.html)
	* _never applied in Android ≤ 4.3, `<link onload>` not supported_
* Using `filamentgroup/loadCSS`
	* [Source code](./loadcss.html)
	* [Demo](https://www.zachleat.com/async-css-loading/loadcss.html)
	* _subject to [loadCSS browser support](https://github.com/filamentgroup/loadcss#browser-support)_
* Using `<link rel="preload">` and toggles `rel` attribute
	* [Source code](./preload.html)
	* [Demo](https://www.zachleat.com/async-css-loading/preload.html)
	* _subject to currently limited [`preload` browser support](http://caniuse.com/#feat=link-rel-preload)_
* Using `<link rel="preload">` with `filamentgroup/loadCSS` polyfill
	* [Source code](./preload-fallback.html)
	* [Demo](https://www.zachleat.com/async-css-loading/preload-fallback.html)
	* _subject to [loadCSS browser support](https://github.com/filamentgroup/loadcss#browser-support)_

## JavaScript created `<link>`

For browsers obeying the HTML5 specification, these should not block render.

* `document.createElement("link")` in `<body>`
	* [Source code](./link-js-body-end.html)
	* [Demo](https://www.zachleat.com/async-css-loading/link-js-body-end.html)
	* _blocks in Mobile Safari_
* `document.createElement("link")` in `<head>`
	* [Source code](./link-js-head.html)
	* [Demo](https://www.zachleat.com/async-css-loading/link-js-head.html)
	* _blocks in Mobile Safari_

_Related WebKit issue_: [#88869](https://bugs.webkit.org/show_bug.cgi?id=88869) renderer should not block on script-inserted stylesheets

## Extra

### Dependencies

Uses a styles.php to add a `sleep()` call to the stylesheet so that it loads slower.

### Prior Art

* https://github.com/filamentgroup/loadcss
* https://gist.github.com/igrigorik/2935269#file-notes-md