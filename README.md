# Codfish

Codfish is a wordpress plugin that lets you display your resume/c.v. in a format much like the popular Sublime Text code editor.

It is named after the illustrious Captain James B. Hook, of course.

## active development

So, right now, this is not a proper plugin, its just a template file and a scss sheet.  I've included the compiled css as well, and the acf json fields, so if you really want to try it, you can do so, but I leave it to you to figure out how.

In the meantime, here's what's planned:

- Include ACF in plugin so fields are added in the php.
- Clean up css a bit, use better naming conventions
- Create an options page for editing the CV.  Just make this a custom post type.
- Create a shortcode to embed the cv anywhere on the site.
- Maybe make a page-template for overriding site headers and such.
- Edit responsive css so it works on mobile
- add better styling for links, so its clear they're clickable.
- add page load-in effects (type-in, or fade in-up blocks)
- add js to change line numbers to proper numbers, not just a plus
- Add in arrows for the expandable sections, and make them fold down the code
- Eventually, allow for adding other common sublime themes.
- Test, test, test.  Make sure styles aren't overridden by user themes.

## Changelog
Well, sort of, here's a place for me to add notes on changes made.
### 27.10.15
Tried adding CMB2, but found that nested repeaters do not function well, which would stop easy development of the portfolio items.  So, we'll stick with ACF, and use the JSON to make it easier to edit.
### 26.10.15
Getting started on active devlopment.  The wordpress page template works, but the whole thing needs to be recreated as a plugin.  The plan is for a custom post type, with its custom fields, and a shortcode to embed it wherever.  Maybe also a page template, if plugins in wordpress can add those.