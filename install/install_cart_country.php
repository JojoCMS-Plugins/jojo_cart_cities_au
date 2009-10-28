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

/* Make sure we have Australia in there */
$countries = array(
                array('AU', 'Australia', 'australia_nsw', 'australia_nsw', 'yes', 'yes')
                );
foreach ($countries as $country) {
    if (!Jojo::selectRow("SELECT * FROM {cart_country} where countrycode = ?", $country[0])) {
      Jojo::updateQuery('REPLACE INTO {cart_country} SET countrycode=?, name=?, region=?, defaultregion=?, special = ?, hasstates = ?', $country);
    }
}