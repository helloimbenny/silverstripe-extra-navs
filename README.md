# Silverstripe Extra Nav
This module provides some extra types (Secondary, Footer) of nav in the admin and views.

## Requirements

- "silverstripe/framework": "~3.1.0"

## Install 

### Composer
```
{
    "require": {
        "btlcreative/silverstripe-extra-navs": "master"
    },
    "repositories": [
      {
        "type": "git",
        "url":  "git@github.com:btlcreative/silverstripe-extra-navs.git"
      }
    ]
}
```

### Manually
- Download a compressed version of [silverstripe-extra-nav](https://github.com/btlcreative/silverstripe-extra-navs/archive/master.zip)
- Unpackage in the root of your silverstripe project

## Getting Started
- Run a ```dev/build```
- From Views, you can access the dataobjects with ```$SecondaryNav``` and ```$FooterNav```

### Sample View Loop

```
<% if $FooterNav %> 
  <ul class="navigation">
  <% loop $FooterNav %>
    <li>
    <% if InternalLink %>
        <a href="$InternalLink.Link" title="Go to the $LinkText.XML page" class="$LinkOrSection">$LinkText</a>
    <% else %>
        <a href="$ExternalLink" title="Go to the $LinkText.XML page" class="$LinkOrSection">$LinkText</a>
    <% end_if %>
    </li>
  <% end_loop %>
  </ul>
<% end_if %>
```

## Note
Would benefit greatly from a refactoring - first attempt at a silverstripe module.