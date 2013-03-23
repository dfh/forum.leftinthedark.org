<?php if (!defined('APPLICATION')) exit();
echo $this->Form->Open();
echo $this->Form->Errors();
?>


<h1><?php echo Gdn::Translate('Add Menu Item'); ?></h1>

<div class="Info"><?php echo Gdn::Translate('Add Menu Item Options.'); ?></div>

<table class="AltRows">
    <thead>
        <tr>
            <th><?php echo Gdn::Translate('Option'); ?></th>
            <th class="Alt"><?php echo Gdn::Translate('Description'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name1');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the NAME of the first menu item'); ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Link1');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the LINK of the first menu item'); ?>
            </td>
        </tr>
       
       
      <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name2');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the NAME of the second menu item'); ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Link2');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the LINK of the second menu item'); ?>
            </td>
        </tr>  
       
       
        
      <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name3');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the NAME of the third menu item'); ?>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Link3');
                ?>
            </td>
            <td class="Alt">
                <?php echo Gdn::Translate('Add the LINK of the third menu item'); ?>
            </td>
        </tr>  
       
</table>

<?php echo $this->Form->Close('Save');


