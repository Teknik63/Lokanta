<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlk Belge</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
$adana = 85;
$tavukSis = 60;
$kiymaliPide = 70;
$lahmacun = 30;
$pisirim = 3;
$ic = 2;
?>

<body>
    <div class="container">
        <!-- 1.Satır -->
        <div class="row mt-4">
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img1" class="img img-fluid rounded" src="img/krdnzadana.png" alt="Adana Kebap" title="Adana Kebap">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img2" class="img img-fluid rounded" src="img/tavuk-sis.png" alt="Tavuk Şiş" title="Tavuk Şiş">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img3" class="img img-fluid rounded" src="img/kiymali-pide.png" alt="Kıymalı Pide" title="Kıymalı Pide">
                </div>

            </div>
        </div>
        <!-- 1.Satır Bitti -->
        <!-- 2. Satır Başladı -->
        <div class="row mt-4">
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img4" class="img img-fluid rounded" src="img/lahmacun.png" alt="Lahmacun" title="Lahmacun">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img5" class="img img-fluid rounded" src="img/lahmacun.png" alt="Lahmacun Pişirim" title="Lahmacun Pişirim">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img6" class="img img-fluid rounded" src="img/kiymali-pide.png" alt="Kıymalı Pide">
                </div>

            </div>
        </div>
        <!-- 2. Satır Bitti -->
        <div class="row mt-4">
            <div class="col-xl-12 " id="yazdir">
                <div class=" justify-content-center d-flex ">
                    <h1>Şanlıurfa Açık Ceza İnfaz Kurumu</h1>
                </div>
                <div class=" justify-content-center d-flex ">
                    <h1>İşyurtları Restaurant Birimi</h1>
                </div>
                <div class="row justify-content-center d-flex " id="fis"></div>
                <div class="justify-content-around d-flex m-2 align-items-center">
                    <h1 id="araToplam">Ara Toplam</h1>
                    <button type="button" class="btn btn-warning" id="btnYazdir">Yazdır</button>
                    <!-- <button type="button" class="btn btn-success" id="btnReset">Sıfırla</button> -->

                </div>
            </div>
        </div>

    </div>

    <script>
        let i = 0;
        let deger = 0;
        let toplam = 0;
        let fiyat = 0;
        let araToplam = 0;
        let btnYazdir = document.querySelector("#btnYazdir");
        // let btnReset = document.querySelector("#btnReset");
        let fis = document.querySelector("#fis");

        let img1Alt = document.getElementById("img1").alt;
        let img2Alt = document.getElementById("img2").alt;
        let img3Alt = document.getElementById("img3").alt;
        let img4Alt = document.getElementById("img4").alt;
        let img5Alt = document.getElementById("img5").alt;
        let araToplamText = document.getElementById("araToplam");

        var img = document.getElementsByTagName("img");


        for (let j = 0; j < img.length; j++) {
            img[j].addEventListener("click", function() {
                if (img[j].id == 'img1') {
                    i = 1;

                }
                if (img[j].id == 'img2') {
                    i = 2;

                }
                if (img[j].id == 'img3') {
                    i = 3;

                }
                if (img[j].id == 'img4') {
                    i = 4;
                }
                if (img[j].id == 'img5') {
                    i = 5;
                }
                putValue();
                createBill();

            });
        }
        btnYazdir.onclick = function() {
            btnYazdir.classList = 'd-none';
            printDiv('yazdir');

        }
        // btnReset.onclick = function() {
        //     location.reload(true);
        // }

        // img1.onclick = function() {
        //     i = 1;
        //     putValue();
        //     createBill();
        // }
        // img2.onclick = function() {
        //     i = 2;
        //     putValue();
        //     createBill();
        // }
        // img3.onclick = function() {
        //     i = 3;
        //     putValue();
        //     createBill();
        // }
        // img4.onclick = function() {
        //     i = 4;
        //     putValue();
        //     createBill();
        // }

        function createBill() {
            let divrow = document.createElement("div");
            divrow.classList = "row bg-warning";
            let div = document.createElement("div");
            div.classList = "col-12 d-flex justify-content-center";
            let h1 = document.createElement("h1");
            h1.classList = "mt-2 mb-2";
            if (i == 1) {
                h1.textContent = img1Alt;
                fiyat = <?php echo $adana ?>;
            }
            if (i == 2) {
                h1.textContent = img2Alt;
                fiyat = <?php echo $tavukSis ?>;
            }
            if (i == 3) {
                h1.textContent = img3Alt;
                fiyat = <?php echo $kiymaliPide ?>;
            }
            if (i == 4) {
                h1.textContent = img4Alt;
                fiyat = <?php echo $lahmacun ?>;
            }
            if (i == 5) {
                h1.textContent = img5Alt;
                fiyat = <?php echo $pisirim ?>;
            }
            toplam = deger * fiyat;
            araToplam = araToplam + toplam;
            h1.textContent = h1.textContent + " x " + deger + ' Adet ' + ' Tutar ' + toplam;
            araToplamText.innerHTML = "Ödemeniz Gereken Tutar " + araToplam + " TL'dir.";
            div.appendChild(h1);
            divrow.appendChild(div);
            fis.appendChild(divrow);
        }

        function putValue() {
            deger = prompt('Sayı Giriniz', 1);

        }

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(true);
        }
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>



</html>