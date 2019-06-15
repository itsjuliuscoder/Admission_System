                <div class="container"><br>

                    <div class="row slide_banniere">
                        <?php if ($slide_1 == false OR empty($slide_1)) { ?>
                            <img src="<?php echo base_url('assets/img/banniere'); ?>" width="100%">
                        <?php }else {
                            foreach ($slide_1 as $slide) { ?>
                            <img src="<?php echo base_url('uploads/bannieres/business_slide_1') .'/'. $slide; ?>" style="width: 100%; height: 200px;">
                        <?php }} ?>
                    </div><br>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <section id="results">
                            <header><h1 style="color: #0aa017; font-weight: bold;">Bonnes Affaires</h1></header>
                            <section id="properties">
                            <div class="row">
                            <?php foreach ($vente_achats as $vente_achat ) { ?>
                                <div class="col-md-4 col-sm-4 ">
                                    <a class="vente_achat" href="<?php echo base_url() . 'index.php/business/publique/details/' . $vente_achat['id_vente_achat'] ; ?>">
                                    <div class="property equal-height">
                                       <figure class="ribbon" style="background-color: #e21f1d;"><?php echo ($vente_achat['va_negoce'] == 0) ? 'negociable' : 'fixe' ; ?></figure>
                                        <div class="property-image">
                                           <img alt="" width="100%" height="200px" src="<?php echo vente_achat($vente_achat['va_photo']); ?>">
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price" style="background-color: #4ca64c;"><?php echo $vente_achat['va_prix']; ?> F CFA</div>
                                                <h2 style="color: #e8da14; "><?php echo $vente_achat['va_titre']; ?></h2>
                                                <figure>
                                                    Tel : <?php echo $vente_achat['mem_telephone']; ?><br>
                                                    Email : <?php echo $vente_achat['mem_email']; ?><br>
                                                </figure>
                                            </div>
                                            <ul class="additional-info" style="background-color: #b8ad10; color: black;">
                                                <li style="color: black;">
                                                    <header>Adresse</header>
                                                    <?php echo $vente_achat['mem_ville'] .' '. $vente_achat['mem_departement'] .' '. $vente_achat['mem_pays']; ?>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php } ?>
                            </div>
                           
                           
                            <!-- Pagination -->
                            <div class="center">
                                <ul class="pagination">
                                    <?php

                                        $config['base_url'] = base_url().'index.php/business/publique/liste';
                                        $config['total_rows'] = $this->BusinessModel->liste_publique_rows();
                                        $config['per_page'] = 20;
                                        $config['first_link'] = 'Début';
                                        $config['last_link'] = 'Fin';
                                        $config['next_link'] = 'Suivant';
                                        $config['prev_link'] = 'Précédent';
                                        $config['first_tag_open'] = '<li>';
                                        $config['first_tag_close'] = '</li>';
                                        $config['next_tag_open'] = '<li>';
                                        $config['next_tag_close'] = '</li>';
                                        $config['num_tag_open'] = '<li>';
                                        $config['num_tag_close'] = '</li>';
                                        $config['cur_tag_open'] = '<li class="active"><a href="#">';
                                        $config['cur_tag_close'] = '</a></li>';
                                        $config['prev_tag_open'] = '<li>';
                                        $config['prev_tag_close'] = '</li>';
                                        $config['last_tag_open'] = '<li>';
                                        $config['last_tag_close'] = '</li>';
                                        $config['first_url'] = base_url().'index.php/business/publique/liste/1';

                                        $this->pagination->initialize($config); 
                                        echo $this->pagination->create_links(['first_link']); 
                                    ?>
                                </ul>
                            </div>
                            <!-- /.pagination-->
                            </section>
                        </section>            
                    </div>
                    <div class="col-md-3 col-md-3 col-sm-3">
                        <section id="sidebar" class="">
                            <aside>
                                <div class="row slide_banniere">
                                    <?php if ($slide_2 == false OR empty($slide_2)) { ?>
                                        <img src="<?php echo base_url('assets/img/banniere'); ?>" width="100%">
                                    <?php }else {
                                        foreach ($slide_2 as $slide) { ?>
                                        <img src="<?php echo base_url('uploads/bannieres/business_slide_2') .'/'. $slide; ?>" width="100%">
                                    <?php }} ?>
                                </div>
                                
                            </aside><!-- /#featured-properties -->

                        </section><!-- /#sidebar -->
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                
                              </div>
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div> -->
                            </div>
                          </div>
                        </div>
                            
                        <script type="text/javascript">
                            $(function(){
                                $('#sidebar select option:selected').click(function(){})

                                $('.vente_achat').click(function(e){
                                    e.preventDefault();
                                    $('#myModal .modal-body').html("loading...");
                                    var url = $(this).attr('href');
                                    $.post(url, function(rep){
                                        $('#myModal .modal-body').html(rep);
                                    })
                                    $('#myModal').modal();
                                    
                                })

                                $(".slide_banniere").owlCarousel({
                                    items : 1,
                                    dots: false,
                                    autoplay : true,
                                    autoplayHoverPause : true,
                                    autoplayTimeout : 5000,
                                    loop: true,
                                })
                            })
                        </script>                
                    </div>
                </div>
                    
                
        