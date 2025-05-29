{{-- <form action="{{ route('noted.store') }}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" name="title" class="form-control" required>
  </div>

  <div class="mb-3">
      <label for="content" class="form-label">Isi Catatan</label>
      <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form> --}}
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Noted — Detail Note</title>
  <!-- Bootstrap & FontAwesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@400;500&family=Courier+Prime&display=swap"
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@400;500&family=Courier+Prime&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet" />


  <style>
    body {
      margin: 0;
      min-height: 100vh;
      background-color: #ECE8E3;
      font-family: 'DM Sans', sans-serif;
      display: flex;
    }


    /* Sidebar unchanged */
    .sidebar {
      width: 250px;
      background: #ECE8E3;
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
      margin-bottom: .5rem;
      border-radius: .5rem;
      transition: background .2s;
    }


    .sidebar .nav-link.active {
      background: #724F48;
      color: #fff !important;
    }


    .sidebar .nav-link:hover {
      background: rgba(114, 79, 72, 0.1);
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


    /* Main area */
    .main {
      flex-grow: 1;
      padding: 2rem;
    }


    .title-input {
      width: 100%;
      border: none;
      border-bottom: 1px solid #724F48;
      background: transparent;
      font-size: 2.5rem;
      color: #724F48;
      outline: none;
      margin-bottom: 1rem;
    }


    .title-input::placeholder {
      color: rgba(114, 79, 72, 0.5);
    }


    #editor {
      width: 100%;
      min-height: 300px;
      background: #ECE8E3;
      border: none;
      border-radius: 0;
      padding: 1rem;
      color: #3C2A21;
      outline: none;
    }


    .toolbar {
      position: sticky;
      bottom: 20px;
      background: #446358;
      padding: .5rem;
      border-radius: .375rem;
      display: flex;
      flex-wrap: wrap;
      gap: .5rem;
      align-items: center;
      margin-top: 1rem;
      width: 80%;
      transition: 1s ease;
      margin: 0 auto;
      line-height: 1.5;
      white-space: nowrap;
    }


    .toolbar select,
    .toolbar input[type=color],
    .toolbar button {
      background: transparent;
      border: none;
      color: #ECE8E3;
      font-size: 1rem;
      padding: .25rem .5rem;
    }


    .toolbar button:hover,
    .toolbar select:hover {
      color: #fff;
    }


    .toolbar select option {
      color: #446358 !important;
    }


    .toolbar .btn-divider {
      width: 1px;
      background: rgba(236, 232, 227, 0.3);
      height: 1.5rem;
      margin: 0 .5rem;
    }


    .btn-save {
      margin-inline-end: 12px;
      align-items: center;
      background-color: #59332e;
      color: #fff;
      border: none;
      padding: 1rem 2rem;
      border-radius: 10px;
      font-weight: 500;
      letter-spacing: 0.5px;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
    }


    .btn-save:hover {
      background-color: #ECE8E3;
      color: #442521 !important;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
    }


    .btn-save:active {
      transform: translateY(0);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>


<body>
  <!-- SIDEBAR -->
  <div class="sidebar p-4 text-left">
    <div class="logo mb-4 d-flex align-items-center">
      <span class="logo-text">Noted.</span>
    </div>
    <div class="d-flex align-items-center mb-4">
      <img src="asset/profile (2).png" alt="Profile" class="profile-img me-2">
      <div>
        <strong style="color:#2C2220;font-weight:bold;">Raaaiiisaaaa</strong><br>
        <small>Private</small>
      </div>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a class="nav-link active" href="{{ route('noted.dashboard') }}"><i class="fas fa-home me-3"></i>Home</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="{{ route('notes.show') }}"><i class="fas fa-file-alt me-3"></i>Notes</a>
          </li>
      <li class="nav-item mb-2"><a class="nav-link" href="tasklist.html"><i class="fas fa-tasks me-3"></i>Task List</a>
      </li>
      <li class="nav-item mb-2"><a class="nav-link" href="#"><i class="fas fa-trash me-3"></i>Trash</a></li>
    </ul>
    <a class="nav-link mt-auto text-muted" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
  </div>


  <!-- MAIN CONTENT -->
  <div class="main">
    <a href="{{ route('notes.show') }}" style="text-decoration: none; color: #4B322D; font-weight: 600; font-size: 20px;">
      <i class="fas fa-chevron-left me-2"></i> Back
    </a>

    <form action="{{ route('noted.store') }}" method="POST" onsubmit="return saveContentToInput();">
      @csrf

      <input id="note-title" name="title" class="title-input fw-bold" type="text" placeholder="Title" required />

      <div id="editor" contenteditable="true" spellcheck="false" style="background: #ECE8E3; padding: 1rem;">
        Tulis catatanmu di sini...
      </div>

      <input type="hidden" name="content" id="note-content" />

      <div class="toolbar mt-4">
        <select onchange="setFont(this.value)">
          <option value="DM Sans">DM Sans</option>
          <option value="Inter">Inter</option>
          <option value="Courier Prime">Courier Prime</option>
          <option value="Poppins">Poppins</option>
        </select>

        <select onchange="setSize(this.value)">
          <option value="1">10px</option>
          <option value="2">13px</option>
          <option value="3" selected>16px</option>
          <option value="4">18px</option>
          <option value="5">24px</option>
          <option value="6">32px</option>
        </select>

        <input type="color" onchange="setColor(this.value)" title="Font Color" />
        <div class="btn-divider"></div>

        <button type="button" onclick="execCmd('bold')" title="Bold"><i class="fa-solid fa-bold"></i></button>
        <button type="button" onclick="execCmd('italic')" title="Italic"><i class="fa-solid fa-italic"></i></button>
        <button type="button" onclick="execCmd('underline')" title="Underline"><i class="fa-solid fa-underline"></i></button>
        <div class="btn-divider"></div>

        <button type="button" onclick="insertImage()" title="Insert Image"><i class="fa-regular fa-image"></i></button>
        <div class="btn-divider"></div>

        <button type="button" onclick="execCmd('justifyLeft')" title="Left"><i class="fa-solid fa-align-left"></i></button>
        <button type="button" onclick="execCmd('justifyCenter')" title="Center"><i class="fa-solid fa-align-center"></i></button>
        <button type="button" onclick="execCmd('justifyRight')" title="Right"><i class="fa-solid fa-align-right"></i></button>

        <div class="ms-auto">
          <button class="btn-save" type="submit">
            <i class="fa-solid fa-floppy-disk me-1"></i> Save
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- JavaScript -->
  <script>
    function execCmd(cmd) {
      document.execCommand(cmd, false, null);
    }
    function setFont(f) {
      document.execCommand('fontName', false, f);
    }
    function setSize(s) {
      document.execCommand('fontSize', false, s);
    }
    function setColor(c) {
      document.execCommand('foreColor', false, c);
    }
    function insertImage() {
      const url = prompt('Enter image URL:');
      if (url) document.execCommand('insertImage', false, url);
    }
    function saveContentToInput() {
      const content = document.getElementById('editor').innerHTML;
      document.getElementById('note-content').value = content;
      return true;
    }
  </script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function execCmd(cmd) { document.execCommand(cmd, false, null); }
    function setFont(f) { document.execCommand('fontName', false, f); }
    function setSize(s) { document.execCommand('fontSize', false, s); }
    function setColor(c) { document.execCommand('foreColor', false, c); }
    function insertImage() {
      const url = prompt('Enter image URL:');
      if (url) document.execCommand('insertImage', false, url);
    }
    document.getElementById('saveBtn').onclick = () => {
      const data = {
        title: document.getElementById('note-title').value,
        body: document.getElementById('editor').innerHTML
      };
      localStorage.setItem('LAST_NOTE', JSON.stringify(data));
      alert('Note saved!');
    };
    window.onload = () => {
      const saved = localStorage.getItem('LAST_NOTE');
      if (saved) {
        const o = JSON.parse(saved);
        document.getElementById('note-title').value = o.title;
        document.getElementById('editor').innerHTML = o.body;
      }
    };
  </script>
</body>


</html>



