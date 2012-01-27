<?php $sites = array(
    'subdominio1'=>array(
        'user_id'=>101,
        'title'=>'Test subdominio 1'
    ),
    'subdominio2'=>array(
        'user_id'=>102,
        'title'=>'Test subdominio 2'
    ),
    'subdominio3'=>array(
        'user_id'=>103,
        'title'=>'Test subdominio 3'
    ),
    'etc'=>array(
        'user_id'=>104,
        'title'=>'Test subdominio etc 3'
    ),
    
    ) ?>
<?php if(isset($sites[$this->request->params['subdomain']])==TRUE){ ?>
    <h1>Home load:<?php echo date('Y-m-d h:i:s')?></h1> 
    <?php $s = $sites[$this->request->params['subdomain']]; ?>
    <h2> Web Site subDomain: <?php echo $this->request->params['subdomain'] ?> </h2>
    <h3> User: <?php echo $s['user_id']; ?> </h3>
    <h3> Title site: <?php echo $s['title']; ?> </h3>
<?php }else{ ?>
    <img src="http://www.webintenta.com/uploads/Files/Images/v8/404_1.gif" />
<?php } ?>