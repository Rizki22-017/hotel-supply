<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Label with White Border and Text Box</title>
    <style>
        /* Container untuk gambar */
        .image-container {
            position: relative;
            display: inline-block;
        }

        /* Gambar utama */
        .image-container img {
            max-width: 100%;
            height: auto;
        }

        /* Gaya label dengan frame putih */
        .label {
            position: absolute;
            color: #8c5e35;
            /* Warna teks */
            font-size: 14px;
            text-align: center;
            pointer-events: none;
        }

        /* Kotak luar dengan border putih */
        .label-box {
            border: 2px solid white;
            /* Frame putih */
            padding: 50px;
            padding-bottom: 30px;
            /* Ruang tambahan untuk kotak teks */
            position: relative;
            border-radius: 5px;
        }

        /* Kotak teks di bawah label */
        .label-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.9);
            /* Latar belakang teks */
            padding: 5px;
            font-size: 12px;
            border-top: 2px solid white;
            /* Garis pemisah atas */
        }

        /* Posisi untuk setiap label */
        .label.pillow {
            top: 55%;
            left: 35%;
        }

        .label.duvet-cover {
            top: 60%;
            left: 45%;
        }

        .label.blanket {
            top: 70%;
            right: 10%;
        }

        .label.natural-linen-blanket {
            bottom: 15%;
            left: 10%;
        }
    </style>
</head>

<body>

    <div class="image-container">
        <img src="assets/img/tes1.jpg" alt="Bedroom Setup">

        <!-- Label untuk setiap elemen -->
        <div class="label pillow">
            <div class="label-box">
                <div class="label-text">Pillow</div>
            </div>
        </div>

        <div class="label duvet-cover">
            <div class="label-box">
                <div class="label-text">Duvet Cover</div>
            </div>
        </div>

        <div class="label blanket">
            <div class="label-box">
                <div class="label-text">Blanket</div>
            </div>
        </div>

        <div class="label natural-linen-blanket">
            <div class="label-box">
                <div class="label-text">Natural Linen Blanket</div>
            </div>
        </div>
    </div>

</body>

</html>
