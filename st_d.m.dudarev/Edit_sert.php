<?php
    include("config.php");
    mysql_set_charset('utf8');
    
    $id = intval($_GET['id']);
    $query = mysql_query("SELECT * FROM sertificate where id_sert='$id'");
    $res = mysql_fetch_array($query);    
?>

<html>
<head>
<?php 
    include("head.php");    
?>
</head>
<body>
<div id="services" class="education text-center" >
	<div class="container">
		<div class="edu-info">
			<h3>СЕРТИФИКАТЫ</h3>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
		<div class="edu-grids" >
            <form action="edit_sert_action.php" method="post">
            <input type="hidden" value="<?php echo $id;?>" name="id">
			<div class="col-md-4 edu-grid" style="margin-left: 33%;">
                
				
				<div class="edu-border">
					<div class="edu-grid-master">
                        <label>Дата получения(окончания)<br><input name="date" type="date" width="10" height="10" ></label><br>
                  <label>Статус<br>
                      <select name="status"> 
                        <option>Окончено</option>
                        <option>Идет обучение</option>
                    </select>
                </label>
						<h3>
                            <textarea name="title" autofocus style="resize: none; background:transparent;"><?php echo $res['title']?></textarea>
                        </h3>
						<h4><input type="textbox" name="zavedenie" placeholder="Наименование учреждения" size="30" style="background:transparent;" value="<?php echo $res['zavedenie']?>"></h4>
					</div>
					<div class="edu-grid-info">
						<h5>Краткое описание<textarea name="info" style="resize: none; background:transparent;" cols="30" rows="3"><?php echo $res['info']?></textarea></h5>
					</div>
                    <input type="submit" name="submit" class="btn btn-info" value="Изменить информацию о уч. заведении">
				</div>
                
            </div>
            </form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</body>
</html>