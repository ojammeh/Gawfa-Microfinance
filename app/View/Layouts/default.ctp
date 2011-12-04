<?php

$cakeDescription = __d('title', 'GAWFA');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('cake.generic', 'flick/jquery-ui-1.8.16.custom'));

                echo $this->Html->script(array('jquery-1.7.1.min', 'jquery-ui-1.8.16.custom.min'));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
        
        <div id="sitename">
        <?php //echo "<h1>Gawfa Microfinance System</h1>"; ?>
        </div>
                    

            <div id="logo">
            <?php echo $this->Html->image('gawfa-rhok.png', array('alt' => 'Gawfa',
                'url' => array( 'action' => 'index')))?>
            </div>
                    <h1></h1>
		</div>
        
        <div id="logout">
                     <?php
                        $userlogin=$userlogin['id'];
                        //debug($user['id']);
                        if ($userlogin=="")
                        echo"";
                        //echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), array('class' => 'button'));
                       else

                        echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('class' => 'button'));
                        ?>
                   
                    </div>
        
        
        

                <div id="menu">
                    <?php 
                    if ($userlogin=="")
                        echo"";
                    
                    else
                        {
                    echo $this->Html->link('Customers', array('controller' => 'customers', 'action' => 'index'), array('class' => 'button')); ?>
                    <?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'), array('class' => 'button')); ?>
                    <?php echo $this->Html->link('Branches', array('controller' => 'branches', 'action' => 'index'), array('class' => 'button')); ?>
                    <?php echo $this->Html->link('Stations', array('controller' => 'branches', 'action' => 'index_station'), array('class' => 'button')); ?>
                    <?php 
                    echo $this->Html->link('Loan Groups', array('controller' => 'groups', 'action' => 'index'), array('class' => 'button'));
                        }
                    ?>

                    </div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">

		</div>
	</div>

</body>
</html>