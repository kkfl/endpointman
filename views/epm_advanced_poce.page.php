<?php
	if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
?>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
        
        
        	<div class="section">
	        	<div class="row">
			        <div class="col-xs-4 text-center" id="select_product_list_files_config">
						<div class="btn-group">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <span class="label label-default label-pill">0</span>
								<?php echo _("Local File Configs"); ?> <i class="fa fa-chevron-down"></i>
							</button>
	  						<div class="dropdown-menu">
	    						<a class="dropdown-item disabled" href="#">Emtry1</a>
	  						</div>
						</div>
					</div>
					
					<div class="col-xs-4 text-center" id="select_product_list_files_template_custom">
						<div class="btn-group">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="label label-default label-pill">0</span>
								<?php echo _("Custom Template Files"); ?> <i class="fa fa-chevron-down"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item disabled" href="#">Emtry</a>
						  </div>
						</div>
					</div>
					<div class="col-xs-4 text-center" id="select_product_list_files_user_config">
						<div class="btn-group">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="label label-default label-pill">0</span>
								<?php echo _("User File Configs"); ?> <i class="fa fa-chevron-down"></i>
							</button>
	  						<div class="dropdown-menu">
	    						<a class="dropdown-item disabled" href="#">Emtry</a>
	  						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="section">
					<div class="row">
						<div class="col-md-12">
							<label>Product:</label> <code id="poce_NameProductSelect"><?php echo _("No Selected"); ?></code>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="row">
						<div class="col-xs-12">
							<form method="post" action="" name="form_config_text_sec_button">
								<input type="hidden" name="type_file" value="" />
								<input type="hidden" name="sendid" value="" />
								<input type="hidden" name="product_select" value="" />
								<input type="hidden" name="original_name" value="" />
								<input type="hidden" name="filename" value="" />
								<input type="hidden" name="location" value="" />
								<input type="hidden" name="datosok" value="false" />
								
	          					<div id="box_sec_source" class="row">
	          						<div class="col-xs-12">
	          							<button type="button" class='btn btn-default btn-sm pull-xs-right' name="bt_source_full_screen" onclick="epm_advanced_tab_poce_bt_acction(this);" disabled><i class="fa fa-arrows-alt"></i> <?php echo _('Full Screen F11')?></button>
	          							<label class="control-label" for="config_textarea"><i class="fa fa-file-code-o" data-for="config_textarea"></i> Cantenido del archivo:</label> <code class='inline' id='poce_file_name_path'><?php echo _("No Selected"); ?></code>
	          							<textarea name="config_textarea" id="config_textarea" rows="5"></textarea>
	          							<i class='fa fa-exclamation-triangle'></i> <font style="font-size: 0.8em; font-style: italic;"><?php echo _("NOTE: Key F11 Full Screen, ESC Exit FullScreen.")?></font>
	          						</div>
	          					</div>
	          					
	          					<div id="box_bt_save" class="row">
	          						<div class="col-xs-9">
	          							<i class='fa fa-exclamation-triangle'></i> <font style="font-size: 0.8em; font-style: italic;"><?php echo _("NOTE: File may be over-written during next package update. We suggest also using the <b>Share</b> button below to improve the next release.")?></font>
	          						</div>
	          						<div class="col-xs-3 text-right">
	          							<button type="button" class='btn btn-default' name="button_save" onclick="epm_advanced_tab_poce_bt_acction(this);" disabled><i class='fa fa-floppy-o'></i> <?php echo _('Save')?></button>
		        						<button type="button" class='btn btn-danger' name="button_delete" onclick="epm_advanced_tab_poce_bt_acction(this);" disabled><i class='fa fa-trash-o'></i> <?php echo _('Delete')?></button>
	          						</div>
	          					</div>
	          					
	          					<div id="box_bt_save_as" class="row">
	          						<div class="col-xs-7">
	          							<i class='fa fa-exclamation-triangle'></i> <font style="font-size: 0.8em; font-style: italic;"><?php echo _("NOTE: File is permanently saved and not over-written during next package update.")?></font>
	          						</div>
	          						<div class="col-xs-5 text-right">
	          							<div class="input-group">
      										<input type="text" class="form-control" name="save_as_name" id="save_as_name" value="" placeholder="Name File..." disabled>
      										<span class="input-group-btn">
        										<button type="button" class='btn btn-default' name="button_save_as" onclick="epm_advanced_tab_poce_bt_acction(this);" disabled><i class='fa fa-floppy-o'></i> <?php echo _('Save As...')?></button>
      										</span>
    									</div>
	          						</div>
	          					</div>
	          					
	          					<div id="box_bt_share" class="row">
	          						<div class="col-xs-9">
	          							<i class='fa fa-exclamation-triangle'></i> <font style="font-size: 0.8em; font-style: italic;"> <?php echo _("Upload this configuration file to the <b>Provisioner.net Team</b>. Files shared are confidential and help improve the quality of releases.")?></font>
	          						</div>
	          						<div class="col-xs-3 text-right">
	          							<button type="button" class="btn btn-default" name="button_share" onclick="epm_advanced_tab_poce_bt_acction(this);" disabled><i class="fa fa-upload"></i> <?php echo _('Share')?></button>
	          						</div>
	          					</div>
	          				</form>
						</div>
					</div>
				</div>
			</div>
        </div>
        
        <div class="col-sm-3 bootnav">
			<?php
				//$sql = 'SELECT * FROM endpointman_product_list WHERE hidden = 0 AND id > 0 ORDER BY long_name ASC';
				//$sql = 'SELECT * FROM endpointman_product_list WHERE hidden = 0 AND id > 0 AND brand IN (SELECT id FROM asterisk.endpointman_brand_list where hidden = 0) ORDER BY long_name ASC';
				$sql = 'SELECT * FROM endpointman_product_list WHERE hidden = 0 AND id IN (SELECT DISTINCT product_id FROM asterisk.endpointman_model_list where enabled = 1) AND brand IN (SELECT id FROM asterisk.endpointman_brand_list where hidden = 0) ORDER BY long_name ASC';
				$product_list = sql($sql, 'getAll', DB_FETCHMODE_ASSOC);
				echo load_view(__DIR__.'/epm_advanced/poce.views.bootnav.php', array('request' => $_REQUEST, 'product_list' => $product_list));
				unset ($product_list);
				unset ($sql);
			?>
        </div>
    </div>
</div>









<?php 

/*
 <a href="config.php?display=epm_advanced&amp;subpage=poce&sendid=<?php echo $sendidt; ?>&amp;filename=<?php echo $filename; ?>&amp;product_select=<?php echo $_REQUEST['product_select']; ?>&amp;<?php echo $type.'='.$sendidt; ?>">
 * */
?>


<!--



<form method="post" action="config.php?type=tool&amp;display=epm_advanced&amp;subpage=poce&amp;product_select={$product_selected}&amp;phone_options=true">
{if condition="isset($options)"}	
{$options}
{/if}
</form>
-->