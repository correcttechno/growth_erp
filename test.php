<?php
$baseDir = __DIR__; // Ana dizin
$dir = isset($_GET['dir']) ? realpath($baseDir . '/' . $_GET['dir']) : $baseDir;

// Güvenlik: Kök dizinin dışına çıkmayı engelle
if ($dir === false || strpos($dir, $baseDir) !== 0) {
    die('Yetkisiz erişim!');
}

/**
 * 📂 Klasör içeriğini okuyan fonksiyon
 * @param string $dir Klasör yolu
 * @return array Klasördeki dosya ve klasörleri içeren array
 */
function readDirectory($dir)
{
    $items = scandir($dir);
    $result = ['folders' => [], 'files' => []];

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;

        if (is_dir($path)) {
            $result['folders'][] = $item;
        } else {
            $result['files'][] = $item;
        }
    }
    return $result;
}

/**
 * 🆕 Yeni klasör oluşturma fonksiyonu
 * @param string $dir Mevcut dizin
 * @param string $folderName Yeni klasör adı
 * @return string Başarı veya hata mesajı
 */
function createFolder($dir, $folderName)
{
    if (empty($folderName)) {
        return "Hata: Klasör adı boş olamaz!";
    }

    $newFolderPath = $dir . '/' . $folderName;

    if (file_exists($newFolderPath)) {
        return "Hata: Klasör zaten mevcut!";
    }

    if (mkdir($newFolderPath, 0777, true)) {
        return "Başarıyla oluşturuldu: $folderName";
    } else {
        return "Hata: Klasör oluşturulamadı!";
    }
}

// 🆕 Klasör oluşturma işlemi
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_folder'])) {
    $folderName = trim($_POST['new_folder']);
    $message = createFolder($dir, $folderName);
}

// 📂 Klasör içeriğini oku
$directoryContents = readDirectory($dir);
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
        a { text-decoration: none; color: blue; }
        .message { margin: 10px 0; padding: 10px; border-radius: 5px; }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

<h2>PHP Dosya Yöneticisi</h2>
<p>Şu anki dizin: <strong><?php echo htmlspecialchars(str_replace($baseDir, '', $dir) ?: '/'); ?></strong></p>

<!-- Klasör Oluşturma Formu -->
<form method="post">
    <input type="text" name="new_folder" placeholder="Yeni Klasör Adı" required>
    <input type="submit" value="Oluştur">
</form>

<!-- Mesaj Gösterme -->
<?php if (!empty($message)): ?>
    <p class="message <?php echo strpos($message, 'Başarıyla') !== false ? 'success' : 'error'; ?>">
        <?php echo htmlspecialchars($message); ?>
    </p>
<?php endif; ?>

<!-- Klasör İçeriği -->
<table>
    <tr>
        <th>Adı</th>
        <th>Türü</th>
    </tr>

    <!-- Üst klasöre çıkma linki -->
    <?php if ($dir !== $baseDir): ?>
        <tr>
            <td><a href="?dir=<?php echo urlencode(dirname(str_replace($baseDir, '', $dir))); ?>">⬆ Üst Klasör</a></td>
            <td>Klasör</td>
        </tr>
    <?php endif; ?>

    <!-- Klasörleri listele -->
    <?php foreach ($directoryContents['folders'] as $folder): ?>
        <tr>
            <td><a href="?dir=<?php echo urlencode(str_replace($baseDir, '', $dir . '/' . $folder)); ?>">📁 <?php echo $folder; ?></a></td>
            <td>Klasör</td>
        </tr>
    <?php endforeach; ?>

    <!-- Dosyaları listele -->
    <?php foreach ($directoryContents['files'] as $file): ?>
        <tr>
            <td>📄 <?php echo $file; ?></td>
            <td>Dosya</td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
