<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<input type="submit" value="Send Request #1" onclick="$('#response').load('send.php?req=1');">
<input type="submit" value="Send Request #2" onclick="$('#response').load('send.php?req=2');">
<input type="submit" value="Send Request #3" onclick="$('#response').load('send.php?req=3');">

<br>

<div id="response">

</div>