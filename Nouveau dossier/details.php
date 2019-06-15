                                <div>
                                    <?php $negoce = ($vente_achat['va_negoce'] == 0) ? 'negociable' : 'non négociable' ; ?>
                                    <div class="row">
                                        <div class="col-md-6" id="photos_business"  style="width: 50%; ">
                                            <img alt="" style="width: 100%; " src="<?php echo vente_achat($vente_achat['va_photo']); ?>">
                                            <?php
                                                if (!empty($photos_details)) {
                                                foreach ($photos_details as $photos_detail) { ?>
                                                <img  style="width: 100%; " src="<?= base_url() . 'uploads/business/' . $id_vente_achat . '/' . $photos_detail ?>">
                                            <?php } }?>
                                        </div>
                                        <div >
                                            <strong>Désignation : </strong><?php echo $vente_achat['va_titre']; ?><br>
                                            <strong>Prix :</strong> <?php echo $vente_achat['va_prix'] .' F CFA ( '. $negoce . ' )'; ?><br>
                                            <strong>Adresse :</strong> <?php echo $vente_achat['mem_ville'] .' '. $vente_achat['mem_departement'] .' '. $vente_achat['mem_pays']; ?><br>
                                            <strong>Tel :</strong> <?php echo $vente_achat['mem_telephone']; ?><br>
                                            <strong>Email :</strong> <?php echo $vente_achat['mem_email']; ?><br>
                                        </div>
                                    <div>
                                        <br>
                                            <strong>Détails :</strong> <?php echo $vente_achat['va_details']; ?>
                                    </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function(){
                                        if ($("#photos_business img").length > 1) {
                                            $("#photos_business").owlCarousel({
                                                items : 1,
                                                dots: false,
                                                autoplay : true,
                                                autoplayHoverPause : true,
                                                autoplayTimeout : 1000,
                                                loop: true,
                                            })
                                        }
                                            
                                    })
                                </script>