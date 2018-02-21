<form method="post" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
  $file = $_FILES["fileUpload"];
  if ($file["error"]) {
    throw new Exception("Erro: " . $file["error"]);
  }
  
  $dirPath = "uploads";
  if (!is_dir($dirPath)) {
    mkdir($dirPath);
  }
  
  if (move_uploaded_file($file["tmp_name"], $dirPath . DIRECTORY_SEPARATOR . $file["name"])) {
    echo "Upload do arquivo realizado com sucesso!";
  } else {
    throw new Exception("Não foi possível realizar o upload");
  }
    
}
?>