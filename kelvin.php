<!-- input- with a name and a submit btn when clicked, echo : Hi Nelly, Good morning. The time is 8 : 20 am. Today is friday, so have a great weekend. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Form</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name from the form
    $name = $_POST["name"];

    // Get the current time
    $currentTime = date("h:i a");

    // Get the current day
    $currentDay = date("l");

    // Display the greeting message
    echo "Hi $name, Good morning. The time is $currentTime. Today is $currentDay, so have a great weekend.";
}
?>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <input type="submit" value="Submit">
</form>




<!-- Make a harsh tag generator depending on what the user puts. e.g input - i love coding, output - #ILoveCoding -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input from the form
    $userInput = $_POST["user_input"];

    // Convert the input to uppercase and replace spaces with #
    $hashtag = '#' . str_replace(' ', '', strtoupper($userInput));

    // Display the generated hashtag
    echo "Generated Hashtag: $hashtag";
}
?>

<form method="post">
    <label for="user_input">Enter your text:</label>
    <input type="text" id="user_input" name="user_input" required>
    <br>
    <input type="submit" value="Generate Hashtag">
</form>






<!-- create a registration form that checks if the user key in data on every input. [Display Error if the input is empty]. e.g - a button with placeholder - Fill in your first name last name, age, gender, and a submit btn -->
<?php
// Define variables to store user input and error messages
$firstName = $lastName = $age = $gender = "";
$firstNameErr = $lastNameErr = $ageErr = $genderErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and store user input
    $firstName = test_input($_POST["first_name"]);
    $lastName = test_input($_POST["last_name"]);
    $age = test_input($_POST["age"]);
    $gender = test_input($_POST["gender"]);

    // Check if each input is empty
    if (empty($firstName)) {
        $firstNameErr = "First name is required";
    }

    if (empty($lastName)) {
        $lastNameErr = "Last name is required";
    }

    if (empty($age)) {
        $ageErr = "Age is required";
    }

    if (empty($gender)) {
        $genderErr = "Gender is required";
    }

    // If all inputs are filled, process the data (in this example, we'll just display it)
    if (empty($firstNameErr) && empty($lastNameErr) && empty($ageErr) && empty($genderErr)) {
        echo "Registration successful!<br>";
        echo "First Name: $firstName<br>";
        echo "Last Name: $lastName<br>";
        echo "Age: $age<br>";
        echo "Gender: $gender<br>";
    }
}

// Function to sanitize and validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" placeholder="Fill in your first name" >
    <span class="error"><?php echo $firstNameErr; ?></span>
    <br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" placeholder="Fill in your last name" >
    <span class="error"><?php echo $lastNameErr; ?></span>
    <br>

    <label for="age">Age:</label>
    <input type="text" id="age" name="age" placeholder="Fill in your age" >
    <span class="error"><?php echo $ageErr; ?></span>
    <br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>Select your gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <span class="error"><?php echo $genderErr; ?></span>
    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html>