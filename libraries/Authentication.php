<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication
{
	/**
	 * The logged in user object
	 */
	protected $user;
	
	/**
	 *
	 */
	protected $roles;

	public function __construct()
	{
	
	}

	/**
	 * All calls with no response should get pushed through
	 * to the CodeIgniter super-global. This solution is 
	 * cleaner than having a separate variable for it.
	 */
	public function __get($variable)
	{
		return get_instance()->$variable;
	}
	
	
}

/* End of file Authentication.php */
/* Location: ./application/libraries/Authentication.php */