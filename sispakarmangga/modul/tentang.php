<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
   <title>Tentang - Inception</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='aset/tentang/style.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="aset/login/css/style.css">
  
  
</head>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<body>

  <div class="text-center">
            <img src="assets/img/logotim.jpg" style="max-height: 150px">
            <h4 class="pt-3">TENTANG KAMI</h4>
          </div>
          <div class="text-justify">
            
            <p class="pt-3 ">Kami berasal dari universitas majalengka fakultas teknik prodi informatika.

            Tujuan utama kami dalam membuat (sistem/aplikasi/web) ini yaitu untuk memenuhi tugas besar mata kuliah pengantar intelegensi buatan

            Selain itu kami juga berharap dapat membantu mahasiswa pertanian, petani mangga dan semangka, maupun mereka yang menanam tumbuhan mangga dan semangka dalam masalah penyakit pada tanaman tersebut</p>
            
        </div>
        <div class="text-left">
            <!-- Profile Team -->
            <h4 class="pt-3">PROFILE TEAM</h4>
          </div>
          <div class="text-justify">
          <div class="row">
                <div class="column">
                    <div class="card">
                    <img src="assets/img/tim/hilsa.jpg" alt="Hilsa" style="width:100%">
                    <div class="container">
                        <h2>Hilsa Dzalfa Mutia</h2>
                        <p class="title">Kominfo</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                    <img src="assets/img/tim/rifky.jpg" alt="Rikfy" style="width:100%">
                    <div class="container">
                        <h2>Muhammad Rifki</h2>
                        <p class="title text-justify">Programmer sesat</p>
                        <p>Jika kalian mau beli pulsa, voucher, top up e-wallet dll ada di saya jangan ke orang lain HAHAHHA</p>
                        <p>@Rif.ky.co.id</p>
                        <p><a href="" class="button">Contact</a></p>
                    </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <img src="assets/img/tim/tirana.jpg" alt="Tirana" style="width:100%">
                    <div class="container">
                        <h2>Tirana Praticia Hidayat</h2>
                        <p class="title">Conten Creator</p>
                        <p>Kehidupan yang besar dimulai dari mimpi yang besar</p>
                        <p>@tiranaprti</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                    </div>
                </div>
                </div>
           
        </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="<?= base_url('auth')?>" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
</body>

</html>
