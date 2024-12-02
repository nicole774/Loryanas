<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Articles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('ajouter_article')}}">Ajouter un article</a>
                        <a class="nav-link" href="{{url('view_article')}}">La liste des article</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Modifier un article</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{route('category')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Categorie
                </a>
                <a class="nav-link" href="{{route('marque')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Marque
                </a>
            </div>
        </div>
    </nav>
</div>
