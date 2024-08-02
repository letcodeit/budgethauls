<?php
session_start();
ob_start();

class App
{
  private $database;
  public function __construct()
  {
    include("Database.php");
    $this->database = $con;
  }

  /**
   * Destructor method to close the database connection when the object is destroyed.
   *
   * @return void
   */
  function __destruct()
  {
    $this->database->close();
    // ob_end_flush();
  }

  /**
   * Authenticates a user by verifying their email and password.
   *
   * @param string $email The user's email address.
   * @param string $password The user's password.
   *
   * @return int|bool Returns the user type if the login is successful, otherwise false.
   */
  function login($email, $password)
  {
    $query = $this->database->query("SELECT * FROM users where email = '" . $this->validate($email) . "' and pass = '" . md5($this->validate($password)) . "'  LIMIT 1");
    if ($query->num_rows > 0) {
      $data = $query->fetch_assoc();
      $_SESSION['user'] = $data;
      return intval($data['type']);
    } else {
      return false;
    }
  }

  /**
   * Logs out the current user by destroying the session and redirecting to the login page.
   *
   * @return void
   */
  function logout()
  {
    session_destroy();
    unset($_SESSION['user']);
    $this->redirect('../auth/auth-login');
  }

  /**
   * Redirects the user to a specified URL.
   *
   * This function uses PHP's header function to redirect the user to a new location.
   * It sets the "location" header to the provided URL and then terminates the script using the exit function.
   *
   * @param string $url The URL to redirect the user to.
   *
   * @return void
   */
  function redirect($url)
  {
    header("location: $url");
    exit();
  }

  /**
   * Validates and sanitizes input data to prevent SQL injection and XSS attacks.
   *
   * This function trims the input data, removes leading and trailing whitespace,
   * and then escapes special characters in the data to prevent SQL injection attacks.
   * It also uses the real_escape_string method of the database connection object to further sanitize the data.
   *
   * @param string $data The input data to be validated and sanitized.
   *
   * @return string The sanitized and validated input data.
   */
  function validate($data)
  {
    $data = trim($data);
    $data = $this->database->real_escape_string($data);
    return $data;
  }

  /**
   * Inserts data into a specified table in the database.
   *
   * @param string $table The name of the table to insert data into.
   * @param array $data An associative array containing the column names as keys and their corresponding values as values.
   *
   * @return bool|mysqli_result Returns the result of the database query. If the query is successful, it returns true.
   * If the query fails, it returns a mysqli_result object representing the result of the query.
   */
  function insert($table, $data)
  {
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    return $this->database->query($query);
  }


  /**
   * Updates data in a specified table in the database.
   *
   * @param string $table The name of the table to update data in.
   * @param array $data An associative array containing the column names as keys and their corresponding values as values.
   * @param string $where The condition for selecting the rows to update.
   *
   * @return bool|mysqli_result Returns the result of the database query. If the query is successful, it returns true.
   * If the query fails, it returns a mysqli_result object representing the result of the query.
   */
  function update($table, $data, $where)
  {
    $set = [];
    foreach ($data as $key => $value) {
      $value = $this->validate($value);
      $set[] = "$key = '$value'";
    }
    $set = implode(", ", $set);
    $query = "UPDATE $table SET $set WHERE $where";
    return $this->database->query($query);
  }

  /**
   * Deletes data from a specified table in the database based on a given condition.
   *
   * @param string $table The name of the table from which to delete data.
   * @param string $where The condition for selecting the rows to delete.
   *
   * @return bool|mysqli_result Returns the result of the database query. If the query is successful, it returns true.
   * If the query fails, it returns a mysqli_result object representing the result of the query.
   */
  function delete($table, $where)
  {
    $query = "DELETE FROM $table WHERE $where";
    return $this->database->query($query);
  }

  /**
   * Retrieves data from a specified table in the database based on a given condition.
   *
   * @param string $table The name of the table from which to retrieve data.
   * @param string|null $where The condition for selecting the rows to retrieve. If null, all rows will be returned.
   *
   * @return bool|mysqli_result Returns the result of the database query. If the query is successful and rows are found,
   * it returns a mysqli_result object containing the retrieved data. If no rows are found, it returns false.
   */
  function get($table, $where = null)
  {
    $whereQuery = ($where) ? "WHERE $where" : "";
    $query = "SELECT * FROM $table $whereQuery";
    $result = $this->database->query($query);
    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  }

  /**
   * Retrieves a single row from a specified table based on the given ID.
   *
   * @param string $table The name of the table from which to retrieve data.
   * @param int $id The unique identifier of the row to retrieve.
   *
   * @return array|bool Returns an associative array containing the retrieved row data if found.
   * If no row is found, it returns false.
   */
  function getById($table, $id)
  {
    $query = "SELECT * FROM $table WHERE id = $id LIMIT 1";
    $result = $this->database->query($query);
    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return false;
    }
  }

  /**
   * Registers a new user by inserting the provided data into the 'users' table.
   *
   * @param array $data An associative array containing the user's information.
   * The keys of the array should correspond to the column names in the 'users' table.
   * The values of the array should be the user's data.
   *
   * @return bool|mysqli_result Returns the result of the database query. If the query is successful, it returns true.
   * If the query fails, it returns a mysqli_result object representing the result of the query.
   */
  function signUp($data)
  {
    $user = [];
    foreach ($data as $key => $value) {
      $user[$key] = $this->validate($value);
    }
    return $this->insert('users', $user);
  }

  /**
   * Checks if a user is currently logged in by verifying the existence of the 'user' session variable.
   * If the 'user' session variable is not set, it redirects the user to the login page.
   *
   * @return void
   */
  function checkLogin()
  {
    if (!$_SESSION['user']) {
      $this->redirect('../auth/auth-login');
    }
  }

  /**
   * Retrieves the parameter key for the current page from the GET request.
   * If the 'page' parameter is present, it returns 'page'.
   * Otherwise, it returns the first parameter key found in the GET request.
   *
   * @return string The parameter key for the current page.
   */
  function getPageParameterKey()
  {
    foreach ($_GET as $key => $value) {
      if ($key != 'page') {
        return $key;
      } else {
        return 'page';
      }
    }
  }

  /**
   * Retrieves the current page from the GET request.
   * If the page parameter is present in the GET request, it returns the value of the page parameter.
   * Otherwise, it returns the string 'home'.
   *
   * @return string The current page.
   */
  function getPage()
  {
    $page = isset($_GET[$this->getPageParameterKey()]) ? $_GET[$this->getPageParameterKey()] : 'home';
    return $page;
  }


  /**
   * Displays the appropriate view page based on the current page parameter.
   *
   * This function retrieves the current page parameter using the getPage() method,
   * constructs the file path for the view page, and then includes the view file.
   * If the view file does not exist, it includes the default home page view.
   *
   * @return void
   */
  function viewPage()
  {
    $page = $this->getPage();
    $viewFile = "../dashboard/" . $this->getPageParameterKey() . "/$page.php";
    if (file_exists($viewFile)) {
      include($viewFile);
    } else {
      include("../dashboard/page/home.php");
    }
  }

  /**
   * Retrieves the user data associated with the current logged-in user.
   *
   * This function retrieves the user ID from the session, converts it to an integer,
   * and then uses the parent class's getById method to fetch the user data from the 'users' table.
   *
   * @return array|bool Returns an associative array containing the user's data if found.
   * If no user is found, it returns false.
   */
  function getUserId()
  {
    $userId = intval($_SESSION['user']['id']);
    $userData = $this->getById('users', $userId);
    return $userData;
  }
}
