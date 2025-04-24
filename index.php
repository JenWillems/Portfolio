<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Dashboard</title>
    <link rel="stylesheet" href="/style.css">

    <style>
        html,
        body {
            overflow: hidden;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            background-color: rgba(255, 255, 255, 0.93);
            padding: 20px;
            text-align: center;
            max-width: 440px;
            width: 90%;
            height: 500px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            margin-top: -60px;
        }

        .title {
            font-size: 30px;
            color: #000000;
            margin-top: 0px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            overflow-y: auto;
            flex-grow: 1;
            padding-right: 10px;
        }

        .link-box {
            background-color: rgba(118, 120, 121, 0.8);
            padding: 10px 15px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #ffffff;
            font-size: 20px;
            width: 300px;
            text-align: center;
        }

        @media (min-width: 320px) and (max-width: 650px) {

            .dashboard-container {
                width: 280px;
                height: 400px;
                padding: 15px;
                margin-top: -100px;
            }

            .title {
                font-size: 20px;
                margin: 10px;
            }

            .link-box {
                width: 200px;
                font-size: 16px;
            }
        }

        @media (min-width: 650px) and (max-width: 991px) {
            .dashboard-container {
                max-width: 400px;
            }

            .link-box {
                max-width: 300px;
                font-size: 17px;
            }
        }
    </style>

</head>

<body>
    <div class="dashboard-container">

        <h1 class="title">My Websites Dashboard</h1>
        <div class="container">
            <?php
            $base_url = "https://i558110.hera.fontysict.net/";
            $dirs = array_filter(glob('*'), 'is_dir');

            foreach ($dirs as $dir) {
                echo "<a class='link-box' href='{$base_url}{$dir}/'>{$dir}</a>";
            }
            ?>
        </div>
    </div>
</body>

</html>