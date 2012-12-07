Markdress
=========

Markdress lets you serve Markdown files as a website.

This used to be hosted at <http://markdress.org> but not since Dec 2012.
(To render a Markdown file at <http://goo.gl/zTG1q>, You would have visited
<http://markdress.org/goo.gl/zTG1q>)

<form onsubmit="window.location+=document.forms[0].path.value.replace(/^.*:\/\//, '');return false;">
 <label>
  Type a Markdown URL:
  <input name="path" placeholder="URL">
 </label>
 <button type="Submit">Render</button>
</form>

Alternatives
------------
- [DropPages.com](http://droppages.com/) lets you share Dropbox files as web pages.
- [Pancake.io](http://pancake.io/) lets you share Dropbox files as web pages.
- [Calepin.co](http://calepin.co/) lets you blog using Dropbox.
- [Markdrop](http://www.markdrop.com/) lets you preview Markdown on the browser.

So why Markdress? To test throwaway pages without creating accounts.

Feel free to use it. But there's no guarantee the site will remain forever.

FAQ
---
*Can I use my own hosted version of Markdress?*

Yes. Download from <https://github.com/sanand0/markdress>.

*Can I use Markdress with GitHub, Bitbucket, etc?*

Only if they have a http:// address (not https://). But these sites already
render text markup as HTML in their Wikis. So why bother?

*Does Markdress cache the URL?*

Not yet.

*Whom do I pass on feedback to?*

[Anand](http://www.s-anand.net/). If you have a feature suggestion,
[fork](https://github.com/sanand0/markdress/fork) the repository and submit
your pull request.
