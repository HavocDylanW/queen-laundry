<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
        <title>Document</title>

        <header>
            <img style='width: 70px; position: relative; bottom: 3px;' src='<?= base_url();?>assets/img/logoOrigin.png'>
            <nav>
                <ul>
                    <li><a href='<?= base_url();?>home' class='<?= uri_string() == 'home' ? 'active':'' ?>'>Home</a></li>
                    <li><a href='<?= base_url();?>about' class='<?= uri_string() == 'about' ? 'active':'' ?>'>About Us</a></li>
                    <li><a href='<?= base_url();?>contact' class='<?= uri_string() == 'contact' ? 'active':'' ?>'>Contact Us</a></li>
                </ul>
            </nav>
        </header>
    </head>
    <body>