<script>
	// Hide content onload, prevents JS flicker
	document.body.className += ' js-enabled';
</script>

<div id="header_wrap">
	<div id="header">
		<h1 id="logo">
			<a href="<?php echo base_url(); ?>" title="Spanishon.com COLABORADORES by BONISOFT">
				<img src="<?php echo HTTP_IMAGES_PATH;?>logo.png" alt="Spanishon.com LOGO"/>
				<span class="img_rep">Colaboradores</span> 
			</a>
		</h1>
                <div id="estado">
		<?php
            // Check if user is logged in either via password or 'Remember me' function
                
                if ($this->flexi_auth->is_logged_in()) 
                {
                    /**
                     * @author Mariano Salinas <alsdk69@gmail.com>
                     * 
                     */
                     /*
                         echo '<span class="highlight_green">User is logged in. User is in the "'.$this->flexi_auth->get_user_group().'" user group.</span>';
                         
                                
                        if ($this->flexi_auth->is_logged_in_via_password()) 
                        {
                                echo '<br/><span class="highlight_green">User logged in via password.</span>';
                        }
                        else
                        {
                                echo '<br/><span class="highlight_green">User logged in via "Remember me".</span>';
                        }
                      */
                         
                        //echo "<p><h1>C&oacute;digo cup&oacute;n de asociado: " . $this->flexi_auth->get_user_id() . "</h1></p>";
                        if (! empty($user['upro_asoc_id'])) { ?>
                            <div id="coupon">
					<?php echo "<p><h1>C&oacute;digo de Colaborador: " . $user['upro_asoc_id'] . "</h1>";?>
                            </div>
			<?php }    
                    
                        /**
                         * FIN
                         */
                        
                }
                else 
                {
                        echo '<span class="highlight_orange">User is not logged in.</span>';
                }
               ?>
                </div>
	</div>
</div>