# Laravel PHP Project - P3

**Developers Best Friend*** helps developers generate random text, random users and
random passwords.

### Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P3)

### Live Site Location
Please visit [p3.zudbu.com](http://p3.zudbu.com).  This domain is dedicated (currently) to my CSCIE15 work.

### Demo location
Developer's Best Friend [video https://youtu.be/sJJcIBwy07A](https://youtu.be/sJJcIBwy07A) in youtube.

### Features by solution

#### Text generator:
  This solution uses a custom class built by me that implements [n-grams](https://en.wikipedia.org/wiki/N-gram).
  This class analyses text and builds a statistical model to predict the next word
  given a key formed of previous words.  For example, let's build a model with N=3
  for the text "your wish is my command, your wish is my desire, your wish is my order"

|   key (prefix) 	|   potential words (suffix)	|   
|-----	|---	|
|______________|_____________________|
|   your wish is 	|   my, my, my	|
|  wish is my   	|   command, desire, order	|
|  is my command 	|    your	|  
|   my command your	|   wish	|  
|   command your wish	|   is	|  
 | is my desire| your|
|  my desire your    | wish|
|  desire your wish  | is|
|  is my order       | your  |
|  my order your     | wish|
|  order your wish   | is|

Note how text is wrapped around to build the edge cases.

To build the random text, we do the following
  - pick a random prefix to start
  - select a valid word from the list of suffixes
  - select the next prefix by dropping the first word of the previous prefix and adding the suffix
  - repeat until the desired number of words is produced

  The effect of using this algorithm is that the random text resembles the style of the original
  author.

  The text generator comes with preloaded text for "Hamlet", "Song Lyrics" and "Lorem Impsum".
  As a bonus feature, the text generator also has the ability to scrap content
  from websites. To do the scrapping I leveraged an  open source function from Nadeau Software.


#### User Generator
  This solution is a complete MVC implementation using routes, controllers, blade, Eloquent and MySql
  - Database build was done usign Laravel's migrations
  - Database elements were populated using Laravel's seeders
  - The database contains separate tables for first names,
    surnames, photos, hobbies and email domains
  - Each table has a corresponding model that extends Eloquent.  Queries to each table are made
    using the corresponding models

### Password Generator
  As an extra challenge, I re-implemented my previous custom functions for password generator.
  This time, the code was implemented on an object oriented fashion with a controller
  that extends Laravel's controller.   
  - Options for words, numbers and special characters
  - Extra feature to select CamelCase


### General features
- The app uses bootstrap and bootstrap's carousel template.  The site is responsive
and has uses javascript to implement a slide show of the three generators with
left and right arrows, collapsable menus and other navigational aids.
- All the requests leverage Laravel's routes, controllers and views.  The basic flow is
  request -> routes -> controller -> view
- The app is powered with HTML forms.  These forms were implemented using Blade
- The text generator and the password generator forms leverage Laravel's http
 requests and  flash messages to keep the values entered by the user
- The app was built leveraging several packages including  laravel collective html,
laravel-debugbar, and Rap2hpoutre's log viewer
- All custom classes built by me use proper namespacing and are included within the
  'app' folder to leverage Laravel's autoloading
- All pages were checked using [W3c's Unicorn validator](https://validator.w3.org/)


### Acknowledgements
- Theme based on bootstrap's carrousel template.
- This app was built using the Laravel framework. The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
- Song Lyrics from Adele, Idina Menzel, Beatles, Rolling Stones, Lady Gaga and Harvard
- LoremIpsum text from http://lipsum.com
- Images:
  - person1.jpg flickr Lorena by Noval Goya
  - person2.jpg to person3.jpg: (Own work) [CC BY-SA 4.0 (http://creativecommons.org/licenses/by-sa/4.0)], via Wikimedia Commons (except when noted)
  - person2.jpg by Tonybog  
  - person 3.jpg By Academic9
  - person4.jpg By Siavash.aghdaie
  - person5.jpg By tahseen_libra
  - person6.jpg By Gavaskar.tk
  - person7.jpg By Lfiorito
  - person8.jpg By Ibrahim0805
  - person9.jpg By Aaron bushkowsky
  - person10.jpg By Anna Marcello
  - person11.jpg By Sandrojhonston
  - person12.jpg By Jorge Arriagada (Own work) [GFDL (http://www.gnu.org/copyleft/fdl.html) or CC BY-SA 4.0-3.0-2.5-2.0-1.0 (http://creativecommons.org/licenses/by-sa/4.0-3.0-2.5-2.0-1.0)], via Wikimedia Commons
  - person13.jpg By MirreNL  - person14.jpg By Tabercil (Own work) [CC BY-SA 3.0 (http://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons
  - Code for function strip_html_tags() from article at [Nadeau Software](http://nadeausoftware.com/articles/2007/09/php_tip_how_strip_html_tags_web_page) Open source license [OSI BSD ] (http://www.opensource.org/licenses/bsd-license.php)
