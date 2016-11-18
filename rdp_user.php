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

/**
* Function returns the current page id in wordpress
* @return int/boolean page id if it is valid else false
**/
public function getCurrentPageId()
{
    $current_page_url = home_url().$_SERVER["REQUEST_URI"];
    $current_page_id = url_to_postid($current_page_url);
    if ($current_page_id > 0) {
        return $current_page_id;
    }
    return false;
}
