<div class="col-auto col-xl-2 px-sm-2 px-0 shadow" style="height: 100vh">
    <div class="d-flex flex-column  px-3 pt-2">
        <a href="#" class="pb-3 mb-md-0 text-decoration-none  mx-auto fs-5 d-none d-sm-inline text-primary fw-bold">W.B.S</a>
        <div class="my-3 d-none d-sm-inline">
            <div class="rounded-circle  overflow-hidden" style="width: 50px; height:50px;">
                <img class="w-100" id="image"  src="/img/face.jpg">
            </div>
            <div class="d-flex flex-column ms-2 mt-3 text-black">
                <span class="fw-bold">Admin</span>
            </div>
        </div>
        <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
            <li class="">
                <a href="/dashboard" class="nav-link px-0 ">
                    <i class="bi bi-house"></i>
                    <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/profile" class="nav-link px-0">
                    <i class="bi bi-person-circle"></i>
                    <span class="ms-1 d-none d-sm-inline">Profile</span></a>
            </li>
            <li>
                <a href="/addClient" class="nav-link px-0">
                    <i class="bi bi-people"></i>
                    <span class="ms-1 d-none d-sm-inline">Add Client</span>
                </a>
            </li>
            <li>
                <a href="/addCompteur" class="nav-link px-0">
                    <i class="bi bi-speedometer2"></i>
                    <span class="ms-1 d-none d-sm-inline">Add Compteur</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-0">
                    {{-- <i class="bi bi-file-text-fill"></i> --}}
                    <i class="bi bi-file-text"></i>
                    <span class="ms-1 d-none d-sm-inline">Les Facture</span> </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="nav-link px-0">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
            </li>
        </ul>
    </div>
</div>