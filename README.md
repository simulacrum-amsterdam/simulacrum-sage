# [Simulacrum Wordpress Theme](https://www.simulacrum.nl/)
[![Build Status](https://travis-ci.org/simulacrum-amsterdam/simulacrum-sage.svg)](https://travis-ci.org/simulacrum-amsterdam/simulacrum-sage)

A responsive theme for the student magazine Simulacrum based on the [Sage](https://github.com/Roots/sage) starter theme/workflow by Roots.

# Manual:

In this theme are two special templates. The one for the frontpage and the about page. Those pages have special field associated with them. Also the post-view has a custom field. Next to that there are several meaningful tags:

Meaningful tags: no-background, no-filter, on-frontpage, on-about and on-issue.
Meaningful fields: frontpage__tagline, about-second__headline, about-second__content, post-page__caption

## Handy tools

wp-cli:

wp search-replace --url=http://simulacrum.nl http://simulacrum.nl http://localhost:8888
wp search-replace --url=http://localhost:8888 http://localhost:8888 http://simulacrum.nl 
