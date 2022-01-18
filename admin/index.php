<?php require_once ("kutuphane/baglanti.php"); ?>
<?php

if(empty($_SESSION['kullanici']['id']==true)) {
    yonlendir("giris.php");
}


$baslik="Admin Anasayfa";

$sorgu="SELECT * FROM egitim";
$sonuc=mysqli_query($baglanti,$sorgu);

while($satir=mysqli_fetch_array($sonuc)) {
    $egitimler[]=$satir;
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
                                    <th>Adı</th>
                                    <th>Eğitim Tipi</th>
                                    <th>Başlama Yılı</th>
                                    <th>Bitiş yılı Yılı</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($egitimler as $egitim) { ?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $egitim['adi']; ?></td>
                                    <td><?php echo $egitim['tipi']; ?></td>
                                    <td><?php echo $egitim['baslama']; ?></td>
                                    
                                    <?php if(empty($egitim['bitis'])==false) { ?>
                                    <td><?php echo $egitim['bitis']; ?></td>
                                    <?php } else { ?>
                                    <td> Devam Ediyor</td>
                                    <?php } ?>
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