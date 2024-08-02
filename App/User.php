<?php
require __DIR__ . "./App.php";

class User extends App
{

  /**
   * Retrieves user data from the 'users' table based on the provided user ID.
   *
   * @param int $id The unique identifier of the user to retrieve.
   *
   * @return array|bool Returns an associative array containing the user's data if found.
   * If no user is found, it returns false.
   */
  function getUser($id)
  {
    return $this->getById('users', $id);
  }
}
