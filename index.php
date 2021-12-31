<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP dan MySQL - Pendaftaran Siswa Baru</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Urbanist:wght@200;400;600&display=swap");

        html,
        body {
            height: auto;
        }

        section {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            min-height: min(80vh, 600px);
            background-color: #808080;
            padding: 1rem;
            border-radius: 10px;
            overflow: hidden;
            font-family: "Urbanist", sans-serif;
        }

        section:before {
            position: absolute;
            mix-blend-mode: overlay;
            filter: brightness(70%);
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("https://www.its.ac.id/news/wp-content/uploads/sites/2/2020/12/WhatsApp-Image-2020-12-26-at-9.19.55-AM.jpeg");
            background-size: cover;
            background-position: center;
        }

        h1,
        h2 {
            margin-top: 2rem;
            color: white;
        }

        h1 {
            position: relative;
            font-weight: 900;
            font-size: clamp(2.5rem, 5vw, 4rem);
        }

        h1 div {
            color: #ddd6fe;
        }

        h2 {
            font-size: clamp(1.3rem, 2vw, 3rem);
        }

        p {
            margin-top: 1rem;
            font-size: clamp(0.5rem, 2vw, 2rem);
            color: white;
        }

        .menu-button {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 3rem;
            gap: 1.5rem;
        }

        .menu-button button {
            border: none;
            padding: 1rem 3rem;
            font-size: clamp(1.1rem, 1.3vw, 3rem);
            border-radius: 10px;
            cursor: pointer;
        }

        .menu-button button:first-of-type {
            background-color: white;
            color: #02055A;
            transition: all 300ms ease-in;
        }

        .menu-button button:first-of-type:hover {
            background-color: #02055A;
            color: white;
        }

        .menu-button button:nth-of-type(2) {
            background-color: #2563eb;
            color: white;
        }

        .menu-button button:nth-of-type(2):hover {
            background-color: white;
            color: #2563eb;
        }

        @media (min-width: 600px) {
            .menu-button {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
    <section>
        <p>Rahadian Adjie Mahesa - 05111940000221 - PWEB D 2021</p>
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <div class="menu-button">
            <a href="form-daftar.php"><button>Daftar Siswa</button></a>
            <a href="list-siswa.php"><button>List Pendaftar</button></a>
        </div>

        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pendaftaran Siswa Berhasil!";
                } else {
                    echo "Pendaftaran Gagal!";
                }
                ?>
            </p>
        <?php endif; ?>
    </section>

</body>

</html>