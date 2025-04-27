<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="admin-dashboard">
    <h1><?= esc($pageTitle) // Dikirim dari controller ?></h1>
    <p>Hello, <?= esc($username) // Dikirim dari controller ?>. You are logged in as an <?= esc($role) // Dikirim dari controller ?>.</p>
    
    <!-- Statistik Dashboard -->
    <div class="admin-stats mb-4">
        <h3 class="mb-3">Statistik Sistem</h3>
        <div class="row stats-container">
            <!-- Kartu Statistik Total Pengguna -->
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-card-detail">
                        <p class="stat-card-number">1,245</p>
                        <p class="stat-card-label">Total Users <span class="text-success"><i class="fas fa-arrow-up"></i> 12%</span></p>
                    </div>
                </div>
            </div>
            
            <!-- Kartu Statistik Pengguna Aktif -->
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon bg-success">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stat-card-detail">
                        <p class="stat-card-number">867</p>
                        <p class="stat-card-label">Active Users <span class="text-success"><i class="fas fa-arrow-up"></i> 5%</span></p>
                    </div>
                </div>
            </div>
            
            <!-- Kartu Statistik Pendaftaran Baru -->
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon bg-warning">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="stat-card-detail">
                        <p class="stat-card-number">43</p>
                        <p class="stat-card-label">New Users <span class="text-danger"><i class="fas fa-arrow-down"></i> 2%</span></p>
                    </div>
                </div>
            </div>
            
            <!-- Kartu Statistik Waktu Aktif Server -->
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-card-icon bg-info">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="stat-card-detail">
                        <p class="stat-card-number">99.8%</p>
                        <p class="stat-card-label">Server Uptime <span class="text-muted">Last 30 days</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Dashboard -->
    <div class="row mb-4">
        <div class="col-lg-8 mb-4">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <h6 class="m-0 font-weight-bold text-primary">Tren Aktivitas Pengguna</h6>
                </div>
                <div class="card-body">
                    <canvas id="userActivityChart" height="320"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <h6 class="m-0 font-weight-bold text-primary">Sumber Lalu Lintas</h6>
                </div>
                <div class="card-body">
                    <canvas id="trafficSourcesChart" height="320"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <h6 class="m-0 font-weight-bold text-primary">Penggunaan Sumber Daya Sistem</h6>
                </div>
                <div class="card-body">
                    <canvas id="systemResourcesChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Aktivitas Terbaru -->
    <div class="card shadow mb-4">
        <div class="card-header bg-light">
            <h6 class="m-0 font-weight-bold text-primary">Aktivitas Sistem Terbaru</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Time</th>
                            <th>User</th>
                            <th>Action</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Today, 10:45 AM</td>
                            <td><span class="badge bg-primary">john_doe</span></td>
                            <td>Login</td>
                            <td>Successful login from 192.168.1.105</td>
                        </tr>
                        <tr>
                            <td>Today, 09:32 AM</td>
                            <td><span class="badge bg-danger">admin_jane</span></td>
                            <td>User Update</td>
                            <td>Modified user permissions for 'marketing_team'</td>
                        </tr>
                        <tr>
                            <td>Yesterday, 5:17 PM</td>
                            <td><span class="badge bg-success">new_user123</span></td>
                            <td>Registration</td>
                            <td>New user account created</td>
                        </tr>
                        <tr>
                            <td>Yesterday, 3:45 PM</td>
                            <td><span class="badge bg-info">system</span></td>
                            <td>Backup</td>
                            <td>Automatic database backup completed</td>
                        </tr>
                        <tr>
                            <td>Yesterday, 2:30 PM</td>
                            <td><span class="badge bg-warning">maria85</span></td>
                            <td>Password Reset</td>
                            <td>User requested password reset</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Status Sistem -->
    <div class="card shadow mb-4">
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Kesehatan Sistem</h6>
            <div>
                <span class="badge bg-success px-2 py-1">All Systems Operational</span>
                <button class="btn btn-sm btn-outline-primary ml-2" id="refreshSystemHealth">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kesehatan Database -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="health-card">
                        <div class="health-card-inner">
                            <div class="health-icon database">
                                <div class="circle-progress" data-value="95">
                                    <div class="circle-progress-value"></div>
                                    <div class="circle-progress-icon">
                                        <i class="fas fa-database"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="health-details">
                                <h4>Database</h4>
                                <span class="status excellent">Excellent</span>
                                <p>Response time: <strong>5ms</strong></p>
                                <div class="health-meta">Last checked: 2 mins ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Kesehatan Penyimpanan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="health-card">
                        <div class="health-card-inner">
                            <div class="health-icon storage">
                                <div class="circle-progress" data-value="62">
                                    <div class="circle-progress-value"></div>
                                    <div class="circle-progress-icon">
                                        <i class="fas fa-hdd"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="health-details">
                                <h4>Storage</h4>
                                <span class="status good">Good</span>
                                <p>Usage: <strong>310GB / 500GB</strong></p>
                                <div class="health-meta">Estimated full: 45 days</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Kesehatan Memori -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="health-card">
                        <div class="health-card-inner">
                            <div class="health-icon memory">
                                <div class="circle-progress" data-value="78">
                                    <div class="circle-progress-value"></div>
                                    <div class="circle-progress-icon">
                                        <i class="fas fa-memory"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="health-details">
                                <h4>Memory</h4>
                                <span class="status warning">Moderate</span>
                                <p>Available: <strong>4.5GB / 16GB</strong></p>
                                <div class="health-meta">Peak: 85% at 10:45 AM</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Status Error -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="health-card">
                        <div class="health-card-inner">
                            <div class="health-icon error">
                                <div class="circle-progress" data-value="100">
                                    <div class="circle-progress-value"></div>
                                    <div class="circle-progress-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="health-details">
                                <h4>Error Status</h4>
                                <span class="status excellent">No Errors</span>
                                <p>Last 24h: <strong>0 errors</strong></p>
                                <div class="health-meta">Next scan: 15 minutes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="system-health-footer mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="mr-3"><i class="fas fa-server text-primary"></i> Server uptime: <strong>15 days, 7 hours</strong></span>
                        <span><i class="fas fa-thermometer-half text-warning"></i> CPU temp: <strong>42°C</strong></span>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary">View Detailed Report</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Aksi Cepat -->
    <div class="card shadow mb-4">
        <div class="card-header bg-light">
            <h6 class="m-0 font-weight-bold text-primary">Tindakan Administratif</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-primary">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>Manage Users</h5>
                            <p>Add, edit, or remove system users</p>
                            <a href="#" class="btn btn-sm btn-primary mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-secondary">
                            <i class="fas fa-cog fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>System Settings</h5>
                            <p>Configure system parameters and options</p>
                            <a href="#" class="btn btn-sm btn-secondary mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-info">
                            <i class="fas fa-file-alt fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>View Logs</h5>
                            <p>Review system activity and error logs</p>
                            <a href="#" class="btn btn-sm btn-info mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-success">
                            <i class="fas fa-database fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>Database Backup</h5>
                            <p>Create and manage database backups</p>
                            <a href="#" class="btn btn-sm btn-success mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-warning">
                            <i class="fas fa-trash-alt fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>Clear Cache</h5>
                            <p>Clear system cache and temporary files</p>
                            <a href="#" class="btn btn-sm btn-warning mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="admin-action-card">
                        <div class="action-icon bg-danger">
                            <i class="fas fa-power-off fa-2x"></i>
                        </div>
                        <div class="action-content">
                            <h5>System Restart</h5>
                            <p>Restart system services when needed</p>
                            <a href="#" class="btn btn-sm btn-danger mt-2">Access <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sertakan Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- file CSS dan JS eksternal -->
<link rel="stylesheet" href="<?= base_url('assets/css/admin-dashboard.css') ?>">
<script src="<?= base_url('assets/js/admin-dashboard.js') ?>"></script>
<script src="<?= base_url('assets/js/admin-charts.js') ?>"></script>

<?= $this->endSection() ?>