## Laravel PHP Project - P3

This project uses Laravel 5. In addition to the basic "out of the box" the following configuration
settings took place:  
- Bootstrap/SASS styles were compiled using Elixir and Gulp (built on top of Node.js)
- HTML helpers available
- Coffee scripts

# Core features
- Using _____package for web scraping
- Flow: request -> routes -> controller -> view
- Describe views
- Forms used to power the app were implemented using Blade and leveraging Laravel's HTTP Requests
to get values, flash messages and produce sticky Forms
- packages: using laravel collective html
- packages: used laravel-debugbar
Route::get('logs', '\\Rap2hpoutre\\LaravelLogViewer\\LogViewerController@index');

## Extra features
- Compiled sass
- Using  mysql as the main data store
- Used coffee scripts??
- Used database seeders
- User generator is powered by a MySQL database.  To build the database we leveraged Laravel's
migrations and seeders.  To access the database we use RESTful controllers.
- Installed and used HTML helpers from Laravel Collective??
- Laravel HTTP Requests??/
- The random text generator reads a text file and uses it to generate a structure of word groups called "n-grams" as a basis for generating seemingly "random" text that sounds like it was written by the same author of the text file.  
- The n-gram algorithm
uses maps and vector collections and selects words based on the probability of a particular word being used in the provided text file
Preloaded n-grams include works from Hamlet, The Beatles and ___ This algorithm.  

- Custom classes and methods to support passwordgenerator
- Used Laravel's http requests methods for form handling and stickiness



## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).



### Acknowledgements
- Theme based on bootstrap's carrousel template.
- This app was built using the Laravel framework. The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
- Musical Text from Adele, Idina Menzel, Beatles

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
