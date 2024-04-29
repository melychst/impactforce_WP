        <section class="partners">
            <div class="container">
                <h2 class="section-title"><?php echo get_field('main_title'); ?></h2>
                <?php 
                    $partners = get_field('partners');
                    if( !empty($partners) ):
                ?>
                        <div class="partners-wrap">
                <?php
                            foreach( $partners as $key => $partner ):
                                $partner_logo = $partner['partner_logo'];
                                print_r($partner_logo);
                                
                ?>
                                    <div class="logo-item">
                                        <?php 
                                            if( $partner_logo ):
                                        ?>
                                                <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>">
                                        <?php 
                                            else: 
                                                echo "LOG0 ". $key;
                                        ?> 
                                    </div>
                <?php
                                endif;
                            endforeach;
                ?>
                        </div>
                <?php
                    endif;
                ?>
            </div>
        </section>