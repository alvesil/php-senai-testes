<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php'; ?>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg" class="d-block w-100" alt="Imagem não encontrada">
          </div>
          <div class="carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" class="d-block w-100" alt="Imagem não encontrada">
          </div>
          <div class="carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" class="d-block w-100" alt="Imagem não encontrada">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <?php include_once './rodape.php' ?>
      <?php include_once './scripts.php' ?>
</body>

</html>