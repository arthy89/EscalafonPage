titulo inicial
                    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h2 class="text-white mb-5">Comunicados</h2>
                    </div>


                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                        <?php foreach ($resultado as $row) { ?>
                        <!-- PARA ALMACENAR EN VARIABLE -->
                        <?php 
                          $icon = $row['ico_svg'];
                          $titulo = $row['com_title'];
                          $contenido = $row['com_cont'];
                          $tlink = $row['com_tlink'];
                          $link = $row['com_link'];
                          $fecha = $row['com_f'];
                          $hora = $row['com_h'];
                          $estado = $row['est_name'];
                          $color = $row['est_color'];
                        ?>

                        <div class="testimonial-item rounded p-4" style="background-color:#F3F6F8;">
                            <div class="row g-5 align-items-left">
                                <div class="col-3">
                                    <i class="fa <?php echo $icon ?> fa-2x text-primary mb-3"></i>
                                </div>
                                <div class="col-6 align-items-left" >
                                    <h5 class="mb-3 text-primary"><?php echo $titulo ?></h5>
                                </div>
                                <div class="col-3 align-items-center">
                                    <div class="service-icon" >
                                        <!-- style="color:#F3F6F8" -->
                                        <h5 style="color:<?php echo $color ?>; margin-top:-10px"><?php echo $estado ?></h5>
                                    </div>
                                </div>
                            </div>
                            
                            <p><?php echo $contenido ?></p>
                            <div class="d-flex align-items-center">
                                <div class="col-12">
                                    <h6 class="mb-1"><a class="enlace" href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer"><?php echo $tlink ?> </a></h6>
                                    <small><?php echo $hora ?> - <?php echo $fecha ?></small>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                        
                    </div>