# async-css-loading

## Default (blocking)

* [default.html](./default.html)

## Link in `<body>`

* [link-body-middle.html](./link-body-middle.html) _(blocks in Chrome, Chrome for Android, Mobile Safari)_
* [link-body-end.html](./link-body-end.html) _(blocks in Chrome, Chrome for Android, Mobile Safari)_
* _Related Blink issue_: [#481122](https://bugs.chromium.org/p/chromium/issues/detail?id=481122) Allow the page to render before `<link>` tags in body

## Attribute toggle using JavaScript

* [link-mediatoggle.html](./link-mediatoggle.html) _(never applied—onload not supported in Android ≤ 4.3)_
* [loadcss.html](./loadcss.html)
* [preload.html](./preload.html)
* [preload-fallback.html](./preload-fallback.html) (using loadCSS)

## JavaScript created `<link>`

For browsers obeying the HTML5 specification, these should not block render.

* [link-js-body-end.html](./link-js-body-end.html) _(blocks in Mobile Safari)_
* [link-js-head.html](./link-js-head.html) _(blocks in Mobile Safari)_
* _Related WebKit issue_: [#88869](https://bugs.webkit.org/show_bug.cgi?id=88869) renderer should not block on script-inserted stylesheets

## Prior Art

* https://github.com/filamentgroup/loadcss
* https://gist.github.com/igrigorik/2935269#file-notes-md