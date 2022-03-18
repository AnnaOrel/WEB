<?php
    $categories = opendir('categories');
    $categoryNameList = [];
    $annsDict = [];
    while ($categoryName = readdir($categories)) {
        if (is_dir('categories/' . $categoryName) && $categoryName != '.' && $categoryName != '..') {
            $categoryNameList[] = $categoryName;
            $annsDict[$categoryName] = [];
        }
    }
    foreach ($categoryNameList as $categoryName) {
        $categoryDir = opendir('categories/' . $categoryName);
        while ($fileName = readdir($categoryDir)) {
            if ($fileName != '.' && $fileName != '..') {
                $filePathName = 'categories/' . $categoryName . '/' . $fileName;
                $file = fopen($filePathName, 'r');
                $title = substr($fileName, 0, strlen($fileName) - 4);
                $email = fgets($file);
                $text = "";
                while (!feof($file)) {
                    $text .= fgets($file) . "\n";
                }
                fclose($file);
                $annsDict[$categoryName][] = ['title' => $title, 'email' => $email, 'text' => $text];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Announcements Board
		</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<form name="userAnn" action="Lab3-3-1.php" method="post">
			<label>
				Добавить
			</label>
			<br>
			<br>
			<label>
				Категория:
			</label>
			<br>
			<select name="annCategory">
				<?php
				foreach ($categoryNameList as $categoryName) 
				{
					echo "<option>" . $categoryName . "</option>";
				}
				?>
			</select>
			<br>
			<br>
			<label>
				Название:
			</label>
			<input name="annTitle">
			<br>
			<br>
			<label>
				Email:
			</label>
			<input name="annEmail">
			<br>
			<br>
			<label>
				Текст:
			</label>
			<br>
			<textarea name="annText" rows="20" cols="100"></textarea>
			<br>
			<br>
			<button type="submit">Отправить</button>
		</form>

		<p>Список:</p>
		<table border="1">
			<tr>
				<th>
					Категория:
				</th>
				<th>
					Название:
				</th>
				<th>
					Email:
				</th>
				<th>
					Текст:
				</th>
			</tr>
			<?php
			foreach ($annsDict as $categoryName => $categoryData) 
			{
				foreach ($categoryData as $emailText) 
				{
					echo "<tr>";
					echo "<td>" . $categoryName . "</td>";
					echo "<td>" . $emailText['title'] . "</td>";
					echo "<td>" . $emailText['email'] . "</td>";
					echo "<td>" . $emailText['text'] . "</td>";
					echo "</tr>";
				}
			}
			?>
		</table>
	</body>
</html>

