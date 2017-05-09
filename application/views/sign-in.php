<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>利通電梯</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?=base_url("lib/bootstrap/css/bootstrap.css")?>">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url("stylesheets/theme.css")?>">
    <link rel="stylesheet" href="<?=base_url("lib/font-awesome/css/font-awesome.css")?>">

    <script src="<?=base_url("lib/jquery-1.7.2.min.js")?>" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url("../assets/ico/favicon.ico")?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url("../assets/ico/apple-touch-icon-144-precomposed.png")?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url("../assets/ico/apple-touch-icon-114-precomposed.png")?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url("../assets/ico/apple-touch-icon-72-precomposed.png")?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url("../assets/ico/apple-touch-icon-57-precomposed.png")?>">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?=base_url("index.php")?>"><span class="first">利通</span> <span class="second">電梯</span></a>
        </div>
    </div>
    
    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">登入</p>
            <div class="block-body">
                <form method="post" action="<?=base_url("/home/logining")?>">
                    <label>帳號</label>
                    <input type="text" name="account" class="span12">
                    <label>密碼</label>
                    <input type="password" name="password" class="span12">
					<p class="submit"><input type="submit" name="commit" value="登入"></p>
                    
                    <label class="remember-me">記住我<input type="checkbox"></label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style=""><a href="" target="blank">Product by Chapman</a></p>
        <p><a href="reset-password.html">忘記密碼?</a></p>
    </div>
	<?php  if (isset($errorMessage)){?>
	<div class="alert alert-error">
		<?=$errorMessage?>
	</div>
	<?php }?>
</div>
  


    <script src="<?=base_url("lib/bootstrap/js/bootstrap.js")?>"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


