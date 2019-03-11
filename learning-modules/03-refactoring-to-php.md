# Refactoring our site to PHP

### Code Size

In later parts of this workshop, one of the major issues that we will tackle in software development best practices is code size. In our website earlier, it's still a bit short so it's not very noticeable but that code is dirty and not very reusable.

We'll be refactoring our plain html code to PHP so we can now "develop in `atoms`". See [atomic design](bradfrost.com/blog/post/atomic-web-design/) by Brad Frost.

### Separation of Concerns

Aside from reducing code size, we'll be focusing on separation of concerns as well. You may have noticed that we `hardcoded` our values to the front-end. We basically mixed up both `presentation` concern and `data` concern.

### Getting on Refactoring

Follow along the instructor in analyzing our webpage.

Steps

- 01 Create a new file called `index.php`.
- 02 Create a new folder called views/profile, and views/common.
- 03 Inside the views/common folder, create the following files:
    - global-meta.phtml
    - global-fonts-and-icons.phtml
    - bootstrap-css.phtml
    - bootstrap-js.phtml    
- 04 Inside the views/profile folder, create the following files:
    - index.phtml
    - carousel.phtml
    - skillset.phtml
    - skill.phtml
    - referrals.phtml
    - referral.phtml
    - contact-form.phtml

Follow along the instructor as he dissect our webpage, for your reference, the following should be the content of each files and should also be the output of what the instructor does.

#### Index File Contents

This will be the `entry point` of our website. A pseudo controller of sorts that directs the application on what things to load and where the code should go.

File: `index.php`


#### Common Files Contents

File: `global-meta.phtml`
Justification: One place to update meta tags that apply to ALL our pages.

```html
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>
```

File: `global-fonts-and-icons.phtml`
Justification: One place to update meta tags that apply to ALL our pages.

```html
<link 
    href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans" rel="stylesheet">
<link 
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    rel="stylesheet">
```

File: `bootstrap-css.phtml`
Justification: Upgrading & maintaining depdencies
```html
<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
/>
```

File: `bootstrap-js.phtml`
Justification: Upgrading & maintaining depdencies
```html
<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
```

#### Specific Page (Profile) File Contents

Here, `index` will be the main page or container of our all our 