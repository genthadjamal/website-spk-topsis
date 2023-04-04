<?php
$bobot = array();
function normalisasi($bobot)
{
    $matriks_ternormalisasi = array();
    foreach ($bobot as $row) {
        $normalisasi_row = array();
        for ($i = 0; $i < count($row); $i++) {
            $normalized_value = $row[$i] / sqrt(array_sum(array_column($bobot, $i)) ** 2);
            $normalisasi_row[] = $normalized_value;
        }
        $matriks_ternormalisasi[] = $normalisasi_row;
    }
    return $matriks_ternormalisasi;
}
