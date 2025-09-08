<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung Pepak</title>
    <link rel="icon" type="image/x-icon" href="asset/img/logo.png">

    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <header id="home">
        <nav class="navbar navbar-expand-lg bg-headerku fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="asset/img/logo.png" width="60"> Warung Pepak
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                        <a class="nav-link" href="#service">Services</a>
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                        <a class="nav-link" href="#kontak">Kontak & Lokasi</a>
                        <a class="nav-link" href="#testimoni">Rating</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container text-center">
            <h1 style="font-weight: bold;">Selamat Datang di Warung Pepak</h1>
            <p>Pepak artinya lengkap - Semua ada di sini!</p>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="asset/img/warung.jpg" class="d-block w-100" alt="depanwarung">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Buka paling pagi, Tutup paling malam!</h5>
                            <p>Selain lengkap, Warung Pepak juga buka sampai malam</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/bumbu.png" class="d-block w-100" alt="bumbu">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Semua ada!!!</h5>
                            <p>Mau masak mie? bikin nasi goreng? semua bumbu ada disini</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/sembako.png" class="d-block w-100" alt="sembako">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Malem-malem butuh camilan?</h5>
                            <p>Tidak perlu resah kalau kalian lapar di malam hari, Warung Pepak ada buat kalian</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="service" style="scroll-margin-top: 300px;">
        <div class="container text-center">
            <h2 class="service-text">Kelebihan di Warung Pepak</h2>
            <div class="row justify-content-center" style="padding-top: 50px;">

                <div class="col-md-3">
                    <div class="card p-3">
                        <img src="asset/img/delivery.svg" class="mx-auto d-block" alt="delivery" style="width: 60px;">
                        <div class="card-body">
                            <h5 class="card-title" style="padding-top: 10px;">Cepat Sampai</h5>
                            <p class="card-text">Pesanan Anda dikirim dengan cepat dan tepat waktu.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-3">
                        <img src="asset/img/tag.svg" class="mx-auto d-block" alt="harga" style="width: 60px;">
                        <div class="card-body">
                            <h5 class="card-title" style="padding-top: 10px;">Harga Terjangkau</h5>
                            <p class="card-text">Produk berkualitas dengan harga ramah di kantong.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-3">
                        <img src="asset/img/clock.svg" class="mx-auto d-block" alt="jam" style="width: 60px;">
                        <div class="card-body">
                            <h5 class="card-title" style="padding-top: 10px;">Buka Sampai Malam</h5>
                            <p class="card-text">Buka dari jam 6 pagi sampai 10 malam.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tentang" style="scroll-margin-top: 0px;">
        <div class="container">
            <h2 class="service-text text-center" style="padding-top: 90px;">Tentang Kami</h2>
            <div class="row align-items-center justify-content-center" style="padding-top: 40px;">
                <div class="col-xl d-flex justify-content-center">
                    <img src="asset/img/mbako1.png" width="100%">
                </div>
                <div class="col-xl">
                    <p class="tentang-text">
                        Sejak tahun 2020, <strong>Warung Pepak</strong> hadir sebagai solusi belanja kebutuhan
                        sehari-hari Anda.
                        Mulai dari beras, minyak, gula, sabun, hingga berbagai perlengkapan rumah tangga, semua tersedia
                        lengkap di sini.

                        Nama <strong>Pepak</strong> sendiri diambil dari bahasa Jawa yang berarti lengkap, sesuai dengan
                        komitmen kami
                        untuk selalu menyediakan berbagai kebutuhan Anda tanpa harus repot belanja jauh-jauh.

                        Dengan pelayanan ramah, harga terjangkau, dan produk berkualitas, Warung Pepak siap menjadi
                        sahabat belanja keluarga Anda setiap hari.
                    </p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center" style="padding-top: 40px;">
                <div class="col-xl d-flex justify-content-center">
                    <h2 style="max-width: 40%;">Grafik Keramaian di Warung Pepak</h2>
                </div>
                <div class="col-xl">
                    <canvas id="myChart" style="
                min-width: 300px;
                max-width: 600px;
                width: 100%;
                display: block;
                margin: 0 auto;
              "></canvas>
                </div>
            </div>
        </div>
    </section>


    <section id="kontak">
        <div class="container text-center">

            <h2 class="service-text text-center">Kontak & Lokasi</h2>
            <p class="mb-1" style="padding-top: 20px;">📍 Jl. Singosari Selatan II No. 24, Nusukan, Banjarsari,
                Surakarta</p>
            <p class="mb-1">📞 WhatsApp: <a href="https://wa.me/6281575791089"
                    class="text-decoration-none">0815-7579-1089</a></p>
            <div class="d-flex justify-content-center">
                <div class="card shadow-lg border-0 rounded-3 w-100" style="max-width: 1000px;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Lokasi Warung Pepak</h5>
                        <p class="card-text">Kunjungi Warung Pepak di lokasi berikut. Klik peta untuk membuka di Google
                            Maps.</p>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31642.248553128913!2d110.78062197910155!3d-7.544296299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a175c03308425%3A0x54732ef4107e8842!2sWarung%20Pepak!5e0!3m2!1sid!2sid!4v1756870966747!5m2!1sid!2sid"
                        width="100%" height="300" style="border:0; border-radius:0 0 .5rem .5rem;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>


    <section id="testimoni">
        <div class="container" style="padding-top: 50px;">
            <h3 class="testimoni-text text-center">Apa Kata Pelanggan Kami</h3>
            <?php include("koneksi.php"); ?>
            <div class="row justify-content-center">
                <?php
                $sql = "SELECT nama, komentar FROM testimoni ORDER BY id DESC LIMIT 3";
                $hasil = $conn->query(query: $sql);
                if ($hasil->num_rows > 0) {
                    while ($testimoni = $hasil->fetch_assoc()) {
                        ?>
                        <div class="col-md-4 mb-3">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= htmlspecialchars(string: $testimoni["nama"]) ?>
                                    </h5>
                                    <p class="card-text">"
                                        <?= htmlspecialchars(string: $testimoni["komentar"]) ?>"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='text-center'>Belum ada testimoni.</p>";
                }
                ?>
            </div>

        </div>
    </section>


    <section id="komentar" class="py-5">
        <div class="container">
            <h3 class="text-center mb-4">Tinggalkan Komentar</h3>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 rounded-3">
                        <div class="card-body">
                            <form action="simpan_komentar.php" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan nama Anda" required>
                                </div>

                                <div class="mb-3">
                                    <label for="komentar" class="form-label">Komentar</label>
                                    <textarea class="form-control" id="komentar" name="komentar" rows="4"
                                        placeholder="Tulis komentar Anda..." required></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">Warung Pepak - Lengkap Semua Ada</p>
        </div>
    </footer>

    <script>

        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                navLinks.forEach((l) => l.classList.remove("active"));
                link.classList.add("active");
            });
        });

        window.addEventListener("scroll", () => {
            let fromTop = window.scrollY + 80;
            navLinks.forEach((link) => {
                const section = document.querySelector(link.getAttribute("href"));
                if (
                    section.offsetTop - 500 <= fromTop &&
                    section.offsetTop + section.offsetHeight > fromTop
                ) {
                    navLinks.forEach((l) => l.classList.remove("active"));
                    link.classList.add("active");
                }
            });
        });

        fetch("get_pengunjung.php")
            .then(response => response.json())
            .then(data => {
                const xValues = data.xValues;
                const yValues = data.yValues; 

                new Chart(document.getElementById("myChart"),
                    {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                label: "Jumlah",
                                data: yValues,
                                fill: false,
                                borderColor: "blue",
                                tension: 0
                            }]
                        },
                        options: {
                            plugins: {
                                legend: { display: false }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: "Jam ke-"
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: "Jumlah pengunjung"
                                    },
                                    min: 0,
                                    max: 20
                                }
                            }
                        }
                    });
            });


    </script>

</body>

</html>