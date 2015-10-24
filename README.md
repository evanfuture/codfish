# Codfish

Codfish is a wordpress plugin that lets you display your resume/c.v. in a format much like the popular Sublime Text code editor.

It is named after the illustrious Captain James B. Hook, of course.

## active development

So, right now, this is not a proper plugin, its just a template file and a scss sheet.  I've included the compiled css as well, and the acf json fields, so if you really want to try it, you can do so, but I leave it to you to figure out how.

In the meantime, here's what's planned:

- Convert from ACF to CMB2, so all fields can be embedded in the plugin
- Clean up css a bit, use better naming conventions
- Create an options page for editing the CV.  Maybe just make this a custom post type.
- Create a shortcode to embed the cv anywhere on the site.
- Edit responsive css so it works on mobile
- add better styling for links, so its clear they're clickable.
- add page load-in effects (type-in, or fade in-up blocks)
- add js to change line numbers to proper numbers, not just a plus
- Add in arrows for the expandable sections, and make them fold down the code
- Eventually, allow for adding other common sublime themes.
- Test, test, test.  Make sure styles aren't overridden by user themes.