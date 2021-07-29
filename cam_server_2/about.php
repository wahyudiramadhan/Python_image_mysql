<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: navy;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: blue;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body class="">
    <nav class="bg-secondary p-3 align-text-center shadow text-light" style="font-weight: 700;">
        <img width="50" height="44" src="https://www.freepnglogos.com/uploads/camera-logo-png/camera-outline-icon-23.png" alt="" srcset="">
        WEB CAM SERVER

    </nav>
    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="about.php">About</a>
        <a href="logout.php">Log out</a>
    </div>

    <div class="content">
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis provident possimus sunt voluptatibus obcaecati sequi optio suscipit minima odit quos temporibus laborum, voluptate voluptates, modi velit nihil consequuntur corporis dicta.</p>
       <br>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam deserunt suscipit voluptatibus non obcaecati, id, eos unde, vitae assumenda corporis quo distinctio labore! Voluptate sequi deserunt ipsa fugit quod vel!</p>
    </div>

</body>

</html>