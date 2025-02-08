<?php
$baseDir = __DIR__; // Kök dizin (scriptin çalıştığı yer)
$dir = isset($_GET['dir']) ? realpath($baseDir . '/' . $_GET['dir']) : $baseDir;

// Güvenlik önlemi: Belirtilen dizinin dışına çıkmayı engelle
if (strpos($dir, $baseDir) !== 0) {
    die('Yetkisiz erişim!');
}

// Yeni klasör oluşturma işlemi
if (isset($_POST['new_folder'])) {
    $newFolderName = trim($_POST['new_folder']);
    if (!empty($newFolderName)) {
        $newFolderPath = $dir . '/' . $newFolderName;
        if (!file_exists($newFolderPath)) {
            mkdir($newFolderPath, 0777, true);
        } else {
            echo "<script>alert('Bu klasör zaten var!');</script>";
        }
    }
}

// Klasör ve dosyaları listele
$items = scandir($dir);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dosya Yöneticisi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
        form { margin-bottom: 10px; }
        input[type="text"] { padding: 5px; }
        input[type="submit"] { padding: 5px 10px; }
    </style>
</head>
<body>

<h2>PHP Dosya Yöneticisi</h2>
<p>Şu anki dizin: <strong><?php echo htmlspecialchars(str_replace($baseDir, '', $dir) ?: '/'); ?></strong></p>

<!-- Yeni Klasör Oluşturma Formu -->
<form method="post">
    <input type="text" name="new_folder" placeholder="Yeni Klasör Adı" required>
    <input type="submit" value="Oluştur">
</form>

<!-- Klasör İçeriği -->
<table>
    <tr>
        <th>Adı</th>
        <th>Türü</th>
    </tr>
    <?php if ($dir !== $baseDir): ?>
        <tr>
            <td><a href="?dir=<?php echo urlencode(dirname(str_replace($baseDir, '', $dir))); ?>">⬆ Üst Klasör</a></td>
            <td>Klasör</td>
        </tr>
    <?php endif; ?>
    <?php foreach ($items as $item): ?>
        <?php if ($item === '.' || $item === '..') continue; ?>
        <?php $path = $dir . '/' . $item; ?>
        <tr>
            <td>
                <?php if (is_dir($path)): ?>
                    <a href="?dir=<?php echo urlencode(str_replace($baseDir, '', $path)); ?>">📁 <?php echo $item; ?></a>
                <?php else: ?>
                    📄 <?php echo $item; ?>
                <?php endif; ?>
            </td>
            <td><?php echo is_dir($path) ? 'Klasör' : 'Dosya'; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
