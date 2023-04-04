<!-- awal bb/tb cowo -->
<?php
if ($balita['jenis_kelamin'] == 'Laki-laki') {
    if ($balita['umur'] < 24) {
        if ($balita['tinggi'] == 45.0) {
            $median = 2.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.7 - $median);
            }
        } else if ($balita['tinggi'] == 45.5) {
            $median = 2.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.8 - $median);
            }
        } else if ($balita['tinggi'] == 46.0) {
            $median = 2.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.9 - $median);
            }
        } else if ($balita['tinggi'] == 46.5) {
            $median = 2.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
            }
        } else if ($balita['tinggi'] == 47.0) {
            $median = 2.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
            }
        } else if ($balita['tinggi'] == 47.5) {
            $median = 2.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.1 - $median);
            }
        } else if ($balita['tinggi'] == 48.0) {
            $median = 2.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.2 - $median);
            }
        } else if ($balita['tinggi'] == 48.5) {
            $median = 3.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.3 - $median);
            }
        } else if ($balita['tinggi'] == 49.0) {
            $median = 3.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.4 - $median);
            }
        } else if ($balita['tinggi'] == 49.5) {
            $median = 3.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.5 - $median);
            }
        } else if ($balita['tinggi'] == 50.0) {
            $median = 3.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.6 - $median);
            }
        } else if ($balita['tinggi'] == 50.5) {
            $median = 3.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
            }
        } else if ($balita['tinggi'] == 50.5) {
            $median = 3.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
            }
        } else if ($balita['tinggi'] == 51.0) {
            $median = 3.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.9 - $median);
            }
        } else if ($balita['tinggi'] == 51.5) {
            $median = 3.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.0 - $median);
            }
        } else if ($balita['tinggi'] == 52.0) {
            $median = 3.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.1 - $median);
            }
        } else if ($balita['tinggi'] == 52.5) {
            $median = 3.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.2 - $median);
            }
        } else if ($balita['tinggi'] == 53.0) {
            $median = 4.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.4 - $median);
            }
        } else if ($balita['tinggi'] == 53.5) {
            $median = 4.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.5 - $median);
            }
        } else if ($balita['tinggi'] == 54.0) {
            $median = 4.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.7 - $median);
            }
        } else if ($balita['tinggi'] == 54.5) {
            $median = 4.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.8 - $median);
            }
        } else if ($balita['tinggi'] == 55.0) {
            $median = 4.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.0 - $median);
            }
        } else if ($balita['tinggi'] == 55.5) {
            $median = 4.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.1 - $median);
            }
        } else if ($balita['tinggi'] == 56.0) {
            $median = 4.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.3 - $median);
            }
        } else if ($balita['tinggi'] == 56.5) {
            $median = 5.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.4 - $median);
            }
        } else if ($balita['tinggi'] == 57.0) {
            $median = 5.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.6 - $median);
            }
        } else if ($balita['tinggi'] == 57.5) {
            $median = 5.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.7 - $median);
            }
        } else if ($balita['tinggi'] == 58.0) {
            $median = 5.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.9 - $median);
            }
        } else if ($balita['tinggi'] == 58.5) {
            $median = 5.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.1 - $median);
            }
        } else if ($balita['tinggi'] == 59.0) {
            $median = 5.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.2 - $median);
            }
        } else if ($balita['tinggi'] == 59.5) {
            $median = 5.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.4 - $median);
            }
        } else if ($balita['tinggi'] == 60.0) {
            $median = 6.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.5 - $median);
            }
        } else if ($balita['tinggi'] == 60.5) {
            $median = 6.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.7 - $median);
            }
        } else if ($balita['tinggi'] == 61.0) {
            $median = 6.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.8 - $median);
            }
        } else if ($balita['tinggi'] == 61.5) {
            $median = 6.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.0 - $median);
            }
        } else if ($balita['tinggi'] == 62.0) {
            $median = 6.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.1 - $median);
            }
        } else if ($balita['tinggi'] == 62.5) {
            $median = 6.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.2 - $median);
            }
        } else if ($balita['tinggi'] == 63.0) {
            $median = 6.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.4 - $median);
            }
        } else if ($balita['tinggi'] == 63.5) {
            $median = 6.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.5 - $median);
            }
        } else if ($balita['tinggi'] == 64.0) {
            $median = 7.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.6 - $median);
            }
        } else if ($balita['tinggi'] == 64.5) {
            $median = 7.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.8 - $median);
            }
        } else if ($balita['tinggi'] == 65.0) {
            $median = 7.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
            }
        } else if ($balita['tinggi'] == 65.5) {
            $median = 7.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.0 - $median);
            }
        } else if ($balita['tinggi'] == 66.0) {
            $median = 7.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
            }
        } else if ($balita['tinggi'] == 66.5) {
            $median = 7.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
            }
        } else if ($balita['tinggi'] == 67.0) {
            $median = 7.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
            }
        } else if ($balita['tinggi'] == 67.5) {
            $median = 7.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
            }
        } else if ($balita['tinggi'] == 68.0) {
            $median = 8.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
            }
        } else if ($balita['tinggi'] == 68.5) {
            $median = 8.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
            }
        } else if ($balita['tinggi'] == 69.0) {
            $median = 8.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.9 - $median);
            }
        } else if ($balita['tinggi'] == 69.5) {
            $median = 8.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
            }
        } else if ($balita['tinggi'] == 70.0) {
            $median = 8.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
            }
        } else if ($balita['tinggi'] == 70.5) {
            $median = 8.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
            }
        } else if ($balita['tinggi'] == 71.0) {
            $median = 8.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
            }
        } else if ($balita['tinggi'] == 71.5) {
            $median = 8.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
            }
        } else if ($balita['tinggi'] == 72.0) {
            $median = 8.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
            }
        } else if ($balita['tinggi'] == 72.5) {
            $median = 9.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
            }
        } else if ($balita['tinggi'] == 73.0) {
            $median = 9.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
            }
        } else if ($balita['tinggi'] == 73.5) {
            $median = 9.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
            }
        } else if ($balita['tinggi'] == 74.0) {
            $median = 9.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
            }
        } else if ($balita['tinggi'] == 74.5) {
            $median = 9.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
            }
        } else if ($balita['tinggi'] == 75.0) {
            $median = 9.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
            }
        } else if ($balita['tinggi'] == 75.5) {
            $median = 9.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
            }
        } else if ($balita['tinggi'] == 76.0) {
            $median = 9.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
            }
        } else if ($balita['tinggi'] == 76.5) {
            $median = 9.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
            }
        } else if ($balita['tinggi'] == 77.0) {
            $median = 9.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
            }
        } else if ($balita['tinggi'] == 77.5) {
            $median = 10.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
            }
        } else if ($balita['tinggi'] == 78.0) {
            $median = 10.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
            }
        } else if ($balita['tinggi'] == 78.5) {
            $median = 10.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
            }
        } else if ($balita['tinggi'] == 79.0) {
            $median = 10.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
            }
        } else if ($balita['tinggi'] == 79.5) {
            $median = 10.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
            }
        } else if ($balita['tinggi'] == 80.0) {
            $median = 10.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
            }
        } else if ($balita['tinggi'] == 80.5) {
            $median = 10.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
            }
        } else if ($balita['tinggi'] == 81.0) {
            $median = 10.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
            }
        } else if ($balita['tinggi'] == 81.5) {
            $median = 10.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
            }
        } else if ($balita['tinggi'] == 82.0) {
            $median = 10.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
            }
        } else if ($balita['tinggi'] == 82.5) {
            $median = 10.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
            }
        } else if ($balita['tinggi'] == 83.0) {
            $median = 11.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.0 - $median);
            }
        } else if ($balita['tinggi'] == 83.5) {
            $median = 11.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
            }
        } else if ($balita['tinggi'] == 84.0) {
            $median = 11.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
            }
        } else if ($balita['tinggi'] == 84.5) {
            $median = 11.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
            }
        } else if ($balita['tinggi'] == 85.0) {
            $median = 11.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
            }
        } else if ($balita['tinggi'] == 85.5) {
            $median = 11.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
            }
        } else if ($balita['tinggi'] == 86.0) {
            $median = 11.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
            }
        } else if ($balita['tinggi'] == 86.5) {
            $median = 11.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
            }
        } else if ($balita['tinggi'] == 87.0) {
            $median = 12.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
            }
        } else if ($balita['tinggi'] == 87.5) {
            $median = 12.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
            }
        } else if ($balita['tinggi'] == 88.0) {
            $median = 12.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
            }
        } else if ($balita['tinggi'] == 88.5) {
            $median = 12.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
            }
        } else if ($balita['tinggi'] == 89.0) {
            $median = 12.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
            }
        } else if ($balita['tinggi'] == 89.5) {
            $median = 12.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
            }
        } else if ($balita['tinggi'] == 90.0) {
            $median = 12.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
            }
        } else if ($balita['tinggi'] == 90.5) {
            $median = 12.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
            }
        } else if ($balita['tinggi'] == 91.0) {
            $median = 13.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
            }
        } else if ($balita['tinggi'] == 91.5) {
            $median = 13.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
            }
        } else if ($balita['tinggi'] == 92.0) {
            $median = 13.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
            }
        } else if ($balita['tinggi'] == 92.5) {
            $median = 13.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
            }
        } else if ($balita['tinggi'] == 93.0) {
            $median = 13.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
            }
        } else if ($balita['tinggi'] == 93.5) {
            $median = 13.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
            }
        } else if ($balita['tinggi'] == 94.0) {
            $median = 13.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.8 - $median);
            }
        } else if ($balita['tinggi'] == 94.5) {
            $median = 13.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
            }
        } else if ($balita['tinggi'] == 95.0) {
            $median = 13.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
            }
        } else if ($balita['tinggi'] == 95.5) {
            $median = 14.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
            }
        } else if ($balita['tinggi'] == 96.0) {
            $median = 14.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
            }
        } else if ($balita['tinggi'] == 96.5) {
            $median = 14.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
            }
        } else if ($balita['tinggi'] == 97.0) {
            $median = 14.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
            }
        } else if ($balita['tinggi'] == 97.5) {
            $median = 14.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
            }
        } else if ($balita['tinggi'] == 98.0) {
            $median = 14.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
            }
        } else if ($balita['tinggi'] == 98.5) {
            $median = 14.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.0 - $median);
            }
        } else if ($balita['tinggi'] == 99.0) {
            $median = 14.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
            }
        } else if ($balita['tinggi'] == 99.5) {
            $median = 15.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.3 - $median);
            }
        } else if ($balita['tinggi'] == 100.0) {
            $median = 15.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
            }
        } else if ($balita['tinggi'] == 100.5) {
            $median = 15.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.6 - $median);
            }
        } else if ($balita['tinggi'] == 101.0) {
            $median = 15.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.8 - $median);
            }
        } else if ($balita['tinggi'] == 101.5) {
            $median = 15.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
            }
        } else if ($balita['tinggi'] == 102.0) {
            $median = 15.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.1 - $median);
            }
        } else if ($balita['tinggi'] == 102.5) {
            $median = 15.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
            }
        } else if ($balita['tinggi'] == 103.0) {
            $median = 16.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.4 - $median);
            }
        } else if ($balita['tinggi'] == 103.5) {
            $median = 16.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.6 - $median);
            }
        } else if ($balita['tinggi'] == 104.0) {
            $median = 16.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
            }
        } else if ($balita['tinggi'] == 104.5) {
            $median = 16.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.9 - $median);
            }
        } else if ($balita['tinggi'] == 105.0) {
            $median = 16.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.1 - $median);
            }
        } else if ($balita['tinggi'] == 105.5) {
            $median = 16.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.3 - $median);
            }
        } else if ($balita['tinggi'] == 106.0) {
            $median = 16.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
            }
        } else if ($balita['tinggi'] == 106.5) {
            $median = 17.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.6 - $median);
            }
        } else if ($balita['tinggi'] == 107.0) {
            $median = 17.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.8 - $median);
            }
        } else if ($balita['tinggi'] == 107.5) {
            $median = 17.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
            }
        } else if ($balita['tinggi'] == 108.0) {
            $median = 17.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.2 - $median);
            }
        } else if ($balita['tinggi'] == 108.5) {
            $median = 17.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.4 - $median);
            }
        } else if ($balita['tinggi'] == 109.0) {
            $median = 17.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.6 - $median);
            }
        } else if ($balita['tinggi'] == 109.5) {
            $median = 18.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
            }
        } else if ($balita['tinggi'] == 110.0) {
            $median = 18.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
            }
        }
    } else if ($balita['umur'] >= 24) {
        if ($balita['tinggi'] == 65.0) {
            $median = 7.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
            }
        } else if ($balita['tinggi'] == 65.5) {
            $median = 7.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
            }
        } else if ($balita['tinggi'] == 66.0) {
            $median = 7.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
            }
        } else if ($balita['tinggi'] == 66.5) {
            $median = 7.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
            }
        } else if ($balita['tinggi'] == 67.0) {
            $median = 7.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.6 - $median);
            }
        } else if ($balita['tinggi'] == 67.5) {
            $median = 8.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
            }
        } else if ($balita['tinggi'] == 68.0) {
            $median = 8.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
            }
        } else if ($balita['tinggi'] == 68.5) {
            $median = 8.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
            }
        } else if ($balita['tinggi'] == 69.0) {
            $median = 8.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
            }
        } else if ($balita['tinggi'] == 69.5) {
            $median = 8.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
            }
        } else if ($balita['tinggi'] == 70.0) {
            $median = 8.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
            }
        } else if ($balita['tinggi'] == 70.5) {
            $median = 8.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
            }
        } else if ($balita['tinggi'] == 71.0) {
            $median = 8.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
            }
        } else if ($balita['tinggi'] == 71.5) {
            $median = 8.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
            }
        } else if ($balita['tinggi'] == 72.0) {
            $median = 9.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
            }
        } else if ($balita['tinggi'] == 72.5) {
            $median = 9.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
            }
        } else if ($balita['tinggi'] == 73.0) {
            $median = 9.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
            }
        } else if ($balita['tinggi'] == 73.5) {
            $median = 9.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
            }
        } else if ($balita['tinggi'] == 74.0) {
            $median = 9.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
            }
        } else if ($balita['tinggi'] == 74.5) {
            $median = 9.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
            }
        } else if ($balita['tinggi'] == 75.0) {
            $median = 9.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
            }
        } else if ($balita['tinggi'] == 75.5) {
            $median = 9.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
            }
        } else if ($balita['tinggi'] == 76.0) {
            $median = 9.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
            }
        } else if ($balita['tinggi'] == 76.5) {
            $median = 9.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
            }
        } else if ($balita['tinggi'] == 77.0) {
            $median = 10.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
            }
        } else if ($balita['tinggi'] == 77.5) {
            $median = 10.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
            }
        } else if ($balita['tinggi'] == 78.0) {
            $median = 10.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
            }
        } else if ($balita['tinggi'] == 78.5) {
            $median = 10.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
            }
        } else if ($balita['tinggi'] == 79.0) {
            $median = 10.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
            }
        } else if ($balita['tinggi'] == 79.5) {
            $median = 10.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
            }
        } else if ($balita['tinggi'] == 80.0) {
            $median = 10.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
            }
        } else if ($balita['tinggi'] == 80.5) {
            $median = 10.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
            }
        } else if ($balita['tinggi'] == 81.0) {
            $median = 10.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
            }
        } else if ($balita['tinggi'] == 81.5) {
            $median = 10.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
            }
        } else if ($balita['tinggi'] == 82.0) {
            $median = 11.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
            }
        } else if ($balita['tinggi'] == 82.5) {
            $median = 11.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
            }
        } else if ($balita['tinggi'] == 83.0) {
            $median = 11.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
            }
        } else if ($balita['tinggi'] == 83.5) {
            $median = 11.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
            }
        } else if ($balita['tinggi'] == 84.0) {
            $median = 11.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
            }
        } else if ($balita['tinggi'] == 84.5) {
            $median = 11.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
            }
        } else if ($balita['tinggi'] == 85.0) {
            $median = 11.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
            }
        } else if ($balita['tinggi'] == 85.5) {
            $median = 11.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
            }
        } else if ($balita['tinggi'] == 86.0) {
            $median = 11.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
            }
        } else if ($balita['tinggi'] == 86.5) {
            $median = 12.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.1 - $median);
            }
        } else if ($balita['tinggi'] == 87.0) {
            $median = 12.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
            }
        } else if ($balita['tinggi'] == 87.5) {
            $median = 12.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
            }
        } else if ($balita['tinggi'] == 88.0) {
            $median = 12.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
            }
        } else if ($balita['tinggi'] == 88.5) {
            $median = 12.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.6 - $median);
            }
        } else if ($balita['tinggi'] == 89.0) {
            $median = 12.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
            }
        } else if ($balita['tinggi'] == 89.5) {
            $median = 12.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
            }
        } else if ($balita['tinggi'] == 90.0) {
            $median = 12.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
            }
        } else if ($balita['tinggi'] == 90.0) {
            $median = 12.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
            }
        } else if ($balita['tinggi'] == 90.5) {
            $median = 13.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
            }
        } else if ($balita['tinggi'] == 91.0) {
            $median = 13.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
            }
        } else if ($balita['tinggi'] == 91.5) {
            $median = 13.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
            }
        } else if ($balita['tinggi'] == 92.0) {
            $median = 13.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
            }
        } else if ($balita['tinggi'] == 92.5) {
            $median = 13.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
            }
        } else if ($balita['tinggi'] == 93.0) {
            $median = 13.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
            }
        } else if ($balita['tinggi'] == 93.5) {
            $median = 13.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
            }
        } else if ($balita['tinggi'] == 94.0) {
            $median = 13.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.0 - $median);
            }
        } else if ($balita['tinggi'] == 94.5) {
            $median = 13.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
            }
        } else if ($balita['tinggi'] == 95.0) {
            $median = 14.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
            }
        } else if ($balita['tinggi'] == 95.5) {
            $median = 14.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
            }
        } else if ($balita['tinggi'] == 96.0) {
            $median = 14.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
            }
        } else if ($balita['tinggi'] == 96.5) {
            $median = 14.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
            }
        } else if ($balita['tinggi'] == 97.0) {
            $median = 14.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.8 - $median);
            }
        } else if ($balita['tinggi'] == 97.5) {
            $median = 14.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
            }
        } else if ($balita['tinggi'] == 98.0) {
            $median = 14.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.1 - $median);
            }
        } else if ($balita['tinggi'] == 98.5) {
            $median = 14.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
            }
        } else if ($balita['tinggi'] == 99.0) {
            $median = 15.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.4 - $median);
            }
        } else if ($balita['tinggi'] == 99.5) {
            $median = 15.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
            }
        } else if ($balita['tinggi'] == 100.0) {
            $median = 15.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.7 - $median);
            }
        } else if ($balita['tinggi'] == 100.5) {
            $median = 15.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
            }
        } else if ($balita['tinggi'] == 101.0) {
            $median = 15.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
            }
        } else if ($balita['tinggi'] == 101.5) {
            $median = 15.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.2 - $median);
            }
        } else if ($balita['tinggi'] == 102.0) {
            $median = 15.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
            }
        } else if ($balita['tinggi'] == 102.5) {
            $median = 16.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
            }
        } else if ($balita['tinggi'] == 103.0) {
            $median = 16.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.7 - $median);
            }
        } else if ($balita['tinggi'] == 103.5) {
            $median = 16.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
            }
        } else if ($balita['tinggi'] == 104.0) {
            $median = 16.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
            }
        } else if ($balita['tinggi'] == 104.0) {
            $median = 16.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
            }
        } else if ($balita['tinggi'] == 104.5) {
            $median = 16.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
            }
        } else if ($balita['tinggi'] == 104.5) {
            $median = 16.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
            }
        } else if ($balita['tinggi'] == 105.0) {
            $median = 16.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
            }
        } else if ($balita['tinggi'] == 105.5) {
            $median = 17.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
            }
        } else if ($balita['tinggi'] == 106.0) {
            $median = 17.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.7 - $median);
            }
        } else if ($balita['tinggi'] == 106.5) {
            $median = 17.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.9 - $median);
            }
        } else if ($balita['tinggi'] == 107.0) {
            $median = 17.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.1 - $median);
            }
        } else if ($balita['tinggi'] == 107.5) {
            $median = 17.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.3 - $median);
            }
        } else if ($balita['tinggi'] == 108.0) {
            $median = 17.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.5 - $median);
            }
        } else if ($balita['tinggi'] == 108.5) {
            $median = 18.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.7 - $median);
            }
        } else if ($balita['tinggi'] == 109.0) {
            $median = 18.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
            }
        } else if ($balita['tinggi'] == 109.5) {
            $median = 18.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
            }
        } else if ($balita['tinggi'] == 110.0) {
            $median = 18.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.2 - $median);
            }
        } else if ($balita['tinggi'] == 110.5) {
            $median = 18.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.4 - $median);
            }
        } else if ($balita['tinggi'] == 111.0) {
            $median = 18.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.7 - $median);
            }
        } else if ($balita['tinggi'] == 111.5) {
            $median = 19.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.9 - $median);
            }
        } else if ($balita['tinggi'] == 112.0) {
            $median = 19.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.1 - $median);
            }
        } else if ($balita['tinggi'] == 112.5) {
            $median = 19.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.3 - $median);
            }
        } else if ($balita['tinggi'] == 113.0) {
            $median = 19.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.5 - $median);
            }
        } else if ($balita['tinggi'] == 113.5) {
            $median = 19.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.7 - $median);
            }
        } else if ($balita['tinggi'] == 114.0) {
            $median = 20.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.9 - $median);
            }
        } else if ($balita['tinggi'] == 114.5) {
            $median = 20.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.1 - $median);
            }
        } else if ($balita['tinggi'] == 115.0) {
            $median = 20.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.4 - $median);
            }
        } else if ($balita['tinggi'] == 115.5) {
            $median = 20.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.6 - $median);
            }
        } else if ($balita['tinggi'] == 116.0) {
            $median = 20.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.8 - $median);
            }
        } else if ($balita['tinggi'] == 116.5) {
            $median = 21.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.0 - $median);
            }
        } else if ($balita['tinggi'] == 117.0) {
            $median = 21.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.3 - $median);
            }
        } else if ($balita['tinggi'] == 117.5) {
            $median = 21.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.5 - $median);
            }
        } else if ($balita['tinggi'] == 118.0) {
            $median = 21.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.7 - $median);
            }
        } else if ($balita['tinggi'] == 118.5) {
            $median = 21.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.9 - $median);
            }
        } else if ($balita['tinggi'] == 119.0) {
            $median = 22.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.1 - $median);
            }
        } else if ($balita['tinggi'] == 119.5) {
            $median = 22.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.4 - $median);
            }
        } else if ($balita['tinggi'] == 120.0) {
            $median = 22.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.6 - $median);
            }
        }
    } else {
        echo "<td>data tidak ditemukan</td>";
    }
    // awal tb/bb cewe
} else if ($balita['jenis_kelamin'] == 'Perempuan') {
    if ($balita['umur'] < 24) {
        if ($balita['tinggi'] == 45.0) {
            $median = 2.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.7 - $median);
            }
        } else if ($balita['tinggi'] == 45.5) {
            $median = 2.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.8 - $median);
            }
        } else if ($balita['tinggi'] == 46.0) {
            $median = 2.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (2.9 - $median);
            }
        } else if ($balita['tinggi'] == 46.5) {
            $median = 2.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
            }
        } else if ($balita['tinggi'] == 47.0) {
            $median = 2.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.1 - $median);
            }
        } else if ($balita['tinggi'] == 47.5) {
            $median = 2.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.2 - $median);
            }
        } else if ($balita['tinggi'] == 48.0) {
            $median = 3.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.3 - $median);
            }
        } else if ($balita['tinggi'] == 48.5) {
            $median = 3.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.4 - $median);
            }
        } else if ($balita['tinggi'] == 49.0) {
            $median = 3.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 2.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.5 - $median);
            }
        } else if ($balita['tinggi'] == 49.5) {
            $median = 3.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.6 - $median);
            }
        } else if ($balita['tinggi'] == 50.0) {
            $median = 3.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.7 - $median);
            }
        } else if ($balita['tinggi'] == 50.5) {
            $median = 3.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
            }
        } else if ($balita['tinggi'] == 51.0) {
            $median = 3.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (3.9 - $median);
            }
        } else if ($balita['tinggi'] == 51.5) {
            $median = 3.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.0 - $median);
            }
        } else if ($balita['tinggi'] == 52.0) {
            $median = 3.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.2 - $median);
            }
        } else if ($balita['tinggi'] == 52.5) {
            $median = 3.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.3 - $median);
            }
        } else if ($balita['tinggi'] == 53.0) {
            $median = 4.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.4 - $median);
            }
        } else if ($balita['tinggi'] == 53.5) {
            $median = 4.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.6 - $median);
            }
        } else if ($balita['tinggi'] == 54.0) {
            $median = 4.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 3.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.7 - $median);
            }
        } else if ($balita['tinggi'] == 54.5) {
            $median = 4.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (4.8 - $median);
            }
        } else if ($balita['tinggi'] == 55.0) {
            $median = 4.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.0 - $median);
            }
        } else if ($balita['tinggi'] == 55.5) {
            $median = 4.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.1 - $median);
            }
        } else if ($balita['tinggi'] == 56.0) {
            $median = 4.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.3 - $median);
            }
        } else if ($balita['tinggi'] == 56.5) {
            $median = 5.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.4 - $median);
            }
        } else if ($balita['tinggi'] == 57.0) {
            $median = 5.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.6 - $median);
            }
        } else if ($balita['tinggi'] == 57.5) {
            $median = 5.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.7 - $median);
            }
        } else if ($balita['tinggi'] == 58.0) {
            $median = 5.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 4.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (5.9 - $median);
            }
        } else if ($balita['tinggi'] == 58.5) {
            $median = 5.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.0 - $median);
            }
        } else if ($balita['tinggi'] == 59.0) {
            $median = 5.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.2 - $median);
            }
        } else if ($balita['tinggi'] == 59.5) {
            $median = 5.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.3 - $median);
            }
        } else if ($balita['tinggi'] == 60.0) {
            $median = 5.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.4 - $median);
            }
        } else if ($balita['tinggi'] == 60.5) {
            $median = 6.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.6 - $median);
            }
        } else if ($balita['tinggi'] == 61.0) {
            $median = 6.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.7 - $median);
            }
        } else if ($balita['tinggi'] == 61.5) {
            $median = 6.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (6.9 - $median);
            }
        } else if ($balita['tinggi'] == 62.0) {
            $median = 6.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.0 - $median);
            }
        } else if ($balita['tinggi'] == 62.5) {
            $median = 6.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 5.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.1 - $median);
            }
        } else if ($balita['tinggi'] == 63.0) {
            $median = 6.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.3 - $median);
            }
        } else if ($balita['tinggi'] == 63.5) {
            $median = 6.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.4 - $median);
            }
        } else if ($balita['tinggi'] == 64.0) {
            $median = 6.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.5 - $median);
            }
        } else if ($balita['tinggi'] == 64.5) {
            $median = 7.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.6 - $median);
            }
        } else if ($balita['tinggi'] == 65.0) {
            $median = 7.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.8 - $median);
            }
        } else if ($balita['tinggi'] == 65.5) {
            $median = 7.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
            }
        } else if ($balita['tinggi'] == 66.0) {
            $median = 7.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.0 - $median);
            }
        } else if ($balita['tinggi'] == 66.5) {
            $median = 7.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
            }
        } else if ($balita['tinggi'] == 67.0) {
            $median = 7.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
            }
        } else if ($balita['tinggi'] == 67.5) {
            $median = 7.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
            }
        } else if ($balita['tinggi'] == 68.0) {
            $median = 7.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
            }
        } else if ($balita['tinggi'] == 68.5) {
            $median = 7.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.6 - $median);
            }
        } else if ($balita['tinggi'] == 69.0) {
            $median = 8.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
            }
        } else if ($balita['tinggi'] == 69.5) {
            $median = 8.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
            }
        } else if ($balita['tinggi'] == 70.0) {
            $median = 8.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
            }
        } else if ($balita['tinggi'] == 70.5) {
            $median = 8.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
            }
        } else if ($balita['tinggi'] == 71.0) {
            $median = 8.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
            }
        } else if ($balita['tinggi'] == 71.5) {
            $median = 8.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
            }
        } else if ($balita['tinggi'] == 72.0) {
            $median = 8.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
            }
        } else if ($balita['tinggi'] == 72.0) {
            $median = 8.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
            }
        } else if ($balita['tinggi'] == 72.5) {
            $median = 8.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
            }
        } else if ($balita['tinggi'] == 73.0) {
            $median = 8.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
            }
        } else if ($balita['tinggi'] == 73.5) {
            $median = 8.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
            }
        } else if ($balita['tinggi'] == 74.0) {
            $median = 9.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
            }
        } else if ($balita['tinggi'] == 74.5) {
            $median = 9.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
            }
        } else if ($balita['tinggi'] == 75.0) {
            $median = 9.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
            }
        } else if ($balita['tinggi'] == 75.5) {
            $median = 9.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
            }
        } else if ($balita['tinggi'] == 76.0) {
            $median = 9.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
            }
        } else if ($balita['tinggi'] == 76.5) {
            $median = 9.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
            }
        } else if ($balita['tinggi'] == 77.0) {
            $median = 9.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
            }
        } else if ($balita['tinggi'] == 77.5) {
            $median = 9.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
            }
        } else if ($balita['tinggi'] == 78.0) {
            $median = 9.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
            }
        } else if ($balita['tinggi'] == 78.5) {
            $median = 9.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
            }
        } else if ($balita['tinggi'] == 79.0) {
            $median = 9.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
            }
        } else if ($balita['tinggi'] == 79.5) {
            $median = 10.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
            }
        } else if ($balita['tinggi'] == 80.0) {
            $median = 10.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
            }
        } else if ($balita['tinggi'] == 80.5) {
            $median = 10.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
            }
        } else if ($balita['tinggi'] == 81.0) {
            $median = 10.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
            }
        } else if ($balita['tinggi'] == 81.5) {
            $median = 10.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
            }
        } else if ($balita['tinggi'] == 82.0) {
            $median = 10.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
            }
        } else if ($balita['tinggi'] == 82.5) {
            $median = 10.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
            }
        } else if ($balita['tinggi'] == 83.0) {
            $median = 10.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
            }
        } else if ($balita['tinggi'] == 83.5) {
            $median = 10.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
            }
        } else if ($balita['tinggi'] == 84.0) {
            $median = 11.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.0 - $median);
            }
        } else if ($balita['tinggi'] == 84.5) {
            $median = 11.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
            }
        } else if ($balita['tinggi'] == 85.0) {
            $median = 11.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
            }
        } else if ($balita['tinggi'] == 85.5) {
            $median = 11.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
            }
        } else if ($balita['tinggi'] == 86.0) {
            $median = 11.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
            }
        } else if ($balita['tinggi'] == 86.5) {
            $median = 11.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
            }
        } else if ($balita['tinggi'] == 87.0) {
            $median = 11.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
            }
        } else if ($balita['tinggi'] == 87.5) {
            $median = 11.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
            }
        } else if ($balita['tinggi'] == 88.0) {
            $median = 12.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.1 - $median);
            }
        } else if ($balita['tinggi'] == 88.5) {
            $median = 12.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
            }
        } else if ($balita['tinggi'] == 89.0) {
            $median = 12.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
            }
        } else if ($balita['tinggi'] == 89.5) {
            $median = 12.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
            }
        } else if ($balita['tinggi'] == 90.0) {
            $median = 12.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
            }
        } else if ($balita['tinggi'] == 90.5) {
            $median = 12.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
            }
        } else if ($balita['tinggi'] == 91.0) {
            $median = 12.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
            }
        } else if ($balita['tinggi'] == 91.5) {
            $median = 12.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
            }
        } else if ($balita['tinggi'] == 92.0) {
            $median = 13.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
            }
        } else if ($balita['tinggi'] == 92.5) {
            $median = 13.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
            }
        } else if ($balita['tinggi'] == 93.0) {
            $median = 13.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
            }
        } else if ($balita['tinggi'] == 93.5) {
            $median = 13.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
            }
        } else if ($balita['tinggi'] == 94.0) {
            $median = 13.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
            }
        } else if ($balita['tinggi'] == 94.5) {
            $median = 13.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
            }
        } else if ($balita['tinggi'] == 95.0) {
            $median = 13.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.0 - $median);
            }
        } else if ($balita['tinggi'] == 95.5) {
            $median = 13.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
            }
        } else if ($balita['tinggi'] == 96.0) {
            $median = 14.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
            }
        } else if ($balita['tinggi'] == 96.5) {
            $median = 14.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
            }
        } else if ($balita['tinggi'] == 97.0) {
            $median = 14.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
            }
        } else if ($balita['tinggi'] == 97.5) {
            $median = 14.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
            }
        } else if ($balita['tinggi'] == 98.0) {
            $median = 14.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
            }
        } else if ($balita['tinggi'] == 98.5) {
            $median = 14.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.0 - $median);
            }
        } else if ($balita['tinggi'] == 99.0) {
            $median = 14.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
            }
        } else if ($balita['tinggi'] == 99.5) {
            $median = 14.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.3 - $median);
            }
        } else if ($balita['tinggi'] == 100.0) {
            $median = 15.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
            }
        } else if ($balita['tinggi'] == 100.5) {
            $median = 15.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.6 - $median);
            }
        } else if ($balita['tinggi'] == 101.0) {
            $median = 15.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.8 - $median);
            }
        } else if ($balita['tinggi'] == 101.5) {
            $median = 15.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
            }
        } else if ($balita['tinggi'] == 102.0) {
            $median = 15.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.1 - $median);
            }
        } else if ($balita['tinggi'] == 102.5) {
            $median = 15.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
            }
        } else if ($balita['tinggi'] == 103.0) {
            $median = 15.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
            }
        } else if ($balita['tinggi'] == 103.5) {
            $median = 16.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.6 - $median);
            }
        } else if ($balita['tinggi'] == 104.0) {
            $median = 16.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
            }
        } else if ($balita['tinggi'] == 104.5) {
            $median = 16.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
            }
        } else if ($balita['tinggi'] == 105.0) {
            $median = 16.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
            }
        } else if ($balita['tinggi'] == 105.5) {
            $median = 16.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
            }
        } else if ($balita['tinggi'] == 106.0) {
            $median = 16.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
            }
        } else if ($balita['tinggi'] == 106.5) {
            $median = 17.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.7 - $median);
            }
        } else if ($balita['tinggi'] == 107.0) {
            $median = 17.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.9 - $median);
            }
        } else if ($balita['tinggi'] == 107.5) {
            $median = 17.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.1 - $median);
            }
        } else if ($balita['tinggi'] == 108.0) {
            $median = 17.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.3 - $median);
            }
        } else if ($balita['tinggi'] == 108.5) {
            $median = 17.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.5 - $median);
            }
        } else if ($balita['tinggi'] == 109.0) {
            $median = 18.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.7 - $median);
            }
        } else if ($balita['tinggi'] == 109.5) {
            $median = 18.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
            }
        } else if ($balita['tinggi'] == 110.0) {
            $median = 18.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.2 - $median);
            }
        }
    } else if ($balita['umur'] >= 24) {
        if ($balita['tinggi'] == 65.0) {
            $median = 7.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
            }
        } else if ($balita['tinggi'] == 65.5) {
            $median = 7.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
            }
        } else if ($balita['tinggi'] == 66.0) {
            $median = 7.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
            }
        } else if ($balita['tinggi'] == 66.5) {
            $median = 7.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
            }
        } else if ($balita['tinggi'] == 67.0) {
            $median = 7.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
            }
        } else if ($balita['tinggi'] == 67.5) {
            $median = 7.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
            }
        } else if ($balita['tinggi'] == 68.0) {
            $median = 7.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
            }
        } else if ($balita['tinggi'] == 68.5) {
            $median = 8.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
            }
        } else if ($balita['tinggi'] == 69.0) {
            $median = 8.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (8.9 - $median);
            }
        } else if ($balita['tinggi'] == 69.5) {
            $median = 8.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
            }
        } else if ($balita['tinggi'] == 70.0) {
            $median = 8.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
            }
        } else if ($balita['tinggi'] == 70.5) {
            $median = 8.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
            }
        } else if ($balita['tinggi'] == 71.0) {
            $median = 8.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
            }
        } else if ($balita['tinggi'] == 71.5) {
            $median = 8.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
            }
        } else if ($balita['tinggi'] == 72.0) {
            $median = 8.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
            }
        } else if ($balita['tinggi'] == 72.5) {
            $median = 8.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
            }
        } else if ($balita['tinggi'] == 73.0) {
            $median = 8.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
            }
        } else if ($balita['tinggi'] == 73.5) {
            $median = 9.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
            }
        } else if ($balita['tinggi'] == 74.0) {
            $median = 9.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
            }
        } else if ($balita['tinggi'] == 74.5) {
            $median = 9.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
            }
        } else if ($balita['tinggi'] == 75.0) {
            $median = 9.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
            }
        } else if ($balita['tinggi'] == 75.5) {
            $median = 9.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
            }
        } else if ($balita['tinggi'] == 76.0) {
            $median = 9.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
            }
        } else if ($balita['tinggi'] == 76.5) {
            $median = 9.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
            }
        } else if ($balita['tinggi'] == 77.0) {
            $median = 9.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
            }
        } else if ($balita['tinggi'] == 77.5) {
            $median = 9.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
            }
        } else if ($balita['tinggi'] == 78.0) {
            $median = 9.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
            }
        } else if ($balita['tinggi'] == 78.5) {
            $median = 9.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
            }
        } else if ($balita['tinggi'] == 79.0) {
            $median = 10.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
            }
        } else if ($balita['tinggi'] == 79.5) {
            $median = 10.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
            }
        } else if ($balita['tinggi'] == 80.0) {
            $median = 10.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
            }
        } else if ($balita['tinggi'] == 80.5) {
            $median = 10.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
            }
        } else if ($balita['tinggi'] == 81.0) {
            $median = 10.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
            }
        } else if ($balita['tinggi'] == 81.5) {
            $median = 10.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
            }
        } else if ($balita['tinggi'] == 82.0) {
            $median = 10.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
            }
        } else if ($balita['tinggi'] == 82.5) {
            $median = 10.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
            }
        } else if ($balita['tinggi'] == 83.0) {
            $median = 10.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
            }
        } else if ($balita['tinggi'] == 83.5) {
            $median = 11.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
            }
        } else if ($balita['tinggi'] == 84.0) {
            $median = 11.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
            }
        } else if ($balita['tinggi'] == 84.5) {
            $median = 11.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
            }
        } else if ($balita['tinggi'] == 85.0) {
            $median = 11.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
            }
        } else if ($balita['tinggi'] == 85.5) {
            $median = 11.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
            }
        } else if ($balita['tinggi'] == 85.5) {
            $median = 11.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
            }
        } else if ($balita['tinggi'] == 86.0) {
            $median = 11.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
            }
        } else if ($balita['tinggi'] == 86.5) {
            $median = 11.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
            }
        } else if ($balita['tinggi'] == 87.0) {
            $median = 11.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
            }
        } else if ($balita['tinggi'] == 87.5) {
            $median = 12.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
            }
        } else if ($balita['tinggi'] == 88.0) {
            $median = 12.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
            }
        } else if ($balita['tinggi'] == 88.5) {
            $median = 12.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
            }
        } else if ($balita['tinggi'] == 88.5) {
            $median = 12.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
            }
        } else if ($balita['tinggi'] == 89.0) {
            $median = 12.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.6 - $median);
            }
        } else if ($balita['tinggi'] == 89.5) {
            $median = 12.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
            }
        } else if ($balita['tinggi'] == 90.0) {
            $median = 12.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
            }
        } else if ($balita['tinggi'] == 90.5) {
            $median = 12.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
            }
        } else if ($balita['tinggi'] == 91.0) {
            $median = 12.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
            }
        } else if ($balita['tinggi'] == 91.5) {
            $median = 13.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
            }
        } else if ($balita['tinggi'] == 92.0) {
            $median = 13.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
            }
        } else if ($balita['tinggi'] == 92.5) {
            $median = 13.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
            }
        } else if ($balita['tinggi'] == 93.0) {
            $median = 13.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
            }
        } else if ($balita['tinggi'] == 93.5) {
            $median = 13.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.8 - $median);
            }
        } else if ($balita['tinggi'] == 94.0) {
            $median = 13.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
            }
        } else if ($balita['tinggi'] == 94.5) {
            $median = 13.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
            }
        } else if ($balita['tinggi'] == 95.0) {
            $median = 13.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
            }
        } else if ($balita['tinggi'] == 95.5) {
            $median = 14.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
            }
        } else if ($balita['tinggi'] == 96.0) {
            $median = 14.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
            }
        } else if ($balita['tinggi'] == 96.5) {
            $median = 14.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
            }
        } else if ($balita['tinggi'] == 97.0) {
            $median = 14.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.8 - $median);
            }
        } else if ($balita['tinggi'] == 97.5) {
            $median = 14.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
            }
        } else if ($balita['tinggi'] == 98.0) {
            $median = 14.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.1 - $median);
            }
        } else if ($balita['tinggi'] == 98.5) {
            $median = 14.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
            }
        } else if ($balita['tinggi'] == 99.0) {
            $median = 14.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.4 - $median);
            }
        } else if ($balita['tinggi'] == 99.5) {
            $median = 15.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
            }
        } else if ($balita['tinggi'] == 100.0) {
            $median = 15.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.7 - $median);
            }
        } else if ($balita['tinggi'] == 100.5) {
            $median = 15.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
            }
        } else if ($balita['tinggi'] == 101.0) {
            $median = 15.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
            }
        } else if ($balita['tinggi'] == 101.5) {
            $median = 15.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.2 - $median);
            }
        } else if ($balita['tinggi'] == 102.0) {
            $median = 15.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.4 - $median);
            }
        } else if ($balita['tinggi'] == 102.5) {
            $median = 16.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
            }
        } else if ($balita['tinggi'] == 103.0) {
            $median = 16.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.7 - $median);
            }
        } else if ($balita['tinggi'] == 103.5) {
            $median = 16.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (17.9 - $median);
            }
        } else if ($balita['tinggi'] == 104.0) {
            $median = 16.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.1 - $median);
            }
        } else if ($balita['tinggi'] == 104.5) {
            $median = 16.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
            }
        } else if ($balita['tinggi'] == 105.0) {
            $median = 16.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
            }
        } else if ($balita['tinggi'] == 105.5) {
            $median = 16.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.6 - $median);
            }
        } else if ($balita['tinggi'] == 106.0) {
            $median = 17.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (18.8 - $median);
            }
        } else if ($balita['tinggi'] == 106.0) {
            $median = 17.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
            }
        } else if ($balita['tinggi'] == 106.5) {
            $median = 17.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
            }
        } else if ($balita['tinggi'] == 107.0) {
            $median = 17.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.2 - $median);
            }
        } else if ($balita['tinggi'] == 107.5) {
            $median = 17.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.4 - $median);
            }
        } else if ($balita['tinggi'] == 108.0) {
            $median = 17.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.6 - $median);
            }
        } else if ($balita['tinggi'] == 108.5) {
            $median = 18.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
            }
        } else if ($balita['tinggi'] == 109.0) {
            $median = 18.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
            }
        } else if ($balita['tinggi'] == 109.5) {
            $median = 18.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.3 - $median);
            }
        } else if ($balita['tinggi'] == 110.0) {
            $median = 18.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.5 - $median);
            }
        } else if ($balita['tinggi'] == 110.5) {
            $median = 18.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.7 - $median);
            }
        } else if ($balita['tinggi'] == 111.0) {
            $median = 19.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (20.9 - $median);
            }
        } else if ($balita['tinggi'] == 111.5) {
            $median = 19.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.2 - $median);
            }
        } else if ($balita['tinggi'] == 112.0) {
            $median = 19.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.4 - $median);
            }
        } else if ($balita['tinggi'] == 112.5) {
            $median = 19.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 17.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.6 - $median);
            }
        } else if ($balita['tinggi'] == 113.0) {
            $median = 19.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (21.8 - $median);
            }
        } else if ($balita['tinggi'] == 113.5) {
            $median = 20.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.1 - $median);
            }
        } else if ($balita['tinggi'] == 114.0) {
            $median = 20.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.3 - $median);
            }
        } else if ($balita['tinggi'] == 114.5) {
            $median = 20.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.6 - $median);
            }
        } else if ($balita['tinggi'] == 115.0) {
            $median = 20.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 18.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (22.8 - $median);
            }
        } else if ($balita['tinggi'] == 115.5) {
            $median = 20.9;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.0);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.0 - $median);
            }
        } else if ($balita['tinggi'] == 116.0) {
            $median = 21.1;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.2);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.3 - $median);
            }
        } else if ($balita['tinggi'] == 116.5) {
            $median = 21.3;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.4);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.5 - $median);
            }
        } else if ($balita['tinggi'] == 117.0) {
            $median = 21.5;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.6);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (23.8 - $median);
            }
        } else if ($balita['tinggi'] == 117.5) {
            $median = 21.7;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.8);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.0 - $median);
            }
        } else if ($balita['tinggi'] == 118.0) {
            $median = 22.0;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 19.9);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.2 - $median);
            }
        } else if ($balita['tinggi'] == 118.5) {
            $median = 22.2;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.1);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.5 - $median);
            }
        } else if ($balita['tinggi'] == 119.0) {
            $median = 22.4;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.3);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (24.7 - $median);
            }
        } else if ($balita['tinggi'] == 119.5) {
            $median = 22.6;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.5);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (25.0 - $median);
            }
        } else if ($balita['tinggi'] == 120.0) {
            $median = 22.8;
            if ($balita['berat'] < $median) {
                $zbbtb = ($balita['berat'] - $median) / ($median - 20.7);
            } else {
                $zbbtb = ($balita['berat'] - $median) / (25.2 - $median);
            }
        }
    } else {
        echo "<td>data tidak ditemukan</td>";
    }
}
// akhir bb/tb cowo n cewe
?>