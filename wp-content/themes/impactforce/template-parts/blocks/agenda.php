<section id="<?php echo get_field('block_id'); ?>" class="agenda">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('main_title'); ?></h2>
        <div class="content-wrap">
            <div class="calendar-table">
                <span class="dots-wrap dots-g">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                        <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                        </svg>
                </span>
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
                <!-- <div class="table-row content-row">
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
                            <div class="content">11.50 - 12.50</div>    
                        </div>
                        <div class="column content-column display-flex">
                            <div class="content description">
                                Networking Lunch
                            </div>
                        </div>
                    </div>
                </div> -->

                
                <div class="table-column time-column">
                    <div class="time-td">
                        <div class="content">8.00 - 9.00</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">9.00 - 9.20</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">9.20 - 10.20</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">10.20 - 10.30</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">10.30 -11.10</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">11.10 - 11.50</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">11.50 - 12.50</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">12:50 - 13.30</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">13.30 - 14.10</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">14.10 - 15.40</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">15:40 - 18.00</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">18.00 - 19.00</div>    
                    </div>
                    <div class="time-td">
                        <div class="content">19.00 - 20.00</div>    
                    </div>
                </div>   

                <div class="table-column venue-column">
                    <div class="content description  venues-none">
                        Registration and Welcome Coffee
                    </div>
                    <div class="content description  venues-none">
                        Opening Ceremony and Keynote Address
                    </div>  
                    <div class="content description  venues-none">
                        Panel 1: <strong>"Building Blocks for Continuous Resilience in Ukraine"</strong>
                    </div>                    
                    <div class="content description  venues-none">
                        Signing ceremony
                    </div>                    
                    <div class="content description  venues-none">
                        Panel 2: <strong>"Fostering Economic Empowerment in Ukraine: Strategies for Sustainable Growth”</strong>
                    </div>
                    <div class="content description  venues-none">
                        Panel 3: <strong>“The Path to Sustainable Global Security With Ukraine’s Perspective”</strong>
                    </div>
                    <div class="content description  venues-none">
                        Networking Lunch
                    </div>
                    <div class="content description  venues">
                        <div class="display-flex">
                            <div class="column  venues-1">
                                <span>SIDE EVENT</span>
                                Demo Day: Acceleration Program
                                <span><strong>“Innovators in Energy Efficiency
                                for Ukraine” activities</strong></span>
                            </div>
                            <div class="column  venues-2">
                                <div class="venues-2-td">
                                    Panel 4: <strong>“Mental Health Resilience in Wartime Ukraine"</strong>
                                </div>
                                <div class="venues-2-td">
                                   Panel 5: <strong>“Reintegrating War-Affected Groups into the Workforce"</strong>
                                </div>
                                <div class="venues-2-td">
                                    <span>Side Event</span>
                                    <strong>“ReStart Mindset”</strong> activities ( Impact Force Intervention Program to Address Mental Health Crisis in Ukraine)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content description  venues-none">
                       Forum Closing Ceremony and Reflections
                    </div>
                    <div class="content description  venues-none">
                       Evening Networking Reception
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>