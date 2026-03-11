<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método no permitido']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Datos inválidos']);
    exit;
}

// Directorio y archivo CSV
$dir = __DIR__;
$file = $dir . '/registros_vora.csv';

// Sanitizar función
function clean($v)
{
    return str_replace(['"', "\n", "\r"], ["'", ' ', ' '], (string)$v);
}

// Encabezados
$headers = ['fecha', 'nombre', 'nick', 'tipo_contacto', 'contacto', 'edad', 'estilos', 'mejoras', 'prenda_dificil', 'top_elegido'];

// Escribir encabezados si el archivo no existe
$newFile = !file_exists($file);
$fh = fopen($file, 'a');
if (!$fh) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se pudo abrir el archivo']);
    exit;
}

if ($newFile) {
    fputcsv($fh, $headers);
}

// Fila de datos
$row = [
    date('Y-m-d H:i:s'),
    clean($input['name'] ?? ''),
    clean($input['nick'] ?? ''),
    clean($input['contactType'] ?? ''),
clean($input['contactValue'] ?? ''),
    clean($input['age'] ?? ''),
    clean(implode(' | ', (array)($input['styles'] ?? []))),
    clean(implode(' | ', (array)($input['mejoras'] ?? []))),
    clean($input['price'] ?? ''),
    clean($input['top_name'] ?? ''),
];

fputcsv($fh, $row);
fclose($fh);

echo json_encode(['ok' => true]);
