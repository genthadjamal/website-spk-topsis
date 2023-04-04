<?php
if ($balita['jenis_kelamin'] == 'Perempuan') {
    if ($balita['umur'] == 0) {
        $median = 3.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 2.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (3.7 - $median);
        }
    } else if ($balita['umur'] == 1) {
        $median = 4.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 3.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (4.8 - $median);
        }
    } else if ($balita['umur'] == 2) {
        $median = 5.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 4.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (5.8 - $median);
        }
    } else if ($balita['umur'] == 3) {
        $median = 5.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 5.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (6.6 - $median);
        }
    } else if ($balita['umur'] == 4) {
        $median = 6.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 5.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (7.3 - $median);
        }
    } else if ($balita['umur'] == 5) {
        $median = 6.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 6.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (7.8 - $median);
        }
    } else if ($balita['umur'] == 6) {
        $median = 7.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 6.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (8.2 - $median);
        }
    } else if ($balita['umur'] == 7) {
        $median = 7.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 6.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (8.6 - $median);
        }
    } else if ($balita['umur'] == 8) {
        $median = 7.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.0 - $median);
        }
    } else if ($balita['umur'] == 9) {
        $median = 8.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.3 - $median);
        }
    } else if ($balita['umur'] == 10) {
        $median = 8.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.6 - $median);
        }
    } else if ($balita['umur'] == 11) {
        $median = 8.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.9 - $median);
        }
    } else if ($balita['umur'] == 12) {
        $median = 8.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.1 - $median);
        }
    } else if ($balita['umur'] == 13) {
        $median = 9.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.4 - $median);
        }
    } else if ($balita['umur'] == 14) {
        $median = 9.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.6 - $median);
        }
    } else if ($balita['umur'] == 15) {
        $median = 9.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.9 - $median);
        }
    } else if ($balita['umur'] == 16) {
        $median = 9.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.1 - $median);
        }
    } else if ($balita['umur'] == 17) {
        $median = 10.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.4 - $median);
        }
    } else if ($balita['umur'] == 18) {
        $median = 10.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.6 - $median);
        }
    } else if ($balita['umur'] == 19) {
        $median = 10.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.8 - $median);
        }
    } else if ($balita['umur'] == 20) {
        $median = 10.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.1 - $median);
        }
    } else if ($balita['umur'] == 21) {
        $median = 10.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.3 - $median);
        }
    } else if ($balita['umur'] == 22) {
        $median = 11.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.5 - $median);
        }
    } else if ($balita['umur'] == 23) {
        $median = 11.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.8 - $median);
        }
    } else if ($balita['umur'] == 24) {
        $median = 11.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.0 - $median);
        }
    } else if ($balita['umur'] == 25) {
        $median = 11.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.3 - $median);
        }
    } else if ($balita['umur'] == 26) {
        $median = 11.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.5 - $median);
        }
    } else if ($balita['umur'] == 27) {
        $median = 12.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.7 - $median);
        }
    } else if ($balita['umur'] == 28) {
        $median = 12.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.0 - $median);
        }
    } else if ($balita['umur'] == 29) {
        $median = 12.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.2 - $median);
        }
    } else if ($balita['umur'] == 30) {
        $median = 12.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.4 - $median);
        }
    } else if ($balita['umur'] == 31) {
        $median = 12.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.7 - $median);
        }
    } else if ($balita['umur'] == 32) {
        $median = 13.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.9 - $median);
        }
    } else if ($balita['umur'] == 33) {
        $median = 13.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.1 - $median);
        }
    } else if ($balita['umur'] == 34) {
        $median = 13.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.4 - $median);
        }
    } else if ($balita['umur'] == 35) {
        $median = 13.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.6 - $median);
        }
    } else if ($balita['umur'] == 36) {
        $median = 13.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.8 - $median);
        }
    } else if ($balita['umur'] == 37) {
        $median = 14.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.0 - $median);
        }
    } else if ($balita['umur'] == 38) {
        $median = 14.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.3 - $median);
        }
    } else if ($balita['umur'] == 39) {
        $median = 14.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.5 - $median);
        }
    } else if ($balita['umur'] == 40) {
        $median = 14.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.7 - $median);
        }
    } else if ($balita['umur'] == 41) {
        $median = 14.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.9 - $median);
        }
    } else if ($balita['umur'] == 42) {
        $median = 15.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.2 - $median);
        }
    } else if ($balita['umur'] == 43) {
        $median = 15.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.4 - $median);
        }
    } else if ($balita['umur'] == 44) {
        $median = 15.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.6 - $median);
        }
    } else if ($balita['umur'] == 45) {
        $median = 15.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.8 - $median);
        }
    } else if ($balita['umur'] == 46) {
        $median = 15.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.1 - $median);
        }
    } else if ($balita['umur'] == 47) {
        $median = 15.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.3 - $median);
        }
    } else if ($balita['umur'] == 48) {
        $median = 16.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.5 - $median);
        }
    } else if ($balita['umur'] == 49) {
        $median = 16.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.8 - $median);
        }
    } else if ($balita['umur'] == 50) {
        $median = 16.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.0 - $median);
        }
    } else if ($balita['umur'] == 51) {
        $median = 16.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.2 - $median);
        }
    } else if ($balita['umur'] == 52) {
        $median = 16.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.4 - $median);
        }
    } else if ($balita['umur'] == 53) {
        $median = 17.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.7 - $median);
        }
    } else if ($balita['umur'] == 54) {
        $median = 17.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.9 - $median);
        }
    } else if ($balita['umur'] == 55) {
        $median = 17.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.1 - $median);
        }
    } else if ($balita['umur'] == 56) {
        $median = 17.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.3 - $median);
        }
    } else if ($balita['umur'] == 57) {
        $median = 17.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.6 - $median);
        }
    } else if ($balita['umur'] == 58) {
        $median = 17.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.8 - $median);
        }
    } else if ($balita['umur'] == 59) {
        $median = 18.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (21.0 - $median);
        }
    } else if ($balita['umur'] == 60) {
        $median = 18.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (21.2 - $median);
        }
    }
    // akhir perhitungan zscore bb/u perempuan

} else if ($balita['jenis_kelamin'] == 'Laki-laki') {
    if ($balita['umur'] == 0) {
        $median = 3.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 2.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (3.9 - $median);
        }
    } else if ($balita['umur'] == 1) {
        $median = 4.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 3.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (5.1 - $median);
        }
    } else if ($balita['umur'] == 2) {
        $median = 5.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 4.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (6.3 - $median);
        }
    } else if ($balita['umur'] == 3) {
        $median = 6.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 5.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (7.2 - $median);
        }
    } else if ($balita['umur'] == 4) {
        $median = 7.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 6.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (7.8 - $median);
        }
    } else if ($balita['umur'] == 5) {
        $median = 7.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 6.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (8.4 - $median);
        }
    } else if ($balita['umur'] == 6) {
        $median = 7.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (8.8 - $median);
        }
    } else if ($balita['umur'] == 7) {
        $median = 8.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.2 - $median);
        }
    } else if ($balita['umur'] == 8) {
        $median = 8.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 7.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.6 - $median);
        }
    } else if ($balita['umur'] == 9) {
        $median = 8.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (9.9 - $median);
        }
    } else if ($balita['umur'] == 10) {
        $median = 9.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.2 - $median);
        }
    } else if ($balita['umur'] == 11) {
        $median = 9.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.5 - $median);
        }
    } else if ($balita['umur'] == 12) {
        $median = 9.6;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (10.8 - $median);
        }
    } else if ($balita['umur'] == 13) {
        $median = 9.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 8.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.0 - $median);
        }
    } else if ($balita['umur'] == 14) {
        $median = 10.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.3 - $median);
        }
    } else if ($balita['umur'] == 15) {
        $median = 10.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.5 - $median);
        }
    } else if ($balita['umur'] == 16) {
        $median = 10.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (11.7 - $median);
        }
    } else if ($balita['umur'] == 17) {
        $median = 10.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.0 - $median);
        }
    } else if ($balita['umur'] == 18) {
        $median = 10.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 9.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.2 - $median);
        }
    } else if ($balita['umur'] == 19) {
        $median = 11.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.5 - $median);
        }
    } else if ($balita['umur'] == 20) {
        $median = 11.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.7 - $median);
        }
    } else if ($balita['umur'] == 21) {
        $median = 11.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (12.9 - $median);
        }
    } else if ($balita['umur'] == 22) {
        $median = 11.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.2 - $median);
        }
    } else if ($balita['umur'] == 23) {
        $median = 12.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.4 - $median);
        }
    } else if ($balita['umur'] == 24) {
        $median = 12.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 10.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.6 - $median);
        }
    } else if ($balita['umur'] == 25) {
        $median = 12.4;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (13.9 - $median);
        }
    } else if ($balita['umur'] == 26) {
        $median = 12.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.1 - $median);
        }
    } else if ($balita['umur'] == 27) {
        $median = 12.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.3 - $median);
        }
    } else if ($balita['umur'] == 28) {
        $median = 12.9;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.5 - $median);
        }
    } else if ($balita['umur'] == 29) {
        $median = 13.1;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (14.8 - $median);
        }
    } else if ($balita['umur'] == 30) {
        $median = 13.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 11.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.0 - $median);
        }
    } else if ($balita['umur'] == 31) {
        $median = 13.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.2 - $median);
        }
    } else if ($balita['umur'] == 32) {
        $median = 13.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.4 - $median);
        }
    } else if ($balita['umur'] == 33) {
        $median = 13.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.6 - $median);
        }
    } else if ($balita['umur'] == 34) {
        $median = 14.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (15.8 - $median);
        }
    } else if ($balita['umur'] == 35) {
        $median = 14.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.0 - $median);
        }
    } else if ($balita['umur'] == 36) {
        $median = 14.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.2 - $median);
        }
    } else if ($balita['umur'] == 37) {
        $median = 14.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 12.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.4 - $median);
        }
    } else if ($balita['umur'] == 38) {
        $median = 14.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.6 - $median);
        }
    } else if ($balita['umur'] == 39) {
        $median = 14.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (16.8 - $median);
        }
    } else if ($balita['umur'] == 40) {
        $median = 15.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.0 - $median);
        }
    } else if ($balita['umur'] == 41) {
        $median = 15.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.2 - $median);
        }
    } else if ($balita['umur'] == 42) {
        $median = 15.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.4 - $median);
        }
    } else if ($balita['umur'] == 43) {
        $median = 15.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.6 - $median);
        }
    } else if ($balita['umur'] == 44) {
        $median = 15.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 13.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (17.8 - $median);
        }
    } else if ($balita['umur'] == 45) {
        $median = 15.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.0 - $median);
        }
    } else if ($balita['umur'] == 46) {
        $median = 16.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.2 - $median);
        }
    } else if ($balita['umur'] == 47) {
        $median = 16.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.3);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.4 - $median);
        }
    } else if ($balita['umur'] == 48) {
        $median = 16.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.6 - $median);
        }
    } else if ($balita['umur'] == 49) {
        $median = 16.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (18.8 - $median);
        }
    } else if ($balita['umur'] == 50) {
        $median = 16.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.7);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.0 - $median);
        }
    } else if ($balita['umur'] == 51) {
        $median = 16.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 14.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.2 - $median);
        }
    } else if ($balita['umur'] == 52) {
        $median = 17.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.4 - $median);
        }
    } else if ($balita['umur'] == 53) {
        $median = 17.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.1);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.6 - $median);
        }
    } else if ($balita['umur'] == 54) {
        $median = 17.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.2);
        } else {
            $zscore = ($balita['berat'] - $median) / (19.8 - $median);
        }
    } else if ($balita['umur'] == 55) {
        $median = 17.5;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.4);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.0 - $median);
        }
    } else if ($balita['umur'] == 56) {
        $median = 17.7;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.5);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.2 - $median);
        }
    } else if ($balita['umur'] == 57) {
        $median = 17.8;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.6);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.4 - $median);
        }
    } else if ($balita['umur'] == 58) {
        $median = 18.0;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.8);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.6 - $median);
        }
    } else if ($balita['umur'] == 59) {
        $median = 18.2;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 15.9);
        } else {
            $zscore = ($balita['berat'] - $median) / (20.8 - $median);
        }
    } else if ($balita['umur'] == 60) {
        $median = 18.3;
        if ($balita['berat'] < $median) {
            $zscore = ($balita['berat'] - $median) / ($median - 16.0);
        } else {
            $zscore = ($balita['berat'] - $median) / (21.0 - $median);
        }
    }
} else {
    echo "<td>jenis kelamin tidak ditemukan</td>";
}
