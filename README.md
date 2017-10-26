# async-css-loading

Current state of the art is [`filamentgroup/loadCSS`](https://github.com/filamentgroup/loadcss). Every other individual test below has major limitations in at least one modern browser.

## Default (blocking)

* [default.html](./default.html)

## Link in `<body>`

* [link-body-middle.html](./link-body-middle.html) _(blocks in Chrome, Chrome for Android, Mobile Safari)_
* [link-body-end.html](./link-body-end.html) _(blocks in Chrome, Chrome for Android, Mobile Safari)_
* _Related Blink issue_: [#481122](https://bugs.chromium.org/p/chromium/issues/detail?id=481122) Allow the page to render before `<link>` tags in body

## Attribute toggle using JavaScript

* [link-mediatoggle.html](./link-mediatoggle.html) _(never applied in Android ≤ 4.3, `<link onload>` not supported)_
* [loadcss.html](./loadcss.html) _(subject to [loadCSS browser support](https://github.com/filamentgroup/loadcss#browser-support))_
* [preload.html](./preload.html) _(subject to [`preload` browser support](http://caniuse.com/#feat=link-rel-preload))_
* [preload-fallback.html](./preload-fallback.html) _(subject to [loadCSS browser support](https://github.com/filamentgroup/loadcss#browser-support))_

## JavaScript created `<link>`

For browsers obeying the HTML5 specification, these should not block render.

* [link-js-body-end.html](./link-js-body-end.html) _(blocks in Mobile Safari)_
* [link-js-head.html](./link-js-head.html) _(blocks in Mobile Safari)_
* _Related WebKit issue_: [#88869](https://bugs.webkit.org/show_bug.cgi?id=88869) renderer should not block on script-inserted stylesheets

## Extra

### Dependencies

Uses a styles.php to add a `sleep()` call to the stylesheet so that it loads slower.

### Prior Art

* https://github.com/filamentgroup/loadcss
* https://gist.github.com/igrigorik/2935269#file-notes-md