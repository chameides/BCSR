## Synopsis

This is a collection of sample templates Bard College at Simon’s Rock (BCSR). The initial templates were created by an agency in collaboration with BCSR. Now these templates are used to update designs, features, and functionality.

The readme focus on coding and deployment of the testing environment. <a href="http://simons-rock.edu">The Guide</a> provides more detailed patterns, governance, foundations. 

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
* Use camelCase for form field name
* Use camelcase for PHP variable

###Bundles

_css  
|<br>
|-- bootsrap (Use /boostrap to modify the original bootstrap rules)<br>
|-- font video js<br> 
|-- app_[file] Scss files to modify existing files and to add new rules<br>
|<br>
_fonts<br> 
|--webfonts from myfonts<br>
_images<br>
_inc includes for server side content in templates (testing only)<br>
_js JavaScript in templates (testing only)<br>
_resources CMS location of include files, no automatic syncing to live site.<br>
archive stuff that might be nice to access, but not sure<br>
events Markup for Events CMS, no automatic syncing to live site<br>
[page] sample pages used for testing purposes<br>

## Compile

###SCSS and CodeKit
app.css is written in Sass and I use CodeKit to compile. It would be fairly easy to use Grunt instead. 

###JS and CodeKit
External scripts should be minified and combined in order to improve page speed. I use CodeKit. It would be fairly easy to use Grunt instead.

###Icons and Grunt
The vector images for the At-A-Glance are compiled using Grunt and GruntIcon. To recompile, run grunt from the project root.

* https://24ways.org/2013/grunt-is-not-weird-and-hard/
* http://gruntjs.com/installing-grunt



##CMS Deployment

* _fonts
* _images
* _resources
* events

Files listed above are consistent with the OU CMS file structure. These files are generally added one-by-one through the CMS interface. The CMS interface also allows for bulk uploads with a zip file. Files can also be transferred with scp.

Be mindful of version control. The live files are not connected to the repo. Some files may be updated by OmniUpdate.


## Contributors

For more information contact Michael Chameides at mchameides@simons-rock.edu


## License

BCSR and Michael Chameides retain all rights and do not permit distribution, reproduction, or derivative works. 
Copyright 2015 Michael Chameides