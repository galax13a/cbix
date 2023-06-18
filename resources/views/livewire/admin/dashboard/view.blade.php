@section('title', __('Dasboard'))
<div class="container-fluid">
    <div class="row justify-content-center  ">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <section class="pt-8 pt-md-9">
                    <div class="container">
                        <!-- Form -->
                        <form class="mt-4 d-none">
                            <div class="input-group  shadow-sm">
                                <span class="input-group-text border-0">
                                    <i class="fas fa-search fa-xs text-secondary mb-1"></i>
                                </span>

                                <input type="text" class="form-control bg-white border-0 px-1"
                                    placeholder="Search help ...">

                                <span class="input-group-text border-0 py-1 pe-2 bg-light">
                                    <button type="submit" class="btn btn-primary text-uppercase-bold-sm">
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>


                        <div class="row mt-6">
                            <div class="col-12 mb-2 mt-2 ">
                                <span class="badge bg-pastel-primary text-primary text-uppercase-bold-sm">
                                    ⭐️ Dasboard Host
                                </span>
                            </div>

					
                            <div class="col-md-3 mb-4 rounded-4 dash-card2">
                                <a href="{{ route('admin.stats') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg text-success opacity-75 ">
                                        <i class="fas fa-poll fs-2"></i>
                                    </span>
                                    <span class="mt-3">
                                        Statistics
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3 mb-4 rounded-4 dash-card2">
                                <a href="{{ route('admin.tasks') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg bg-pastel-secundary text-dark">
                                        <i class="fas fa-weight fs-2"></i>
                                    </span>
                                    <span class="mt-3">
                                        Tasks
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3 mb-4  rounded-4 dash-card2">
                                <a href="{{ route('usuarios') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg bg-pastel-primary text-dark opacity-75">

										<i class="fab fa-napster fs-2"></i>
                                    </span>
                                    <span class="mt-3">
                                        Users [ {{ $usersCount }} ]
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3 mb-4 rounded-4 dash-card2">
                                <a href="{{ route('admin.roles') }}"
                                    class=" shadow-sm  card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg bg-pastel-primary text-danger opacity-50">
                                        <i class="fab fa-get-pocket fs-2"></i>
                                    </span>
                                    <span class="mt-3">
                                        Roles [ {{ $rolesCount }} ]
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3 mb-4 rounded-4 dash-card2">
                                <a href="#"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg text-danger opacity-75">
                                        <i class="fas fa-user-secret fs-2"></i>
                                    </span>
                                    <span class=" mt-3">
                                        Bans
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3 mb-4   rounded-4 dash-card2">
                                <a href="{{ route('admin.supports') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg bg-pastel-primary text-info">
                                        <i class="fas fa-spa fs-2"></i>
                                     
                                    </span>
                                    <span class=" mt-3">
                                        Support
                                    </span>
                                </a>
                            </div>

                            <div class="col-md-3  mb-4 rounded-4 dash-card2">
                                <a href="{{ route('admin.apps') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg text-primary opacity-75">
                                        <i class="fas fa-share-alt  fs-2"></i>
                                    </span>
                                    <span class="mt-3">
                                        Apps
                                    </span>
                                </a>
                            </div>


                            <div class="col-md-3  mb-4 rounded-4 dash-card2">
                                <a href="{{ route('admin.credits_goals') }}"
                                    class="shadow-sm card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                                    <span class="icon-circle icon-circle-lg bg-pastel-primary text-success">

                                        <i class="far fa-gem fs-2"></i>
                                    </span>
                                    <span class=" mt-3">
                                        Credits
                                    </span>
                                </a>
                            </div>


                        </div>
                    </div>
                </section>

                <div class="container">

                    <section id="stats-dash">                    

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card shadow rounded-4 mb-2 border-0 ">
                                    <div class="card-content">
                                        <div class="card-body dash-card ">
                                            <div class="media align-items-stretch p-2">
                                                <div class="media-body shadow-sm rounded-4 p-2 text-bg-dark opacity-75 mb-2">
                                                    <h4 class="text-bg-dark">
														<i class="fas fa-poll"></i>
                                                        Total Payments
                                                    </h4>
                                                    <span>Monthly stats payment for mouth </span>
                                                </div>
                                                <div class="text-end">
                                                    <h1>$ 18,000 Usd</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12">
                                <div class="card shadow rounded-4 mb-2 border-0 ">
                                    <div class="card-content">
                                        <div class="card-body  dash-card ">
                                            <div class="media align-items-stretch p-2">
                                                <div class="media-body shadow-sm rounded-4 p-2 text-bg-dark opacity-75 mb-2">
                                                    <h4 class="text-bg-dark">
														<i class="fas fa-chart-area"></i>
                                                        Credits Free
                                                    </h4>
                                                    <span>Monthly stats credits</span>
                                                </div>
                                                <div class="text-end">
                                                    <h1>$ 6,000 Tokens Free 
													</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-12 ">
                                <div class="card shadow rounded-4 mb-2  border-0  ">
                                    <div id="total-sales" class="card-content text-bg-dark rounded-4">
                                        <div class="card-body dash-card shadow-sm rounded-4 p-2 text-bg-primary opacity-50 mb-2">
                                            <div class="media align-items-stretch p-2">
                                                <div class="align-self-center">
                                                    <h1 class="mr-2 text-end text-bg-dark rounded-4 p-2 opacity-75 text-white">$76,456.00</h1>
                                                </div>
                                                <div class="media-body">
                                                    <h4>
														<i class="fas fa-chart-bar"></i>
														Total Sales</h4>
                                                    <span>Monthly Sales Amount</span>
                                                </div>
                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12 mb-4 ">
                                <div class="card shadow rounded-4 mb-2  border-0 ">
                                    <div class="card-content text-bg-dark rounded-4">
                                        <div class="card-body dash-card shadow-sm rounded-4 p-2 text-bg-info opacity-75 mb-2">
                                            <div class="media align-items-stretch p-2">
                                                <div class="align-self-center ">
                                                    <h1 class="mr-2 text-end text-bg-dark rounded-4 p-2 opacity-75 text-white ">$36,000.00</h1>
                                                </div>
                                                <div class="media-body">
                                                    <h4>
														<i class="fas fa-chart-line"></i>
														Total Cost</h4>
                                                    <span>Monthly Cost</span>
                                                </div>
                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </div>
