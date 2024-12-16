<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement Process</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="src/css/pr.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
        }

        .process-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px 0;
        }

        .process-btn {
            width: 100%;
            height: 70px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #ffffff;
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .process-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .process-btn.active {
            background: linear-gradient(45deg, #007bff, #0056b3);
        }

        .process-btn.disabled {
            background: #e9ecef;
            color: #adb5bd;
            pointer-events: none;
        }

        .card-info .card {
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 15px;
        }

        .card-info .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="container">
                <div class="card p-5">
                    <h2 class="text-center header mb-4">Procurement Process</h2>

                    <div class="card-info">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="header-card">Purchase Request Details</h5>
                                        <p><strong>PR Number:</strong></p>
                                        <p>
                                            <strong>Status:</strong>
                                        </p>
                                        <p><strong>Submitted Date:</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-container">
                        <a href="app.php" class="btn btn-link">
                            <button class="process-btn active">APP</button>
                        </a>
                        <a href="ppmp_list.php" class="btn btn-link">
                            <button class="process-btn">PPMP</button>
                        </a>
                        <a href="pr.php" class="btn btn-link">
                            <button class="process-btn">PR</button>
                        </a>
                        <a href="pmf.php" class="btn btn-link">
                            <button class="process-btn">PMAF</button>
                        </a>
                        <a href="rfq.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>RFQ</button>
                        </a>
                        <a href="aoq.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>AOQ</button>
                        </a>
                        <a href="reso.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>RESO</button>
                        </a>
                        <a href="noa.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>NOA</button>
                        </a>
                        <a href="ntp.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>NTP</button>
                        </a>
                        <a href="po.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>PO</button>
                        </a>
                        <a href="pmr.php" class="btn btn-link">
                            <button class="process-btn disabled" disabled>PMR</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>