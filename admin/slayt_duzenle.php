<?php require_once ("kutuphane/baglanti.php"); ?>
<?php

if(empty($_SESSION['kullanici']['id']==true)) {
    yonlendir("giris.php");
}


$baslik="Anasayfa";

$sorgu="SELECT * FROM slayt";
$sonuc=mysqli_query($baglanti,$sorgu);

while($satir=mysqli_fetch_array($sonuc)) {
    $slaytlar[]=$satir;
}



?>
<?php require_once ("kutuphane/ust.php"); ?>

<div class ="row">
    <div class="col-md-12">
<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Eğitim Bilgileri</h3>
                </div>
                <div class="panel-body">
                
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sıra</th>
                                    <th>Resim Adı</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                                <?php foreach($slaytlar as $slayt) { ?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $slayt['adi']; ?></td>                     
                                </tr>                                
                                <?php }  ?>
                            
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>


    </div>
</div>        

<?php require_once ("kutuphane/alt.php"); ?>