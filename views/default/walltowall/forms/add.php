<?php

    /**
	 * Elgg Message board add form
	 * 
	 * @package ElggMessageBoard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd <info@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
	 
?>
<div id="mb_input_wrapper">
<form action="<?php echo $vars['url']; ?>action/walltowall/add" method="post" name="messageboardForm">
   
    <!-- textarea for the contents -->
    <textarea name="message_content" value="" class="input_textarea"></textarea><br />
   
    <!-- the person posting an item on the message board -->
    <input type="hidden" name="guid" value="<?php echo $_SESSION['guid']; ?>"  />
   
    <!-- the page owner, this will be the profile owner -->
    <input type="hidden" name="pageOwner" value="<?php echo page_owner(); ?>"  />
    
    <input type="hidden" name="poster" value="<?php echo $vars['poster']; ?>" />

    <input type="hidden" name="postee" value="<?php echo $vars['postee']; ?>" />

	<?php echo elgg_view('input/securitytoken'); ?>
   
    <!-- submit messages input -->
    <input type="submit" id="postit" value="<?php echo elgg_echo('messageboard:postit'); ?>">
    
</form>
</div>
