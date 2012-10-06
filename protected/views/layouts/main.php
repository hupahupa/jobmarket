<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">    
        
	<!-- blueprint CSS framework -->
<!--	<link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
	<![endif]

	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/form.css" />
-->
	<title><?php echo CHtml::encode("Home page"); ?></title>
    
  
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/libs/chosen/chosen.css"/>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js" type="text/javascript"></script>  
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/libs/chosen/chosen.jquery.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.taghandler.js" type="text/javascript"></script>
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true" class="grey">
	<div class="navbar navbar-inverse navbar-fixed-top"><!-- header-->
      <div class="navbar-inner">
        <div class="container">          
          <a class="brand" href="#">TaskMarket</a>		 
          <div class="nav-collapse collapse"><!--User-->  		  
			<ul class="nav">
              <li class="">
                <a href="#">Find Tasks</a>
              </li>              
			  <li class="">
                <a href="#">Find Contructors</a>
              </li>              
            </ul>			
			<ul class="nav pull-right">
            <?php 
				if (Yii::app()->user->isGuest){
					$this->renderPartial('../layouts/_not_login_header',array());
				}else {	
					$this->renderPartial('../layouts/_logined_header',array());
				}
			?>               	            
            </ul>
          </div>
        </div>
      </div>
    </div><!-- header -->
    
	<div class="clear"></div>
	
	<div class="container"> <!--container-->
		<div class="row"><!--row-->
			<?php echo $content; ?>
    	</div>
    </div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
<?php 
	if (Yii::app()->user->isGuest){
		$this->renderPartial('../shared/_login_form',array());
		$this->renderPartial('../shared/_register_form',array());
	}else{

	}
?>      
</body>
</html>