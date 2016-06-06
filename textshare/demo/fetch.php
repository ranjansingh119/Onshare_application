<html>
 <head>
               
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/textshare/demo/script/jquery.zclip.js"></script>

       <script type="text/javascript">
        $(document).ready(function() {
            $("#copy-dynamic").zclip({
                path: 'http://localhost/textshare/demo/script/ZeroClipboard.swf',
                copy: $('#toclip').val(),
                afterCopy: function() {
                    // console.log('copied');
                    alert('the copy has been done...');
                }
            });
        });
        </script>

 </head>
 <body>

<?php
 
 session_start();
 
 include_once('db/connect.php');


 if ((isset($_POST['name'])) &&  (!empty($_POST['name']))  &&  (isset($_POST['created']))  && (!empty($_POST['created'])) ) {
 	# code...
 

 $name = $_POST['name'];
 $created = $_POST['created'];

 $sql1 = "SELECT text_content, created FROM details WHERE name = '" . $name . "' AND created = '" . $created . "' ";
 $res = mysql_query($sql1);
 //$str = '';

 
 while ($row = mysql_fetch_array($res)) 
 {
    $counter = 0;
?>  
    
    <input type ="text"  id = 'toclip = <?php  echo $counter++;?>' value = "<?php echo $row['text_content'].'  '.$row['created'] ?>"  /><br/>
    <a href="#copy"  id = "copy-dynamic">Copy this</a><br/>
 

<?php 
    }
   

 }

 else{

 	die('fill in the credentials').'<a href="http://localhost/textshare/demo/get.html" style = "color:blue">Proceed back</a>';
 }


?>



</body>
</html>