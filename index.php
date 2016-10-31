<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
//            $.ajax({
//                url     : "proses.php",
//                type    : "POST",
//                data    : $("#form").serialize(),
//                beforeFilter: function(){
//                    $('#loading').show();
//                },
//                success: function(html){
//                    $('#loading').hide();
//                    alert(html);
//                }
//                
//                
//            });
            
            $('#tombol').click(function(){
                $.ajax({
                    url : "proses.php",
                    beforeSend : function(){
                        $('#loading').show();
                    },
                    success : function(html){
                        $('#loading').hide();
                        alert(html);
                    }
                });
            });
        });
	</script>
</head>
<body>
	<body>
   <span id="loading" style="display:none">LOADING...</span><br />
   <div id="tampilan"></div>
    <button id="tombol">Klik di sini!</button>
  </body>
</body>
</html>