<header>
    <nav class="bg-white fixed-top navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="<?= base_url() ?>"><span class="text-primary">RUANG</span> <span>WEBSITE</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= (empty($this->uri->segment(1)) || $this->uri->segment(1)=='home' ? 'active' : NULL ) ?>">
                    <a class="nav-link" href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>