<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid justify-content-end text-end">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navNotifiche" class="nav-link" href="notifications.php">Notifiche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?id=<?php if(isset($_SESSION["user"])){echo $_SESSION["user"];} ?>">Profilo</a>
                    </li>
                </ul>
            </div>
            <div class="md-auto order-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse order-4 order-md-0 dual-collapse2">
                <form id="form_search" class="d-flex justify-content-end" >
                    <input type="search" name="search" placeholder="Cerca nome utente" aria-label="Search"/>
                    <button class="btn btn-3" type="submit">Cerca</button>
                </form>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">Impostazioni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" type="button">Esci</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
