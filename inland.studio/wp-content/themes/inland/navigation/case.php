<div class="filter case-anchors white-bg case-anchors-container" id="case-anchors-container">
    <div class="wrapper">
        <div class="full-width" id="case-anchors">
            <h4 class="blue-text">process</h4>
            <nav class="margin-bottom-0" id="case-navigation">
                <div>
                    <?php if( have_rows('case_understand_section') ):
                          while( have_rows('case_understand_section') ): the_row();
                        ?>
                            <?php if( get_sub_field('understand_phase_toggle') ): ?>
                                <a href="#understand" class="anchor" id="understand-link">Understand</a>
                            <?php else: ?>
                                <span>Understand</span>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div>
                    <?php if( have_rows('case_vision_section') ):
                          while( have_rows('case_vision_section') ): the_row();
                    ?>
                        <?php if( get_sub_field('vision_phase_toggle') ): ?>
                            <a href="#vision" class="anchor" id="vision-link">Vision</a>
                        <?php else: ?>
                            <span>Vision</span>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div>
                    <?php if( get_field('hackathon_schedule_module_toggle') || get_field('hackathon_form_toggle') ): ?>
                        <a href="#make" class="anchor" id="make-link">Make</a>
                    <?php else: ?>
                        <?php if( have_rows('case_make_section') ):
                              while( have_rows('case_make_section') ): the_row();
                        ?>
                            <?php if( get_sub_field('make_phase_toggle') ): ?>
                                <a href="#make" class="anchor" id="make-link">Make</a>
                            <?php else: ?>
                                <span>Make</span>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>


                <?php if( !get_field('hackathon_schedule_module_toggle') || !get_field('hackathon_form_toggle') ): ?>
                <div>
                    <?php if( have_rows('case_randd_section') ):
                          while( have_rows('case_randd_section') ): the_row();
                    ?>
                        <?php if( get_sub_field('randd_phase_toggle') ): ?>
                            <a href="#randd" class="anchor" id="randd-link">R&amp;D</a>
                        <?php else: ?>
                            <span>R&amp;D</span>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</div>
