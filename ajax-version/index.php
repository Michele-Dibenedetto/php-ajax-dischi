<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="root">

        <header>
            <img class="logo" src="..\img\logo-small.svg" alt="logo_spotify">
            <select v-model="filterAuthor" @change="getPoster" name="" id="filter_author">
                <option value="all">all</option>
                <option v-for="el in author" :value="el">{{el}}</option>
            </select>
        </header>

        <main>
            <div v-for="(element, index) in posters" class="card">
                <img class="poster" :src="element.poster" alt="">
                <h2 class="title">{{element.title}}</h2>
                <p>{{element.author}}</p>
                <p>{{element.year}}</p>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>