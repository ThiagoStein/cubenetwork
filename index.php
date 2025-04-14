<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cube Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<?php
include('model/db_connect.php');
?>
<body>
    <header>
        <form id='form'>
            <input type="text" name="first_name" id="first_name" placeholder="First name" required>
            <input type="text" name="last_name" id="last_name" placeholder="Last name" required>
            <input type="number" name="participation" id="participation" placeholder="Participation" required>
            <button type="button" id="button">SEND</button>
        </form>
    </header>

    <main>
        <div class="title">
            <h1>DATA</h1>
            <p>Lorem Ipsum dolor Sit amet consectetur adipisang elit.</p>
        </div>

        <section class="content">
            <table id="table">
                <thead>
                    <tr>
                        <th class="td-id"> </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th class="td-participation">Participation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('model/consulta.php'); ?>
                </tbody>
            </table>
            <div class="dashbord">
                <canvas id="dashbord" style="width: 300px; height: 300px;"></canvas>
                <!-- <img src="https://picsum.photos/300/300" alt=""> -->
            </div>

        </section>
    </main>
    
</body>
</html>