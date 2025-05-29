<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noted - Notes Page</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@700&display=swap"
    rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      min-height: 100vh;
      background-color: #ECE8E3;
      font-family: 'DM Sans', sans-serif;
      display: flex;
    }


    /* SIDEBAR */
    .sidebar {
      width: 250px;
      background-color: #ECE8E3;
      box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      padding: 1.5rem;
      flex-shrink: 0;
    }


    .sidebar .logo-text {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: #2C2220;
    }


    .sidebar .nav-link {
      color: #747373;
      font-weight: 500;
      margin-bottom: 0.5rem;
      border-radius: .5rem;
      transition: background .2s;
    }


    .sidebar .nav-link.active {
      background-color: #724F48;
      color: #fff !important;
    }


    .sidebar .nav-link:hover {
      background-color: rgba(114, 79, 72, 0.1);
      color: #724F48 !important;
    }


    .sidebar .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }


    .logo-text {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 38px;
      color: #4B322D;
    }


    /* MAIN CONTENT */
    .main-content {
      flex-grow: 1;
      padding: 2rem;
    }


    .section-title {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #3C2A21;
    }


    .nav-tabs .nav-link {
      color: #747373;
      font-weight: 500;
    }


    .nav-tabs .nav-link.active {
      color: #3C2A21;
      background-color: transparent;
      border-color: transparent transparent #3C2A21;
      border-width: 0 0 2px;
      font-weight: 700;
    }


    .card-folder,
    .card-note {
      border: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      color: #fff;
      min-height: 160px;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      border-radius: 12px;
    }


    .card-folder.new,
    .card-note.new {
      background-color: transparent;
      border: 2px dashed #747373;
      color: #747373;
      justify-content: center;
      align-items: center;
      display: flex;
      transition: background .2s;
      transition: transform 0.3s ease, box-shadow 0.3s ease;


    }


    .card-folder:hover,
    .card-note:hover {
      background-color: rgba(116, 115, 115, 0.1);
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }


    .card-folder.new:hover,
    .card-note.new:hover {
      background-color: rgba(116, 115, 115, 0.1);
    }


    .card-folder.bg1 {
      background-color: #8F6F63;
    }


    .card-folder.bg2 {
      background-color: #5B7C6F;
    }


    .card-folder.bg3 {
      background-color: #8C5048;
    }


    .card-note.bg1 {
      background-color: #8F6F63;
    }


    .card-note.bg2 {
      background-color: #5B7C6F;
    }


    .card-note.bg3 {
      background-color: #8C5048;
    }


    .card-note .title {
      font-weight: 700;
      margin-bottom: 0.5rem;
    }


    .card-note .text {
      font-size: 0.875rem;
      opacity: 0.85;
    }
  </style>
</head>


<body>
  <!-- Sidebar -->
  <div class="sidebar p-4 text-left">
    <div class="logo mb-4 d-flex align-items-center">
      <span class="logo-text">Noted.</span>
    </div>


    <div class="d-flex align-items-center mb-4">
      <img src="asset/profile (2).png" alt="Profile" class="profile-img me-2">
      <div>
        <strong style="color: #2C2220; font-weight: bold;">Raaaiiisaaaa</strong><br>
        <small>Private</small>
      </div>
    </div>


    <ul class="nav flex-column">
      <li class="nav-item mb-2">
        <a class="nav-link" href="{{ route('noted.dashboard') }}"><i class="fas fa-home me-3"></i>Home</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link active" href="{{ route('noted.show') }}"><i class="fas fa-file-alt me-3"></i>Notes</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link" href="#"><i class="fas fa-tasks me-3"></i>Task List</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link" href="#"><i class="fas fa-trash me-3"></i>Trash</a>
      </li>
    </ul>


    <a class="nav-link mt-auto text-muted" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
  </div>


  <!-- MAIN CONTENT -->
  <div class="flex-grow-1 p-4">
    <!-- Search Bar -->
    <div class="mb-4 position-relative rounded" style="color: #C3C3C3;">
      <input type="text" class="form-control ps-5 py-2" placeholder="Search Member or Category" style="color: #C3C3C3;">
      <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ps-3"
        style="color: #C3C3C3;"></i>
    </div>
    <!-- Recent Folders -->
    <div class="mb-5">
      <div class="section-title">Recent Folders</div>
      <ul class="nav nav-tabs mb-4" id="foldersTab" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#folders-today">Today</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#folders-week">This Week</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#folders-month">This Month</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="folders-today">
          <div class="row g-4">
            <div class="col-md-3">
              <div class="card-folder new">
                <i class="fas fa-folder-plus fa-2x me-2"></i>
                <div class="content mt-2">New Folder</div>
              </div>
            </div>

            <!-- School Task -->
            <div class="col-md-3">
              <div class="card-folder bg1 p-3">
                <!-- Flex container untuk icon kiri dan kanan -->
                <div class="d-flex justify-content-between align-items-start">
                  <i class="fas fa-folder fa-2x"></i>
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>

                <!-- Konten bawah -->
                <div class="content mt-3">
                  <strong class="d-block mb-2 fs-6">School Task</strong>
                  <small class="text-light opacity-50 mb-0" style="font-size: 12px;">Updated 1 min ago</small>
                </div>
              </div>
            </div>

            <!-- Competition -->
            <div class="col-md-3">
              <div class="card-folder bg2 p-3">
                <!-- Flex container untuk icon kiri dan kanan -->
                <div class="d-flex justify-content-between align-items-start">
                  <i class="fas fa-folder fa-2x"></i>
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>

                <!-- Konten bawah -->
                <div class="content mt-3">
                  <strong class="d-block mb-2 fs-6">Competition</strong>
                  <small class="text-light opacity-50 mb-0" style="font-size: 12px;">Updated 1 min ago</small>
                </div>
              </div>
            </div>

            <!-- General Lesson -->
            <div class="col-md-3">
              <div class="card-folder bg1 p-3">
                <!-- Flex container untuk icon kiri dan kanan -->
                <div class="d-flex justify-content-between align-items-start">
                  <i class="fas fa-folder fa-2x"></i>
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>

                <!-- Konten bawah -->
                <div class="content mt-3">
                  <strong class="d-block mb-2 fs-6">General Lesson</strong>
                  <small class="text-light opacity-50 mb-0" style="font-size: 12px;">Updated 1 min ago</small>
                </div>
              </div>
            </div>
            <!-- you can duplicate for #folders-week, #folders-month -->
          </div>
        </div>
      </div>


      <!-- My Notes -->
      <div class="mt-5">
        <div class="section-title">My Notes</div>
        <ul class="nav nav-tabs mb-4" id="notesTab" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#notes-today">Today</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notes-week">This Week</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notes-month">This Month</button>
          </li>
        </ul>
        <!-- Notes Card -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="notes-today">
            <div class="row g-4">
              <div class="col-md-3">
                <a href="{{ route('noted.create') }}" class="card-note new" style="text-decoration: none; color: inherit;">
                  <i class="fas fa-note-sticky fa-2x me-2"></i>
                  <div class="content mt-2">New Note</div>
              </a>
              </div>


      <!-- Finpro Concept -->
      <div class="col-md-3">
        <div class="card card-note bg1 p-3 rounded">
          <div class="title position-relative mb-2">
            <span class="h6 fw-bold">Finpro Concept</span>
            <i class="fa-solid fa-ellipsis-vertical position-absolute"
               style="top: 8px; right: 8px;"></i>
          </div>
          <div class="text small">
            "Kalian finpro berapa minggu?" Minggu? Hari kali :]
          </div>
        </div>
      </div>


      <!-- Research Answer -->
      <div class="col-md-3">
        <div class="card card-note bg2 p-3 rounded">
          <div class="title position-relative mb-2">
            <span class="h6 fw-bold">Research Answer</span>
            <i class="fa-solid fa-ellipsis-vertical position-absolute"
               style="top: 8px; right: 8px;"></i>
          </div>
          <div class="text small">
            Bapak Rio: "Menurut saya sih bagus, kepoin karena ga bisa buatnya..."
          </div>
        </div>
      </div>


      <!-- Groceries List -->
      <div class="col-md-3">
        <div class="card card-note bg3 p-3 rounded">
          <div class="title position-relative mb-2">
            <span class="h6 fw-bold">Groceries List</span>
            <i class="fa-solid fa-ellipsis-vertical position-absolute"
               style="top: 8px; right: 8px;"></i>
          </div>
          <div class="text small">
            Telor 1Kg<br>
            Cabe Setan 1Ons<br>
            Kentang 1/2 Kg...
          </div>
        </div>
      </div>


      <!-- Artmarket 2025 -->
      <div class="col-md-3">
        <div class="card card-note bg1 p-3 rounded">
          <div class="title position-relative mb-2">
            <span class="h6 fw-bold">Artmarket 2025</span>
            <i class="fa-solid fa-ellipsis-vertical position-absolute"
               style="top: 8px; right: 8px;"></i>
          </div>
          <div class="text small">
            Trinkieland<br>
            Tomoland<br>
            Biggledot
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


      </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>

