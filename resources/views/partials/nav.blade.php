<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BIODATA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/halaman_awal">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($tittle === "Alka") ? 'active' : '' }}" href="/biodata_diri_alka">Biodata Alka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($tittle === "KOMENTAR") ? 'active' : '' }}" href="/komentar-alka">Komentar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($tittle === "Blog") ? 'active' : '' }}" href="/postsData">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>