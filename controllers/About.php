<?php
class GrcPool_Controller_About extends GrcPool_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function indexAction() {
		Server::go('/about/fees');
	}
	
	public function feesAction() {
		$settingsDao = new GrcPool_Settings_DAO();
		$this->view->payoutFee = $settingsDao->getValueWithName(Constants::SETTINGS_PAYOUT_FEE);
		$this->view->donationAddress = $settingsDao->getValueWithName(Constants::SETTINGS_GRC_DONATION_ADDRESS);
	}
	
	public function hotWalletAction() {
		$walletDao = new GrcPool_Wallet_Basis_DAO();
		$settingsDao = new GrcPool_Settings_DAO();
		$this->view->hotWallet = $settingsDao->getValueWithName(Constants::SETTINGS_HOT_WALLET_ADDRESS);
	}
	
	public function calculationsAction() {
		$settingsDao = new GrcPool_Settings_DAO();
		$this->view->seed = $settingsDao->getValueWithName(Constants::SETTINGS_SEED);
	}

}