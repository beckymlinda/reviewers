<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NCHE Reviewer Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Bootstrap CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
        }
        .bg-nche-purple {
            background-color: #52074f !important;
        }
        .hover-orange:hover {
            background-color: #dd8027 !important;
            color: #fff !important;
            border-radius: 0.375rem;
        }
        .sidebar-link {
            transition: all 0.3s;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            position: fixed;
            top: 56px; /* height of navbar */
            left: 0;
            z-index: 1000;
        }
        .main-content {
            margin-left: 250px;
            margin-top: 56px; /* height of navbar */
            padding: 2rem;
        }
        .navbar {
            z-index: 1050;
        }
    </style>
</head>
<body class="bg-light">

     
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-nche-purple navbar-dark fixed-top px-4">
    <div class="container-fluid">
        <span class="nav-brand-title text-white">NCHE SYSTEM</span>
        <div class="d-flex align-items-center ms-auto">
            <span class="text-white me-3">Welcome, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-sm btn-outline-light">Logout</button>
            </form>
        </div>
    </div>
</nav>
<!-- Purple vertical line between navbar and sidebar -->
<div class="sidebar-divider"></div>
<div class="sidebar-divider-horizontal"></div>

<!-- Sidebar -->
<div class="sidebar">
    <nav class="nav flex-column">
        <a href="{{ route('dashboard') }}" class="sidebar-link hover-purple mb-2 text-decoration-none">
            <i class="bi bi-bar-chart me-2"></i> Dashboard
        </a>
        <a href="#" 
   class="sidebar-link hover-purple mb-2 text-decoration-none load-page" 
   data-url="{{ route('reviewers.index') }}">
   <i class="bi bi-person-badge me-2"></i> Reviewers
</a>

      
       <a href="#" 
   class="sidebar-link hover-purple mb-2 text-decoration-none load-page" 
   data-url="{{ route('admin.audit.index') }}">
   <i class="bi bi-clock-history me-2"></i> Audit Trail
</a>
<a href="#" 
   class="sidebar-link hover-purple mb-2 text-decoration-none load-page" 
   data-url="{{ route('accreditations.index') }}">
   <i class="bi bi-journal-check me-2"></i> Accreditations
</a>


        <a href="#" class="sidebar-link hover-purple mb-2 text-decoration-none">
            <i class="bi bi-shield-lock me-2"></i> Roles & Permissions
        </a>

          <a href="#" class="sidebar-link hover-purple mb-2 text-decoration-none">
            <i class="bi bi-briefcase me-2"></i> Help
        </a>
    </nav>
</div>

<!-- Main Panel -->
<main class="main-content" id="main-panel">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h3 class="card-title mb-3">NCHE Reviewer Dashboard</h3>
            <p class="card-text">You're logged in! 🎉</p>
            <p class="text-muted small">Use the sidebar to manage reviewers, view logs, and configure system modules.</p>
        </div>
    </div>
</main>


 

<style>
    body {
        font-family: "Segoe UI", sans-serif;
        background-color: #f8f9fa;
    }

    /* Theme Colors */
    .bg-nche-purple {
        background-color: #52074f !important;
    }

    .bg-nche-orange {
        background-color: #dd8027 !important;
    }

    .hover-orange:hover {
        background-color: #dd8027 !important;
        color: #fff !important;
        border-radius: 0.375rem;
    }

    .hover-purple:hover {
        background-color: #52074f !important;
        color: #fff !important;
        border-radius: 0.375rem;
    }

    .sidebar-link {
        transition: all 0.3s ease-in-out;
        color: white;
        padding: 0.5rem 1rem;
        display: block;
        border-radius: 0.375rem;
    }

    /* Sidebar Layout */
    .sidebar {
        width: 250px;
        min-height: calc(100vh - 72px); /* height of navbar + space */
        position: fixed;
        top: 62px;
        left: 0; /* Now flush with edge */
        z-index: 1000;
        background-color: #52074f;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        padding: 1.5rem 1rem;
        border-radius: 0 0px 0px 0;
    }

    .main-content {
        margin-left: 250px;
        margin-top: 80px;
        padding: 2rem;
        background-color: white;
    }

    .navbar {
        z-index: 1050;
        height: 56px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .nav-brand-title {
        font-weight: bold;
        font-size: 1.25rem;
    }

    .card {
        border-radius: 10px;
    }

   .sidebar-divider {
    position: fixed;
    top: 56px; /* height of navbar */
    left: 250px; /* right edge of sidebar */
    width: 8px; /* thickness of the vertical line */
    height: calc(100vh - 56px); /* full height minus navbar */
    background-color: #dd8027; /* NCHE orange */
    z-index: 1010; /* just above sidebar */
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* New horizontal line */
.sidebar-divider-horizontal {
    position: fixed;
    top: 56px; /* just below navbar */
    left: 0; /* start from left edge */
    height: 8px; /* thickness of horizontal line */
    width: 3000px; /* width matching sidebar */
    background-color: #dd8027; /* NCHE orange */
    z-index: 1010;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on('click', '.load-page', function (e) {
    e.preventDefault();

    const url = $(this).data('url');
    if (!url) return;

    $('#main-panel').html(`
        <div class="text-center py-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    `);

    $.ajax({
        url: url,
        type: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        success: function (data) {
            $('#main-panel').html(data); // This now works
        },
        error: function (xhr, status, error) {
            $('#main-panel').html(`
                <div class="alert alert-danger mt-3">
                    <strong>Oops!</strong> Failed to load content. Please try again.
                </div>
            `);
        }
    });
});
</script>
<script>
$(document).on('submit', 'form', function(e) {
    e.preventDefault();

    const form = $(this);
    const url = form.attr('action');
    const method = form.attr('method') || 'POST';
    const formData = form.serialize();

    // Show loading spinner in main panel
    $('#main-panel').html(`
        <div class="text-center py-5">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
    `);

    $.ajax({
        url: url,
        type: method,
        data: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        success: function(response) {
            if (response.success && response.redirect) {
                // Load redirect URL content into main panel
                $.ajax({
                    url: response.redirect,
                    type: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    success: function(html) {
                        // Insert the success message above the loaded content
                        let successAlert = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                ${response.message || 'Operation successful.'}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;

                        $('#main-panel').html(successAlert + html);
                    },
                    error: function() {
                        $('#main-panel').html('<div class="alert alert-danger">Failed to load content after success.</div>');
                    }
                });
            } else {
                // If response is raw HTML or something else, just replace main panel
                $('#main-panel').html(response);
            }
        },
        error: function(xhr) {
            let errorHtml = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
            
            // Parse and display validation errors if any
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                errorHtml = '<div class="alert alert-danger"><ul>';
                $.each(xhr.responseJSON.errors, function(key, errors) {
                    errors.forEach(function(error) {
                        errorHtml += `<li>${error}</li>`;
                    });
                });
                errorHtml += '</ul></div>';
            }

            $('#main-panel').prepend(errorHtml);
        }
    });
});
</script>
 

<script>
    $(document).on('click', '.delete-btn', function (e) {
    e.preventDefault();
    
    if (!confirm('Are you sure you want to delete this record?')) return;

    const button = $(this);
    const url = button.data('url');

    // Optional: show loading state
    $('#main-panel').html(`
        <div class="text-center py-5">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Deleting...</span>
            </div>
        </div>
    `);

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _method: 'DELETE',
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            if (response.success && response.redirect) {
                $.get(response.redirect, function (html) {
                    const alert = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ${response.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
                    $('#main-panel').html(alert + html);
                });
            } else {
                $('#main-panel').html('<div class="alert alert-danger">Delete failed.</div>');
            }
        },
        error: function () {
            $('#main-panel').html('<div class="alert alert-danger">An error occurred while deleting.</div>');
        }
    });
});

</script>

</body>

</html>
