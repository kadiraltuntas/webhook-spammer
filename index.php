<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EndStar WebHook Spammer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="p-3 mb-1 bg-dark text-white">

<div class="position-absolute top-50 start-50 translate-middle">

<center>
<?php  if ($_GET == NULL){ ?>
   
<?php }else{ ?>
    <div class="alert alert-success" role="alert">
    <?php echo $_GET["mesaj"]; ?>
    </div>

<?php } ?>

</center>






<form action="webhook-spammer.php" method="post">
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">WebHook Url</label>
    <input type="text" class="form-control" name="webhook_url" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">WebHook Urlsini Doğru Yazmazsanız Çalışmaz.</div>
  </div>
  <div class="mb-1">
  
    <label for="exampleInputPassword1" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" name="username">
    <input class="form-check-input" type="checkbox" value="1" name="random">
  <label class="form-label" for="flexCheckDefault">
    Random Kullanıcı Adı
  </label>
  </div>

  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Adet</label>
    <input type="text" class="form-control" name="adet">
  </div>


  <div class="mb-1">
  <label for="exampleFormControlTextarea1" class="form-label">Mesaj</label>
  <textarea class="form-control" name="mesaj" rows="3"></textarea>
</div>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" name="embed">
  <label class="form-label" for="flexCheckDefault">
    Embed Kullanmak İstermisiniz
  </label>
</div>
<div class="mb-1">
  <label for="exampleFormControlTextarea1" class="form-label">Başlık</label>
  <input type="text" class="form-control" name="baslik">
</div>
<div class="mb-1">
  <label for="exampleFormControlTextarea1" class="form-label">Yazı</label>
  <input type="text" class="form-control" name="yazi">
</div>
<div class="mb-1">
  <label for="exampleFormControlTextarea1" class="form-label">Alt Bilgi</label>
  <input type="text" class="form-control" name="foother">
</div>

<label for="exampleColorInput" class="form-label">Renk Paleti</label>
<input type="color" class="form-control form-control-color" name="renk" value="#563d7c" title="Renk Seçiniz">


<center>
  <button type="submit" class="btn btn-primary">Gönder</button>
  </center>
</form>
</div>


</body>
</html>