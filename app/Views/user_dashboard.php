<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="display-5 fw-bold text-dark mb-2"><?= esc($pageTitle) ?></h1>
            <p class="lead">Hello, <strong><?= esc($username) ?></strong>. Welcome to your dashboard.</p>
        </div>
    </div>

    <!-- Bagian Statistik Pengguna -->
    <div class="stats-container mb-4">
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 stat-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="stat-card-icon rounded-circle bg-primary text-white p-3 me-3">
                                <i class="fas fa-file-alt fa-fw"></i>
                            </div>
                            <div class="stat-card-detail">
                                <h3 class="stat-card-number mb-0 fw-bold">42</h3>
                                <span class="stat-card-label text-muted">Documents</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary bg-opacity-10 py-2 border-0">
                        <small class="text-primary">
                            <i class="fas fa-arrow-up me-1"></i> 12% increase
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 stat-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="stat-card-icon rounded-circle bg-success text-white p-3 me-3">
                                <i class="fas fa-tasks fa-fw"></i>
                            </div>
                            <div class="stat-card-detail">
                                <h3 class="stat-card-number mb-0 fw-bold">8</h3>
                                <span class="stat-card-label text-muted">Active Tasks</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-success bg-opacity-10 py-2 border-0">
                        <small class="text-success">
                            <i class="fas fa-check-circle me-1"></i> On track
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 stat-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="stat-card-icon rounded-circle bg-warning text-white p-3 me-3">
                                <i class="fas fa-bell fa-fw"></i>
                            </div>
                            <div class="stat-card-detail">
                                <h3 class="stat-card-number mb-0 fw-bold">16</h3>
                                <span class="stat-card-label text-muted">Notifications</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-warning bg-opacity-10 py-2 border-0">
                        <small class="text-warning">
                            <i class="fas fa-clock me-1"></i> 3 new today
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 stat-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="stat-card-icon rounded-circle bg-info text-white p-3 me-3">
                                <i class="fas fa-chart-line fa-fw"></i>
                            </div>
                            <div class="stat-card-detail">
                                <h3 class="stat-card-number mb-0 fw-bold">89%</h3>
                                <span class="stat-card-label text-muted">Performance</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info bg-opacity-10 py-2 border-0">
                        <small class="text-info">
                            <i class="fas fa-arrow-up me-1"></i> 5% increase
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-5">
            <!-- Aktivitas Terbaru -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h3 class="card-title h5 mb-0"><i class="fas fa-history me-2"></i>Recent Activities</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush activity-list">
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>
                                <span class="activity-desc">Updated profile information</span>
                            </div>
                            <span class="badge bg-secondary rounded-pill">Yesterday</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>
                                <span class="activity-desc">Logged in from a new device</span>
                            </div>
                            <span class="badge bg-secondary rounded-pill">3 days ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>
                                <span class="activity-desc">Changed password</span>
                            </div>
                            <span class="badge bg-secondary rounded-pill">1 week ago</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-7">
            <!-- Bagian Aktivitas Pengguna -->
            <div class="card shadow-sm h-100">
                <div class="card-header bg-white">
                    <h3 class="card-title h5 mb-0"><i class="fas fa-stream me-2"></i>Activity Timeline</h3>
                </div>
                <div class="card-body p-0">
                    <div class="timeline p-3 position-relative">
                        <!-- Garis vertikal timeline -->
                        <div class="timeline-line position-absolute" style="width: 2px; background-color: #e9ecef; top: 0; bottom: 0; left: 20px;"></div>
                        
                        <div class="timeline-item mb-4 position-relative">
                            <div class="timeline-marker position-absolute rounded-circle" style="width: 16px; height: 16px; left: 13px; top: 5px; border: 3px solid #28a745; background-color: white; z-index: 1;"></div>
                            <div class="timeline-content ms-4 ps-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="timeline-title h6 fw-bold mb-1">Completed Project Alpha</h4>
                                    <span class="badge bg-light text-dark">Today</span>
                                </div>
                                <p class="timeline-date text-muted small mb-1">10:30 AM</p>
                                <p class="mb-0 small">Successfully delivered all required deliverables ahead of schedule.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item mb-4 position-relative">
                            <div class="timeline-marker position-absolute rounded-circle" style="width: 16px; height: 16px; left: 13px; top: 5px; border: 3px solid #0d6efd; background-color: white; z-index: 1;"></div>
                            <div class="timeline-content ms-4 ps-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="timeline-title h6 fw-bold mb-1">Meeting with Team</h4>
                                    <span class="badge bg-light text-dark">Yesterday</span>
                                </div>
                                <p class="timeline-date text-muted small mb-1">2:15 PM</p>
                                <p class="mb-0 small">Discussed project roadmap and assigned new tasks to team members.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item mb-4 position-relative">
                            <div class="timeline-marker position-absolute rounded-circle" style="width: 16px; height: 16px; left: 13px; top: 5px; border: 3px solid #ffc107; background-color: white; z-index: 1;"></div>
                            <div class="timeline-content ms-4 ps-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="timeline-title h6 fw-bold mb-1">Updated Profile Information</h4>
                                    <span class="badge bg-light text-dark">Aug 12</span>
                                </div>
                                <p class="timeline-date text-muted small mb-1">2023</p>
                                <p class="mb-0 small">Changed contact information and updated profile picture.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item position-relative">
                            <div class="timeline-marker position-absolute rounded-circle" style="width: 16px; height: 16px; left: 13px; top: 5px; border: 3px solid #17a2b8; background-color: white; z-index: 1;"></div>
                            <div class="timeline-content ms-4 ps-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="timeline-title h6 fw-bold mb-1">Joined the Platform</h4>
                                    <span class="badge bg-light text-dark">Jan 15</span>
                                </div>
                                <p class="timeline-date text-muted small mb-1">2023</p>
                                <p class="mb-0 small">Successfully created an account and completed initial setup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dokumen Pengguna -->
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="card-title h5 mb-0"><i class="fas fa-file-alt me-2"></i>Your Documents</h3>
            <button class="btn btn-sm btn-primary"><i class="fas fa-upload me-1"></i> Upload New</button>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Document Name</th>
                            <th>Date Uploaded</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-file-pdf text-danger me-2"></i>Project Proposal.pdf</td>
                            <td>2023-06-10</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-word text-primary me-2"></i>Monthly Report.docx</td>
                            <td>2023-07-15</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-excel text-success me-2"></i>Budget Plan.xlsx</td>
                            <td>2023-08-01</td>
                            <td><span class="badge bg-info">In Review</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>