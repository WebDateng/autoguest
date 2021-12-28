<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AutoGuest</title>
  </head>
  <body>
    <div class="container pt-5">
        <div class="row text-center">
            <div class="col">
                <h1>Custom Nama Tamu Anda</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <form method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Tamu Undangan</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <label for="link" class="form-label mt-2">Link Undangan</label>
                        <input type="text" name="link" class="form-control" id="link">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Buat Link</button>
                </form>
            </div>
        </div>

        <?php if( isset($_POST["submit"])) : ?>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-5">
                    <p>_Om Swastyastu_,<br>
                    <p>*<?= $_POST["nama"]?>*</p>
                    Tanpa mengurangi rasa hormat, karena keterbatasan jarak dan waktu, kami mengundang untuk hadir diacara pernikahan kami. Undangan dapat dilihat dengan mengklik link dibawah ini. :
                    <br><br>
                    <p><?= $_POST["link"]?>?nama=<?= $_POST["nama"]?></p>
                    Kami sekeluarga mengucapkan terimakasih. <br>
                    _Om Santih, Santih, Santih Om_</p>
                </div>
            </div>
        <?php endif ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>