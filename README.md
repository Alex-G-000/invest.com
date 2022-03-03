A WordPress theme for the Invest.com project
---
Requirements: PHP 7.1+
<br>Frameworks: jQuery-3.5.1, Bootstrap-4.6.0
<br>Core plugins: Advanced Custom Fields Pro, genesis custom blocks.

## Readme anchors
<!-- - [General description](#description) -->
- [File structure](#file-structure)
- [Theme options](#theme-options)
- [Custom blocks](#custom-blocks)
  - [Block naming](#block-naming)
  - [Block structure](#block-structure)
  - [Block template files](#block-template-files)
- [Theme javascript](#theme-javascript)
  - [Load order](#load-order)
  - [Registering scripts](#registering-javascript-files)
- [Theme css](#theme-css)
  - [File structure](#styles-file-structure)
  - [Dark and Light modes](#dark-and-light-modes)
  - [General rules](#general-rules)

## File structure
The project folder will contain files for the main website, blog, and various landing pages.<br>
**General project file structure.** <!-- More details can be found in each folder. -->
```
theme folder/
    block-templates/    - stand-alone block template files (.php, css, scss, js)
    blocks/             - registered gutengerg block files (.php, css, scss, js)
    configure/          - files to include in functions.php
    css/                - theme .css files
    img/                - theme images
    js/                 - theme .js files
    scss/               - theme sourse scss files
    template-parts/     - reusable .php templates
    vendor/             - plugins, frameworks and other tools used in project

```
---
## Theme options
Currently, the following option pages are available from the admin panel.

**Invest theme** 
- default theme styling 
- general company information 
- often used links
- company social profiles
- global tracking code snippets

**Banner setting** 
- all global banner settings.

**Widget setting** 
- data to show in Tradingview widgets.

**Edit Page** screen
- general settings (breadcrumbs, widget in header, color theme restrictions)
- page jsavascript (additional .js file to load on this page, inline javascript)
- page css (additional .css file to load on this page, inline css)

**Edit Post** screen
- marketing (campaign id, affiliate id, and post views). All fields are disabled, they are used to show info passed to CRM

---
## Custom blocks
The project uses a modular development system where possible.
All website pages should be divided into *"user sreens"* (sections). For this purpose, we use Gutenberg custom blocks functionality, with limited user input.

Blocks are registered and managed by the genesis-custom-blocks WordPress plugin. A user guide and documentation about the plugin can be found [here](https://developer.wpengine.com/genesis-custom-blocks/)

Gutenberg block editor [handbook](https://developer.wordpress.org/block-editor/).

**Block categories** available from Edit Page (or Edit Post) screen:
- *Invest* - general theme blocks, that may be used again later
- *Invest Banners* - reusable banners, usually configured from theme admin panel options page
- *Invest Widgets* - reusable widgets, usually configured from theme admin panel options page
- *Invest Blank* - template loaders, used for creating pages.

**All blocks should be added to their respectful category!*

---
### Block naming
For *non-blank* blocks, please try to keep `${what}-${where}-${name}` naming structure.<br>
Example: `widget-homepage-market-overview`

For blocks in *Invest blank* category, the naming is pretty much self-explanatory. <br>
`$blank--&{inpit-fields-avaliable}`<br>
Examples:

```
blank--title-subtitle
blank--title-subtitle-btn
blank--title-subtitle-text-btn

```

---
### Block structure

**A few common rules:**
- please, follow the [naming](#block-naming)
- all blocks should be added to their respectful category
- block .css and .js files should be located in the same folder as the block.php
- all bock *scripts should be [registered](#registering-javascript-files)!* 
- all user defined fields (content) should be located in *Editor fields*, while all developers fields (ID's, classes, etc) in *inspector fields*
- use human-readable slugs for fields
- dont forget to add logical search keywords
- each block should have a preview
- for [block styling](#block-styling) BEM is requiered
- blocks should be wrapped with `<section class="unique-class block"></section>` tags.

---
### Block template files
For a faster and more smooth workflow we use predefiend *blank blocks* as a template loaders with some user input fields. Input data is passed to templates using `get_template_part($template_path, $template_name , $input_data);` wordpress function. [Refference](https://developer.wordpress.org/reference/functions/get_template_part/).

---
**Core features**
- Each blank block has a *template path* input field. It is located in the "inspector's field"  section on the Edit Page screen (the right pannel).
- To connect a template, please enter your template path in the following format: `block-templates/folder/template` (without .php extension) into the *template path* input field. 
- All *blank* blocks are accessible from *Invest Blank* category and contain available user input fields in their [naming](#block-naming). 
- All *blank* blocks have `inner` field available, where another Guttenberg blocks can be placed (images, embed video, text editor, other custom blocks, etc). 
- Each blank block folder has a premade `template.php` file in it. It can be copy/pasted to the desired location for a more comfortable development process. [Example](blocks/blank--title-subtitle/template.php).
- All blank blocks follow the same naming logic for field *slugs*. 
- If there is a `template.css` file in the folder, it will be enqueued automatically.
---
**General rules**
- Block template files should be located in [block-templates/](block-templates/) folder.
- All template related files (.php, .css, .js, .scss) should have the same name *template.** and placed at the same folder
- All template ***scripts should be [registered](#registering-javascript-files)!***
- Each template should have a wrapper with unique class-name
- For [block styling](#general-rules) BEM is requiered
- Blocks that are used as sections should be wrapped with `<section class="unique-class block"></section>` tags.
---
**Usefull tips**
- By default, you can access input values inside template by using `echo $args['field_slug']`. If you copy/pasted template from a block folder, you can also use variables. Example: `echo $field_slug`.
- If your block or template needs some additional styles or scripts to work, please add them using `wp_enqueue_script('script-id')` and `wp_enqueue_style('style-id')` functions.
- Template path can be can be copy/pasted to *template path* input fieild. It has some str_replace() functionality to make windows paths work as well. For VS Code, for example, right click -> Copy Relative Path (or `ctr + shift + C`) should work.

---
## Theme Javascript
The theme uses [jQuery-3.5.1](https://releases.jquery.com/jquery/) and [Bootstrap-4.6.0](https://getbootstrap.com/docs/4.6/getting-started/introduction/).
They should be available on any page of the project.

---
### Load order
- jQuery.js
- Bootstrap.js
- theme-functions.js
- *...other scripts...*
- theme.js

*[theme-functions.js](js/theme-functions.js)* - reusable utility functions should be placed here<br>
*[theme.js](js/theme.js)* - main theme javascript file.

---
### Registering javascript files
📌 ***Impportant note:*** all srcipts used in project should be registered with `wp_register_script()` function in [configure/js-css.php](configure/js-css.php)!<br>

**Common rules:**
- Register scripts with `wp_register_script()` [Function reference](https://developer.wordpress.org/reference/functions/wp_register_script/)
- Define script dependencies if any
- Call scripts with `wp_enqueue_script('id')`function when you need them. All dependency scripts will be loaded automaticaly 
- Prevent using inline scripts if possible
- Don't forget to register custom block scripts

**Usefull links**
- included swiper.js [modules](/vendor/swiper-master/scripts/build-config.js)
- swiper.js custom build [docs](https://swiperjs.com/swiper-api#custom-build)

The list of all registered scripts can be found [here](configure/js-css.php)

---
## Theme css
Project uses SCSS extension language, BEM methodology and Bootstrap-4.6.0 framework.

---
### Styles file structure
There 2 main styling sourses:
1. General theme styles, located in [scss folder](/scss). They are compiled to `theme.css` and `blog.css` files, which should be loaded separately and be present on all pages of the site and blog accordingly.
2. Stand-alone [block](/blocks) and [block-templates](block-templates/) styles loaded on demand. `block.css` and `temlate.css` files are loaded only if the block is present on the page.

📌 Please, keep in mind that `theme.scss` and `blog.scss` may use a bit different **bootstrap congigurations**

**Very important links**
- [_variables.scss](scss/_variables.scss) - all project variables should be stored here
- [_variables-blog.scss](scss/blog-scss/_variables-blog.scss) - variables that will *OVERWRITE* default theme values for blog pages only
- [_bootstrap-theme.scss](scss/theme-scss/_bootstrap-theme.scss) - bootsrap components included in main theme
- [_bootstrap-theme-blog.scs](scss/blog-scss/_bootstrap-theme-blog.scss) - bootsrap components included in blog

**Main theme**
```
theme-scss/
    _blocks           - global block styles. Should be used for modifying default Gutenberg styles for inner blocks (included in blog.scss)
    _bootstrap-theme  - bootsrap components included in main theme
    _elements         - all small elements should go here (included in blog.scss)
    _footer           - global styles for footer (included in blog.scss)
    _nav              - global styles for navbar (included in blog.scss)
    _theme-dark       - dark theme classes (included in blog.scss)
    _theme-light      - light theme classes (included in blog.scss)
    _theme            - global theme rules and utility classes (included in blog.scss)
theme.scss            - main styling file, only @import's here
```

**Blog theme**
```
blog-scss/
    _article              - styles for single post pages
    _blog-general         - global styles for all blog pages
    _bootstrap-theme-blog - bootsrap components included in blog
    _category-page        - styles for all category pages
    _variables-blog       - variables that will OVERWRITE default theme values for blog pages only
blog.scss                 - main styling file for blog, only @import's here
```

### Dark and Light modes
The theme is designed to have a theme switcher between *dark* and *light* modes. <br>
The mode is defined by one of two `<body>` classes: `theme-dark` and `theme-light`.

Since the only difference between them is `color` and `background-color` for some of the elements, those two properties ***should never*** be defined strict.
Please use absolute utility classes `class-name--dark` and `class-name--light` for that.

**Example:**
```
<p class="text-blue--light">Some content</p>

// will have default color in dark mode (white) and blue color in light mode
```
All mode-specific color classes are located in [_theme-dark.scss](scss/theme-scss/_theme-dark.scss) and [_theme-light.scss](scss/theme-scss/_theme-light.scss) files.

---
### General rules
- files that start with underscore `_**.scss` are modules. They are ment to de imported into main `**.scss` files. 
- please, **do NOT** import modules with css rules inside other modules (variables and utility functions can be imported anywhere).
- main `**.scss` files, that generate final .css should not contain any rules or markup, only imported modules
- use [variables](scss/_variables.scss)
- use [bootstrap media queries](https://gist.github.com/akolinski/309407a5102cf7712c7c37c8bdbb667d)

### Block styling
- for blocks BEM is requiered
- use a unique class names for block wrappers
- add "block" class to section blocks. `<section class="unique-class-name block"> ... </section>`
- try using bootstrap classes where possible
- please, add often used elements to [_elements.scss](scss/theme-scss/_elements.scss) 
---
**Usefull tips**<br>
1. Most block folders have the same relative path depth, so you can copy/paste import code for variables and mixins from neighbours.
```
@import '../../../scss/_variables';
@import '../../../vendor/bootstrap/scss/mixins/breakpoints';
```
2. Blocks unique class names sometimes can be pretty long and hard to use for proper BEM styling. You can use class `block` (which all of them should have) for more comfortable scss writing.<br>
Example:
```
<section class="category-instruments-firstscreen block">    
   ...
  <div class="block__content">
      <h2 class="block__title">
          <?php echo $title; ?>
      </h2>
      <div class="block__text">
          <?php echo $text; ?>
      </div>
  </div>   
  ...            
```
.scss
```
.category-instruments-firstscreen {     
    .block {    
        &__content { ... }  
        &__title { ... }   
        &__text { ... }   
    }
}  
```
3. All *blank* blocks have utility input fields `add_class` and `add_id`. You can use them to make block template more reusable. Examples:
```
//for section blocks 
<section class="unique-class block <?php echo $add_class; ?>">...</section>

//for inner blocks - adding input value to column classes
<div class="col <?php echo $add_class; ?>">...</div>

//etc.
```
4. If there is an optional field in template (that user may not fill in), dont forget to wrap html elements with conditional statement to prevent unexpected margins and other issues. Example:
```
 <?php if ( !empty($subtitle) ) { ?>
    <p class="section-header__text"><?php echo $subtitle; ?></p>
 <?php } ?>
```, 