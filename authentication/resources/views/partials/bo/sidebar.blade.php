<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('profilePage')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('magasinPage')}}"
                                aria-expanded="false">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="hide-menu">Magasins</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('cataloguePage')}}"
                                aria-expanded="false">
                                <i class="fa fa-clipboard-list" aria-hidden="true"></i>
                                <span class="hide-menu">Catalogues</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('produitPage')}}"
                                aria-expanded="false">
                                <i class="fa fa-box-open" aria-hidden="true"></i>
                                <span class="hide-menu">Produits</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('promotionPage')}}"
                                aria-expanded="false">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <span class="hide-menu">Promotion</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('ParametragePage')}}"
                                aria-expanded="false">
                                <i class="fas fa-street-view" aria-hidden="true"></i>
                                <span class="hide-menu">Parametrage</span>
                            </a>
                        </li>
                        <!--<li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('abonnPage')}}"
                                aria-expanded="false">
                                <i class="fab fa-cc-mastercard" aria-hidden="true"></i>
                                <span class="hide-menu">Abonnement</span>
                            </a>
                        </li>-->


                        <li class="text-center p-20 upgrade-btn">
                            <form action="{{ route('logout')}}" method="POST">
                            @csrf 
                                <input type="submit" value="Se Deconnecter" class="btn d-grid btn-danger text-white" style="width: -webkit-fill-available;"/>
                            </form>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>