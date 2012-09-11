<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


Autoloader::add_classes(array(
	'GoCardless'           			=> __DIR__.'/classes/GoCardless.php',
	'GoCardless_Bill'  				=> __DIR__.'/classes/GoCardless/Bill.php',
	'GoCardless_Client'  			=> __DIR__.'/classes/GoCardless/Client.php',
	'GoCardless_Exceptions'  		=> __DIR__.'/classes/GoCardless/Exceptions.php',
	'GoCardless_Merchant'  			=> __DIR__.'/classes/GoCardless/Merchant.php',
	'GoCardless_PreAuthorization'  	=> __DIR__.'/classes/GoCardless/PreAuthorization.php',
	'GoCardless_Request'  			=> __DIR__.'/classes/GoCardless/Request.php',
	'GoCardless_Resource'  			=> __DIR__.'/classes/GoCardless/Resource.php',
	'GoCardless_Subscription'  		=> __DIR__.'/classes/GoCardless/Subscription.php',
	'GoCardless_User'  				=> __DIR__.'/classes/GoCardless/User.php',
	'GoCardless_Utils'  			=> __DIR__.'/classes/GoCardless/Utils.php',

));


/* End of file bootstrap.php */