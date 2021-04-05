 <html>
<head>
	<title>Membuat Heading dengan Helper HTML Codeigniter</title>
</head>
<body>
	<?php
	echo heading("Helper HTML - H1",1);
	echo heading("Helper HTML - H2",2);
	echo heading("Helper HTML - H3",3);
	echo heading("Helper HTML - H4",4);
	echo heading("Helper HTML - H5",5);
	echo heading("Helper HTML - H6",6);
  
  $gambar = array(
          'src'   => 'https://static.cdn-cdpl.com/source/17045/codeignitor_service_provider-image(700x350-crop)-image(700x350-crop).jpg',
          'alt'   => 'Codeigniter - CI',
          'class' => 'post_images',
          'width' => '200',
          'height'=> '200',
          'title' => 'Codeigniter'
  );
  echo img($gambar);
  ?>
</body>
</html>
