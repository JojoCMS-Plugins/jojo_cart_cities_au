<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Michael Holt <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* Ensure we have New Zealand regions in there */
$regions = array(
                array('australia_act', 'Australia - Australian Capital Territory'),
                array('australia_nsw', 'Australia - New South Wales'),
                array('australia_nt',  'Australia - Northern Territory'),
                array('australia_gld', 'Australia - Queensland'),
                array('australia_sa',  'Australia - South Australia'),
                array('australia_tas', 'Australia - Tasmania'),
                array('australia_vic', 'Australia - Victoria'),
                array('australia_wa',  'Australia - Western Australia'),
                );
foreach ($regions as $region) {
    if (!Jojo::selectRow("SELECT * FROM {cart_region} where regioncode = ?", $region[0])) {
        Jojo::insertQuery("INSERT INTO {cart_region} SET regioncode=?, name=?", $region);
    }
}

