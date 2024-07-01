<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form UAS PBO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header, .card-footer {
            text-align: center;
            font-weight: bold;
        }
        .form-group.row {
            margin-bottom: 1rem;
        }
        .form-group label {
            font-weight: normal;
        }
        .form-group .title {
            font-weight: bold;
        }
        .form-group div span {
            font-weight: bold;
        }
        #outputResult {
            text-align: left;
            margin-top: 10px;
        }
        .btn-submit {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"> UAS PBO [102220058] [Ririn Yuli Yani] [TK22A] </div>

            <div class="card-body">
                <form id="uasForm" method="post" action="">
                    <div class="form-group row">
                        <span class="col-sm-4 col-form-label title">Identitas</span>
                        <div class="col-sm-1"><span>:</span></div>
                        <div class="col-sm-7"><span>Isian</span></div>
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7"> 
                            102220058
                            <input type="hidden" id="nim" name="nim" value="102220058">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                            Ririn Yuli Yani
                            <input type="hidden" id="nama" name="nama" value="Ririn Yuli Yani">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                            TK22A
                            <input type="hidden" id="kelas" name="kelas" value="TK22A">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="durasi" class="col-sm-4 col-form-label">Durasi Mengerjakan</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                            1 jam 25 Min
                            <input type="hidden" id="durasi" name="durasi" value="1 jam 25 Min">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="waktu" class="col-sm-4 col-form-label">Waktu Mengerjakan</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                            13.00-15.00
                            <input type="hidden" id="waktu" name="waktu" value="13.00-15.00">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="output" class="col-sm-4 col-form-label">Pilih Output</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">
                            <select class="form-control" id="output" name="output">
                                <option value="nim">NIM</option>
                                <option value="nama">Nama</option>
                                <option value="kelas">Kelas</option>
                                <option value="durasi">Durasi Mengerjakan</option>
                                <option value="waktu">Waktu Mengerjakan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-secondary btn-submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>

                <div id="outputResult" class="mt-3">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $output = $_POST['output'];
                        $result = '';

                        switch ($output) {
                            case 'nim':
                                $result = $_POST['nim'];
                                break;
                            case 'nama':
                                $result = $_POST['nama'];
                                break;
                            case 'kelas':
                                $result = $_POST['kelas'];
                                break;
                            case 'durasi':
                                $result = $_POST['durasi'];
                                break;
                            case 'waktu':
                                $result = $_POST['waktu'];
                                break;
                            default:
                                $result = 'Tidak ada output yang dipilih';
                        }

                        echo '<strong>Output:</strong> ' . htmlspecialchars($result);
                    }
                    ?>
                </div>
            </div>
            <div class="card-footer">
                Jawaban UAS Pemrograman Pemprograman Berorientasi Objek Semester Genap
            </div>
        </div>
    </div>
</body>
</html>
