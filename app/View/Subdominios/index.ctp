<?php if(is_array($user)==TRUE){ ?>
<h1>Controller: Subdominios, Action: index</h1>
    <h1>Home load:<?php echo date('Y-m-d h:i:s')?></h1>
    <h2> Web Site subDominio o carpteta virtual por cliente es: <?php echo $this->request->params['subdomain'] ?> </h2>
    <h3> Usuario: <?php echo $user['user_id']; ?> </h3>
    <h3> Titulo del sitio: <?php echo $user['title']; ?> </h3>
<?php }else{ ?>
    <h1>Subdominio o carpeta virtual: <u>"<?php echo $this->request->params['subdomain'] ?>"</u> Controller: "Subdominios", Action: "index"</h1>
    <img src="http://www.webintenta.com/uploads/Files/Images/v8/404_1.gif" />
<?php } ?>