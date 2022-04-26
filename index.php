<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php 
    include __DIR__ . '/server/data.php';
    // include __DIR__ .  '/server/controller.php'
?>    
    <div id="app">
        <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="spotify logo">
        </header>
        <main>
            <div class="disc-element" v-for='disc in discs'>
                <img :src="disc.poster" :alt="disc.title">
                <h4>
                    {{disc.title}}  
                </h4>
                <p>
                    {{disc.author}}  
                </p>
                <p>
                    {{disc.year}}  
                </p>
                <p>
                    {{disc.genre}}  
                </p>
            </div>
        </main>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>