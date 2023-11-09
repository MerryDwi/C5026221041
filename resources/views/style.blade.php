<html>
  <head>
    <title>Belajar CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="mystyle.css">
    <style>
        body {
          background-color: aquamarine;
          color: rgb(54, 0, 0);
          padding: 25px 50px 75px 100px;
        }
        p {
          text-align: center;
        }
        div {
          text-align: center;
        }
        .ratakanan {
          text-align: right;
          text-transform: uppercase;
          font-weight: bold;
        }
        .warnaharga {
          color: red;
        }
      </style>
  </head>

  <body>
    <!--Inline CSS, digunakan untuk setting spesifik hanya di 1 bagian-->
    Halo <b style="
      color: blueviolet;
      text-shadow: 2px 2px #000;
      ">Apa</b> Kabar?
    <!--Inpage CSS, digunakan untuk setting yang berbeda di halaman ini saja-->
    <div class="ratakanan warnaharga">Halo Apa Kabar?</div>
    <!--External File, digunaan untuk setting global 1 situs-->
    <span class="sembunyi">Halo Apa Kabar?</span>
    <p>Halo Apa Kabar?</p>
  </body>
</html>
