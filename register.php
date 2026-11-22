
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    echo "<h2>Registration Successful!</h2>";

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";
    echo "Date of Birth: " . htmlspecialchars($dob) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Address: " . htmlspecialchars($address) . "<br>";

    if (isset($_POST["hobbies"])) {
        echo "Hobbies: " . htmlspecialchars(implode(", ", $_POST["hobbies"]));
    }

} else {
    echo "Please submit the registration form.";
}
?>
