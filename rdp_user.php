/**
* No Native function available in wordpress to check if a User exists by his/her ID
* Function uses native wordpress function to do that
* @param int User ID
* @return boolean Whether a user exists or not.
**/ 
public function doesUserExists($user_id = '')
{
    if ($user_id instanceof WP_User) {
        $user_id = $user_id->ID;
    }
    return (bool) get_user_by('id', $user_id);
}
