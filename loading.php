<!-- loading.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>
    <link rel="stylesheet" href="assets/css/loading.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    <!-- Loading page -->
    <div class="loading-page">
        <div class="counter">
            <p>Loading</p>
            <h1>0%</h1>
            <hr />
        </div>
    </div>

    <script>
        $(document).ready(function () {
            var counter = 0;
            var c = 0;
            var i = setInterval(function () {
                $(".loading-page .counter h1").html(c + "%");
                $(".loading-page .counter hr").css("width", c + "%");

                counter++;
                c++;

                if (counter == 101) {
                    clearInterval(i);
                    // Redirect to the index page when loading is complete
                    window.location.href = 'index.php';
                }
            }, 50);
        });
    </script>

</body>

</html>