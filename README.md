# Locations module

Locations module for PyroCMS 3 with dynamic field.

## Overwriting the default view
### The prefered / project specific way
1. `php artisan addon:publish locations`
2. Edit the `show` view in `resources/<site name>/addons/wirelab/locations-module/views/location`

### In a custom theme
In your theme's service provider add the following:
```php
protected $overrides = [
    'wirelab.module.locations::locations/view' => 'your view path here',
];
```

## Adding fields to a location
1. In the location module go to `fields` and make a new field
2. In the `locations` section click on `assignments` and assign the field

## Adding locations to a page
1. Create a _multiple_ field in the pages module, assign it to Locations > Locations
2. Assign the field to a page type
3. In the page type loop over `page.your_slug` and call `render()` on the locations. Or call `render()` on `page.your_slug` to have it to loop for you.
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
```twig
{% for location in page.your_slug %}
	{{ location.name }}
	{{ location.email }}
{% endfor %}
```