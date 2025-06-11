<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Email Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button class="btn btn-primary" id="newCampaignBtn">
                            <i class="fas fa-plus"></i> New Campaign
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title">Emails Sent</h5>
                                <h2 class="card-text">1,245</h2>
                                <p class="text-success">+12% from last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title">Open Rate</h5>
                                <h2 class="card-text">32%</h2>
                                <p class="text-success">+2% from last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title">Click Rate</h5>
                                <h2 class="card-text">8%</h2>
                                <p class="text-danger">-1% from last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <h5 class="card-title">Bounce Rate</h5>
                                <h2 class="card-text">1.2%</h2>
                                <p class="text-success">-0.3% from last week</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Campaigns -->
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Campaigns</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Sent</th>
                                        <th>Opens</th>
                                        <th>Clicks</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Summer Course Announcement</td>
                                        <td><span class="badge bg-success">Sent</span></td>
                                        <td>Jun 5, 2023</td>
                                        <td>42%</td>
                                        <td>9%</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Newsletter - May 2023</td>
                                        <td><span class="badge bg-success">Sent</span></td>
                                        <td>May 28, 2023</td>
                                        <td>38%</td>
                                        <td>7%</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Webinar Invitation</td>
                                        <td><span class="badge bg-warning">Scheduled</span></td>
                                        <td>Jun 12, 2023</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Compose Email Modal -->
    <div class="modal fade" id="composeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Email Campaign</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Recipients</label>
                                <select class="form-select">
                                    <option>All Contacts</option>
                                    <option>Students</option>
                                    <option>Prospects</option>
                                    <option>Alumni</option>
                                    <option>Custom List</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Or upload CSV</label>
                                <input type="file" class="form-control">
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label class="form-label">Template</label>
                                <select class="form-select" id="templateSelect">
                                    <option>Blank</option>
                                    <option>Newsletter</option>
                                    <option>Course Announcement</option>
                                    <option>Promotional</option>
                                    <option>Event Invitation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject" value="CtpaInstitute.org - ">
                            </div>
                            <div class="email-editor border p-3" contenteditable="true">
                                <p>Hello {first_name},</p>
                                <p>We're excited to share our latest updates with you...</p>
                                <p>Best regards,<br>The CtpaInstitute Team</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Send Options</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="scheduleSwitch">
                                        <label class="form-check-label" for="scheduleSwitch">Schedule Send</label>
                                    </div>
                                    <div class="mb-3" id="scheduleOptions" style="display: none;">
                                        <input type="datetime-local" class="form-control">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="trackOpens" checked>
                                        <label class="form-check-label" for="trackOpens">Track Opens</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="trackClicks" checked>
                                        <label class="form-check-label" for="trackClicks">Track Clicks</label>
                                    </div>
                                    <hr>
                                    <button class="btn btn-outline-secondary w-100 mb-2">
                                        <i class="fas fa-paper-plane"></i> Send Test
                                    </button>
                                    <button class="btn btn-outline-primary w-100 mb-2">
                                        <i class="fas fa-save"></i> Save Draft
                                    </button>
                                    <button class="btn btn-primary w-100">
                                        <i class="fas fa-paper-plane"></i> Send Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>
