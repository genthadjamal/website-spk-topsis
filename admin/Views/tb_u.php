<?php
if ($balita['jenis_kelamin'] == 'Laki-laki') {
    if ($balita['umur'] == 0) {
        $median = 49.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 48.0);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (51.8 - $median);
        }
    } else if ($balita['umur'] == 1) {
        $median = 54.7;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 52.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (56.7 - $median);
        }
    } else if ($balita['umur'] == 2) {
        $median = 58.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 56.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (60.4 - $median);
        }
    } else if ($balita['umur'] == 3) {
        $median = 61.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 59.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (63.5 - $median);
        }
    } else if ($balita['umur'] == 4) {
        $median = 63.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 61.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (66.0 - $median);
        }
    } else if ($balita['umur'] == 5) {
        $median = 65.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 63.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (68.0 - $median);
        }
    } else if ($balita['umur'] == 6) {
        $median = 67.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 65.5);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (69.8 - $median);
        }
    } else if ($balita['umur'] == 7) {
        $median = 69.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 67.0);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (71.3 - $median);
        }
    } else if ($balita['umur'] == 8) {
        $median = 70.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 68.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (72.8 - $median);
        }
    } else if ($balita['umur'] == 9) {
        $median = 72.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 69.7);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (74.2 - $median);
        }
    } else if ($balita['umur'] == 10) {
        $median = 73.3;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 71.0);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (75.6 - $median);
        }
    } else if ($balita['umur'] == 11) {
        $median = 74.5;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 72.2);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (76.9 - $median);
        }
    } else if ($balita['umur'] == 12) {
        $median = 75.7;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 73.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (78.1 - $median);
        }
    } else if ($balita['umur'] == 13) {
        $median = 76.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 74.5);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (79.3 - $median);
        }
    } else if ($balita['umur'] == 14) {
        $median = 78.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 75.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (80.5 - $median);
        }
    } else if ($balita['umur'] == 15) {
        $median = 79.1;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 76.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (81.7 - $median);
        }
    } else if ($balita['umur'] == 16) {
        $median = 80.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 77.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (82.8 - $median);
        }
    } else if ($balita['umur'] == 17) {
        $median = 81.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 78.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (83.9 - $median);
        }
    } else if ($balita['umur'] == 18) {
        $median = 82.3;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 79.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (85.0 - $median);
        }
    } else if ($balita['umur'] == 19) {
        $median = 83.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 80.5);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (86.0 - $median);
        }
    } else if ($balita['umur'] == 20) {
        $median = 84.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 81.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (87.0 - $median);
        }
    } else if ($balita['umur'] == 21) {
        $median = 85.1;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 82.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (88.0 - $median);
        }
    } else if ($balita['umur'] == 22) {
        $median = 86.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.1);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (89.0 - $median);
        }
    } else if ($balita['umur'] == 23) {
        $median = 86.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.9);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (89.9 - $median);
        }
    } else if ($balita['umur'] == 24) {
        $median = 87.8;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (90.9 - $median);
        }
        // 24 salah satu
    } else if ($balita['umur'] == 25) {
        $median = 88.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.9);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (91.1 - $median);
        }
    } else if ($balita['umur'] == 26) {
        $median = 88.8;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 85.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (92.0 - $median);
        }
    } else if ($balita['umur'] == 27) {
        $median = 89.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 86.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (92.9 - $median);
        }
    } else if ($balita['umur'] == 28) {
        $median = 90.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.1);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (92.9 - $median);
        }
    } else if ($balita['umur'] == 29) {
        $median = 91.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (94.5 - $median);
        }
    } else if ($balita['umur'] == 30) {
        $median = 91.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (95.3 - $median);
        }
    } else if ($balita['umur'] == 31) {
        $median = 92.7;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.2);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (96.1 - $median);
        }
    } else if ($balita['umur'] == 32) {
        $median = 93.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.9);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (96.9 - $median);
        }
    } else if ($balita['umur'] == 33) {
        $median = 94.1;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 90.5);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (97.6 - $median);
        }
    } else if ($balita['umur'] == 34) {
        $median = 94.8;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.1);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (98.4 - $median);
        }
    } else if ($balita['umur'] == 35) {
        $median = 95.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (99.1 - $median);
        }
    } else if ($balita['umur'] == 36) {
        $median = 96.1;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 92.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (99.8 - $median);
        }
    } else if ($balita['umur'] == 37) {
        $median = 96.7;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.0);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (100.5 - $median);
        }
    } else if ($balita['umur'] == 38) {
        $median = 97.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (101.2 - $median);
        }
    } else if ($balita['umur'] == 39) {
        $median = 98.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.2);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (101.8 - $median);
        }
    } else if ($balita['umur'] == 40) {
        $median = 98.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.7);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (102.5 - $median);
        }
    } else if ($balita['umur'] == 41) {
        $median = 99.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (103.2 - $median);
        }
    } else if ($balita['umur'] == 42) {
        $median = 99.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.9);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (103.8 - $median);
        }
    } else if ($balita['umur'] == 43) {
        $median = 100.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.4);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (104.5 - $median);
        }
    } else if ($balita['umur'] == 44) {
        $median = 101.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.0);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (105.1 - $median);
        }
    } else if ($balita['umur'] == 45) {
        $median = 101.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.5);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (105.7 - $median);
        }
    } else if ($balita['umur'] == 46) {
        $median = 102.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.1);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (106.3 - $median);
        }
    } else if ($balita['umur'] == 47) {
        $median = 102.8;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.6);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (106.9 - $median);
        }
    } else if ($balita['umur'] == 48) {
        $median = 103.3;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.1);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (107.5 - $median);
        }
    } else if ($balita['umur'] == 49) {
        $median = 103.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.7);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (108.1 - $median);
        }
    } else if ($balita['umur'] == 50) {
        $median = 104.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.2);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (108.7 - $median);
        }
    } else if ($balita['umur'] == 51) {
        $median = 105.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.7);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (109.3 - $median);
        }
    } else if ($balita['umur'] == 52) {
        $median = 105.6;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.2);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (109.9 - $median);
        }
    } else if ($balita['umur'] == 53) {
        $median = 106.1;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.7);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (110.5 - $median);
        }
    } else if ($balita['umur'] == 54) {
        $median = 106.7;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (111.1 - $median);
        }
    } else if ($balita['umur'] == 55) {
        $median = 107.2;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (111.7 - $median);
        }
    } else if ($balita['umur'] == 56) {
        $median = 107.8;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (112.3 - $median);
        }
    } else if ($balita['umur'] == 57) {
        $median = 108.3;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (112.8 - $median);
        }
    } else if ($balita['umur'] == 58) {
        $median = 108.9;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (113.4 - $median);
        }
    } else if ($balita['umur'] == 59) {
        $median = 109.4;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.8);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (114.0 - $median);
        }
    } else if ($balita['umur'] == 60) {
        $median = 110.0;
        if ($balita['tinggi'] < $median) {
            $zscoretb = ($balita['tinggi'] - $median) / ($median - 105.3);
        } else {
            $zscoretb = ($balita['tinggi'] - $median) / (114.6 - $median);
        }
    }
}
?>

  <?php
    if ($balita['jenis_kelamin'] == 'Perempuan') {
        if ($balita['umur'] == 0) {
            $median = 49.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 47.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (51.0 - $median);
            }
        } else if ($balita['umur'] == 1) {
            $median = 53.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 51.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (55.6 - $median);
            }
        } else if ($balita['umur'] == 2) {
            $median = 57.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 55.0);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (59.1 - $median);
            }
        } else if ($balita['umur'] == 3) {
            $median = 59.8;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 57.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (61.9 - $median);
            }
        } else if ($balita['umur'] == 4) {
            $median = 62.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 59.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (64.3 - $median);
            }
        } else if ($balita['umur'] == 5) {
            $median = 64.0;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 61.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (66.2 - $median);
            }
        } else if ($balita['umur'] == 6) {
            $median = 65.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 63.5);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (68.0 - $median);
            }
        } else if ($balita['umur'] == 7) {
            $median = 67.3;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 65.0);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (69.6 - $median);
            }
        } else if ($balita['umur'] == 8) {
            $median = 68.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 66.4);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (71.1 - $median);
            }
        } else if ($balita['umur'] == 9) {
            $median = 70.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 67.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (72.6 - $median);
            }
        } else if ($balita['umur'] == 10) {
            $median = 71.5;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 69.0);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (73.9 - $median);
            }
        } else if ($balita['umur'] == 11) {
            $median = 72.8;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 70.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (75.3 - $median);
            }
        } else if ($balita['umur'] == 12) {
            $median = 74.0;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 71.4);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (76.6 - $median);
            }
        } else if ($balita['umur'] == 13) {
            $median = 75.2;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 72.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (77.8 - $median);
            }
        } else if ($balita['umur'] == 14) {
            $median = 76.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 73.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (79.1 - $median);
            }
        } else if ($balita['umur'] == 15) {
            $median = 77.5;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 74.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (80.2 - $median);
            }
        } else if ($balita['umur'] == 16) {
            $median = 78.6;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 75.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (81.4 - $median);
            }
        } else if ($balita['umur'] == 17) {
            $median = 79.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 76.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (82.5 - $median);
            }
        } else if ($balita['umur'] == 18) {
            $median = 80.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 77.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (83.6 - $median);
            }
        } else if ($balita['umur'] == 19) {
            $median = 81.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 78.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (84.7 - $median);
            }
        } else if ($balita['umur'] == 20) {
            $median = 82.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 79.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (85.7 - $median);
            }
        } else if ($balita['umur'] == 21) {
            $median = 83.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 80.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (86.7 - $median);
            }
        } else if ($balita['umur'] == 22) {
            $median = 84.6;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 81.5);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (87.7 - $median);
            }
        } else if ($balita['umur'] == 23) {
            $median = 85.5;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 82.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (88.7 - $median);
            }
        } else if ($balita['umur'] == 24) {
            $median = 86.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (89.6 - $median);
            }
        } else if ($balita['umur'] == 25) {
            $median = 86.6;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (89.9 - $median);
            }
        } else if ($balita['umur'] == 26) {
            $median = 87.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.1);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (90.8 - $median);
            }
        } else if ($balita['umur'] == 27) {
            $median = 88.3;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (91.7 - $median);
            }
        } else if ($balita['umur'] == 28) {
            $median = 89.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 85.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (92.5 - $median);
            }
        } else if ($balita['umur'] == 29) {
            $median = 89.9;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 86.4);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (93.4 - $median);
            }
        } else if ($balita['umur'] == 30) {
            $median = 90.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.1);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (94.2 - $median);
            }
        } else if ($balita['umur'] == 31) {
            $median = 91.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (95.0 - $median);
            }
        } else if ($balita['umur'] == 32) {
            $median = 92.2;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 88.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (95.8 - $median);
            }
        } else if ($balita['umur'] == 33) {
            $median = 92.9;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (96.6 - $median);
            }
        } else if ($balita['umur'] == 34) {
            $median = 93.6;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (97.4 - $median);
            }
        } else if ($balita['umur'] == 35) {
            $median = 94.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 90.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (98.1 - $median);
            }
        } else if ($balita['umur'] == 36) {
            $median = 95.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (98.9 - $median);
            }
        } else if ($balita['umur'] == 37) {
            $median = 95.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (99.6 - $median);
            }
        } else if ($balita['umur'] == 38) {
            $median = 96.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 92.5);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (100.3 - $median);
            }
        } else if ($balita['umur'] == 39) {
            $median = 97.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.1);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (101.0 - $median);
            }
        } else if ($balita['umur'] == 40) {
            $median = 97.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.8);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (101.7 - $median);
            }
        } else if ($balita['umur'] == 41) {
            $median = 98.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.4);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (102.4 - $median);
            }
        } else if ($balita['umur'] == 42) {
            $median = 99.0;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.0);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (103.1 - $median);
            }
        } else if ($balita['umur'] == 43) {
            $median = 99.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (103.8 - $median);
            }
        } else if ($balita['umur'] == 44) {
            $median = 100.3;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (104.5 - $median);
            }
        } else if ($balita['umur'] == 45) {
            $median = 100.9;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (105.1 - $median);
            }
        } else if ($balita['umur'] == 46) {
            $median = 101.5;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.3);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (105.8 - $median);
            }
        } else if ($balita['umur'] == 47) {
            $median = 102.1;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.9);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (106.4 - $median);
            }
        } else if ($balita['umur'] == 48) {
            $median = 102.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.4);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (107.0 - $median);
            }
        } else if ($balita['umur'] == 49) {
            $median = 103.3;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.0);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (107.7 - $median);
            }
        } else if ($balita['umur'] == 50) {
            $median = 103.9;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.5);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (108.3 - $median);
            }
        } else if ($balita['umur'] == 51) {
            $median = 104.5;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.1);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (108.9 - $median);
            }
        } else if ($balita['umur'] == 52) {
            $median = 105.0;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (109.5 - $median);
            }
        } else if ($balita['umur'] == 53) {
            $median = 105.6;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.1);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (110.1 - $median);
            }
        } else if ($balita['umur'] == 54) {
            $median = 106.2;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.6);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (110.7 - $median);
            }
        } else if ($balita['umur'] == 55) {
            $median = 106.7;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (111.3 - $median);
            }
        } else if ($balita['umur'] == 56) {
            $median = 107.3;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (111.9 - $median);
            }
        } else if ($balita['umur'] == 57) {
            $median = 107.8;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (112.5 - $median);
            }
        } else if ($balita['umur'] == 58) {
            $median = 108.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (113.0 - $median);
            }
        } else if ($balita['umur'] == 59) {
            $median = 108.9;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.2);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (113.6 - $median);
            }
        } else if ($balita['umur'] == 60) {
            $median = 109.4;
            if ($balita['tinggi'] < $median) {
                $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.7);
            } else {
                $zscoretb = ($balita['tinggi'] - $median) / (114.2 - $median);
            }
        }
    }
    ?>