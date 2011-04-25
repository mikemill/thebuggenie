<?php

	/**
	 * actions for the ldap_authentication module
	 */
	class auth_ldapActions extends TBGAction
	{

		/**
		 * Test the LDAP connection
		 *
		 * @param TBGRequest $request
		 */
		public function runTestConnection(TBGRequest $request)
		{
			TBGContext::setMessage('module_error', TBGContext::getI18n()->__('Failed to connect to server'));
			TBGContext::setMessage('module_error_details', 'This functionality is currently unimplemented');
			$this->forward(TBGContext::getRouting()->generate('configure_module', array('config_module' => 'auth_ldap')));
		}
		
		/**
		 * Prune users from users table who aren't in LDAP
		 *
		 * @param TBGRequest $request
		 */
		public function runPruneUsers(TBGRequest $request)
		{
			$users = TBGUser::getAll();
			$deleted = 0;
			$exists = true;
			
			foreach ($users as $user)
			{
				// lots of ldap code here
				if (!$exists)
				{
					$user->delete();
					$user->save();
					$deleted++;
				}
			}
			
			TBGContext::setMessage('module_error', TBGContext::getI18n()->__('Pruning failed'));
			TBGContext::setMessage('module_error_details', 'This functionality is currently unimplemented');
			$this->forward(TBGContext::getRouting()->generate('configure_module', array('config_module' => 'auth_ldap')));
		}

	}
