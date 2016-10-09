<?php
namespace Goettertz\BcVoting\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Louis Göttertz <info2015@goettertz.de>, goettertz.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * User - Feuser
 * Revision 86
 *  
 * FE-User Mapping: 
 * 
 * 
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * uid 	unique user id
	 * @var string $uid
	 */
	protected $uid = NULL;

	/**
	 * username 	Benutzername
	 * @var string $username
	 */
	protected $username = NULL;

	/**
	 * @var string The telephone number of the contact
	 **/
	protected $telephoneNumber;

	/**
	 * @var string The telephone number of the contact
	 **/
	protected $telefaxNumber;
	
	/**
	 * @var string The url of the homepage of the contact
	 **/
	protected $url;
	
	/**
	 * @var string The email address of the homepage of the contact
	 **/
	protected $emailAddress;
	
	/**
	 * @var string
	 */
	protected $typeOfAccount;
	
	/**
	 * @var string
	 */
	protected $publicKey;
	
	/**
	 * Gets uid
	 * @return integer uid
	 */
	public function getUid() {
		return $this->uid;
	}
	
	/**
	 * Sets uid
	 * @param integer $uid
	 * @return void;
	 */
	public function setUid($uid) {
		$this->username = $uid;
	}
	
	/**
	 * Gets username
	 * @return string username
	 */
 	public function getUsername() {
 		return $this->username;	
 	}
 	
 	/**
 	 * Sets username
 	 * @param string $username
 	 * @return void;
 	 */
 	public function setUsername($username) {
 		$this->username = $username;
 	}

 	/**
 	 * Gets email
 	 * @return string emailAddress
 	 */
 	public function getEmailAddress() {
 		return $this->emailAddress;
 	}
 	
 	/**
 	 * Sets emailAddress
 	 * @param string $emailAddress
 	 * @return void;
 	 */
 	public function setEmailAddress($emailAddress) {
 		$this->emailAddress = $emailAddress;
 	}
 	
 	/**
 	 * Gets the type of account
 	 * @return string type of account
 	 */
 	public function getTypeOfAccount() {
 		return $this->typeOfAccount;
 	}
 	
 	/**
 	 * Sets the type of account
 	 * @param $typeOfAccount
 	 */
 	public function setTypeOfAccount($typeOfAccount) {
 		$this->typeOfAccount = $typeOfAccount;
 	}
 	
 	/**
 	 * gets the public pgp key of the user
 	 * @return string
 	 */
 	public function getPublicKey() {
 		return $this->publicKey;
 	}
 	
 	/**
 	 * sets the public pgp key of the user
 	 * @param string
 	 * @return void
 	 */
 	public function setPublicKey($publicKey) {
 		$this->publicKey = $publicKey;
 	}
}

?>