<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link
        href="https://www.dafontfree.net/embed/YmVudG9uc2Fucy1ib29rLXJlZ3VsYXImZGF0YS80Ni9iLzYyNjYxL0JlbnRvblNhbnMgQm9vay5vdGY"
        rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/salon-page.css" />
</head>

<body>

    <?php include_once('inc/nav.php') ?>

    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
    </div>

    <!-- Tab content -->
    <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>

</body>
<?php include_once('inc/footer.php') ?>
<script src="js/nav.js"></script>
<script>

    document.getElementById("defaultOpen").click();

    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";

    }
</script>

</html>