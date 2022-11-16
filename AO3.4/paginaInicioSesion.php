<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<style>
    @font-face{
    font-family: Montserrat;
    src: url(../fonts/Montserrat-Regular.ttf);
    }
    @font-face{
        font-family: MontserratBold;
        src: url(../fonts/static/Montserrat-Bold.ttf);
    }

    body{
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1006%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M700 247.69C683.38 247.69 659.35 266.16 659.35 280C659.35 292 681.89 299.38 700 299.38C709.99 299.38 715.56 290.58 715.56 280C715.56 264.73 711.48 247.69 700 247.69' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1400 249.8C1385.27 249.8 1375.56 265.54 1375.56 280C1375.56 292.86 1385.84 304.44 1400 304.44C1422.12 304.44 1448.13 293.31 1448.13 280C1448.13 265.99 1421.55 249.8 1400 249.8' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M560 357C530.45 357 490 382.66 490 420C490 477.16 532.7 546 560 546C584.72 546 594.05 481.02 594.05 420C594.05 386.52 582.47 357 560 357' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M840 416.22C836.97 416.51 835.17 417.74 835.17 420C835.17 423.13 835.86 426.53 840 427C908.28 434.67 912.17 439.2 980 436.28C993.46 435.7 1002.58 427.7 1002.58 420C1002.58 412.69 992.88 406.57 980 406.27C911.59 404.68 909.38 409.64 840 416.22' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1260 407.72C1249.6 407.72 1237.42 408.75 1237.42 420C1237.42 464.89 1251.21 520 1260 520C1268.64 520 1272.28 467.89 1272.28 420C1272.28 411.75 1267.03 407.72 1260 407.72' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M0 86.67C10.51 42.22 0.57 20.13 33.09 0C70.57 -23.2 86.55 0 140 0C210 0 210 0 280 0C350 0 350 0 420 0C455 0 461.34 -14.9 490 0C531.34 21.5 517.77 47.26 560 72.8C622.77 110.78 631.37 97.53 700 127.04C709.51 131.13 716.28 132.86 716.28 140C716.28 148.32 709.32 150.24 700 157.95C631.18 214.85 636.94 250.57 560 269.23C496.94 284.53 479.69 262.74 420 225.87C375.07 198.12 384.93 183.28 350.75 140C314.93 94.65 318.27 48.61 280 48.61C237.2 48.61 230.79 91.37 188.61 140C160.79 172.07 172.66 184.35 140 210C83.54 254.35 10.37 241.8 10.37 280C10.37 320.55 81.23 317.7 140 367.5C163.84 387.7 166.55 390.26 175.59 420C195.81 486.51 211.11 510.44 198.51 560C193.31 580.44 169.25 560 140 560C80.61 560 77.26 568.24 21.21 560C7.26 557.95 2.1 553.3 0 539.41C-8.5 483.3 0 479.7 0 420C0 350 0 350 0 280C0 210 0 210 0 140C0 113.34 -6.04 112.22 0 86.67' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M980 86.67C949.05 86.67 912.59 26.85 912.59 0C912.59 -16.48 946.3 0 980 0C1005.63 0 1031.27 -14.62 1031.27 0C1031.27 28.72 1008.39 86.67 980 86.67' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1347.5 140C1347.5 122.19 1376.73 127.37 1400 107.19C1457.43 57.37 1450.73 44.53 1508.89 0C1520.73 -9.07 1537.17 -12.73 1540 0C1552.73 57.27 1540 70 1540 140C1540 198.8 1569.71 248.86 1540 257.6C1499.71 269.45 1467.86 222.64 1400 181.18C1371.61 163.84 1347.5 159.19 1347.5 140' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M758.77 280C796.88 238.99 790.79 220.26 840 202.59C901.41 180.53 910.3 205.67 980 200.54C1050.3 195.37 1050.26 180.31 1120 182C1190.26 183.7 1199.85 177.84 1260 207.31C1299.85 226.84 1320 244.34 1320 280C1320 313.84 1295.88 320.63 1260 346.32C1198.14 390.63 1138.09 367.77 1124.52 420C1110.33 474.61 1205.96 514.07 1204.48 560C1203.7 584.07 1162.24 560 1120 560C1050 560 1050 560 980 560C910 560 910 560 840 560C811.57 560 783.13 569.98 783.13 560C783.13 547.23 806.32 521.74 840 514.5C904.76 500.58 917.18 539.22 980 517.67C1054.92 491.97 1115.48 466.18 1115.48 420C1115.48 376.17 1052.31 351.06 980 337.65C914.57 325.52 905.04 342.81 840 368.92C802.46 383.99 804.19 391.08 774.83 420C734.19 460.02 734.87 506.8 700 506.8C668.13 506.8 641.35 461.54 641.35 420C641.35 384.76 671.45 387.27 700 353.23C730.16 317.27 726.88 314.31 758.77 280' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1333.68 420C1333.68 388.41 1368.38 360 1400 360C1428.54 360 1454 388.73 1454 420C1454 455.08 1428.83 492.69 1400 492.69C1368.67 492.69 1333.68 454.76 1333.68 420' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M393.75 560C393.75 530.08 404.08 481.25 420 481.25C436.89 481.25 459.38 532.79 459.38 560C459.38 572.17 439.69 560 420 560C406.88 560 393.75 569.46 393.75 560' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M140 140C101.03 140 96.73 54.04 96.73 0C96.73 -15.96 118.37 0 140 0C210 0 280 -28.99 280 0C280 41.01 192.66 140 140 140' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M388.39 140C333.89 70.24 271.17 39.09 280 0C286.98 -30.91 350 0 420 0C432.57 0 435.91 -7.86 445.13 0C505.91 51.87 497.87 66.61 560 119.47C580.15 136.61 609.68 126.24 609.68 140C609.68 156.25 589.58 173.38 560 179.49C494.74 192.98 483.11 193.72 420 179.2C397.3 173.98 403.89 159.84 388.39 140' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M980 3.33C978.81 3.33 977.41 1.03 977.41 0C977.41 -0.63 978.7 0 980 0C980.99 0 981.97 -0.56 981.97 0C981.97 1.1 981.09 3.33 980 3.33' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M801.98 280C801.98 261.22 816.7 243.76 840 243.76C894.94 243.76 958.46 260.67 958.46 280C958.46 299.6 894 321.62 840 321.62C815.76 321.62 801.98 300.15 801.98 280' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1246 280C1246 277.41 1253.71 274.62 1260 274.62C1262.93 274.62 1264.44 277.36 1264.44 280C1264.44 282.51 1262.84 284.91 1260 284.91C1253.62 284.91 1246 282.56 1246 280' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M0 399.26C13.7 399.26 40 410.51 40 420C40 429.11 14.49 436.47 0 436.47C-5.51 436.47 0 428.24 0 420C0 409.63 -6.3 399.26 0 399.26' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M688.65 420C688.65 413.18 693.93 407.08 700 407.08C706.85 407.08 714.48 413.07 714.48 420C714.48 427.93 706.75 436.8 700 436.8C693.83 436.8 688.65 428.04 688.65 420' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1395.09 420C1395.09 417.66 1397.66 415.56 1400 415.56C1402.11 415.56 1404 417.69 1404 420C1404 422.6 1402.14 425.38 1400 425.38C1397.68 425.38 1395.09 422.57 1395.09 420' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M127.27 560C127.27 548.18 135.12 527.69 140 527.69C144.62 527.69 146.27 546.43 146.27 560C146.27 562.59 143.13 560 140 560C133.63 560 127.27 564.33 127.27 560' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3cpath d='M1056.36 560C1056.36 548.81 1093.07 518.82 1120 518.82C1136.96 518.82 1144.14 546.33 1144.14 560C1144.14 566.92 1132.07 560 1120 560C1088.18 560 1056.36 569.4 1056.36 560' stroke='rgba(51%2c 121%2c 194%2c 0.58)' stroke-width='2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1006'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        font-family: Montserrat;
    }
    .container{
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 13%;
        flex-direction: row;
        width: 50%;
        background-color: white;
    }


    .formulario{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10%;
    }

    .formulario p{
        font-size: 24px;
        margin-bottom: 5%;
    }

    .formulario input{
        margin-top: 1.5%;
        margin-bottom: 5%;
        width: 30em;
        height: 4em;
        border: 1px solid white;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.103);
        padding-left: 5%;
    }

    .formulario textarea{
        padding-top: 3%;
        padding-left: 5%;
        margin-bottom: 5%;
        margin-top: 1.5%;
        width: 30em;
        border: 1px solid white;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.103);
    }

    .submit-button{
        width: 100% !important;
        color: black;
    }

    .iframe-container{
        width: 50% !important;
    }

    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%; display: flex; justify-content: center;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;display: flex; justify-content: center; align-items: center;}
</style>
<body>
    <div class="col-12 col-s-12">
            <div class="container">
                <div class="col-6 col-s-6 form-container">
                    <form class="formulario" method="post" action="./AO3.4/validacionPHP.php">
                        <p>Inicio de Sesión</p>
                        <input type="text" name="usuario" placeholder="&#xf007;  Usuario" style="font-family:Arial, FontAwesome" />
                        <input type="password" name="contraseña" placeholder="&#xf023;  Contraseña" style="font-family:Arial, FontAwesome" />
                        <input type="submit" name="login" value="Iniciar Sesión" class="submit-button">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>