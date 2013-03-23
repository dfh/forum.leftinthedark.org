<?php if (!defined('APPLICATION')) exit();

 
$PluginInfo['AddMenuitem'] = array(
   'Name' => 'Add Menu Item',
   'Description' => 'Adds up to 3 Items to menu',
   'Version' => '1.3',
   'Author' => "Peregrine",
   'SettingsUrl' => '/dashboard/plugin/addmenuitem'
);


class AddMenuitemPlugin extends Gdn_Plugin {
 
   public function Base_Render_Before($Sender) {
      // Add "Items" to menu
      $Session = Gdn::Session();
      if ($Sender->Menu && $Session->IsValid()) {  
      
      $itemname1 = (C('Plugins.AddMenuitem.Name1'));
      $itemlink1 = (C('Plugins.AddMenuitem.Link1'));
      $itemname2 = (C('Plugins.AddMenuitem.Name2'));
      $itemlink2 = (C('Plugins.AddMenuitem.Link2'));
       $itemname3 = (C('Plugins.AddMenuitem.Name3'));
      $itemlink3 = (C('Plugins.AddMenuitem.Link3')); 
   
  
   if (($itemname1)  && ($itemlink1)) {
         $Sender->Menu->AddLink($itemname1, T($itemname1), $itemlink1);
         }
      if ($itemname2  && $itemlink2) {
         $Sender->Menu->AddLink($itemname2, T($itemname2), $itemlink2);
         }
      if (($itemname3)  && ($itemlink3)) {
         $Sender->Menu->AddLink($itemname3, T($itemname3), $itemlink3);
         }
   
    
      }
  
   }
  
   public function PluginController_AddMenuitem_Create($Sender) {
        $Sender->Title('Add Menu Item');
        $Sender->AddSideMenu('plugin/addmenuitem');
        $Sender->Permission('Garden.Settings.Manage');
        $Sender->Form = new Gdn_Form();
        $Validation = new Gdn_Validation();
        $ConfigurationModel = new Gdn_ConfigurationModel($Validation);
        $ConfigurationModel->SetField(array(
            'Plugins.AddMenuitem.Name1',
            'Plugins.AddMenuitem.Link1',
            'Plugins.AddMenuitem.Name2',
            'Plugins.AddMenuitem.Link2',
            'Plugins.AddMenuitem.Name3',
            'Plugins.AddMenuitem.Link3',
       
       
       
        ));
        $Sender->Form->SetModel($ConfigurationModel);


        if ($Sender->Form->AuthenticatedPostBack() === FALSE) {
            $Sender->Form->SetData($ConfigurationModel->Data);
        } else {
            $Data = $Sender->Form->FormValues();

            if ($Sender->Form->Save() !== FALSE)
                $Sender->StatusMessage = T("Your settings have been saved.");
        }

        $Sender->Render($this->GetView('ami-settings.php'));
    }

 
   
  public function Setup() {
        
    }
    
    }
