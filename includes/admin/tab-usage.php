<?php
/**
 * Copyright (c) 2013-2016, Erin Morelli.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * @package EMBM\Admin\Usage
 */
?>


<h2><?php _e('Single Beer Display', 'embm'); ?></h2>

<p><?php _e('These will display a single beer entry given it\'s ID number.', 'embm'); ?></p>

<h3 class="embm-settings--subhead"><?php _e('Shortcode', 'embm'); ?></h3>

<blockquote>
    <code>[beer id="beer id"]</code>
</blockquote>

<h3 class="embm-settings--subhead"><?php _e('Template tag', 'embm'); ?></h3>

<blockquote>
    <code><?php echo htmlentities('<?php echo EMBM_Output_Beer_display( $beer_id, $args ); ?>'); ?></code></p>
    <p><?php _e('Where <code>$beer_id</code> is required and <code>$args</code> is a PHP array of comma-separated <code>key => value</code> pairs. For example:', 'embm'); ?></p>
    <p>
        <pre class="embm-settings--code">
<?php echo htmlentities(
    "<?php echo EMBM_Output_Beer_display( 123, array(\n".
    "    'show_profile'  => false,\n".
    "    'show_extras'   => true\n".
    ") ); ?>"
); ?>
        </pre>
    </p>
</blockquote>

<h3 class="embm-settings--subhead"><?php _e('Options', 'embm'); ?></h3>

<p><?php _e('For use with both the shortcode and template code.', 'embm'); ?></p>

<table class="embm-settings--table" cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
            <th><?php _e('Option Name', 'embm'); ?></th>
            <th><?php _e('Values', 'embm'); ?></th>
            <th><?php _e('Default', 'embm'); ?></th>
            <th><?php _e('Description', 'embm'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code><strong>show_profile</strong></code></td>
            <td><code>true, false</code></td>
            <td><code>true</code></td>
            <td><?php _e('Displays or hides the "Beer Profile" information', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>show_extras</strong></code></td>
            <td><code>true, false</code></td>
            <td><code>true</code></td>
            <td><?php _e('Displays or hides the "More Beer Information" section', 'embm'); ?></td>
        </tr>
    </tbody>
</table>

<br />

<h2><?php _e('List All Beers', 'embm'); ?></h2>

<p><?php _e('These will display a formatted listing of all beers.', 'embm'); ?></p>

<h3 class="embm-settings--subhead"><?php _e('Shortcode', 'embm'); ?></h3>

<blockquote>
    <code>[beer-list]</code>
</blockquote>

<h3 class="embm-settings--subhead"><?php _e('Template tag', 'embm'); ?></h3>

<blockquote>
    <code><?php echo htmlentities('<?php echo EMBM_Output_List_display( $args ); ?>'); ?></code></p>
    <p><?php _e('Where <code>$args</code> is a PHP array of comma-separated <code>key => value</code> pairs. For example:', 'embm'); ?></p>
    <p>
        <pre class="embm-settings--code">
<?php echo htmlentities(
    "<?php echo EMBM_Output_List_display( array(\n".
    "    'show_extras'       => false,\n".
    "    'beers_per_page'    => 3,\n".
    "    'orderby'           => 'name',\n".
    "    'order'             => 'ASC'\n".
    ") ); ?>"
); ?>
        </pre>
    </p>
</blockquote>

<h3 class="embm-settings--subhead"><?php _e('Options', 'embm'); ?></h3>

<p><?php _e('For use with both the shortcode and template code.', 'embm'); ?></p>

<table class="embm-settings--table" cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
            <th><?php _e('Option Name', 'embm'); ?></th>
            <th><?php _e('Values', 'embm'); ?></th>
            <th><?php _e('Default', 'embm'); ?></th>
            <th><?php _e('Description', 'embm'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code><strong>show_profile</strong></code></td>
            <td><code>true, false</code></td>
            <td><code>true</code></td>
            <td><?php _e('Displays or hides the "Beer Profile" information for each listing', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>show_extras</strong></code></td>
            <td><code>true, false</code></td>
            <td><code>true</code></td>
            <td><?php _e('Displays or hides the "More Beer Information" section for each listing', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>style</strong></code></td>
            <td><?php _e('String of style name'); ?><br />e.g. <code>"India Pale Ale"</code></td>
            <td>n/a</td>
            <td><?php _e('Displays only beers belonging to a specific beer style', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>group</strong></code></td>
            <td><?php _e('String of group name'); ?><br />e.g. <code>"Seasonal Beers"</code></td>
            <td>n/a</td>
            <td><?php _e('Displays only beers belonging to a specific group', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>exclude</strong></code></td>
            <td><?php _e('Comma-separated list of beer IDs', 'embm'); ?><br />e.g. <code>"4,23,24"</code></td>
            <td>n/a</td>
            <td><?php _e('Hides listed beers from output', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>beers_per_page</strong></code></td>
            <td><?php _e('A number', 'embm'); ?><br /> e.g. <code>5</code></td>
            <td><code>-1</code><br /><?php _e('Shows all beers', 'embm'); ?></td>
            <td><?php _e('Paginates output and displays the given number of beers per page', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>paginate</strong></code></td>
            <td><code>true, false</code></td>
            <td><code>true</code></td>
            <td><?php _e('Disables/enables pagination', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>orderby</strong></code></td>
            <td><?php _e('See ', 'embm'); ?><a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank"><?php _e('this list', 'embm'); ?></a><?php _e(' for options', 'embm'); ?></td>
            <td><code>"date"</code></td>
            <td><?php _e('Orders beer list output by the given paramater', 'embm'); ?></td>
        </tr>
        <tr>
            <td><code><strong>order</strong></code></td>
            <td><code>ASC, DSC</code></td>
            <td><code>DSC</code></td>
            <td><?php _e('Sorts beer list by <code>orderby</code> value in ascending or descending order', 'embm'); ?></td>
        </tr>
    </tbody>
</table>
