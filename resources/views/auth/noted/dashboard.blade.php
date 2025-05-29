

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Noted Dashboard</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
  body {
  background-color: #ECE8E3;
}


.sidebar {
  background-color: #ECE8E3;
  width: 250px;
  min-height: 100vh;
  box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
  /* Shadow sidebar */
  color: #747373;
  font-family: 'DM Sans', sans-serif;
  display: flex;
  flex-direction: column;
}


.logo-text {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  font-size: 38px;
  color: #4B322D;
}


.nav-link {
  color: #747373;
  font-weight: 500;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
  transition: background-color 0.3s;
}


.nav-link:hover {
  background-color: #e0dcd6;
  color: #724F48;
}


.nav-link.active {
  background-color: #724F48;
  color: #fff !important;
}


.profile-img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}
.card {
   box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
   background-color: #FFFAF3;
}


.note-card {
  background-color: #6B4F3E;
  color: #fff;
  border-radius: 0.5rem;
  padding: 0.75rem 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.5rem;
}


.greeting {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
}


.greeting-p {
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  opacity: 55%;
}


.small-desc {
  font-weight: 600;
  color: #4B322D;
  font-size: 24px;
}


.title-card {
  border-bottom: 1.5px solid #D3CFCB;
  padding-bottom: 15px;
  margin-bottom: 10px;
  font-weight: 600;
  color: #5C4033;
  display: flex;
  align-items: center;
  gap: 8px;
}


.deleted-card {
  background-color: #ECE8E3;
  color: #3C2A21;
  border-radius: 0.5rem;
  padding: 0.75rem 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.5rem;
}


.deleted-card small {
  color: #A37C6D;
}


.tbc-btn {
  background-color: #724F48; /* Coklat tua */
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 12px;
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  font-weight: 500;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}


.tbc-btn:hover {
  background-color: #5e3f3a;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}


.tbc-btn:active {
  transform: translateY(1px);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}
.tbc-btn-2 {
  background-color: #FFFAF3; 
  color: #4B322D;
  border: none;
  padding: 8px 16px;
  border-radius: 12px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 500;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}


.tbc-btn-2:hover {
  background-color: #E0D4C2;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}


.tbc-btn-2:active {
  transform: translateY(1px);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}


</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Noted Dashboard</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
  body {
  background-color: #ECE8E3;
}


.sidebar {
  background-color: #ECE8E3;
  width: 250px;
  min-height: 100vh;
  box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
  /* Shadow sidebar */
  color: #747373;
  font-family: 'DM Sans', sans-serif;
  display: flex;
  flex-direction: column;
}


.logo-text {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  font-size: 38px;
  color: #4B322D;
}


.nav-link {
  color: #747373;
  font-weight: 500;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
  transition: background-color 0.3s;
}


.nav-link:hover {
  background-color: #e0dcd6;
  color: #724F48;
}


.nav-link.active {
  background-color: #724F48;
  color: #fff !important;
}


.profile-img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}
.card {
   box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
   background-color: #FFFAF3;
}


.note-card {
  background-color: #6B4F3E;
  color: #fff;
  border-radius: 0.5rem;
  padding: 0.75rem 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.5rem;
}


.greeting {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
}


.greeting-p {
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  opacity: 55%;
}


.small-desc {
  font-weight: 600;
  color: #4B322D;
  font-size: 24px;
}


.title-card {
  border-bottom: 1.5px solid #D3CFCB;
  padding-bottom: 15px;
  margin-bottom: 10px;
  font-weight: 600;
  color: #5C4033;
  display: flex;
  align-items: center;
  gap: 8px;
}


.deleted-card {
  background-color: #ECE8E3;
  color: #3C2A21;
  border-radius: 0.5rem;
  padding: 0.75rem 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.5rem;
}


.deleted-card small {
  color: #A37C6D;
}


.tbc-btn {
  background-color: #724F48; /* Coklat tua */
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 12px;
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  font-weight: 500;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}


.tbc-btn:hover {
  background-color: #5e3f3a;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}


.tbc-btn:active {
  transform: translateY(1px);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}
.tbc-btn-2 {
  background-color: #FFFAF3; /* Coklat tua */
  color: #4B322D;
  border: none;
  padding: 8px 16px;
  border-radius: 12px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 500;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}


.tbc-btn-2:hover {
  background-color: #E0D4C2;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}


.tbc-btn-2:active {
  transform: translateY(1px);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}


</style>
<body>
<div class="d-flex">
  <!-- Sidebar -->
   <div class="sidebar p-4 text-left">
  <div class="logo mb-4 d-flex align-items-center">
    <span class="logo-text">Noted.</span>
  </div>


@if(Auth::check())
  <div class="d-flex align-items-center mb-4">
    <img src="asset/profile (2).png" alt="Profile" class="profile-img me-2">
    <div>
      <strong style="color: #2C2220; font-weight: bold;">{{ Auth::user()->name }}</strong><br>
      <small>Private</small>
    </div>
  </div>
@else
  <div class="d-flex align-items-center mb-4">
    <img src="asset/profile (2).png" alt="Profile" class="profile-img me-2">
    <div>
      <strong style="color: #2C2220; font-weight: bold;">Guest</strong><br>
      <small>Public</small>
    </div>
  </div>
@endif


  <ul class="nav flex-column">
    <li class="nav-item mb-2">
      <a class="nav-link active" href="{{ route('noted.dashboard') }}"><i class="fas fa-home me-3"></i>Home</a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link" href="{{ route('notes.show') }}"><i class="fas fa-file-alt me-3"></i>Notes</a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link" href="#"><i class="fas fa-tasks me-3"></i>Task List</a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link" href="#"><i class="fas fa-trash me-3"></i>Trash</a>
    </li>
  </ul>


  <a class="nav-link mt-auto text-muted" href="{ route('logout') }}"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
</div>




  <!-- Main Content -->
  <div class="flex-grow-1 p-4">
    <!-- Search Bar -->
    <div class="mb-4 position-relative rounded" style="color: #C3C3C3;">
    <input type="text" class="form-control ps-5 py-2" placeholder="Search Member or Category" style="color: #C3C3C3;">
    <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ps-3" style="color: #C3C3C3;"></i>
  </div>
    <!-- Greeting -->
    @if(Auth::check())
    <div class="mb-4">
      <h2 class="greeting" style="font-weight: normal;">Hey, 
        <span style="color: #446358; font-weight: bold;">
          {{ Auth::user()->name }}
        </span>!
      </h2>
      <p class="greeting-p">What do you want to do today?</p>
    </div>
  @endif
    <!-- Top Row: Notes & Recently Deleted -->
    <div class="row g-4 mb-4">
      <!-- Notes Summary -->
      <div class="col-md-6">
        <div class="card card-custom p-3 text-left">
          <h5 class="title-card" style="color: #4B322D;"><i class="fa-solid fa-pen-to-square me-2"></i>Notes</h5>
          <div class="d-flex justify-content-center align-items-center py-3 gap-5">
            <div class="me-4 text-center">
              <div style="font-size:1.5rem; color: #4B322D;"><i class="fa-solid fa-folder-open"></i></div>
              <h3 class="mb-0" style="font-size: 50px; font-weight: 600; color: #446358; font-family: 'DM Sans';">{{ $notes->count() }}</h3>
              <small class="small-desc">Folder</small>
            </div>
            <div class="me-4 text-center">
              <div style="font-size:1.5rem; color: #4B322D;"><i class="fa-solid fa-file"></i></div>
              <h3 class="mb-0" style="font-size: 50px; font-weight: 600; color: #446358; font-family: 'DM Sans';">{{ $notes->count() }}</h3>
              <small class="small-desc">Files</small>
            </div>
          </div>
        </div>
      </div>
      <!-- Recently Deleted -->
      <div class="col-md-6">
        <div class="card card-custom p-3">
          <h5 class="title-card" style="color: #4B322D;"><i class="fa-solid fa-trash me-2"></i></i>Recently Deleted</h5>
          {{-- <p>{{ $notes->pluck('category')->unique()->count() }}</p> --}}
          <div class="mt-3">
            <div class="deleted-card">
              <div>
                <small class="text-uppercase">Cooking Recipe</small>
                <div><strong>Resep Nasi Goreng Cabe Ijo</strong></div>
              </div>
              <small>Deleted today</small>
            </div>
          </div>
          <div class="">
            <div class="deleted-card">
              <div>
                <small class="text-uppercase">Competition</small>
                <div><strong>Imtiyaz Web Competition</strong></div>
              </div>
              <small>Deleted today</small>
            </div>
            <div class="text-center mt-2">
              <button class="tbc-btn">See More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Current Notes -->
    <div class="card card-custom p-3">
      <h5 class="title-card" style="color: #4B322D;">
        <i class="fa-solid fa-note-sticky me-2"></i>Current Notes
      </h5>
      <div class="mt-3">
        @forelse($notes as $note)
          <div class="note-card mb-3 p-3 border rounded d-flex justify-content-between align-items-center" style="background-color: #724F48;">
            <div class="mb-3 p-3 border rounded bg-white">
              <h5>{{ $note->title }}</h5>
              <div class="text-muted small">{{ $note->created_at->format('d M Y') }}</div>
              <div>{!! Str::limit(strip_tags($note->content), 100) !!}</div>
              <a href="{{ route('notes.show', $note->id) }}" class="btn btn-sm btn-outline-primary mt-2">View Detail</a>
            </div>
            <div class="d-flex gap-2">
              <a href="{{ route('noted.edit', $note->id) }}" class="tbc-btn-2 btn btn-sm btn-outline-primary">Edit</a>
              <form action="{{ route('noted.delete', $note->id) }}" method="POST">
                @csrf 
                @method('DELETE') 
                <button type="submit" class="tbc-btn-2">Delete</button> 
              </form> 
              <button class="tbc-btn-2 btn-sm btn-light" style="font-weight: 600;">Export Now</button>
            </div>
          </div>
        @empty
          <p class="text-muted">No notes yet. Start by adding one!</p>
        @endforelse
      </div>
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

