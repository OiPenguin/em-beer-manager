=== EM Beer Manager ===
Contributors: ErinMorelli
Donate link: http://erinmorelli.com/wordpress/
Tags: beer, beers, brewery, untappd
Requires at least: 3.0.1
Tested up to: 3.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Catalog and display your beers with WordPress. Integrates very simply with Untappd for individual beer checkins. Great for everyone from home brewers to professional breweries!


== Description ==

This plugin allows beer creators from home brewers to professional breweries to easily manage and display their beers. Includes a comprehensive beer management section with a variety of options, including:

* A custom beer "style" taxonomy for categorizing your beers
* Shortcodes and template tags for displaying all or a select number of beerss
* Custom meta boxes to store detailed information about each beer, including abv, ibu, and ingredients
* Simple beer checkin integration with Untappd

*****


## USAGE ##

Use these shortcodes to display beers in your posts or use the template tags in your theme files.


### Single Beer Display ###

     [beer id={beer id}]

     <?php echo embm_beer_single( [beer id], [show_profile (optional)], [show_extras (optional)] ); ?>

This will display a single beer entry given it's ID number (found in "Beers" admin). Optional attributes:

* __show_profile={`true/false`}__ (Default = `true`)
     
    *Displays or hides the "Beer Profile" information*

* __show_extras={`true/false`}__ (Default = `true`)
     
    *Displays or hides the "More Information" section*


### List All Beers ###


     [beer-list]

     <?php echo embm_beer_list( [exclude (optional)], [show_profile (optional)], [show_extras (optional)], [style (optional)] ); ?>
     
This will display a formatted listing of all beers in the database. Optional attributes:

* __exclude={`"beer ids"`}__ (String separated by commas e.g. `"4,23,24"`)

    *Hides listed beers from output*

* __show_profile={`true/false`}__ (Default = `true`)

    *Displays or hides the "Beer Profile" information for each listing*

* __show_extras={`true/false`}__ (Default = `true`)

    *Displays or hides the "More Information" section for each listing*

* __style={`"style name"`}__ (String e.g. `"India Pale Ale"`)

    *Displays only beers belonging to a specific beer style*

* __beers\_per\_page={`number`}__ (Default = `-1`, shows all beers on one page)

    *Paginates output and displays the given number of beers per page*

*****


## Planned Features ##

* Sidebar widget for displaying beers
* Option to add simple age verification check to site
* Expanded Untappd integration


== Installation ==

1. Unzip the `em-beer-manager.zip` file to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. See "Usage" section on the Description page to learn more.


== Screenshots ==

1. The "Beer" management screen
2. Beer profile infomation
3. Extra Beer information
4. Special styles organizaion
5. Single beer front-end display (with all options enabled)


== Changelog ==

= 1.0 =
* Initial plugin release