<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5.3 Timeline</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .timeline {
      position: relative;
      padding: 20px 0;
      list-style: none;
    }

    .timeline::before {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      width: 4px;
      background: #e9ecef;
      left: 20px;
      margin-right: -2px;
    }

    .timeline-item {
      margin-bottom: 20px;
      position: relative;
    }

    .timeline-item::before,
    .timeline-item::after {
      content: '';
      display: table;
    }

    .timeline-item::after {
      clear: both;
    }

    .timeline-item::before,
    .timeline-item::after {
      content: '';
      display: table;
    }

    .timeline-item::after {
      clear: both;
    }

    .timeline-badge {
      color: #fff;
      width: 40px;
      height: 40px;
      line-height: 40px;
      font-size: 1.2rem;
      text-align: center;
      position: absolute;
      top: 0;
      left: 0;
      margin-left: -20px;
      background: #0d6efd;
      border-radius: 50%;
      z-index: 100;
    }

    .timeline-panel {
      position: relative;
      width: calc(100% - 60px);
      float: right;
      padding: 10px 20px;
      border: 1px solid #e9ecef;
      background: #fff;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-6">
            <div class="fw-bold fs-5">ZF017</div>
            <div>Ultimate Class Sleeper</div>
          </div>
          <div class="col-6 text-end">
            <div class="fs-5 fw-bold">Rp. 310,000</div>
          </div>
        </div>
        <hr class="my-2">
        <div class="fw-bold text-danger">Rabu, 17 Juli 2024</div>
        <hr class="my-2">
        <div class="mb-2">
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-badge"><i class="fas fa-dot-circle"></i></span>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h5 class="timeline-title">19:30 Makassar</h5>
                </div>
                <div class="timeline-body">
                  <p>Perwakilan Perintis Kemerdekaan</p>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-badge"><i class="fas fa-dot-circle"></i></span>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h5 class="timeline-title">06:00 Mamuju</h5>
                </div>
                <div class="timeline-body">
                  <p>Perwakilan Terminal Mamuju</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <hr class="my-2">
        <div class="fw-bold text-danger">Fasilitas</div>
        <div class="row mt-2">
          <div class="col-6 mb-2">
            <div class="d-flex align-items-center">
              <i class="fas fa-snowflake text-secondary me-2"></i>
              <span>Air Conditioning</span>
            </div>
          </div>
          <div class="col-6 mb-2">
            <div class="d-flex align-items-center">
              <i class="fas fa-briefcase text-secondary me-2"></i>
              <span>Free Bagasi 20Kg</span>
            </div>
          </div>
          <div class="col-6 mb-2">
            <div class="d-flex align-items-center">
              <i class="fas fa-plug text-secondary me-2"></i>
              <span>Usb Charger</span>
            </div>
          </div>
          <div class="col-6 mb-2">
            <div class="d-flex align-items-center">
              <i class="fas fa-cheese text-secondary me-2"></i>
              <span>Snack Box</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
