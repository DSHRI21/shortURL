<!DOCTYPE html>
<html>
<head>
  <title>URL Shortner</title>
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">URL Shortner</h3>
        <div class="d-flex justify-content-center links">
          Enter URL to create short URL
        </div>
      </div>
      <div class="card-body">
        <?php echo form_open('user/short_url');?>
          <div class="input-group form-group">
            <?php echo form_input(['name'=>'url','class'=>'form-control','placeholder'=>'Enter/Paste URL']);?>
          </div>
          <div class="form-group">
            <?php echo form_error('url');?>
            <?php echo form_submit(['name'=>'submit','class'=>'btn float-right login_btn','value'=>'Get URL']);?>
          </div>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
            <?php if(isset($sUrl)){?>
          Your Shorten URL is <br>
          <a href="<?php echo $oUrl;?>" target="_blank"><?php echo 'http://'.$sUrl;?></a>
      <?php }if(isset($error)){?>
        <p class="text-danger"><?php echo $error;?> </p>
      <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>