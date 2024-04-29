<section class="agenda">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('main_title'); ?></h2>
        <div class="content-wrap">
            <div class="calendar-table">
                <div class="table-row title-row">
                    <div class="columns display-flex">
                        <div class="column time-column">
                            <div class="content">Time slot</div>
                        </div>
                        <div class="column content-column display-flex">
                            <div class="content venue">Venue 1: Main Hall</div>
                            <div class="content venue">Venue 2: Innovation Hall </div>
                        </div>
                        
                    </div>
                </div>
                <?php
                    $agenda_list = get_field('list_of_agenda');
                        // echo "<pre>";
                        //     print_r($agenda_list);
                        // echo "</pre>";

                    if( !empty($agenda_list) ):
                        foreach( $agenda_list as $key => $list_item ):
                            $time_slot = $list_item['time_slot'];
                            $venues = $list_item['venue'];
                ?>
                <div class="table-row content-row">
                            <div class="columns display-flex">
                            <div class="column time-column">
                                <div class="content"><?php echo $time_slot; ?></div>    
                            </div>                                
                <?php
                            if( !empty($venues) ):
                ?>
                                <div class="column content-column display-flex">
                <?php
                                    foreach($venues as $key => $venue):
                                        $venue_location = 'venue_'. $venue;
                                        echo '<div class="content description '. $venue .' '. $venue_location .'">'. $list_item[$venue_location]. '</div>';
                                    endforeach;
                            endif;
                ?>
                                </div>
                            </div>
                        </div>                                
                <?php
                        endforeach;
                    endif;
                ?>
                <div class="table-row content-row">
                    <div class="columns display-flex">
                        <div class="column time-column">
                            <div class="content">8.00 - 9.00</div>    
                        </div>
                        <div class="column content-column display-flex">
                            <div class="content description">
                                Registration and Welcome Coffee    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-row content-row">
                    <div class="columns display-flex">
                        <div class="column time-column">
                            <div class="content">9.00 - 9.20</div>    
                        </div>
                        <div class="column content-column display-flex">
                            <div class="content description">
                                Opening Ceremony and Keynote Address   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>