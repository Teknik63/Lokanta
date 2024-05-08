<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlk Belge</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php //$deneme = "Adana Kebap"; 
?>

<body>
    <div class="container">
        <!-- 1.Satır -->
        <div class="row mt-4">
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img1" class="img img-fluid rounded" src="img/krdnzadana.png" alt="Adana Kebap">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img2" class="img img-fluid rounded" src="img/tavuk-sis.png" alt="Tavuk Şiş">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img3" class="img img-fluid rounded" src="img/kiymali-pide.png" alt="Kıymalı Pide">
                </div>

            </div>
        </div>
        <!-- 1.Satır Bitti -->
        <!-- 2. Satır Başladı -->
        <div class="row mt-4">
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img4" class="img img-fluid rounded" src="img/lahmacun.png" alt="Lahmacun">
                </div>

            </div>
            <div class="col-xl-4">
                <div class="justify-content-center d-flex">
                    <img id="img5" class="img img-fluid rounded" src="img/tavuk-sis.png" alt="Tavuk Şiş">
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
            <div class="col-xl-12  bg-info ">
                <div class="row justify-content-center d-flex " id="fis"></div>
                <div class="justify-content-center d-flex m-2"><button type="button" class="btn btn-warning" id="btn">Yazdır</button></div>
            </div>
        </div>

    </div>

    <script>
        let i = 0;
        let deger = 0;
        let img1 = document.querySelector("#img1");

        let btn = document.querySelector("#btn");
        let fis = document.querySelector("#fis");

        let img1Alt = document.getElementById("img1").alt;
        let img2Alt = document.getElementById("img2").alt;
        let img3Alt = document.getElementById("img3").alt;
        let img4Alt = document.getElementById("img4").alt;

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
                putValue();
                createBill();

            });
        }
        btn.onclick = function() {
            printDiv('fis');
        }

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
            }
            if (i == 2) {
                h1.textContent = img2Alt;
            }
            if (i == 3) {
                h1.textContent = img3Alt;
            }
            if (i == 4) {
                h1.textContent = img4Alt;
            }
            h1.textContent = h1.textContent + " x " + deger;
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
        }
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>



</html>