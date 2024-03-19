<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="styling_cv.css">
</head>
<body>

    <header>
        <h1>Hi ! my name is Nico</h1>
    </header>
    <div id="picture">
    <img src = "homer.png" id ="profileimage"/>
    </div>
    <div class="container">
        <section id="personal-info">
            <h2>Personal Information</h2>
            <?php include 'cv_data.php'; ?>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </section>

        <section id="education">
            <h2>Education</h2>
            <?php include 'cv_data.php'; ?>
            <?php foreach($education as $edu): ?>
                <p><strong><?php echo $edu['degree']; ?></strong> - <?php echo $edu['institution']; ?></p>
                <p><?php echo $edu['year']; ?></p>
            <?php endforeach; ?>
        </section>

        <section id="skills">
            <h2>Skills</h2>
            <?php include 'cv_data.php'; ?>
            <ul>
                <?php foreach($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>

</body>
</html>
