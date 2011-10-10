<?php

	Class extension_safari_ds_select_fix extends Extension{

		public function about() {
			return array(
				'name'         => 'Safari DS Select Fix',
				'version'      => '1.0',
				'release-date' => '2011-10-11',
				'author'       => array(
					'name'    => 'Henry Singleton',
					'website' => 'http://www.henrysingleton.com',
					'email'   => 'henry@henrysingleton.com'
				),
				'description'	=> 'Work around for Safari bug, where multiple select box items are hidden on page load.'
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendAssets() {
			Administration::instance()->Page->addScriptToHead(URL . '/extensions/safari_ds_select_fix/assets/safari_ds_select_fix.js');
		}

	}
