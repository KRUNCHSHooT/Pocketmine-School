<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pocketmine Plugin School</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/25239cedf1.js" crossorigin="anonymous"></script>

  <link href="../css/custom.css" rel="stylesheet" type="text/css">
  <link href="../../css/ultra.css" rel="stylesheet" type="text/css">
  <link href="../../css/tomorrow-night-eighties.css" rel="stylesheet" type="text/css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148602502-2"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148602502-2');
  </script>
</head>

<body>

<nav>
  <a class="mobile-nav"><i class="fas fa-bars"></i></a>
  <div class="navtitle">Pocketmine School</div>
  <a href="../../index.html">Home</a>
</nav>

<?php $currentPage = 'Config'; ?>
<?php include('sidebar.php'); ?>

<div id="Config" class="sidemain">
    <h3>Config</h3>
    <hr>
    <p>Config files can make your plugin one of the most customisablest in the world! But to use a config file, we need multiple things:</p>
    <ul>
        <ol>1- A default config file, saved on a resource folder</ol>
        <ol>2- Saving the config so the user can edit it</ol>
        <ol>3- Taking data from the config</ol>
        <ol>4- Setting data to the config</ol>
    </ul>

    <p>1) Creating a default config:</p>
    <p>Go to your root plugin folder and create a folder called "resources".</p>
    <p>Inside of it, create a file "config.yml" and put the default config you want to display to the user.</p>
    <p>Yaml works like array:</p>
    <pre>
        <code>
        key: value
        </code>
    </pre>
    <p>2) Saving the config when the plugins enables after you succefully made your config, go to your main file and add to your onEnable function:</p>
    <pre>
        <code>
    $this->saveDefaultConfig(); // Saves config.yml if not created.
    $this->reloadConfig(); // Fix bugs sometimes by getting configs values
        </code>
    </pre>
    <p>3) Taking data from the config</p>
    <p>If you wanna get the data from your config, add this line:</p>
    <pre>
        <code>
    $keyFromConfig = $this->getConfig()->get("key"); // This will return the element "key" from the config.
        </code>
    </pre>
    <p>Its also a good practive to reload your config before to be sure to get the last user choice.</p>
    <pre>
        <code>
    $this->reloadConfig();
        </code>
    </pre>
    <p>4) Setting data to the config.</p>
    <p>Setting data to the config helps you to save data for games, or to correct wrong values inputed by the user.</p>
    <p>To set data to the config, add this line to your code when you want to set the data to the config.</p>
    <pre>
        <code>
    $this->getConfig()->set("key", "example"); // This will set the element "key" of the config.to example.
        </code>
    </pre>
    <p>But remember that you need to save the config to apply changes in the file.</p>
    <pre>
        <code>
    $this->getConfig()->save(); // Saves the config
        </code>
    </pre>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/custom.js"></script>
<script src="../../js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>