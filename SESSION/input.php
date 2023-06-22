<?php
// Start the session
session_start();

// Function to check if the user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Function to authenticate the user
function authenticate($username, $password)
{
    // Perform your authentication logic here
    // This can include database queries to check credentials

    // For this example, let's assume the username is 'admin' and the password is 'password'
    if ($username === 'admin' && $password === 'password') {
        return true;
    }

    return false;
}

// Function to log out the user
function logout()
{
    // Clear session data
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate user
    if (authenticate($username, $password)) {
        // Set session data
        $_SESSION['user_id'] = 1; // Example user ID, you can use any identifier you prefer

        // Redirect to a protected page or dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, show an error message
        $errorMessage = 'Invalid username or password';
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    logout();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($errorMessage)): ?>
        <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <?php if (isLoggedIn()): ?>
        <p>Welcome, <?php echo $_SESSION['user_id']; ?></p>
        <p><a href="?logout">Logout</a></p>
    <?php else: ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>
