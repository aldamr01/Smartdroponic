<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Node 1 (Aldion's house)</h1>

	<div id="body">

		<p>Sensor Installed</p>
		<code>
			-nodeMCU <br>
			-Sensor Cahaya <br>
			-Breadboard mini <br>
		</code>

		<p>Scroll kebawah sendiri untuk lihat data terlama </p>
		<code style="height:200px;width:auto;overflow:scroll;">
			<pre id="log" style="">
			</pre>
		</code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script type="text/javascript">
  getData();
  function getData()
  {
    $.ajax({

      url   : 'https://iot.aldion-amirrul.com/index.php/Iot/read/',
      method: 'GET',
      success : function(data)
      {
        var out = "";
        for (var i = 0; i < data.data.length; i++) {
          out += '['
					+data.data[i].date
					+']'
					+'&nbsp;&nbsp;:'
					+data.data[i].val
					+'<br/>';
        }
        $('#log').html(out);
				getData();
      },
      error   : function(data)
      {
        console.log('gagal');
      }

    });
  }
</script>

</body>
</html>
