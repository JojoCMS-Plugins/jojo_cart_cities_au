<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Jojo CMS
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* Make sure we have Australian States in there */
$states = array(
                array('AU', 'AU-ACT', 'australia_act', 'Australian Capital Territory'),
                array('AU', 'AU-NSW', 'australia_nsw', 'New South Wales'),
                array('AU', 'AU-NT',  'australia_nt', 'Northern Territory'),
                array('AU', 'AU-QLD', 'australia_gld', 'Queensland'),
                array('AU', 'AU-SA',  'australia_sa', 'South Australia'),
                array('AU', 'AU-TAS', 'australia_tas', 'Tasmania'),
                array('AU', 'AU-VIC', 'australia_vic', 'Victoria'),
                array('AU', 'AU-WA',  'australia_wa', 'Western Australia'),
            );
foreach ($states as $state) {
    Jojo::updateQuery('REPLACE INTO {cart_state} SET countrycode = ?, statecode = ?, region = ?, state = ?', $state);
}
