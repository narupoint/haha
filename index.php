<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Api Telegram</title>

    <style>
    body {
      margin: 0;
      padding: 0;
    }
    .hero {
      background: #42a5f5;
      height: 130px;
      border-bottom-right-radius: 90px;
    }
        .form-input {
            display: block;
            padding: 9px 60px;
        }
        .form{
            width :380px;
         }
        .form button{
            margin-top: 10px;
        }
        .card {
          width: 320px;
          height: 420px;
          background: white;
          margin-top: -100px;
          margin-left: 20px;
          box-shadow: 0 0 14px #0000003D;
          border-radius: 17px;
        }
        
        
        .box {
          width: 260px;
          box-shadow: 0 0 7px #0000003D;
          height: 60px;
          border-radius: 25px;
          margin-top: 20px;
        }
        .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #42a5f5;
  transition: linear 500ms;
  visibility: hidden;
  opacity: 0;
  margin-top: 600px;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
  margin-top: 0;
}
.popup {
  margin: 180px auto;
  padding: 10px;
  background: #fff;
  border-radius: 25px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
  margin-left: 0px;
  margin-top: 40px;
}
.popup h3 {
  margin-top:5px;
  margin-left:5px;
  margin-bottom:0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 10px;
  right: 20px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .konten {
  max-height: 100%;
  overflow: auto;
}

@media screen and (max-width: 1200px){
.popup{
    width: 95%;
    height: 99%;
  }
}
.button {
  text-decoration: none;
  color: white;
  background: #42a5f5;
  padding: 10px 93px;
  border-radius: 17px;
  margin-top: 26px;
  border: none;
}
    </style>
</head>
<body>
<div class="hero">
  
</div>
<div class="card">
  <center>
    <br>
    <h2>pilih metode</h2>
<a href="#qris">
      <div class="box">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/QRIS_logo.svg" style="width: 150px;margin-top: 16px" alt="" />
      </div>
</a>
     <div class="box">
       <img src="https://i.ibb.co/g341fmm/logo-dana-dompet-digital-PNG.png" style="width: 120px;margin-top: -30px" alt="" />
    </div>
     <div class="box">
       <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg" style="width: 100px;margin-top: 15px" alt="" />
     </div>
      <div class="box">
        <img src="https://i.ibb.co/rdj4Lvd/Logo-Shopee-Pay-Lalu-Ahmad.png" style="width: 120px;margin-top: -10px" alt="" />
      </div>
  </center>
</div>

<!-- konfirm -->
<div id="konfirm" class="overlay">
	<div class="popup">
		<h3>qris</h3>
		<a class="close" href="#">&times;</a>
		
		<div class="konten">
		  <br>
		 <center>
<div class="form">
    <form action="telegram.php" method="post">
        <span class="form-input">pengirim</span>
        <input class="form-input" type="text" name="pesan">
        <span class="form-input">url foto:</span>
        <textarea class="form-input" cols="22" rows="3" name="pesan"></textarea>
        <button type="submit" class="button">Kirim</button>
    </form>
</div>

		 </center>
		</div>

	</div>
</div>

<!-- QRIS -->
<div id="qris" class="overlay">
	<div class="popup">
		<h3>qris</h3>
		<a class="close" href="#">&times;</a>
		
		<div class="konten">
		  <br>
		 <center>
		    <img src="https://i.ibb.co/TmqBKf9/IMG-20210929-132009.jpg" style="width:320px" alt="" />
		   <a href="#konfirm">
		      <button  class="button" href="#">konfirmasi</button>
		   </a>
		    <br>
		    <input value="0851599" id="pilih"  style="opacity: 0"/>

		 </center>
		</div>

	</div>
</div>
   <script>
     function copy_text() {
document.getElementById("pilih").select();
document.execCommand("copy");
alert("Text berhasil dicopy");
}
   </script>
</body>
</html>