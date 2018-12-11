<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = 'CakePHP: the rapid development php framework';

$cakeDescription = '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <?php echo $this->Html->css('mentor/bootstrap.min.css');?>
        <?php echo $this->Html->css('mentor/fullcalendar.css');?>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />   
        <?php echo $this->Html->css('summernote.css') ;?>
        <?php echo $this->Html->css('mentor/datatable/dataTables.bootstrap.min.css');?> 
        <?php echo $this->Html->css('mentor/AdminLTE.min.css');?>
        <?php echo $this->Html->css('mentor/skins/_all-skins.min.css') ;?>
        <?php echo $this->Html->css('cake-style.css') ;?>     
        
        
        <!-- jQuery UI-->
    <!-- Bootstrap 3.3.2 JS -->
        <?php echo $this->Html->script('mentor/jquery');?>
        <?php echo $this->Html->script('mentor/bootstrap/bootstrap.min');?>
        <?php echo $this->Html->script('mentor/moment.min');?>
        <?php echo $this->Html->script('mentor/fullcalendar.min');?>
        <?php echo $this->Html->script('mentor/datatable/jquery.dataTables');?>
        <?php echo $this->Html->script('mentor/datatable/dataTables.bootstrap.min');?>
        <?php echo $this->Html->script('jquery.slimscroll.min');?>
        <?php echo $this->Html->script('mentor/daterangepicker/daterangepicker');?>
           
    <!-- datepicker -->
    <?php echo $this->Html->script('mentor/datepicker/bootstrap-datepicker');?>   
    <?php echo $this->Html->script('mentor/fastclick/fastclick.min');?>
    <!-- AdminLTE App -->
    <?php echo $this->Html->script('mentor/app.min');?>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?php //echo $this->Html->script('Career3D.mentor/pages/dashboard');?>    
    <!-- AdminLTE for demo purposes -->
    <?php echo $this->Html->script('summernote');?>
    <?php echo $this->Html->script('mentor/demo');?>
    
               
    </head>
    <body class="skin-blue">  
    <div class="wrapper">      
    <?php echo $this->fetch('content');?>
    <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2018 <a href="http://"></a>.</strong> All rights reserved.
    </footer>
    
    </body>
</html>

