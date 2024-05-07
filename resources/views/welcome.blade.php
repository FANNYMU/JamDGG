<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Home</title>
</head>
<style>
    *,html,
    body{
        margin: 0;
        padding: 0;
    }
        .headers{
        display: flex;
        justify-content: space-around;
    }
    .headers a{
        text-decoration: none;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: RGBA(241,241,241, 0.550); /* Mengatur warna dengan opacity */
        font-size: 23px

    }

.img {
    position: relative; /* Tambahkan properti position: relative; */
}

.img img {
    position: absolute;
    width: 100%;
    height: 100vh;
    z-index: -1; /* Tambahkan properti z-index untuk mengatur gambar berada di belakang */
}

.headers a:hover {
    color: RGBA(241,241,241, 0.850);
    filter: contrast(5px)
}

#digital-clock {
    justify-content: center;
    color: RGBA(241,241,241, 0.850);
    display: flex;
    font-size: 50px;
    padding-top: 20px;
}


</style>

<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Format waktu ke dalam format 2 digit
        hours = ('0' + hours).slice(-2);
        minutes = ('0' + minutes).slice(-2);
        seconds = ('0' + seconds).slice(-2);

        var timeString = hours + ':' + minutes + ':' + seconds;

        // Memperbarui tampilan jam pada elemen HTML dengan ID 'digital-clock'
        document.getElementById('digital-clock').textContent = timeString;
    }

    // Memperbarui jam setiap detik
    setInterval(updateClock, 1000);

    // Panggil fungsi pertama kali agar jam ditampilkan segera
    updateClock();
</script>

<body>
    <nav>
    </nav>
    <div class="img">
        <img src="https://images.unsplash.com/photo-1497250681960-ef046c08a56e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile Pic" height="200" width="200">

        <div class="headers">
            <a href="/">Home</a>
            <a href="/About">About</a>

            <a href="/contact">Contact</a>
        </div>
        <div class="jam">
            <p id="digital-clock"></p>
        </div>
    </div>
</body>
</html>
