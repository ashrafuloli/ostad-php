<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">
                            Add User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="display.php">
                            Display Users
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-xl-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (($handle = fopen("users.csv", "r")) !== false) {
                            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                                echo "<tr class='align-middle'>";
                                echo "<td>" . $data[0] . "</td>";
                                echo "<td>" . $data[1] . "</td>";
                                echo "<td><img src='uploads/" . $data[2] . "' width='60'></td>";
                                echo "</tr>";
                            }
                            fclose($handle);
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>