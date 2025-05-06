<?= $this->include('admin/layout/header') ?>

<h1 class="mb-4">Dashboard Admin</h1>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white">
            <div class="card-body">Jumlah User</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h4><?= $jumlah_user ?></h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white">
            <div class="card-body">Jumlah Penulis</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h4><?= $jumlah_penulis ?></h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-white">
            <div class="card-body">Jumlah Berita</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h4><?= $jumlah_berita ?></h4>
            </div>
        </div>
    </div>
</div>

<!-- Placeholder Chart -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-chart-bar me-1"></i>
        Statistik (Placeholder)
    </div>
    <div class="card-body">
        <canvas id="myChart" width="100%" height="40"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['User', 'Penulis', 'Berita'],
            datasets: [{
                label: 'Jumlah',
                data: [<?= $jumlah_user ?>, <?= $jumlah_penulis ?>, <?= $jumlah_berita ?>],
                backgroundColor: ['#007bff', '#28a745', '#ffc107']
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

<?= $this->include('admin/layout/footer') ?>
