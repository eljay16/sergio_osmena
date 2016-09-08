<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\AdminInfoModel;
class AdminModel extends Authenticatable
{
    //
    protected $table = 'tbl_users';
    protected $primaryKey = 'users_id';
	public function getAuthPassword() {
	    return $this->users_password;
	}
	/**
	 * Overrides the method to ignore the remember token.
	 */
	 public function setAttribute($key, $value)
	 {
	   $isRememberTokenAttribute = $key == $this->getRememberTokenName();
	   if (!$isRememberTokenAttribute)
	   {
	     parent::setAttribute($key, $value);
	   }
	 }
  	
}
