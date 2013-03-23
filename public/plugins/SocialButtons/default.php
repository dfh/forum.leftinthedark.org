<?php if (!defined('APPLICATION')) die();

$PluginInfo['SocialButtons'] = array
(
  'Name' => 'SocialButtons',
  'Description' => 'Add social sharing buttons like Facebook, Google, Tweeter and LinkedIn for every discussions',
  'Version' => '0.2',
  'Author' => 'Chanux',
  'AuthorEmail' => 'chanux@mail.com',
  'AuthorUrl' => 'http://vanilla.chanux.org',
);


class SocialButtonsPlugin extends Gdn_Plugin
{

    public static $ButtonCode = '
	

<table>
  <tr>
    <td width="100"><!-- Facebook Code -->
                  <script type="text/javascript">
(function(){
  var fb = document.createElement("script");
  fb.type = "text/javascript";
  fb.async = true;
  fb.src = document.location.protocol + "//connect.facebook.net/en_US/all.js#xfbml=1";
  (document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(fb);
})();              </script>
                  <fb:like layout="button_count" width="100" height="21"></fb:like>
                  <!-- END Facebook Code --></td>       
                  
    <td width="100">
    <!-- Place this tag where you want the +1 button to render -->
                  <g:plusone size="medium"></g:plusone>
                  <!-- Place this render call where appropriate -->
                  <script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();     </script>    </td>    
    <td width="100"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
                  <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></td>    
    <td width="100"><script src="//platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-counter="right"></script></td>  </tr></table>
	<div style=" position:absolute; bottom:0px; left:0px;">

	</div>
	';


   public static $JSCode='
';
  public function Base_Render_Before(&$Sender){
  
  }
  
   public function DiscussionController_BeforeDiscussionRender_Handler(&$Sender) {
		
  }
  
  public function DiscussionController_BeforeCommentBody_Handler(&$Sender)
  {

	if($Sender->EventArguments['Type'] =='Discussion'){
	   echo '';
	}

  }
  
  public function DiscussionController_AfterCommentBody_Handler(&$Sender)
  {
	  if($Sender->EventArguments['Type'] =='Discussion'){
	   echo self::$ButtonCode.'';
	   echo self::$JSCode;
	  
	}
  }
  
   public function Setup()
  {
 
  }
}
