# Locations module

Locations module for PyroCMS 3

## Overwriting the default view
In your theme's service provider add the following:
```php
protected $overrides = [
    'wirelab.module.locations::locations/view' => 'your view path here',
];
```

## Adding locations to a page
1. Create a _multiple_ field in the pages module, assign it to Locations > Locations
2. Assign the field to a page type
3. In the page type loop over `page.your\_slug` and call `render()` on the locations. Or call `render()` on `page.your\_slug` to have it to loop for you.
Examples:
```twig
page.your_slug.render()
```
```twig
{% for location in page.your_slug %}
	location.render()
{% endfor %}
```
Not calling render will return the attributes of the location.