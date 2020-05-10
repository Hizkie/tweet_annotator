<html>
	<?php include 'logic.php';?>


<head runat="server">
    <title>Tweet annotator</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
     $(function() { 
        var enter = $('#mo').val();
        if(enter !="/"){
                 $("#popModal").modal('show'); }});
</script>
  <script>
	  function cls(){
		  if (confirm("Are you sure you want to close?") == true) {
			          location.replace("final.html");
		  } 
	  }
  </script>
  <style type="text/css">
  
@keyframes load {
  0% { width: 0; }
  100% { width: <?php echo($sum*100/300);?> }
}
</style>

</head>
<body>
 <div class="progress">
  <div class="progress-value"></div>
	</div>
  
    <!-- end of php
      start of html -->
	
    <!-- Popup Modal -->
<div id="popModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>አንኳን በደህና መጡ</p>
        <p>ከዚህ ቀጥሎ የሚሞሉት ፎርም ላይ የሚመለከቱዋቸው ፅሁፎቸ ከየተለያዩ የአማርኛ ትዊቶች የተሰበሰቡ ሲሆኑ ፤ የዚህ ፕሮጀክት አላማው የአማርኛ ቋንቋ ስሜት ትንተና ለመስራት የሚያስችል ናሙና ለመሰብሰብ ነው። የአርስዎ መልስም ለዚህ ምርምር ብቻ እንደግባትነት የሚያገለግል መሆኑን በአክብሮት አንገልጻለን።</p> 
        <p>ስለትብብሮ እናመሰግናለን!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 
  </div>
</div>
    <div id="mytext">    
      <p>
        <u><b>መመሪያ:</b></u><br>
          ፩. ጽሁፉ አዎንታዊ ከሆነ <b>አዎንታዊ</b> የሚለውን ይምረጡ<br>  
          ፪. ጽሁፉ አሉታዊ ከሆነ <b>አሉታዊ</b> የሚለውን ይምረጡ<br> 
          ፫. አዎንታዊም አሉታዊም ካልሆነ <b>ገለልተኛ</b> የሚለውን ይምረጡ<br>
	  ፫. አዎንታዊም አሉታዊም ከልሆነ <b>ቅልቅል</b> የሚለውን ይምረጡ<br>

      </p>
      <div  id="top" class="card text-center border border-danger"> <!-- the top card that contain the instraction for filling the form -->
            <div id="myform card-body">
                <form method="post" action="logic.php">
                  <textarea type="text" name="txt" id="txt"><?php if(isset($text)){echo $text;}?></textarea>
                  <div id="tweet">
                    <p><?php if(isset($text)){echo $text;}?></p><br>
                    <input type="text" name="ip" class="in"  value=<?php if(isset($_GET['ip'])){echo $_GET['ip'];}else if(isset($ip)){echo $ip;}?>>
                    <input type="text" name="id"  class="in" value=<?php if(isset($id)){echo $id;}?>>
                    <input type="text" name="val" class="in" value=<?php if(isset($val)){echo $val;}?>>
                    <input type="text" name="mod" class="in" id="mo" value=<?php if(isset($m)){echo $m;}?>/>
                    <label class="radio-inline" style=""><input class="radio-inline" id="pos" type="radio" name="sentiment" value="positive">አዎንታዊ</label>
                    <label class="radio-inline"><input class="radio-inline" id="neg" type="radio" name="sentiment" value="negative">አሉታዊ</label>
                    <label class="radio-inline"><input class="radio-inline" id="neu" type="radio" name="sentiment" value="nuetral">ገለልተኛ</label>
		    <label class="radio-inline"><input class="radio-inline" id="neu" type="radio" name="sentiment" value="mixed">ቅልቅል</label><br><br><br>
		    <button type="submit" class="btn btn-lg btn-primary" name="file" id="file">መዝግብ</button><br>
                    <button type="button" class="btn btn-lg btn-danger" onclick="cls()" style="margin-left: 80%">ዝጋ</button>


                    <p style="color: red"><?php if(isset($error)){echo $error;}?></p>
                </form>
          </div>
        </div>
</body>
	    
<!-- end of html -->
