<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Ghost Page | 404 </title>
  <link rel="stylesheet" href="<?= base_url("assets/custom_error/") ?>style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box">
  <div class="box__ghost">
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    
    <div class="box__ghost-container">
      <div class="box__ghost-eyes">
        <div class="box__eye-left"></div>
        <div class="box__eye-right"></div>
      </div>
      <div class="box__ghost-bottom">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="box__ghost-shadow"></div>
  </div>
  
  <div class="box__description">
    <div class="box__description-container">
      <div class="box__description-title">Whoops!</div>
      <div class="box__description-text">It seems like we couldn't find the page you were looking for</div>
    </div>
    
    <a href="<?= base_url() ?>" target="_blank" class="box__button">Go back</a>
    
  </div>
  
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="<?= base_url("assets/custom_error/") ?>script.js"></script>

</body>
</html>
