# Development Test

Assemble a small Wordpress site from scratch.

## Requirements

All content must be editable in Wordpress.

- home page
    - global menu which collapses on screens narrower than 768px. Pages in the menu can be empty but for a title.
        - About
        - Products
        - Contact
    - masthead image, full page width
    - 3 unique blocks of text
    - newsletter ajax signup form
      - uses admin-ajax.php
      - one text input: email
      - one button: signup
      - validate email structure using a regex pattern (just the structure [something]@[something].[something])
      - reports email validation back to the page

## Delivery

A .zip archive containing:

- your site's web root including wordpress, plugins, and uploads.
- a .sql file of the database
