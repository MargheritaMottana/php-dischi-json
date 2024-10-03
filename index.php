<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <!-- css -->
     <link rel="stylesheet" href="./style.css">
</head>

<body>

    <header class="container py-3 text-center">
        <h1 class="text-white">
            PHP Dischi JSON
        </h1>
    </header>

    <main id="app" class="container pb-5">

        <div class="row">
            <div class="col-4 mb-4" v-for="disc in discs">

                <div class="card rounded-4 p-2 border-0">
                    <img :src="disc.poster" class="card-img-top rounded-top-4 p-2" :alt="disc.title">

                    <div class="card-body">
                        <h3 class="card-title">
                            {{ disc.title }}
                        </h3>
                        <h5 class="card-text">
                            {{ disc.genre }}
                        </h5>
                        <p class="card-text">
                            {{ disc.year }}
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </main>

    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- js -->
    <script src="./js/script.js"></script>

</body>

</html>