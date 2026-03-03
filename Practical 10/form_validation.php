<?php
$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = test_input($_POST["email"]);
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<h3 class="ms-3 mt-3">Luffy Shaikh</h3>


<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="card p-4" style="width: 400px;">
        <h4 class="text-center mb-3">Validation</h4>

        <form method="post">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text"
                       name="name"
                       class="form-control <?php echo (!empty($nameErr)) ? 'is-invalid' : ''; ?>"
                       value="<?php echo $name; ?>">
                <div class="invalid-feedback">
                    <?php echo $nameErr; ?>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>"
                       value="<?php echo $email; ?>">
                <div class="invalid-feedback">
                    <?php echo $emailErr; ?>
                </div>
            </div>

            <button class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
