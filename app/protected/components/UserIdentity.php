<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	public function authenticate()
	{
		$username = $this->username;
        $password = $this->password;

        $criteria = new CDbCriteria;
		$criteria->compare("username",$username, true, "AND");
		$criteria->compare("password",$password, true);

        $user = Members::model()->find($criteria);

		if(!isset($user->username))
			$this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
		else {
			$this->_id = $user->id;
			$this->username = $user->username;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	
	public function getId() {
		return $this->_id;
	}
}