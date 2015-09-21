## Synopsis

This is a collection of sample templates Bard College at Simon’s Rock (BCSR). The initial templates were created by an agency in collaboration with BCSR. Now these templates are used to update designs, features, and functionality.


##Guidelines

###Principles

"Part of being a good steward to a successful project is realizing that writing code for yourself is a Bad Idea™. If thousands of people are using your code, then write your code for maximum clarity, not your personal preference of how to get clever within the spec." - Idan Gazit

Don't try to prematurely optimize your code; keep it readable and understandable.

All code in any code-base should look like a single person typed it, even when many people are contributing to it.

If in doubt when deciding upon a style use existing, common patterns.	

###CSS
The app.css has it's own guidelines and background in app_readme.scss

###Comments

Well commented code is extremely important. Take time to describe components, how they work, their limitations, and the way they are constructed. Don't leave others in the team guessing as to the purpose of uncommon or non-obvious code.

When introducing ideas and sections, place comments on a new line above their subject.

###Naming Convention

* Separate words in file names with a -, for example areas-of-study.php
* Partials and includes use _, for eample app_academics.css 

###Bundles

_css  
|<br>
|--bootsrap (Use /boostrap to modify the original bootstrap rules)
|-- font video js 
|-- app_[file] Scss files to modify existing files and to add new rules
|
_fonts 
|--webfonts from myfonts
_images
_inc includes for server side content in templates (testing only)
_js JavaScript in templates (testing only)
_resources CMS location of include files. No automatic syncing to live site. 
archive stuff that might be nice to access, but not sure
events Markup for Events CMS. No automatic syncing to live site.
[page] sample pages used for testing purposes


## Contributors

For more information contact Michael Chameides at mchameides@simons-rock.edu


## License

BCSR and Michael Chameides retain all rights and do not permit distribution, reproduction, or derivative works. 
Copyright 2015 Michael Chameides