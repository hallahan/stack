<?php include 'head.php'; ?>

<input type="text" name="fil_descr" placeholder="File Description" />
<select size="8">
	<option value="cht1">funnycat.jpg</option>
	<option value="sfd">challenge_problem.doc</option>
	<option value="afsd">clinton_lying.wav</option>
	<option value="aaa">rush_limbaugh.mp3</option>
	<option value="cssss">something_funny_reddit.jpg</option>
	<option value="fdf">spam.exe</option>
	<option value="efe">mess_your_shit_up.exe</option>
	<option value="qqq">serenity.png</option>
	<option value="www">whisky.db</option>
	<option value="ceee">salty_mango.ppt</option>
</select>
<div id="right" align="right">
<input class="button" type="button" onclick="upload()" value="Upload"/>
</div>
<input type="text" name="fil_search" placeholder="Search Files" />
<?php include 'tail.php'; ?>