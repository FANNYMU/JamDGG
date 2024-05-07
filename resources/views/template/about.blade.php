<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <script src="script.js"></script>

    <title>About</title>
    <link rel="icon" href="/images/Logo.svg" class="logo2">
</head>
<style>
    *,
html,
body {
    margin: 0;
    padding: 0;
    font-family: "Silkscreen", cursive;
    font-weight: 400;
    font-style: normal;
}

.card {
    border: 1px solid rgb(255, 255, 255);
    background-color: #f1f1f1;
    padding: 32px;
    margin: 8px;
    color: #171717;
    text-align: center;
    box-shadow: 2px 2px 2px 2px;
}

.container {
    width: 100%;
    min-height: 100vh; /* Ubah height menjadi min-height */
    background-color: blue;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wrapper {
    display: flex;
    flex-wrap: wrap; /* Mengatur agar flex item wrap ke baris baru jika tidak cukup ruang */
    width: 100%;
    justify-content: center;
}

.icons {
    margin-top: 8px;
    font-size: 24px;
    color: tomato;
}

.logo2 {
    fill: #ff0000; /* Ganti dengan warna yang Anda inginkan */
}


.title {
    font-size: 2em;
}

.description {
    margin-top: 10px;
    font-size: 0.8em;
}

.about {
    color: #f1f1f1;
    font-size: 50px;
    font-family: "Jaro", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
}

.btn {
    margin-top: 16px;
    padding: 8px;
    cursor: pointer;
    border: none;
    width: 100%;
    max-width: 200px; /* Maksimum lebar tombol */
    background-color: #f1f1f1;
}

.btn:hover {
    background-color: blue;
    color: #f1f1f1;
    -ms-transform: rotate(2deg);
    transform: rotate(2deg);
    transition: 0.5s ease-in-out;
}

/* Media Queries untuk responsif */
@media only screen and (min-width: 768px) {
    .about {
        display: none;
    }

    .card {
        width: 45%; /* Mengatur lebar card */
    }
}

</style>

<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="about">About</h1>
            <div class="card text-center">
                <h1 class="title">YOUTUBE</h1>
                <hr>
                <a href="https://www.youtube.com/channel/UCfXWgpb8bLezE6el0F-vd4g"><i
                        class="fa-brands fa-youtube icons"></i></a>
                <marquee behavior="" direction="">
                    <p class="description">Youtube Channel</p>
                </marquee>
                <a href="https://www.youtube.com/channel/UCfXWgpb8bLezE6el0F-vd4g"><button
                        class="btn">Subscribe</button></a>
            </div>
            <div class="card text-center">
                <h1 class="title">TIKTOK</h1>
                <hr>
                <a href=""><i class="fa-brands fa-tiktok icons"></i></a>
                <marquee behavior="" direction="">
                    <p class="description">Tiktok Account</p>
                </marquee>
                <a href=""><button class="btn">Follow</button></a>
            </div>
            <div class="card text-center">
                <h1 class="title">GITHUB</h1>
                <hr>
                <a href="https://github.com/FANNYMU"><i class="fa-brands fa-github icons"></i></a>
                <marquee behavior="" direction="">
                    <p class="description">Github Account</p>
                </marquee>
                <a href="https://github.com/FANNYMU"><button class="btn">Follow</button></a>
            </div>
            <div class="card text-center">
                <h1 class="title">DISCORD</h1>
                <hr>
                <a href="https://discord.com/invite/valorant"><i class="fa-brands fa-discord icons"></i></a>
                <marquee behavior="" direction="">
                    <p class="description">Discord Account</p>
                </marquee>
                <a href="https://discord.com/invite/valorant"><button class="btn">Join Grup</button></a>
            </div>
        </div>
    </div>
</body>

</html>
